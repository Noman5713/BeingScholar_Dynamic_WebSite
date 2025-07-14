<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/mycourses.css') }}">
    <title>My Courses</title>
</head>


<body>
    <h1 style="font-size:40px;font-weight:700;margin-bottom:24px;color:#1976d2;text-align:center;">My Courses</h1>
    <div class="container" style="margin-top: 48px;">
  
        <div class="card">
            <div class="img">
                <img src="{{ asset('images/Course_Card_Banner/i.png') }}" alt="Java Spring Boot Course">
                <div class="course-badge">Active</div>
            </div>
            <div class="info">
                <h3>Professional Certificate in Java Spring boot and Web App Development</h3>
                <button class="btn" data-course="1">View Details</button>
            </div>
        </div>
    
        <div class="card">
            <div class="img">
                <img src="{{ asset('images/Course_Card_Banner/e.png') }}" alt="Data Analytics Course">
                <div class="course-badge">Active</div>
            </div>
            <div class="info">
                <h3>Applied Data Analytics Masterclass</h3>
                <button class="btn" data-course="2">View Details</button>
            </div>
        </div>

        <div class="card">
            <div class="img">
                <img src="{{ asset('images/Course_Card_Banner/l.png') }}" alt="Mern Stack Course">
                <div class="course-badge2">Pending</div>
            </div>
            <div class="info">
                <h3>Academia2Industry Mern Stack Launched</h3>
                <button class="btn" data-course="3">View Details</button>
            </div>
        </div>
    </div>
</body>

</html>