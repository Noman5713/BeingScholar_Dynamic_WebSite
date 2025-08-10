<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - BeingScholar</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
            min-height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
        }
        
        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }
        
        .login-card { 
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px; 
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden; 
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        .login-header { 
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #fff; 
            padding: 40px 30px 30px 30px; 
            text-align: center; 
            position: relative;
        }
        
        .login-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102,126,234,0.1) 0%, rgba(118,75,162,0.1) 100%);
        }
        
        .login-header .avatar { 
            width: 70px; 
            height: 70px; 
            border-radius: 50%; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 28px; 
            font-weight: 700; 
            margin: 0 auto 15px auto;
            box-shadow: 0 8px 20px rgba(102,126,234,0.3);
            position: relative;
            z-index: 1;
        }
        
        .login-header h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
            position: relative;
            z-index: 1;
        }
        
        .login-header p {
            font-size: 14px;
            opacity: 0.9;
            font-weight: 500;
            position: relative;
            z-index: 1;
        }
        
        .login-body { 
            padding: 40px 30px; 
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label { 
            display: block; 
            margin-bottom: 8px; 
            font-weight: 600;
            color: #2c3e50;
            font-size: 14px;
        }
        
        .form-control { 
            width: 100%; 
            border-radius: 12px; 
            border: 2px solid #e9ecef; 
            padding: 14px 18px; 
            font-size: 15px; 
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        
        .form-control:focus { 
            border-color: #667eea; 
            outline: none; 
            background: #fff;
            box-shadow: 0 0 0 3px rgba(102,126,234,0.1);
        }
        
        .btn-login { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none; 
            border-radius: 12px; 
            padding: 16px; 
            font-weight: 600; 
            color: #fff; 
            width: 100%; 
            font-size: 16px; 
            cursor: pointer; 
            margin-top: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102,126,234,0.3);
        }
        
        .btn-login:hover { 
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102,126,234,0.4);
        }
        
        .alert { 
            border-radius: 12px; 
            border: none; 
            padding: 12px 16px; 
            margin-bottom: 20px; 
            font-size: 14px;
            font-weight: 500;
        }
        
        .alert-danger { 
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
            color: #fff;
        }
        
        .alert-success { 
            background: linear-gradient(135deg, #51cf66 0%, #40c057 100%);
            color: #fff;
        }
        
        .form-check { 
            display: flex; 
            align-items: center; 
            margin-bottom: 20px; 
            gap: 10px;
        }
        
        .form-check-input { 
            width: 18px;
            height: 18px;
            accent-color: #667eea;
        }
        
        .form-check-label {
            font-size: 14px;
            color: #6c757d;
            font-weight: 500;
        }
        
        .text-center { 
            text-align: center; 
        }
        
        .text-muted { 
            color: #6c757d; 
        }
        
        .text-decoration-none { 
            text-decoration: none; 
        }
        
        .mt-4 { 
            margin-top: 20px; 
        }
        
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            background: #f8f9fa;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .back-link:hover {
            background: #e9ecef;
            transform: translateX(-3px);
        }
        
        @media (max-width: 480px) {
            .login-container {
                padding: 10px;
            }
            .login-header {
                padding: 30px 20px 20px 20px;
            }
            .login-body {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="avatar">A</div>
                <h2>Admin Login</h2>
                <p>BeingScholar Dashboard</p>
            </div>
            <div class="login-body">
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form method="POST" action="#">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                        @error('password')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn-login">Login to Dashboard</button>
                </form>
                <div class="text-center mt-4">
                    <a href="/admin/dashboard" class="text-muted text-decoration-none back-link">
                        <span>←</span>
                        <span>Back to Dashboard</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 