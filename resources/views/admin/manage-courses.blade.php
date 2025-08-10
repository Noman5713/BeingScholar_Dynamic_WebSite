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
        .btn-success { background: #27ae60; }
        .btn-success:hover { background: #229954; }
        .btn-warning { background: #f39c12; }
        .btn-warning:hover { background: #e67e22; }
        .btn-danger { background: #e74c3c; }
        .btn-danger:hover { background: #c0392b; }
        .courses-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 24px; }
        .course-card { background: #fff; border-radius: 12px; box-shadow: 0 2px 12px rgba(44,62,80,0.08); overflow: hidden; transition: transform 0.2s, box-shadow 0.2s; }
        .course-card:hover { transform: translateY(-4px); box-shadow: 0 4px 20px rgba(44,62,80,0.12); }
        .course-image { width: 100%; height: 180px; object-fit: cover; }
        .course-content { padding: 20px; }
        .course-title { font-size: 1.2rem; font-weight: bold; color: #2c3e50; margin-bottom: 8px; line-height: 1.4; }
        .course-description { color: #7f8c8d; font-size: 0.95rem; margin-bottom: 16px; line-height: 1.5; }
        .course-meta { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; }
        .course-price { font-weight: bold; color: #27ae60; font-size: 1.1rem; }
        .course-status { padding: 4px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; }
        .status-active { background: #d4edda; color: #155724; }
        .status-draft { background: #fff3cd; color: #856404; }
        .status-archived { background: #f8d7da; color: #721c24; }
        .course-actions { display: flex; gap: 8px; }
        .btn-sm { padding: 6px 12px; font-size: 0.9rem; }
        .gap-3 { display: flex; align-items: center; gap: 16px; }
        @media (max-width: 768px) {
            .courses-grid { grid-template-columns: 1fr; }
            .main-content { padding: 20px 16px; }
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
                    <div class="courses-grid">
                        <div class="course-card">
                            <img src="{{ asset('images/Course_Banner/Java.png') }}" alt="Java Course" class="course-image">
                            <div class="course-content">
                                <h3 class="course-title">Professional Certificate in Java Spring Boot</h3>
                                <p class="course-description">Master Java Spring Boot development with hands-on projects and real-world applications.</p>
                                <div class="course-meta">
                                    <span class="course-price">৳7,500</span>
                                    <span class="course-status status-active">Active</span>
                                </div>
                                <div class="course-actions">
                                    <button class="btn btn-sm btn-success">Edit</button>
                                    <button class="btn btn-sm btn-warning">Archive</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="course-card">
                            <img src="{{ asset('images/Course_Banner/Data.png') }}" alt="Data Analytics" class="course-image">
                            <div class="course-content">
                                <h3 class="course-title">Applied Data Analytics Masterclass</h3>
                                <p class="course-description">Learn data analysis, visualization, and statistical methods for business insights.</p>
                                <div class="course-meta">
                                    <span class="course-price">৳6,800</span>
                                    <span class="course-status status-active">Active</span>
                                </div>
                                <div class="course-actions">
                                    <button class="btn btn-sm btn-success">Edit</button>
                                    <button class="btn btn-sm btn-warning">Archive</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="course-card">
                            <img src="{{ asset('images/Course_Banner/Mern.png') }}" alt="MERN Stack" class="course-image">
                            <div class="course-content">
                                <h3 class="course-title">MERN Stack Development</h3>
                                <p class="course-description">Build full-stack web applications using MongoDB, Express, React, and Node.js.</p>
                                <div class="course-meta">
                                    <span class="course-price">৳8,200</span>
                                    <span class="course-status status-draft">Draft</span>
                                </div>
                                <div class="course-actions">
                                    <button class="btn btn-sm btn-success">Edit</button>
                                    <button class="btn btn-sm btn-warning">Publish</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="course-card">
                            <img src="{{ asset('images/Course_Banner/ARVR.png') }}" alt="AR/VR" class="course-image">
                            <div class="course-content">
                                <h3 class="course-title">AR/VR Development Fundamentals</h3>
                                <p class="course-description">Explore augmented and virtual reality development with Unity and modern tools.</p>
                                <div class="course-meta">
                                    <span class="course-price">৳9,500</span>
                                    <span class="course-status status-archived">Archived</span>
                                </div>
                                <div class="course-actions">
                                    <button class="btn btn-sm btn-success">Edit</button>
                                    <button class="btn btn-sm btn-warning">Restore</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="course-card">
                            <img src="{{ asset('images/Course_Card_Banner/a.png') }}" alt="AI Python" class="course-image">
                            <div class="course-content">
                                <h3 class="course-title">AI Based Software Development</h3>
                                <p class="course-description">Master AI development with Python, machine learning, and deep learning techniques.</p>
                                <div class="course-meta">
                                    <span class="course-price">৳5,100</span>
                                    <span class="course-status status-active">Active</span>
                                </div>
                                <div class="course-actions">
                                    <button class="btn btn-sm btn-success">Edit</button>
                                    <button class="btn btn-sm btn-warning">Archive</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="course-card">
                            <img src="{{ asset('images/Course_Card_Banner/b.png') }}" alt="Web Development" class="course-image">
                            <div class="course-content">
                                <h3 class="course-title">Modern Web Development</h3>
                                <p class="course-description">Learn HTML5, CSS3, JavaScript, and modern web development frameworks.</p>
                                <div class="course-meta">
                                    <span class="course-price">৳4,800</span>
                                    <span class="course-status status-draft">Draft</span>
                                </div>
                                <div class="course-actions">
                                    <button class="btn btn-sm btn-success">Edit</button>
                                    <button class="btn btn-sm btn-warning">Publish</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html> 