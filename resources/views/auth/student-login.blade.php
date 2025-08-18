<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeingScholar - Student Login</title>
    <link rel="stylesheet" href="/css/studentauth.css">
</head>
<body class="student-auth-bg">
<div class="auth-container">
    <div class="auth-left">
        <h2>Welcome back!</h2>
        <p>You can sign in to access with your existing account.</p>
    </div>
    <div class="auth-right">
        <div class="auth-form-title">Sign In</div>
        <form method="POST" action="{{ route('student.login') }}" class="auth-form">
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
                <label for="email" class="form-label">Username or email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
            </div>
            <div class="form-check" style="justify-content: space-between;">
                <div>
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <a href="{{ route('student.forgot-password.form') }}" class="forgot-link">Forgot password?</a>
            </div>
            <button type="submit" class="btn-auth">Sign In</button>
            <div class="auth-bottom-text">
                New here? <a href="{{ route('student.register.form') }}">Create an Account</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
