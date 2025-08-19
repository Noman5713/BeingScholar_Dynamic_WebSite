<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Course;
use App\Models\CourseEnrollment;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function submitTransaction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required|string|unique:transactions,trxn_id',
            'course_name' => 'required|string', 
            'course_id' => 'required|exists:courses,id',
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
            $course = Course::findOrFail($request->course_id);
            
            $transaction = Transaction::create([
                'trxn_id' => $request->transaction_id,
                'course_name' => $request->course_name,
                'course_id' => $request->course_id,
                'user_id' => auth()->id(),
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

            if (auth()->check()) {
                CourseEnrollment::updateOrCreate(
                    [
                        'user_id' => auth()->id(),
                        'course_id' => $request->course_id,
                    ],
                    [
                        'enrolled_at' => now(),
                        'status' => 'active',
                        'progress_percentage' => 0.00,
                    ]
                );
            }

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

    public function verifyTransaction(Request $request)
    {
        $request->validate([
            'trxn_id' => 'required|string',
            'course_name' => 'required|string',
            'course_id' => 'required|exists:courses,id',
        ]);

        $transaction = Transaction::where('trxn_id', $request->trxn_id)
            ->where('course_name', $request->course_name)
            ->where('course_id', $request->course_id)
            ->whereIn('status', ['verified', 'pending'])
            ->first();

        if ($transaction) {
            if ($transaction->status === 'verified') {
                if (auth()->check() && $transaction->course_id) {
                    CourseEnrollment::updateOrCreate(
                        [
                            'user_id' => auth()->id(),
                            'course_id' => $transaction->course_id,
                        ],
                        [
                            'enrolled_at' => now(),
                            'status' => 'active',
                            'progress_percentage' => 0.00,
                        ]
                    );
                }
                
                return response()->json([
                    'success' => true, 
                    'message' => '✅ Transaction verified! You now have full access to the curriculum.',
                    'access_granted' => true
                ]);
            } else {
                if (auth()->check() && $transaction->course_id) {
                    CourseEnrollment::updateOrCreate(
                        [
                            'user_id' => auth()->id(),
                            'course_id' => $transaction->course_id,
                        ],
                        [
                            'enrolled_at' => now(),
                            'status' => 'active',
                            'progress_percentage' => 0.00,
                        ]
                    );
                }
                
                return response()->json([
                    'success' => true, 
                    'message' => '⏳ Transaction found but pending verification. You have temporary access to the curriculum.',
                    'access_granted' => true
                ]);
            }
        }

        return response()->json([
            'success' => false, 
            'message' => '❌ Invalid transaction ID or course name. Please check your transaction ID or contact support if you believe this is an error.'
        ]);
    }

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