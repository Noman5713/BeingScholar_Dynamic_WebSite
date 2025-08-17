@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/course-detail.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <!-- All page content previously inside <body> goes here, except for navbar/footer -->
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
            <div class="login-btn"><a href="/login">Login/Register</a></div>
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
                        <button class="enroll-btn" onclick="window.location.href='/enroll/{{ $course['id'] }}'">Enroll Now</button>
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
                                
                                <!-- Transaction Verification Form (if not verified) -->
                                @php
                                    // Always start with locked access (no session persistence)
                                    $hasAccess = false;
                                    $firstTopic = $course['curriculum'][0] ?? [];
                                @endphp
                                
                                @if(!$hasAccess)
                                    <div class="payment-verification-section">
                                        <div class="access-info">
                                            <div class="info-header">
                                                <h3>🔒 Premium Content</h3>
                                                <p>You have access to the first topic for free. To unlock the complete curriculum, please verify your payment.</p>
                                            </div>
                                            
                                            <div class="verification-form">
                                                <h4>Verify Your Payment</h4>
                                                <form id="verifyTransactionForm">
                                                    @csrf
                                                    <input type="hidden" name="course_name" value="{{ $course['title'] }}">
                                                    <div class="form-group">
                                                        <label for="trxn_id">Transaction ID:</label>
                                                        <input type="text" id="trxn_id" name="trxn_id" required placeholder="Enter your transaction ID">
                                                    </div>
                                                    <button type="submit" class="verify-btn">Verify Transaction</button>
                                                </form>
                                                <div id="verification-message"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="topics-list">
                                    @foreach($course['curriculum'] as $index => $topic)
                                        <div class="topic-item {{ !$hasAccess && $index > 0 ? 'topic-locked' : '' }}">
                                            <h4>
                                                Topic - {{ $index + 1 }}
                                                @if(!$hasAccess && $index > 0)
                                                    <span class="lock-icon">🔒</span>
                                                @endif
                                            </h4>
                                            
                                            @if($hasAccess || $index === 0)
                                                <!-- Show content for verified users or first topic -->
                                                <ul>
                                                    @foreach($topic as $item)
                                                        <li>{{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <!-- Show blurred content for locked topics -->
                                                <div class="blurred-content">
                                                    <ul class="blurred-list">
                                                        @foreach($topic as $item)
                                                            <li>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="blur-overlay">
                                                        <div class="unlock-message">
                                                            <span class="lock-icon">🔒</span>
                                                            <p>Unlock this content by verifying your payment above</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
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

                        <button class="enroll-btn-sidebar" onclick="window.location.href='/enroll/{{ $course['id'] }}'">Enroll Now</button>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
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

        // Enroll button functionality (navigation handled by onclick attribute)

        // Transaction verification functionality
        document.getElementById('verifyTransactionForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const messageDiv = document.getElementById('verification-message');
            
            // Show loading state
            messageDiv.innerHTML = '<div style="color: #6c757d;">Verifying transaction...</div>';
            
            fetch('/verify-transaction', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.access_granted) {
                    messageDiv.innerHTML = `<div class="success-message">${data.message}</div>`;
                    // Temporarily unlock curriculum (only for current session)
                    setTimeout(() => {
                        unlockCurriculum();
                    }, 1500);
                } else {
                    messageDiv.innerHTML = `<div class="error-message">${data.message}</div>`;
                }
            })
            .catch(error => {
                messageDiv.innerHTML = '<div class="error-message">An error occurred. Please try again.</div>';
            });
        });

        // Function to temporarily unlock curriculum (client-side only)
        function unlockCurriculum() {
            // Hide the verification form
            const verificationSection = document.querySelector('.payment-verification-section');
            if (verificationSection) {
                verificationSection.style.display = 'none';
            }
            
            // Show all locked curriculum items
            const lockedItems = document.querySelectorAll('.topic-locked');
            lockedItems.forEach(item => {
                item.classList.remove('topic-locked');
                const blurredContent = item.querySelector('.blurred-content');
                if (blurredContent) {
                    blurredContent.style.filter = 'none';
                    blurredContent.style.pointerEvents = 'auto';
                }
                const blurOverlay = item.querySelector('.blur-overlay');
                if (blurOverlay) {
                    blurOverlay.style.display = 'none';
                }
                const lockIcon = item.querySelector('.lock-icon');
                if (lockIcon) {
                    lockIcon.style.display = 'none';
                }
            });
            
            // Show success message
            const curriculumContent = document.querySelector('.curriculum-content');
            if (curriculumContent) {
                const successBanner = document.createElement('div');
                successBanner.className = 'temporary-access-banner';
                successBanner.innerHTML = `
                    <div style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; text-align: center;">
                        <strong>🎉 Access Granted!</strong><br>
                        <small>Note: This access is temporary. You'll need to verify again after refreshing the page.</small>
                    </div>
                `;
                curriculumContent.insertBefore(successBanner, curriculumContent.firstChild);
            }
        }

    </script>

    <style>
        /* Payment Verification Styles */
        .payment-verification-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border: 1px solid #dee2e6;
        }

        .info-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .info-header h3 {
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .info-header p {
            color: #6c757d;
            margin: 0;
        }

        .verification-form {
            max-width: 400px;
            margin: 0 auto;
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .verification-form h4 {
            margin-top: 0;
            color: #495057;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #495057;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.15s ease-in-out;
            box-sizing: border-box;
        }

        .form-group input:focus {
            outline: none;
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .verify-btn {
            width: 100%;
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            border: none;
            padding: 0.75rem;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .verify-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
        }

        /* Locked Content Styles */
        .topic-locked {
            position: relative;
        }

        .topic-locked h4 {
            color: #6c757d;
        }

        .lock-icon {
            margin-left: 0.5rem;
            color: #dc3545;
        }

        .blurred-content {
            position: relative;
            filter: blur(3px);
            pointer-events: none;
            user-select: none;
        }

        .blur-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
        }

        .unlock-message {
            text-align: center;
            color: #495057;
        }

        .unlock-message .lock-icon {
            font-size: 1.5rem;
            display: block;
            margin-bottom: 0.5rem;
        }

        .unlock-message p {
            margin: 0;
            font-weight: 600;
        }

        /* Verification Message Styles */
        #verification-message {
            margin-top: 1rem;
            padding: 0.75rem;
            border-radius: 4px;
            text-align: center;
            font-weight: 600;
        }

        .success-message {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        .error-message {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }
    </style>
@endsection
