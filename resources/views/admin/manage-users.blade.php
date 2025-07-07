<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users - BeingScholar Admin</title>
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
        .search-filters {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .filter-group {
            margin-bottom: 15px;
        }
        .search-input {
            border: 2px solid #e9ecef;
            border-radius: 6px;
            padding: 8px 12px;
            transition: border-color 0.3s ease;
        }
        .search-input:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }
        .filter-select {
            border: 2px solid #e9ecef;
            border-radius: 6px;
            padding: 8px 12px;
            transition: border-color 0.3s ease;
        }
        .filter-select:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }
        .clear-filters {
            background: #6c757d;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            color: white;
            transition: background-color 0.3s ease;
        }
        .clear-filters:hover {
            background: #5a6268;
            color: white;
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
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
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
                            <a class="nav-link active" href="{{ route('admin.users') }}">
                                <i class="fas fa-users me-2"></i>
                                Manage Users
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Manage Users</h1>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                            <i class="fas fa-sign-out-alt me-1"></i>Logout
                        </button>
                    </form>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="search-filters">
                    <form method="GET" action="{{ route('admin.users') }}" class="row g-3">
                        <div class="col-md-4">
                            <label for="search" class="form-label">Search Users</label>
                            <input type="text" class="form-control search-input" id="search" name="search" 
                                   placeholder="Search by name or email..." value="{{ request('search') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="role_filter" class="form-label">Filter by Role</label>
                            <select class="form-select filter-select" id="role_filter" name="role_filter">
                                <option value="">All Roles</option>
                                <option value="student" {{ request('role_filter') === 'student' ? 'selected' : '' }}>Student</option>
                                <option value="admin" {{ request('role_filter') === 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="status_filter" class="form-label">Filter by Status</label>
                            <select class="form-select filter-select" id="status_filter" name="status_filter">
                                <option value="">All Status</option>
                                <option value="active" {{ request('status_filter') === 'active' ? 'selected' : '' }}>Active</option>
                                <option value="pending" {{ request('status_filter') === 'pending' ? 'selected' : '' }}>Pending</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <div class="d-grid gap-2 w-100">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search me-1"></i>Search
                                </button>
                                @if(request('search') || request('role_filter') || request('status_filter'))
                                    <a href="{{ route('admin.users') }}" class="btn clear-filters">
                                        <i class="fas fa-times me-1"></i>Clear
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">All Users</h5>
                        <span class="badge bg-primary">{{ $users->total() }} total users</span>
                    </div>
                    <div class="card-body">
                        @if($users->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Joined</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <form action="{{ route('admin.users.update-role', $user) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="role" class="form-select form-select-sm" onchange="this.form.submit()">
                                                        <option value="student" {{ $user->role === 'student' ? 'selected' : '' }}>Student</option>
                                                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                @if($user->email_verified_at)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-warning">Pending</span>
                                                @endif
                                            </td>
                                            <td>{{ $user->created_at->format('M j, Y') }}</td>
                                            <td>
                                                <form action="{{ route('admin.users.toggle-status', $user) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-sm btn-{{ $user->email_verified_at ? 'warning' : 'success' }}">
                                                        {{ $user->email_verified_at ? 'Deactivate' : 'Activate' }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center">
                                {{ $users->links() }}
                            </div>
                        @else
                            <div class="text-center py-4">
                                <i class="fas fa-users fa-3x text-muted mb-3"></i>
                                <h5 class="text-muted">No users found</h5>
                                <p class="text-muted">
                                    @if(request('search') || request('role_filter') || request('status_filter'))
                                        No users match your current search criteria. Try adjusting your filters.
                                    @else
                                        Users will appear here once they register.
                                    @endif
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 