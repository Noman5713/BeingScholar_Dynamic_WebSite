<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>My Courses - BeingScholar Admin</title>
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
        .nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: #fff;
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
        
        .welcome-section {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border-left: 4px solid #667eea;
        }
        
        .welcome-title {
            font-size: 24px;
            font-weight: 700;
            color: #1e3c72;
            margin-bottom: 10px;
        }
        
        .welcome-text {
            color: #7f8c8d;
            font-size: 16px;
            line-height: 1.6;
        }
        
        .courses-section {
            background: #fff;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f1f3f5;
        }
        
        .section-title {
            font-size: 20px;
            font-weight: 700;
            color: #2c3e50;
        }
        
        .courses-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); 
            gap: 20px;
        }
        
        .course-card { 
            background: #fff; 
            border-radius: 12px; 
            overflow: hidden;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .course-card:hover { 
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-color: #667eea;
        }
        
        .course-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 140px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .course-image { 
            width: 100%; 
            height: 100%; 
            object-fit: cover;
            opacity: 0.9;
            transition: transform 0.3s ease;
        }
        
        .course-card:hover .course-image {
            transform: scale(1.05);
        }
        
        .course-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .badge-active { 
            background: rgba(46,213,115,0.9);
            color: #fff;
        }
        .badge-draft { 
            background: rgba(255,193,7,0.9);
            color: #fff;
        }
        .badge-archived { 
            background: rgba(214,48,49,0.9);
            color: #fff;
        }
        
        .course-content { 
            padding: 20px;
        }
        
        .course-title { 
            font-size: 16px; 
            font-weight: 600; 
            color: #2c3e50; 
            margin-bottom: 8px;
            line-height: 1.3;
        }
        
        .course-description { 
            color: #7f8c8d; 
            font-size: 13px; 
            margin-bottom: 15px;
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .course-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 1px solid #f1f3f5;
            margin-bottom: 15px;
        }
        
        .course-price { 
            font-weight: 700; 
            color: #667eea;
            font-size: 18px;
        }
        
        .course-students {
            font-size: 12px;
            color: #95a5a6;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .course-actions { 
            display: flex; 
            gap: 8px;
        }
        
        .btn-action {
            flex: 1;
            padding: 8px 12px;
            border: none;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .btn-edit {
            background: #e3f2fd;
            color: #1976d2;
        }
        .btn-edit:hover {
            background: #1976d2;
            color: #fff;
        }
        
        .btn-archive {
            background: #fff3e0;
            color: #f57c00;
        }
        .btn-archive:hover {
            background: #f57c00;
            color: #fff;
        }
        
        .btn-delete {
            background: #ffebee;
            color: #c62828;
        }
        .btn-delete:hover {
            background: #c62828;
            color: #fff;
        }
        
        @media (max-width: 1024px) {
            .sidebar { width: 220px; }
            .courses-grid { grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); }
        }
        
        .no-courses {
            text-align: center;
            padding: 60px 20px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        
        .no-courses p {
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 30px;
        }
        
        @media (max-width: 768px) {
            .sidebar { display: none; }
            .content-wrapper { padding: 0 20px 20px; }
            .top-header { padding: 15px 20px; }
            .page-title { font-size: 24px; }
            .courses-grid { grid-template-columns: 1fr; }
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
                    <a class="nav-link" href="/admin/users">👥 Manage Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/admin/mycourses">🗂 My Courses</a>
                </li>
            </ul>
        </nav>
        <main class="main-content">
            <div class="top-header">
                <h1 class="page-title">My Courses</h1>
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
                <div class="welcome-section">
                    <h2 class="welcome-title">My Courses Overview 📚</h2>
                    <p class="welcome-text">Here are the courses you've created and are managing. You can view details, edit content, and monitor performance of your courses.</p>
                </div>
                
                <div class="courses-section">
                    <div class="section-header">
                        <h2 class="section-title">My Created Courses</h2>
                    </div>
                    <div class="courses-grid">
                        @forelse($courses as $course)
                        <div class="course-card">
                            <div class="course-image-wrapper">
                                <img src="{{ asset($course->banner_image ?? 'images/Course_Card_Banner/a.png') }}" alt="{{ $course->title }}" class="course-image">
                                <span class="course-badge badge-{{ $course->status }}">{{ ucfirst($course->status) }}</span>
                            </div>
                            <div class="course-content">
                                <h3 class="course-title">{{ $course->title }}</h3>
                                <p class="course-description">{{ Str::limit($course->description, 100) }}</p>
                                <div class="course-meta">
                                    <span class="course-price">৳{{ number_format($course->price) }}</span>
                                    <span class="course-students">👥 {{ $course->max_students ?? 0 }} students</span>
                                </div>
                                <div class="course-actions">
                                    <button class="btn-action btn-edit" onclick="editCourse({{ $course->id }})">Edit</button>
                                    @if($course->status === 'active')
                                        <button class="btn-action btn-archive" onclick="archiveCourse({{ $course->id }})">Archive</button>
                                    @elseif($course->status === 'draft')
                                        <button class="btn-action btn-archive" onclick="publishCourse({{ $course->id }})">Publish</button>
                                    @else
                                        <button class="btn-action btn-archive" onclick="restoreCourse({{ $course->id }})">Restore</button>
                                    @endif
                                    <button class="btn-action btn-delete" onclick="deleteCourse({{ $course->id }})">Delete</button>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="no-courses">
                            <p>You haven't created any courses yet.</p>
                            <button class="btn-add" onclick="window.location.href='/admin/manage-courses'">
                                <span>+</span>
                                <span>Create Your First Course</span>
                            </button>
                        </div>
                        @endforelse
                    </div>
                    
                    @if($courses->hasPages())
                    <div class="pagination-wrapper">
                        {{ $courses->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </main>
    </div>
</div>
    <script>
        function editCourse(courseId) {
            if (confirm('Edit course ' + courseId + '?')) {
                window.location.href = '/admin/courses/' + courseId + '/edit';
            }
        }

        function archiveCourse(courseId) {
            if (confirm('Archive this course?')) {
                fetch('/admin/courses/' + courseId, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        status: 'archived'
                    })
                }).then(response => {
                    if (response.ok) {
                        location.reload();
                    }
                });
            }
        }

        function publishCourse(courseId) {
            if (confirm('Publish this course?')) {
                fetch('/admin/courses/' + courseId, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        status: 'active'
                    })
                }).then(response => {
                    if (response.ok) {
                        location.reload();
                    }
                });
            }
        }

        function restoreCourse(courseId) {
            if (confirm('Restore this course?')) {
                fetch('/admin/courses/' + courseId, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        status: 'active'
                    })
                }).then(response => {
                    if (response.ok) {
                        location.reload();
                    }
                });
            }
        }

        function deleteCourse(courseId) {
            if (confirm('Are you sure you want to delete this course? This action cannot be undone.')) {
                fetch('/admin/courses/' + courseId, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                }).then(response => {
                    if (response.ok) {
                        location.reload();
                    }
                });
            }
        }
    </script>
</body>
</html> 