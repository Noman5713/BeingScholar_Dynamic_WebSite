<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - BeingScholar</title>
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
        .welcome { background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(44,62,80,0.04); padding: 40px; margin-bottom: 24px; }
        .welcome h2 { color: #1976d2; margin-bottom: 8px; }
        .welcome p { color: #555; font-size: 1.1rem; }
        .gap-3 { display: flex; align-items: center; gap: 16px; }
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; margin-bottom: 32px; }
        .stat-card { background: #fff; border-radius: 12px; padding: 24px; box-shadow: 0 2px 8px rgba(44,62,80,0.04); border-left: 4px solid #3498db; }
        .stat-card.users { border-left-color: #e74c3c; }
        .stat-card.courses { border-left-color: #27ae60; }
        .stat-card.enrollments { border-left-color: #f39c12; }
        .stat-card.revenue { border-left-color: #9b59b6; }
        .stat-number { font-size: 2.5rem; font-weight: bold; color: #2c3e50; margin-bottom: 8px; }
        .stat-label { color: #7f8c8d; font-size: 1rem; margin-bottom: 4px; }
        .stat-change { font-size: 0.9rem; color: #27ae60; }
        .stat-icon { font-size: 2rem; margin-bottom: 12px; }
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
                    <a class="nav-link active" href="/admin/dashboard">🏠 Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/manage-courses">📚 Manage Courses</a>
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
                <span class="navbar-brand">Admin Dashboard</span>
                <div class="gap-3">
                    <span class="fw-semibold">Admin</span>
                    <span class="admin-avatar">A</span>
                    <form action="#" method="POST" class="d-inline">
                        <button type="submit" class="logout-btn">Logout</button>
                    </form>
                </div>
            </div>
            <div class="welcome">
                <h2>Welcome, Admin!</h2>
                <p class="lead mb-0">Manage your platform efficiently. Use the sidebar to navigate between courses, users, and your own courses. All your admin tools are just a click away.</p>
            </div>
            <div class="stats-grid">
                <div class="stat-card users">
                    <div class="stat-icon">👥</div>
                    <div class="stat-number">1,247</div>
                    <div class="stat-label">Total Users</div>
                    <div class="stat-change">+12% this month</div>
                </div>
                <div class="stat-card courses">
                    <div class="stat-icon">📚</div>
                    <div class="stat-number">24</div>
                    <div class="stat-label">Active Courses</div>
                    <div class="stat-change">+3 new courses</div>
                </div>
                <div class="stat-card enrollments">
                    <div class="stat-icon">🎓</div>
                    <div class="stat-number">856</div>
                    <div class="stat-label">Total Enrollments</div>
                    <div class="stat-change">+8% this week</div>
                </div>
                <div class="stat-card revenue">
                    <div class="stat-icon">💰</div>
                    <div class="stat-number">$12,450</div>
                    <div class="stat-label">Monthly Revenue</div>
                    <div class="stat-change">+15% vs last month</div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 