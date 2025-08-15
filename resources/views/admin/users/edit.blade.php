<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit User - BeingScholar Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); 
            min-height: 100vh; 
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
        }
        .container-fluid { width: 100vw; min-height: 100vh; }
        .row { display: flex; min-height: 100vh; }
        
        .sidebar { 
            width: 260px; 
            background: linear-gradient(180deg, #1e3c72 0%, #2a5298 100%);
            color: #fff; 
            display: flex; 
            flex-direction: column;
            box-shadow: 4px 0 10px rgba(0,0,0,0.1);
        }
        .sidebar-header { 
            padding: 30px 20px; 
            text-align: center; 
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar-header h4 { 
            color: #fff; 
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
            letter-spacing: -0.5px;
        }
        .sidebar-header p { 
            color: rgba(255,255,255,0.7); 
            font-size: 13px;
            font-weight: 500;
        }
        .nav { list-style: none; padding: 20px 0; margin: 0; }
        .nav-item { width: 100%; margin-bottom: 5px; }
        .nav-link { 
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 24px; 
            color: rgba(255,255,255,0.8); 
            text-decoration: none; 
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }
        .nav-link:hover { 
            background: rgba(255,255,255,0.1); 
            color: #fff;
            padding-left: 30px;
        }
        .nav-link.active { 
            background: rgba(255,255,255,0.15);
            color: #fff;
            border-left: 3px solid #fff;
        }
        
        .main-content { 
            flex: 1; 
            padding: 0;
            background: transparent;
            overflow-x: hidden;
        }
        
        .top-header {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        
        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #1e3c72;
            letter-spacing: -0.5px;
        }
        
        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 16px;
            background: #f8f9fa;
            border-radius: 50px;
        }
        
        .user-name {
            font-weight: 600;
            color: #2c3e50;
            font-size: 14px;
        }
        
        .admin-avatar { 
            width: 38px; 
            height: 38px; 
            border-radius: 50%; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-weight: 600; 
            font-size: 16px;
            box-shadow: 0 2px 8px rgba(102,126,234,0.3);
        }
        
        .logout-btn { 
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: #fff; 
            border: none; 
            padding: 10px 24px; 
            border-radius: 50px;
            cursor: pointer; 
            font-size: 14px;
            font-weight: 600;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .logout-btn:hover { 
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(245,87,108,0.3);
        }
        
        .content-wrapper {
            padding: 0 40px 40px;
        }
        
        .form-container {
            background: #fff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .form-title {
            font-size: 24px;
            font-weight: 700;
            color: #1e3c72;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 25px;
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
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #667eea;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(102,126,234,0.1);
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            border: none;
            padding: 14px 32px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102,126,234,0.3);
        }
        
        .btn-cancel {
            background: #6c757d;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-right: 15px;
        }
        
        .btn-cancel:hover {
            background: #5a6268;
            transform: translateY(-1px);
        }
        
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }
        
        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: 500;
        }
        
        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .user-avatar-preview {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: 700;
            margin: 0 auto 20px auto;
        }
        
        @media (max-width: 768px) {
            .sidebar { display: none; }
            .content-wrapper { padding: 0 20px 20px; }
            .top-header { padding: 15px 20px; }
            .page-title { font-size: 24px; }
            .form-row { grid-template-columns: 1fr; }
            .form-container { padding: 20px; }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="sidebar">
            <div class="sidebar-header">
                <h4>BeingScholar</h4>
                <p>Admin Panel</p>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard">🏠 Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/manage-courses">📚 Manage Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/admin/users">👥 Manage Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/mycourses">🗂 My Courses</a>
                </li>
            </ul>
        </nav>
        <main class="main-content">
            <div class="top-header">
                <h1 class="page-title">Edit User</h1>
                <div class="header-actions">
                    <div class="user-info">
                        <span class="user-name">Administrator</span>
                        <span class="admin-avatar">A</span>
                    </div>
                    <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-btn">Logout</button>
                    </form>
                </div>
            </div>
            
            <div class="content-wrapper">
                <div class="form-container">
                    <div class="user-avatar-preview">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                    <h2 class="form-title">Edit User: {{ $user->name }}</h2>
                    
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul style="margin: 0; padding-left: 20px;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('admin.users.update', $user) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name', $user->name) }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email', $user->email) }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="role" class="form-label">Role *</label>
                            <select class="form-control @error('role') is-invalid @enderror" id="role" name="role" required>
                                <option value="student" {{ old('role', $user->role) == 'student' ? 'selected' : '' }}>Student</option>
                                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="password" class="form-label">New Password (leave blank to keep current)</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                   id="password" name="password" placeholder="Enter new password">
                            <small class="text-muted">Minimum 8 characters</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="password_confirmation" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" 
                                   id="password_confirmation" name="password_confirmation" placeholder="Confirm new password">
                        </div>
                        
                        <div class="form-actions">
                            <div>
                                <a href="{{ route('admin.users') }}" class="btn-cancel">Cancel</a>
                            </div>
                            <button type="submit" class="btn-submit">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 