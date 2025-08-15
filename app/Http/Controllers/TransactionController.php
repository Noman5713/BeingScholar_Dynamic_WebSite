<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    /**
     * Submit a new transaction from enrollment page
     */
    public function submitTransaction(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required|string|unique:transactions,trxn_id',
            'course_name' => 'required|string', 
            'amount' => 'required|numeric',
            'payment_method' => 'required|string',
            'student_name' => 'nullable|string|max:255',
            'student_phone' => 'nullable|string|max:20',
            'student_email' => 'nullable|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed: ' . $validator->errors()->first()
            ], 422);
        }

        try {
            // Create transaction record
            $transaction = Transaction::create([
                'trxn_id' => $request->transaction_id,
                'course_name' => $request->course_name,
                'user_id' => auth()->id(), // null if not logged in
                'amount' => $request->amount,
                'payment_method' => $request->payment_method,
                'status' => 'pending',
                'notes' => json_encode([
                    'student_name' => $request->student_name,
                    'student_phone' => $request->student_phone,
                    'student_email' => $request->student_email,
                    'submitted_at' => now()->toDateTimeString(),
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                ]),
            ]);

            return response()->json([
                'success' => true, 
                'message' => '🎉 Payment submitted successfully! Your transaction ID: ' . $request->transaction_id . '. We will verify your payment within 24-48 hours and send you confirmation.',
                'transaction_id' => $request->transaction_id,
                'status' => 'pending'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your transaction. Please try again.'
            ], 500);
        }
    }

    /**
     * Verify transaction for curriculum access
     */
    public function verifyTransaction(Request $request)
    {
        $request->validate([
            'trxn_id' => 'required|string',
            'course_name' => 'required|string',
        ]);

        $transaction = Transaction::where('trxn_id', $request->trxn_id)
            ->where('course_name', $request->course_name)
            ->where('status', 'verified')
            ->first();

        if ($transaction) {
            // Return success without storing in session (access is temporary)
            return response()->json([
                'success' => true, 
                'message' => '✅ Transaction verified! You now have access to the full curriculum.',
                'access_granted' => true
            ]);
        }

        return response()->json([
            'success' => false, 
            'message' => '❌ Invalid transaction ID or course name. Please check your transaction ID or contact support if you believe this is an error.'
        ]);
    }

    /**
     * Get transaction status (for checking payment status)
     */
    public function getTransactionStatus(Request $request)
    {
        $request->validate([
            'trxn_id' => 'required|string',
        ]);

        $transaction = Transaction::where('trxn_id', $request->trxn_id)->first();

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'transaction' => [
                'trxn_id' => $transaction->trxn_id,
                'course_name' => $transaction->course_name,
                'amount' => $transaction->amount,
                'payment_method' => $transaction->payment_method,
                'status' => $transaction->status,
                'submitted_at' => $transaction->created_at->format('Y-m-d H:i:s'),
                'verified_at' => $transaction->verified_at?->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}