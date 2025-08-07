<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course['title'] }} - DIU BeingScholar</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/course-detail.css') }}">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container nav-container">
            <div class="logo">BeingScholar</div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/#about">About</a></li>
                <li><a href="/courses">Courses</a></li>
                <li><a href="/#teachers">Teachers</a></li>
                <li><a href="/#services">Services</a></li>
                <li><a href="/#success">Success & Reviews</a></li>
                <li><a href="/#join">Join Us</a></li>
                <li><a href="/#contact">Contact</a></li>
            </ul>
            <div class="login-btn"><a href="#login">Login/Register</a></div>
            <div class="menu-toggle" id="mobile-menu">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <nav class="breadcrumb">
                <a href="/">Home</a> / <a href="/courses">Courses</a> / <span>{{ $course['title'] }}</span>
            </nav>
        </div>
    </section>

    <!-- Course Detail Section -->
    <section class="course-detail-section">
        <div class="container">
            <div class="course-detail-container">
                <!-- Main Content -->
                <div class="course-main-content">
                    <!-- Course Header -->
                    <div class="course-header">
                        <div class="course-badge-container">
                            @if($course['badge'])
                                <span class="course-badge">{{ $course['badge'] }}</span>
                            @endif
                        </div>
                        <h1 class="course-title">{{ $course['title'] }}</h1>
                        <div class="course-meta">
                            <span class="batch">{{ $course['batch'] }}</span>
                            @if($course['seats'])
                                <span class="seats">{{ $course['seats'] }} seats remaining</span>
                            @endif
                            @if($course['days'])
                                <span class="days">{{ $course['days'] }} days remaining</span>
                            @endif
                        </div>
                        <button class="enroll-btn">Enroll Now</button>
                    </div>

                    <!-- Course Navigation Tabs -->
                    <div class="course-tabs">
                        <button class="tab-btn active" data-tab="overview">Overview</button>
                        <button class="tab-btn" data-tab="curriculum">Curriculum</button>
                        <button class="tab-btn" data-tab="evaluation">Evaluation</button>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- Overview Tab -->
                        <div class="tab-panel active" id="overview">
                            <div class="course-description">
                                <h2>Course Description</h2>
                                <div class="description-content">
                                    {!! nl2br(e($course['description'])) !!}
                                </div>

                                <h3>Will You Get Certificate After the Course:</h3>
                                <p>Yes, after completing the course you will achieve certificate. There are 3 Types of Certification available based on assessment in our each course. These Types are mentioned below:</p>
                                <ol>
                                    <li><strong>General Certificate (If the total marks is between 60% and 70%)</strong></li>
                                    <li><strong>White Belt Certificate (If the total marks is between 70% and 90%)</strong></li>
                                    <li><strong>Black Belt Certificate (If the total marks is between 90% and 100%)</strong></li>
                                </ol>

                                <h3>How do we evaluate a Student for certificate:</h3>
                                <p>Our Evaluation Process is extremely simple. Our Evaluation process maintains by following steps:</p>
                                <ol>
                                    <li><strong>Class Attendance (between 60 - 100%)</strong></li>
                                    <li><strong>Assignment Submission (Bonus Point for Quick Submission, As Usual Points For On Time Submission, Minus point for late submission)</strong></li>
                                    <li><strong>Mock Test (Written + Viva)</strong></li>
                                    <li><strong>Project Submission (Bonus Point for Quick Submission, As Usual Points For On Time Submission, Minus point for late submission)</strong></li>
                                    <li><strong>Soft Skills</strong></li>
                                </ol>

                                <p><strong>Please note that, the evaluation always be done by internal and external judge along via blind review process</strong></p>

                                <h3>How do we recommend a Student for the job:</h3>
                                <p>After completing the course, the white and black belt certificated students will allow for joining our <strong>stem-learning based bootcamp</strong>. The students will need to complete the bootcamp with proper instruction and discipline. After completing the <strong>bootcamp</strong>, we will recommend the desired candidate to any company in sha Allah.</p>
                            </div>
                        </div>

                        <!-- Curriculum Tab -->
                        <div class="tab-panel" id="curriculum">
                            <div class="curriculum-content">
                                <h2>Course Curriculum</h2>
                                <div class="topics-list">
                                    @foreach($course['curriculum'] as $index => $topic)
                                        <div class="topic-item">
                                            <h4>Topic - {{ $index + 1 }}</h4>
                                            <ul>
                                                @foreach($topic as $item)
                                                    <li>{{ $item }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Evaluation Tab -->
                        <div class="tab-panel" id="evaluation">
                            <div class="evaluation-content">
                                <h2>Evaluation</h2>
                                <div class="review-types">
                                    <div class="review-type">
                                        <h3>Web Review</h3>
                                        <div class="web-reviews">
                                            @foreach($course['reviews']['web'] as $review)
                                                <div class="review-item">
                                                    <h4>{{ $review['name'] }}</h4>
                                                    <p>{{ $review['comment'] }}</p>
                                                    <div class="review-rating">
                                                        @for($i = 0; $i < $review['rating']; $i++)
                                                            <span class="star">★</span>
                                                        @endfor
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="review-type">
                                        <h3>Social Review</h3>
                                        <div class="social-reviews">
                                            @foreach($course['reviews']['social'] as $review)
                                                <div class="review-item">
                                                    <h4>{{ $review['name'] }}</h4>
                                                    <p>{{ $review['comment'] }}</p>
                                                    <div class="review-rating">
                                                        @for($i = 0; $i < $review['rating']; $i++)
                                                            <span class="star">★</span>
                                                        @endfor
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="review-type">
                                        <h3>Video Review</h3>
                                        <div class="video-reviews">
                                            @foreach($course['reviews']['video'] as $video)
                                                <div class="video-review-item">
                                                    <h4>{{ $video['title'] }}</h4>
                                                    <div class="video-placeholder">
                                                        <p>Video Review Content</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="course-sidebar">
                    <div class="course-info-card">
                        <div class="course-image">
                            <img src="{{ $course['image'] }}" alt="{{ $course['title'] }}">
                        </div>
                        
                        <div class="price-section">
                            <div class="price">
                                @if($course['old_price'])
                                    <span class="old-price">৳{{ $course['old_price'] }}</span>
                                @endif
                                <span class="new-price">৳{{ $course['new_price'] }}</span>
                            </div>
                        </div>

                        <div class="course-details">
                            <div class="detail-item">
                                <span class="label">Duration</span>
                                <span class="value">{{ $course['duration'] }}</span>
                            </div>
                            <div class="detail-item">
                                <span class="label">Class Type</span>
                                <span class="value">{{ $course['class_type'] }}</span>
                            </div>
                            <div class="detail-item">
                                <span class="label">Access</span>
                                <span class="value">{{ $course['access'] }}</span>
                            </div>
                        </div>

                        <button class="enroll-btn-sidebar">Enroll Now</button>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });

        // Tab functionality
        document.querySelectorAll('.tab-btn').forEach(button => {
            button.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                
                // Remove active class from all tabs and panels
                document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.tab-panel').forEach(panel => panel.classList.remove('active'));
                
                // Add active class to clicked tab and corresponding panel
                this.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });

        // Enroll button functionality
        document.querySelectorAll('.enroll-btn, .enroll-btn-sidebar').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Enrollment functionality will be implemented here');
            });
        });


    </script>
</body>
</html>
