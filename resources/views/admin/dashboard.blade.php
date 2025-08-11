<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - BeingScholar</title>
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
        
        .stats-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
            gap: 20px; 
            margin-bottom: 30px; 
        }
        
        .stat-card { 
            background: #fff; 
            border-radius: 16px; 
            padding: 25px; 
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
        }
        
        .stat-card.users::before { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .stat-card.courses::before { background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); }
        .stat-card.enrollments::before { background: linear-gradient(135deg, #f2994a 0%, #f2c94c 100%); }
        .stat-card.revenue::before { background: linear-gradient(135deg, #ee0979 0%, #ff6a00 100%); }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .stat-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        
        .stat-icon { 
            width: 50px; 
            height: 50px; 
            border-radius: 12px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 24px;
        }
        
        .stat-icon.users { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .stat-icon.courses { background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); }
        .stat-icon.enrollments { background: linear-gradient(135deg, #f2994a 0%, #f2c94c 100%); }
        .stat-icon.revenue { background: linear-gradient(135deg, #ee0979 0%, #ff6a00 100%); }
        
        .stat-number { 
            font-size: 32px; 
            font-weight: 700; 
            color: #2c3e50; 
            margin-bottom: 5px; 
        }
        
        .stat-label { 
            color: #7f8c8d; 
            font-size: 14px; 
            font-weight: 500;
            margin-bottom: 8px; 
        }
        
        .stat-change { 
            font-size: 12px; 
            color: #27ae60; 
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .stat-change::before {
            content: '↗';
            font-size: 14px;
        }
        
        @media (max-width: 1024px) {
            .sidebar { width: 220px; }
            .stats-grid { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }
        }
        
        @media (max-width: 768px) {
            .sidebar { display: none; }
            .content-wrapper { padding: 0 20px 20px; }
            .top-header { padding: 15px 20px; }
            .page-title { font-size: 24px; }
            .stats-grid { grid-template-columns: 1fr; }
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
            <div class="top-header">
                <h1 class="page-title">Dashboard Overview</h1>
                <div class="header-actions">
                    <div class="user-info">
                        <span class="user-name">Administrator</span>
                        <span class="admin-avatar">A</span>
                    </div>
                    <button class="logout-btn">Logout</button>
                </div>
            </div>
            
            <div class="content-wrapper">
                <div class="welcome-section">
                    <h2 class="welcome-title">Welcome back, Administrator! 👋</h2>
                    <p class="welcome-text">Here's what's happening with your platform today. Use the sidebar to navigate between courses, users, and your own courses. All your admin tools are just a click away.</p>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-card users">
                        <div class="stat-header">
                            <div class="stat-icon users">👥</div>
                        </div>
                        <div class="stat-number">{{ number_format($stats['total_users']) }}</div>
                        <div class="stat-label">Total Users</div>
                        <div class="stat-change">+12% this month</div>
                    </div>
                    <div class="stat-card courses">
                        <div class="stat-header">
                            <div class="stat-icon courses">📚</div>
                        </div>
                        <div class="stat-number">{{ $stats['active_courses'] }}</div>
                        <div class="stat-label">Active Courses</div>
                        <div class="stat-change">+3 new courses</div>
                    </div>
                    <div class="stat-card enrollments">
                        <div class="stat-header">
                            <div class="stat-icon enrollments">🎓</div>
                        </div>
                        <div class="stat-number">{{ number_format($stats['total_enrollments']) }}</div>
                        <div class="stat-label">Total Enrollments</div>
                        <div class="stat-change">+8% this week</div>
                    </div>
                    <div class="stat-card revenue">
                        <div class="stat-header">
                            <div class="stat-icon revenue">💰</div>
                        </div>
                        <div class="stat-number">${{ number_format($stats['monthly_revenue']) }}</div>
                        <div class="stat-label">Monthly Revenue</div>
                        <div class="stat-change">+15% vs last month</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 