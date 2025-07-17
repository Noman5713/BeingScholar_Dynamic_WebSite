<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - BeingScholar</title>
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; margin: 0; font-family: Arial, sans-serif; }
        .login-card { background: #fff; border-radius: 16px; box-shadow: 0 8px 32px rgba(44,62,80,0.12); overflow: hidden; width: 100%; max-width: 400px; }
        .login-header { background: #3498db; color: #fff; padding: 32px 24px 16px 24px; text-align: center; }
        .login-header .avatar { width: 56px; height: 56px; border-radius: 50%; background: #764ba2; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; margin: 0 auto 12px auto; }
        .login-body { padding: 36px 32px; }
        .form-label { display: block; margin-bottom: 6px; font-weight: bold; }
        .form-control { width: 100%; border-radius: 10px; border: 2px solid #e9ecef; padding: 12px 15px; margin-bottom: 12px; font-size: 1rem; box-sizing: border-box; }
        .form-control:focus { border-color: #3498db; outline: none; }
        .btn-login { background: #3498db; border: none; border-radius: 10px; padding: 12px; font-weight: 600; color: #fff; width: 100%; font-size: 1rem; cursor: pointer; margin-top: 8px; }
        .btn-login:hover { background: #217dbb; }
        .alert { border-radius: 10px; border: none; padding: 10px 16px; margin-bottom: 12px; font-size: 0.95rem; }
        .alert-danger { background: #f8d7da; color: #721c24; }
        .alert-success { background: #d4edda; color: #155724; }
        .form-check { display: flex; align-items: center; margin-bottom: 12px; }
        .form-check-input { margin-right: 8px; }
        .text-center { text-align: center; }
        .text-muted { color: #888; }
        .text-decoration-none { text-decoration: none; }
        .mt-4 { margin-top: 1.5rem; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <div class="avatar">A</div>
            <h2 class="mb-0">Admin Login</h2>
            <p class="mb-0 mt-2">BeingScholar Dashboard</p>
        </div>
        <div class="login-body">
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                @error('password')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <button type="submit" class="btn-login">Login to Dashboard</button>
            </form>
            <div class="text-center mt-4">
                <a href="#" onclick="window.history.back(); return false;" class="text-muted text-decoration-none">← Back to Dashboard</a>
            </div>
        </div>
    </div>
</body>
</html> 