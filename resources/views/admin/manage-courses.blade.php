<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Courses - BeingScholar Admin</title>
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
        .card { background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(44,62,80,0.04); margin-bottom: 24px; }
        .card-header { padding: 20px 24px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #eee; }
        .card-title { font-size: 1.1rem; font-weight: bold; }
        .btn { background: #3498db; color: #fff; border: none; border-radius: 6px; padding: 8px 18px; font-size: 1rem; cursor: pointer; transition: background 0.2s; }
        .btn:hover { background: #217dbb; }
        .table-responsive { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { padding: 10px 12px; border-bottom: 1px solid #eee; text-align: left; }
        th { background: #f4f6fa; font-weight: bold; }
        .course-image { width: 60px; height: 40px; object-fit: cover; border-radius: 4px; background: #eee; display: block; }
        .badge { display: inline-block; padding: 2px 10px; border-radius: 6px; font-size: 0.95em; }
        .bg-info { background: #56ccf2; color: #fff; }
        .bg-success { background: #27ae60; color: #fff; }
        .bg-secondary { background: #b2bec3; color: #fff; }
        .btn-group { display: flex; gap: 4px; }
        .btn-outline-primary { background: #fff; color: #3498db; border: 1px solid #3498db; }
        .btn-outline-primary:hover { background: #3498db; color: #fff; }
        .btn-outline-warning { background: #fff; color: #f39c12; border: 1px solid #f39c12; }
        .btn-outline-warning:hover { background: #f39c12; color: #fff; }
        .btn-outline-danger { background: #fff; color: #e74c3c; border: 1px solid #e74c3c; }
        .btn-outline-danger:hover { background: #e74c3c; color: #fff; }
        .text-muted { color: #888; }
        .text-center { text-align: center; }
        .py-4 { padding: 32px 0; }
        .mb-3 { margin-bottom: 1rem; }
        .mb-0 { margin-bottom: 0; }
        .d-flex { display: flex; }
        .justify-content-center { justify-content: center; }
        .align-items-center { align-items: center; }
        .gap-3 { display: flex; align-items: center; gap: 16px; }
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
            <div class="navbar-admin">
                <span class="navbar-brand">Manage Courses</span>
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
                    <span class="card-title">All Courses</span>
                    <a href="#" class="btn">＋ Add New Course</a>
                </div>
                <div class="card-body">
                    <!-- Table and content here, use raw CSS for table and badges -->
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 