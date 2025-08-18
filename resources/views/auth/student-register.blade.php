<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeingScholar - Student Register</title>
    <link rel="stylesheet" href="/css/studentauth.css">
</head>
<body class="student-auth-bg">
<div class="auth-container">
    <div class="auth-left">
        <h2>Join BeingScholar!</h2>
        <p>Create your account to start learning and growing your skills from anywhere in the world.</p>
    </div>
    <div class="auth-right">
        <div class="auth-form-title">Create Account</div>
        <form method="POST" action="{{ route('student.register') }}" class="auth-form">
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
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Create a password">
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your password">
            </div>
            <button type="submit" class="btn-auth">Register</button>
            <div class="auth-bottom-text">
                Already have an account? <a href="{{ route('student.login.form') }}">Login here</a>.
            </div>
        </form>
    </div>
</div>
</body>
</html>
