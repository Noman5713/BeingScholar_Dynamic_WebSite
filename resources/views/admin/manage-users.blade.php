<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users - BeingScholar Admin</title>
    <style>
        body { background: #f8f9fa; margin: 0; font-family: Arial, sans-serif; }
        .container-fluid { width: 100vw; min-height: 100vh; }
        .row { display: flex; min-height: 100vh; }
        .sidebar { width: 220px; background: #2c3e50; color: #ecf0f1; display: flex; flex-direction: column; }
        .sidebar-header { padding: 32px 0 16px 0; text-align: center; }
        .sidebar-header h4 { color: #fff; margin-bottom: 0; }
        .sidebar-header p { color: #b2bec3; margin-top: 4px; }
        .nav { list-style: none; padding: 0; margin: 0; }
        .nav-item { width: 100%; }
        .nav-link { display: block; padding: 15px 20px; color: #ecf0f1; text-decoration: none; border-radius: 0; transition: background 0.2s; }
        .nav-link.active, .nav-link:hover { background: #3498db; color: #fff; }
        .main-content { flex: 1; background: #f8f9fa; min-height: 100vh; padding: 40px 32px; }
        .navbar-admin { background: #fff; box-shadow: 0 2px 8px rgba(44,62,80,0.04); padding: 16px 24px; display: flex; align-items: center; justify-content: space-between; margin-bottom: 32px; }
        .navbar-brand { font-weight: bold; font-size: 1.2rem; }
        .admin-avatar { width: 36px; height: 36px; border-radius: 50%; object-fit: cover; background: #3498db; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1rem; margin-left: 12px; }
        .logout-btn { border-radius: 6px; background: #e74c3c; color: #fff; border: none; padding: 6px 16px; cursor: pointer; font-size: 1rem; margin-left: 16px; }
        .logout-btn:hover { background: #c0392b; }
        .card { background: #fff; border-radius: 10px; box-shadow: 0 2px 12px rgba(44,62,80,0.08); margin-bottom: 24px; max-width: 100%; }
        .card-header { padding: 20px 24px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #eee; background: #f4f6fa; border-radius: 10px 10px 0 0; }
        .card-title { font-size: 1.1rem; font-weight: bold; }
        .badge { display: inline-block; padding: 2px 10px; border-radius: 6px; font-size: 0.95em; }
        .bg-primary { background: #3498db; color: #fff; }
        .bg-success { background: #27ae60; color: #fff; }
        .bg-warning { background: #f39c12; color: #fff; }
        .table-responsive { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 0; background: #fff; }
        th, td { padding: 12px 14px; border-bottom: 1px solid #eee; text-align: left; }
        th { background: #f4f6fa; font-weight: bold; }
        tr:last-child td { border-bottom: none; }
        .btn { background: #b2bec3; color: #fff; border: none; border-radius: 6px; padding: 6px 14px; font-size: 1rem; cursor: not-allowed; opacity: 0.7; }
        .text-muted { color: #888; }
        .gap-3 { display: flex; align-items: center; gap: 16px; }
        @media (max-width: 700px) {
            .main-content { padding: 16px 4px; }
            .card-header, th, td { padding: 8px 6px; }
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
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">🏠 Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.manage-courses') }}">📚 Manage Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin.users') }}">👥 Manage Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.mycourses') }}">🗂 My Courses</a>
                </li>
            </ul>
        </nav>
        <main class="main-content">
            <div class="navbar-admin">
                <span class="navbar-brand">Manage Users</span>
                <div class="gap-3">
                    <span class="fw-semibold">Admin</span>
                    <span class="admin-avatar">A</span>
                    <form action="#" method="POST" class="d-inline">
                        <button type="submit" class="logout-btn">Logout</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span class="card-title">All Users</span>
                    <span class="badge bg-primary">2 total users</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table>
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
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td>Admin</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>Jan 1, 2024</td>
                                    <td><button class="btn" disabled>Action</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>jane@example.com</td>
                                    <td>Student</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>Feb 15, 2024</td>
                                    <td><button class="btn" disabled>Action</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 