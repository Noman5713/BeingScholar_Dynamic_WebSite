<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StudentAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.student-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $otp = rand(100000, 999999);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'student',
            'email_verified_at' => null,
            'otp' => $otp,
        ]);

        // Send OTP email
        Mail::raw("Your OTP code is: $otp", function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Email Verification OTP');
        });

        session(['student_otp_user_id' => $user->id]);
        return redirect()->route('student.verify-otp.form')->with('status', 'Registration successful! Please verify your email.');
    }

    public function showLoginForm()
    {
        return view('auth.student-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->where('role', 'student')->first();
        if ($user && Hash::check($request->password, $user->password)) {
            if (!$user->email_verified_at) {
                session(['student_otp_user_id' => $user->id]);
                return redirect()->route('student.verify-otp.form')->withErrors(['email' => 'Please verify your email before logging in.']);
            }
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors(['email' => 'Invalid credentials or not a student account.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function showVerifyOtpForm()
    {
        return view('auth.student-verify-otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);
        $userId = session('student_otp_user_id');
        $user = User::find($userId);
        if ($user && $user->otp == $request->otp) {
            $user->email_verified_at = now();
            $user->otp = null;
            $user->save();
            Auth::login($user);
            $request->session()->regenerate();
            session()->forget('student_otp_user_id');
            return redirect('/')->with('status', 'Email verified and logged in!');
        }
        return back()->withErrors(['otp' => 'Invalid OTP.']);
    }

    public function showForgotPasswordForm()
    {
        return view('auth.student-forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $user = User::where('email', $request->email)->where('role', 'student')->first();
        if (!$user) {
            return back()->withErrors(['email' => 'No student account found with that email.']);
        }
        $token = Str::random(64);
        \DB::table('password_resets')->updateOrInsert(
            ['email' => $user->email],
            ['token' => $token, 'created_at' => now()]
        );
        $resetLink = url('/reset-password/' . $token . '?email=' . urlencode($user->email));
        \Mail::raw("Reset your password: $resetLink", function ($message) use ($user) {
            $message->to($user->email)->subject('Password Reset Link');
        });
        return back()->with('status', 'Password reset link sent to your email.');
    }

    public function showResetPasswordForm(Request $request, $token)
    {
        $email = $request->query('email');
        return view('auth.student-reset-password', compact('token', 'email'));
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $reset = \DB::table('password_resets')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();
        if (!$reset) {
            return back()->withErrors(['email' => 'Invalid or expired reset token.']);
        }
        $user = User::where('email', $request->email)->where('role', 'student')->first();
        if (!$user) {
            return back()->withErrors(['email' => 'No student account found.']);
        }
        $user->password = Hash::make($request->password);
        $user->save();
        \DB::table('password_resets')->where('email', $request->email)->delete();
        return redirect()->route('student.login.form')->with('status', 'Password reset successful. You can now login.');
    }
}
