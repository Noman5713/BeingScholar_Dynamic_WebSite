<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/mycourses.css') }}">
    <title>My Courses</title>
    <style>
        .header-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 32px;
            margin-top: 32px;
            margin-bottom: 32px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            background: #e0e0e0;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .my-courses-title {
            margin-top: 0;
        }


        body {
            margin-top: 24px;
            color: #fff;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
        }

        .my-courses-title {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 32px;
            color: mediumslateblue;
            text-align: center;
        }

        .courses-list {
            display: flex;
            flex-direction: column;
            gap: 32px;
            max-width: 900px;
            margin: 0 auto;
        }

        .course-card {
            background: whitesmoke;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            padding: 32px 24px;
            gap: 32px;
        }

        .course-img {
            width: 220px;
            height: 140px;
            border-radius: 12px;
            object-fit: cover;
            box-shadow: 0 2px 12px rgba(162, 89, 255, 0.2);
        }

        .course-info {
            flex: 1;
        }

        .course-title {
            font-size: 22px;
            font-weight: 600;
            color: black;
            margin-bottom: 8px;
        }

        .course-subtitle {
            font-size: 16px;
            color: white;
            margin-bottom: 16px;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: gainsboro;
            border-radius: 8px;
            margin-bottom: 12px;
            position: relative;
        }

        .progress {
            height: 100%;
            background: linear-gradient(90deg, black, gray);
            border-radius: 8px;
        }

        .progress-label {
            font-size: 15px;
            color: black;
            position: absolute;
            right: 0;
            top: -22px;
        }

        .course-actions {
            display: flex;
            gap: 16px;
            margin-top: 18px;
        }

        .course-btn {
            background: black;
            color: whitesmoke;
            border: none;
            border-radius: 24px;
            padding: 10px 28px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
          
        }

        .course-btn.outline {
            background: gainsboro;
            color: black;
            border: 1px solid black;
        }
       

    </style>
</head>

<body>
    <div class="header-bar">
        <div class="logo" style="font-size:1.6rem;font-weight:bold;color:#2b6cb0;">
            BeingScholar
        </div>
        <div class="user-profile">
            <span class="user-name">{{ Auth::user()->name ?? 'Student' }}</span>
            <div class="avatar">
                <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" alt="User Avatar" />
            </div>
        </div>
    </div>
    <div class="my-courses-title">My Courses</div>
    <div class="courses-list">
        <!-- Course 1 -->
        <div class="course-card">
            <img class="course-img" src="{{ asset('images/Course_Card_Banner/i.png') }}" alt="Batch 11">
            <div class="course-info">
                <div class="course-title">Professional Certificate in Java Spring boot and Web App Developnent</div>
                <div class="progress-bar">
                    <div class="progress" style="width: 68%;"></div>
                    <span class="progress-label">68%</span>
                </div>
                <div class="course-actions">
                    <button class="course-btn">Continue Course</button>
                </div>
            </div>
        </div>
        <!-- Course 2 -->
        <div class="course-card">
            <img class="course-img" src="{{ asset('images/Course_Card_Banner/e.png') }}" alt="Recommended Course">
            <div class="course-info">
                <div class="course-title">Applied Data Analytics Masterclass</div>
                <div class="progress-bar">
                    <div class="progress" style="width: 0%;"></div>
                    <span class="progress-label">0%</span>
                </div>
                <div class="course-actions">
                    <button class="course-btn">Continue Course</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>