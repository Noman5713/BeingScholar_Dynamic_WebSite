<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users - BeingScholar Admin</title>
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
        
        .search-section { 
            background: #fff; 
            border-radius: 16px; 
            padding: 25px; 
            margin-bottom: 25px; 
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
        }
        
        .search-input { 
            width: 100%; 
            max-width: 400px; 
            padding: 14px 20px; 
            border: 2px solid #e9ecef; 
            border-radius: 12px; 
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        .search-input:focus { 
            outline: none; 
            border-color: #667eea;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(102,126,234,0.1);
        }
        
        .users-section {
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
        
        .badge { 
            display: inline-block; 
            padding: 6px 12px; 
            border-radius: 20px; 
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .bg-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #fff; }
        .bg-success { background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); color: #fff; }
        .bg-warning { background: linear-gradient(135deg, #f2994a 0%, #f2c94c 100%); color: #fff; }
        .bg-danger { background: linear-gradient(135deg, #ee0979 0%, #ff6a00 100%); color: #fff; }
        
        .table-responsive { overflow-x: auto; }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 0; 
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
        }
        th, td { 
            padding: 16px 20px; 
            border-bottom: 1px solid #f1f3f5; 
            text-align: left; 
        }
        th { 
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            font-weight: 600;
            color: #2c3e50;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        tr:last-child td { border-bottom: none; }
        tr:hover { 
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            transform: scale(1.01);
            transition: all 0.2s ease;
        }
        
        .btn { 
            background: #b2bec3; 
            color: #fff; 
            border: none; 
            border-radius: 8px; 
            padding: 8px 16px; 
            font-size: 13px;
            font-weight: 600;
            cursor: not-allowed; 
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        .btn-edit { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            cursor: pointer; 
            opacity: 1;
        }
        .btn-edit:hover { 
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102,126,234,0.3);
        }
        .btn-delete { 
            background: linear-gradient(135deg, #ee0979 0%, #ff6a00 100%);
            cursor: pointer; 
            opacity: 1;
        }
        .btn-delete:hover { 
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(238,9,121,0.3);
        }
        
        .text-muted { color: #6c757d; }
        
        .user-avatar { 
            width: 40px; 
            height: 40px; 
            border-radius: 50%; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-weight: 600; 
            font-size: 16px;
            box-shadow: 0 2px 8px rgba(102,126,234,0.2);
        }
        
        .user-details {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .user-info-text h4 {
            font-size: 16px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 4px;
        }
        
        .user-info-text p {
            font-size: 12px;
            color: #6c757d;
            font-weight: 500;
        }
        
        .action-buttons {
            display: flex;
            gap: 8px;
        }
        
        @media (max-width: 1024px) {
            .sidebar { width: 220px; }
        }
        
        @media (max-width: 768px) {
            .sidebar { display: none; }
            .content-wrapper { padding: 0 20px 20px; }
            .top-header { padding: 15px 20px; }
            .page-title { font-size: 24px; }
            th, td { padding: 12px 15px; }
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
                <h1 class="page-title">User Management</h1>
                <div class="header-actions">
                    <div class="user-info">
                        <span class="user-name">Administrator</span>
                        <span class="admin-avatar">A</span>
                    </div>
                    <button class="logout-btn">Logout</button>
                </div>
            </div>
            
            <div class="content-wrapper">
                <div class="search-section">
                    <input type="text" class="search-input" placeholder="Search users by name, email, or role..." id="userSearch">
                </div>
                
                <div class="users-section">
                    <div class="section-header">
                        <h2 class="section-title">All Users</h2>
                        <span class="badge bg-primary">8 total users</span>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Joined</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="user-details">
                                            <span class="user-avatar">J</span>
                                            <div class="user-info-text">
                                                <h4>John Doe</h4>
                                                <p>ID: 1001</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>john@example.com</td>
                                    <td>Admin</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>Jan 1, 2024</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-edit">Edit</button>
                                            <button class="btn btn-delete">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-details">
                                            <span class="user-avatar">J</span>
                                            <div class="user-info-text">
                                                <h4>Jane Smith</h4>
                                                <p>ID: 1002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>jane@example.com</td>
                                    <td>Student</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>Feb 15, 2024</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-edit">Edit</button>
                                            <button class="btn btn-delete">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-details">
                                            <span class="user-avatar">M</span>
                                            <div class="user-info-text">
                                                <h4>Mike Johnson</h4>
                                                <p>ID: 1003</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>mike@example.com</td>
                                    <td>Student</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>Mar 10, 2024</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-edit">Edit</button>
                                            <button class="btn btn-delete">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-details">
                                            <span class="user-avatar">S</span>
                                            <div class="user-info-text">
                                                <h4>Sarah Wilson</h4>
                                                <p>ID: 1004</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>sarah@example.com</td>
                                    <td>Instructor</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>Apr 5, 2024</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-edit">Edit</button>
                                            <button class="btn btn-delete">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-details">
                                            <span class="user-avatar">D</span>
                                            <div class="user-info-text">
                                                <h4>David Brown</h4>
                                                <p>ID: 1005</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>david@example.com</td>
                                    <td>Student</td>
                                    <td><span class="badge bg-danger">Suspended</span></td>
                                    <td>May 20, 2024</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-edit">Edit</button>
                                            <button class="btn btn-delete">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script>
document.getElementById('userSearch').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll('tbody tr');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        if (text.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});
</script>
</body>
</html> 