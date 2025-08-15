<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Course - BeingScholar Admin</title>
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
            max-width: 800px;
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
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
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
                    <a class="nav-link active" href="/admin/manage-courses">📚 Manage Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/users">👥 Manage Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/mycourses">🗂 My Courses</a>
                </li>
            </ul>
        </nav>
        <main class="main-content">
            <div class="top-header">
                <h1 class="page-title">Edit Course</h1>
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
                    <h2 class="form-title">Edit Course: {{ $course->title }}</h2>
                    
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
                    
                    <form method="POST" action="{{ route('admin.courses.update', $course) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="title" class="form-label">Course Title *</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                   id="title" name="title" value="{{ old('title', $course->title) }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="description" class="form-label">Course Description *</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" required>{{ old('description', $course->description) }}</textarea>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="instructor" class="form-label">Instructor *</label>
                                <input type="text" class="form-control @error('instructor') is-invalid @enderror" 
                                       id="instructor" name="instructor" value="{{ old('instructor', $course->instructor) }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="duration" class="form-label">Duration *</label>
                                <input type="text" class="form-control @error('duration') is-invalid @enderror" 
                                       id="duration" name="duration" value="{{ old('duration', $course->duration) }}" 
                                       placeholder="e.g., 6-8 Months, 40-45 Classes">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="level" class="form-label">Difficulty Level *</label>
                                <select class="form-control @error('level') is-invalid @enderror" id="level" name="level" required>
                                    <option value="">Select Level</option>
                                    <option value="Beginner" {{ old('level', $course->level) == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                                    <option value="Intermediate" {{ old('level', $course->level) == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                    <option value="Advanced" {{ old('level', $course->level) == 'Advanced' ? 'selected' : '' }}>Advanced</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="price" class="form-label">Price (৳) *</label>
                                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" 
                                       id="price" name="price" value="{{ old('price', $course->price) }}" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="max_students" class="form-label">Maximum Students</label>
                                <input type="number" class="form-control @error('max_students') is-invalid @enderror" 
                                       id="max_students" name="max_students" value="{{ old('max_students', $course->max_students) }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="batch_number" class="form-label">Batch Number</label>
                                <input type="text" class="form-control @error('batch_number') is-invalid @enderror" 
                                       id="batch_number" name="batch_number" value="{{ old('batch_number', $course->batch_number) }}" 
                                       placeholder="e.g., Batch 1, Batch 2">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                <option value="active" {{ old('status', $course->status) == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="draft" {{ old('status', $course->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="archived" {{ old('status', $course->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="prerequisites" class="form-label">Prerequisites</label>
                            <textarea class="form-control @error('prerequisites') is-invalid @enderror" 
                                      id="prerequisites" name="prerequisites">{{ old('prerequisites', $course->prerequisites) }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="banner_image" class="form-label">Banner Image Path</label>
                            <input type="text" class="form-control @error('banner_image') is-invalid @enderror" 
                                   id="banner_image" name="banner_image" value="{{ old('banner_image', $course->banner_image) }}" 
                                   placeholder="e.g., images/Course_Card_Banner/a.png">
                        </div>
                        
                        <div class="form-actions">
                            <div>
                                <a href="{{ route('admin.courses') }}" class="btn-cancel">Cancel</a>
                            </div>
                            <button type="submit" class="btn-submit">Update Course</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 