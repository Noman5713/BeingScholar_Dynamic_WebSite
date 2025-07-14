<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - BeingScholar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f8f9fa;
        }
        .container {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 220px;
            background: #2c3e50;
            color: #ecf0f1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 32px;
        }
        .sidebar h4 {
            margin-bottom: 0;
        }
        .sidebar p {
            margin-top: 4px;
            color: #b2bec3;
        }
        .nav {
            list-style: none;
            padding: 0;
            margin-top: 32px;
            width: 100%;
        }
        .nav-item {
            width: 100%;
        }
        .nav-link {
            display: block;
            padding: 16px 32px;
            color: #ecf0f1;
            text-decoration: none;
            transition: background 0.2s;
        }
        .nav-link.active, .nav-link:hover {
            background: #3498db;
            color: #fff;
        }
        .main-content {
            flex: 1;
            padding: 40px 32px;
        }
        .welcome {
            margin-bottom: 32px;
        }
        .welcome h2 {
            color: #1976d2;
            margin-bottom: 8px;
        }
        .welcome p {
            color: #555;
            font-size: 1.1rem;
        }
        .logout-btn {
            margin-top: 32px;
            padding: 10px 24px;
            background: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        .logout-btn:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="sidebar">
            <h4>BeingScholar</h4>
            <p>Admin Panel</p>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Manage Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Manage Users</a>
                </li>
            </ul>
            <form action="#" method="POST">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </nav>
        <main class="main-content">
            <div class="welcome">
                <h2>Welcome, Admin! 👋</h2>
                <p>Hope you have a great day managing BeingScholar. This is your dashboard where you can see stats and quick actions.</p>
            </div>
        </main>
    </div>
</body>
</html> 