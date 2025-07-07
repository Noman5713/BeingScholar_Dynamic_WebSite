<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - BeingScholar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            background: #2c3e50;
        }
        .sidebar .nav-link {
            color: #ecf0f1;
            padding: 15px 20px;
            border-radius: 0;
        }
        .sidebar .nav-link:hover {
            background: #34495e;
            color: #fff;
        }
        .sidebar .nav-link.active {
            background: #3498db;
            color: #fff;
        }
        .main-content {
            background: #f8f9fa;
            min-height: 100vh;
        }
        .stat-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-left: 4px solid #3498db;
        }
        .stat-card.users { border-left-color: #e74c3c; }
        .stat-card.courses { border-left-color: #2ecc71; }
        .stat-card.active { border-left-color: #f39c12; }
        .quick-action-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .quick-action-card:hover {
            transform: translateY(-2px);
        }
        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #e74c3c;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .notification-dropdown {
            max-height: 300px;
            overflow-y: auto;
        }
        .notification-item {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        .notification-item:last-child {
            border-bottom: none;
        }
        .notification-item.unread {
            background: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <div class="text-center mb-4">
                        <h4 class="text-white">BeingScholar</h4>
                        <p class="text-muted">Admin Panel</p>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tachometer-alt me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.courses.index') }}">
                                <i class="fas fa-book me-2"></i>
                                Manage Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.users') }}">
                                <i class="fas fa-users me-2"></i>
                                Manage Users
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <span class="btn btn-sm btn-outline-secondary">{{ date('F j, Y') }}</span>
                        </div>
                        <div class="dropdown me-2">
                            <button class="btn btn-sm btn-outline-primary position-relative" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-bell me-1"></i>Notifications
                                <span class="notification-badge">3</span>
                            </button>
                            <ul class="dropdown-menu notification-dropdown" style="width: 300px;">
                                <li><h6 class="dropdown-header">Recent Notifications</h6></li>
                                <li><a class="dropdown-item notification-item unread" href="#">
                                    <div class="d-flex">
                                        <i class="fas fa-user-plus text-success me-2"></i>
                                        <div>
                                            <strong>New User Registered</strong>
                                            <br><small class="text-muted">John Doe joined 2 minutes ago</small>
                                        </div>
                                    </div>
                                </a></li>
                                <li><a class="dropdown-item notification-item unread" href="#">
                                    <div class="d-flex">
                                        <i class="fas fa-book text-primary me-2"></i>
                                        <div>
                                            <strong>New Course Added</strong>
                                            <br><small class="text-muted">AI Course created 5 minutes ago</small>
                                        </div>
                                    </div>
                                </a></li>
                                <li><a class="dropdown-item notification-item" href="#">
                                    <div class="d-flex">
                                        <i class="fas fa-exclamation-triangle text-warning me-2"></i>
                                        <div>
                                            <strong>System Update</strong>
                                            <br><small class="text-muted">Database backup completed</small>
                                        </div>
                                    </div>
                                </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-center" href="#">View All Notifications</a></li>
                            </ul>
                        </div>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-sign-out-alt me-1"></i>Logout
                            </button>
                        </form>
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="stat-card users">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="text-muted mb-1">Total Users</h5>
                                    <h2 class="mb-0">{{ $totalUsers }}</h2>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-users fa-2x text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="stat-card courses">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="text-muted mb-1">Total Courses</h5>
                                    <h2 class="mb-0">{{ $totalCourses }}</h2>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-book fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="stat-card active">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="text-muted mb-1">Active Courses</h5>
                                    <h2 class="mb-0">{{ $activeCourses }}</h2>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-check-circle fa-2x text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Quick Actions</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="quick-action-card text-center">
                                            <i class="fas fa-plus-circle fa-3x text-primary mb-3"></i>
                                            <h6>Add New Course</h6>
                                            <p class="text-muted small">Create a new course</p>
                                            <a href="{{ route('admin.courses.create') }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-plus me-1"></i>Add Course
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="quick-action-card text-center">
                                            <i class="fas fa-users fa-3x text-success mb-3"></i>
                                            <h6>Manage Users</h6>
                                            <p class="text-muted small">View and edit users</p>
                                            <a href="{{ route('admin.users') }}" class="btn btn-success btn-sm">
                                                <i class="fas fa-users me-1"></i>Manage Users
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="quick-action-card text-center">
                                            <i class="fas fa-book fa-3x text-info mb-3"></i>
                                            <h6>Manage Courses</h6>
                                            <p class="text-muted small">Edit existing courses</p>
                                            <a href="{{ route('admin.courses.index') }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-book me-1"></i>Manage Courses
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="quick-action-card text-center">
                                            <i class="fas fa-download fa-3x text-warning mb-3"></i>
                                            <h6>Export Data</h6>
                                            <p class="text-muted small">Download reports</p>
                                            <button class="btn btn-warning btn-sm" onclick="exportData()">
                                                <i class="fas fa-download me-1"></i>Export
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Recent Users</h5>
                            </div>
                            <div class="card-body">
                                @if($recentUsers->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Joined</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($recentUsers as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        <span class="badge bg-{{ $user->role === 'admin' ? 'danger' : 'primary' }}">
                                                            {{ ucfirst($user->role) }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $user->created_at->format('M j, Y') }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p class="text-muted">No users found.</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Recent Courses</h5>
                            </div>
                            <div class="card-body">
                                @if($recentCourses->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Instructor</th>
                                                    <th>Status</th>
                                                    <th>Created</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($recentCourses as $course)
                                                <tr>
                                                    <td>{{ Str::limit($course->title, 30) }}</td>
                                                    <td>{{ $course->instructor }}</td>
                                                    <td>
                                                        <span class="badge bg-{{ $course->status === 'active' ? 'success' : 'secondary' }}">
                                                            {{ ucfirst($course->status) }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $course->created_at->format('M j, Y') }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p class="text-muted">No courses found.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function exportData() {
            alert('Export functionality will be implemented in Day 4!');
        }
        
        setInterval(function() {
            const badge = document.querySelector('.notification-badge');
            const currentCount = parseInt(badge.textContent);
            if (currentCount > 0) {
                badge.textContent = currentCount - 1;
            }
        }, 30000);
    </script>
</body>
</html> 