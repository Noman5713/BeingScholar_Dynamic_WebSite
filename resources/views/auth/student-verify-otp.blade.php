@extends('layouts.student')
@section('content')
<div class="container mt-5">
    <h2>Email Verification (OTP)</h2>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    
    @if(session('email'))
        <div class="alert alert-info">
            <i class="bi bi-envelope"></i> 
            <strong>Check your email:</strong> {{ session('email') }}
            <p class="mb-0 mt-2">We've sent a 6-digit verification code to your email address. Please enter it below.</p>
        </div>
    @endif
    
    @if(session('otp'))
        <div class="alert alert-warning" style="background-color: #fff3cd; border-color: #ffeaa7; color: #856404; padding: 15px; margin-bottom: 20px; border-radius: 5px; font-size: 16px; text-align: center;">
            <i class="bi bi-exclamation-triangle"></i>
            <strong style="font-size: 18px;">Development Mode - Your OTP Code:</strong> 
            <div style="font-size: 24px; font-weight: bold; letter-spacing: 3px; margin: 10px 0;">{{ session('otp') }}</div>
            <p><small>Note: In production, this code would only be sent via email.</small></p>
        </div>
    @endif
    
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('student.verify-otp') }}">
                @csrf
                <div class="mb-3">
                    <label for="otp" class="form-label">Enter 6-Digit OTP Code</label>
                    <input type="text" class="form-control form-control-lg text-center" id="otp" name="otp" maxlength="6" required placeholder="000000" style="letter-spacing: 5px; font-size: 24px;">
                    <div class="form-text">Enter the 6-digit code sent to your email address.</div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100">
                    <i class="bi bi-check-circle"></i> Verify Email
                </button>
            </form>
            
            <div class="text-center mt-3">
                <p class="text-muted">
                    Didn't receive the code? 
                    <a href="{{ route('student.register.form') }}" class="text-decoration-none">Try registering again</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
