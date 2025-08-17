@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection
@section('content')
<!-- Navigation Bar and all page content previously inside <body> goes here, except for navbar/footer -->
    <!-- Navigation Bar -->
    <nav class="navbar">
      <div class="container nav-container">
        <div class="logo">BeingScholar</div>
        <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="/courses">Courses</a></li>
          <li><a href="#teachers">Teachers</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#success">Success & Reviews</a></li>
          <li><a href="#join">Join Us</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="login-btn"><a href="/login">Login/Register</a></div>
        <div class="menu-toggle" id="mobile-menu">
          <span></span><span></span><span></span>
        </div>
      </div>
    </nav>
    <!-- Hero Section -->
    <section class="hero" id="home">
      <div class="container hero-flex">
        <div class="hero-left">
          <h1>Be a learner to show your expertise</h1>
          <p class="hero-desc">At BeingScholar, we focus on training individuals to become job-ready professionals in industry.</p>
          <div class="stats-row">
            <div class="stat"><span class="stat-icon">🌍</span><span class="stat-num">50+</span><span class="stat-label">Countries Served</span></div>
            <div class="stat"><span class="stat-icon">⚙️</span><span class="stat-num">200+</span><span class="stat-label">IT Professionals</span></div>
            <div class="stat"><span class="stat-icon">✅</span><span class="stat-num">3200+</span><span class="stat-label">Projects Completed</span></div>
            <div class="stat"><span class="stat-icon">👨‍🎓</span><span class="stat-num">25000+</span><span class="stat-label">Students</span></div>
            <div class="stat"><span class="stat-icon">💼</span><span class="stat-num">20000+</span><span class="stat-label">Job Placement</span></div>
          </div>
          <div class="hero-cta">
            <a href="#" class="btn-primary">Watch video</a>
            <a href="#" class="btn-secondary">Download profile</a>
          </div>
        </div>
        <div class="hero-right">
          <div class="hero-img-group">
            <img src="https://plus.unsplash.com/premium_photo-1747905993673-8c28788c78e3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw5fHx8ZW58MHx8fHx8" alt="Group Photo" class="hero-img main-img">
            <img src="https://plus.unsplash.com/premium_photo-1750780506143-eee8a003d72a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw0OXx8fGVufDB8fHx8fA%3D%3D" alt="Illustration" class="hero-img sub-img">
          </div>
        </div>
      </div>
    </section>



  <!-- Upcoming Microcredentials Section -->
  <section class="upcoming-batches" id="upcoming-batches">
    <div class="container">
      <h2 class="upcoming-title">Upcoming Microcredentials</h2>
      <input type="text" class="batch-search" placeholder="Course batch search..">
      <div class="batches-grid">
        <div class="batch-card">
          <img src="{{ asset('images\Course_Banner\Java.png') }}" alt="Java Spring Boot">
          <div class="batch-info">
            <h3>Professional Certification in Java Spring Boot and Web App Development</h3>
            <div class="batch-meta">
              <span class="batch-number">Batch 03</span>
              <span class="batch-date">Start <b>2025-07-12</b></span>
            </div>
            <a href="#" class="enroll-btn"><span>&#128722;</span> Enroll Now</a>
          </div>
        </div>
        <div class="batch-card">
          <img src="{{ asset('images\Course_Banner\Data.png') }}" alt="Data Analytics">
          <div class="batch-info">
            <h3> Applied Data Analytics Masterclass</h3>
            <div class="batch-meta">
              <span class="batch-number">Batch 08</span>
              <span class="batch-date">Start <b>2025-07-13</b></span>
            </div>
            <a href="#" class="enroll-btn"><span>&#128722;</span> Enroll Now</a>
          </div>
        </div>
        <div class="batch-card">
          <img src="{{ asset('images/Course_Banner/Mern.png') }}" alt="Mern Stack">
          <div class="batch-info">
            <h3>Academia2Industry Mern Stack Launchpad</h3>
            <div class="batch-meta">
              <span class="batch-number">Batch 02</span>
              <span class="batch-date">Start <b>2025-08-01</b></span>
            </div>
            <a href="#" class="enroll-btn"><span>&#128722;</span> Enroll Now</a>
          </div>
        </div>
        <div class="batch-card">
          <img src="{{ asset('images\Course_Banner\ARVR.png') }}" alt="AR/VR and Gaming">
          <div class="batch-info">
            <h3>Audio Engineering for AR/VR and Gaming</h3>
            <div class="batch-meta">
              <span class="batch-number">Batch 1</span>
              <span class="batch-date">Start <b>2025-08-15</b></span>
            </div>
            <a href="#" class="enroll-btn"><span>&#128722;</span> Enroll Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  
  <!-- Popular Courses Section -->
    <section class="courses-section">
        <div class="container">
            <h2 class="courses-title">Popular Courses</h2>
            <h5 class="courses-subtitle">Explore our most popular courses designed to enhance your skills and career prospects.</h5>
            <div class="courses-grid">
                <!-- Course 1 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/a.png') }}" alt="AI Python Course">
                        <div class="course-badge">32% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>AI Based Software Development With Python</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 9</span>
                            <span class="tag seats-tag">100 seats remaining</span>
                            <span class="tag days-tag">56 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Master AI development with Python. Learn machine learning, deep learning, and build intelligent applications.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Master AI development with Python. Learn machine learning, deep learning, and build intelligent applications.</p>
                            <div class="course-price">
                                <span class="old-price">৳7500</span>
                                <span class="new-price">৳5100</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="1">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/b.png') }}" alt="Deep Learning Course">
                        <div class="course-badge">33% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Deep Learning with Computer Vision</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 7</span>
                            <span class="tag seats-tag">100 seats remaining</span>
                            <span class="tag days-tag">65 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Explore computer vision with deep learning. Build image recognition and object detection systems.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Explore computer vision with deep learning. Build image recognition and object detection systems.</p>
                            <div class="course-price">
                                <span class="old-price">৳6000</span>
                                <span class="new-price">৳4020</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="2">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/c.png') }}" alt="Data Structures Course">
                        <div class="course-badge">New</div>
                    </div>
                    <div class="course-info">
                        <h3>Data Structure and Algorithm with Leetcode Exercise</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 1</span>
                            <span class="tag type-tag">Pre-recorded</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Master data structures and algorithms with hands-on Leetcode practice for interview preparation.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Master data structures and algorithms with hands-on Leetcode practice for interview preparation.</p>
                            <div class="course-price">
                                <span class="new-price">৳1100</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="3">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 4 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/d.png') }}" alt="NLP Course">
                        <div class="course-badge">33% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Machine Learning for Natural Language Processing</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 8</span>
                            <span class="tag seats-tag">100 seats remaining</span>
                            <span class="tag days-tag">8 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Learn NLP techniques and build intelligent text processing and language understanding systems.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Learn NLP techniques and build intelligent text processing and language understanding systems.</p>
                            <div class="course-price">
                                <span class="old-price">৳6000</span>
                                <span class="new-price">৳4020</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="4">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 5 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/e.png') }}" alt="ML Theory Course">
                        <div class="course-badge">80% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Theory of Machine Learning (A-Z in Bangla)</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 1</span>
                            <span class="tag type-tag">Pre-recorded</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Complete machine learning theory explained in Bangla. Perfect for beginners and intermediate learners.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Complete machine learning theory explained in Bangla. Perfect for beginners and intermediate learners.</p>
                            <div class="course-price">
                                <span class="old-price">৳3000</span>
                                <span class="new-price">৳600</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="5">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 6 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/f.png') }}" alt="Reinforcement Learning Course">
                        <div class="course-badge">40% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Deep Reinforcement Learning For Research</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 1</span>
                            <span class="tag seats-tag">75 seats remaining</span>
                            <span class="tag days-tag">246 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Advanced reinforcement learning techniques for research and development in AI systems.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Advanced reinforcement learning techniques for research and development in AI systems.</p>
                            <div class="course-price">
                                <span class="old-price">৳3000</span>
                                <span class="new-price">৳1800</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="6">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 7 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/g.png') }}" alt="Pandas Course">
                        <div class="course-badge">50% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Pandas in Python (A-Z in Bangla)</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 1</span>
                            <span class="tag type-tag">Pre-recorded</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Complete Pandas library tutorial in Bangla. Master data manipulation and analysis with Python.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Complete Pandas library tutorial in Bangla. Master data manipulation and analysis with Python.</p>
                            <div class="course-price">
                                <span class="old-price">৳2000</span>
                                <span class="new-price">৳1000</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="7">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 8 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/h.png') }}" alt="Python OOP Course">
                        <div class="course-badge">New</div>
                    </div>
                    <div class="course-info">
                        <h3>Python Fundamentals with Object Oriented Programming</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 1</span>
                            <span class="tag type-tag">Pre-recorded</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Learn Python from basics to advanced OOP concepts. Perfect for beginners and intermediate developers.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Learn Python from basics to advanced OOP concepts. Perfect for beginners and intermediate developers.</p>
                            <div class="course-price">
                                <span class="new-price">৳1000</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="8">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
            <div class="view-all-courses-wrapper">
                <a href="/courses" class="btn-primary view-all-courses-btn">View All Courses</a>
            </div>
        </div>
    </section>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });

        // Course details navigation functionality
        document.querySelectorAll('.course-details-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Get course ID from button
                const courseId = this.getAttribute('data-course-id');
                
                // Navigate to course detail page
                if (courseId) {
                    window.location.href = `/course/${courseId}`;
                }
            });
        });
    </script>

    <style>
        /* Course Short Details - Always Visible */
        .course-short-details {
            margin-bottom: 1rem;
            padding: 0.8rem;
            background: #f8f9fb;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
        }
        
        .short-description {
            color: #64748b;
            font-size: 0.85rem;
            line-height: 1.4;
            margin-bottom: 0.6rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* New Details Button with Arrow */
        .course-details-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, #1976d2 0%, #1565c0 100%);
            color: #fff;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: center;
            width: 100%;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            box-shadow: 0 2px 8px rgba(25, 118, 210, 0.25);
            position: relative;
            overflow: hidden;
        }
        
        .arrow-icon {
            width: 16px;
            height: 16px;
            transition: transform 0.3s ease;
        }
        
        .course-details-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .course-details-btn:hover::before {
            left: 100%;
        }
        
        .course-details-btn:hover {
            background: linear-gradient(135deg, #1565c0 0%, #0d47a1 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(25, 118, 210, 0.3);
        }
        
        .course-details-btn:hover .arrow-icon {
            transform: translateX(3px);
        }
        
        .course-details-btn:active {
            transform: translateY(0);
        }
    </style>
@endsection
@section('scripts')
<!-- Place any page-specific scripts here -->
@endsection

   