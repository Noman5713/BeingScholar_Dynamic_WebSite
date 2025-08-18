<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeingScholar - Forgot Password</title>
    <link rel="stylesheet" href="/css/studentauth.css">
</head>
<body class="student-auth-bg">
<div class="auth-container">
    <div class="auth-left">
        <h2>Forgot your password?</h2>
        <p>Enter your email address and we'll send you a link to reset your password.</p>
    </div>
    <div class="auth-right">
        <div class="auth-form-title">Reset Password</div>
        <form method="POST" action="{{ route('student.forgot-password.send') }}" class="auth-form">
            @csrf
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email">
            </div>
            <button type="submit" class="btn-auth">Send Reset Link</button>
            <div class="auth-bottom-text">
                <a href="{{ route('student.login.form') }}">Back to Login</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
