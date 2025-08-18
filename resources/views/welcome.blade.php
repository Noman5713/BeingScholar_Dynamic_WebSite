@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection
@section('content')
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

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="testimonials-header">
                <h2 class="testimonials-title">
                    What Our <span class="gradient-text">Amazing Students</span> Say
                </h2>
                <p class="testimonials-subtitle">
                    Discover how BeingScholar has transformed careers and lives through quality education and mentorship
                </p>
            </div>
            
            <div class="testimonials-carousel-wrapper">
                <div class="testimonials-carousel" id="testimonialsCarousel">
                    <div class="testimonial-track">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "BeingScholar completely transformed my career! The practical approach and industry-focused curriculum helped me land my dream job as a Full Stack Developer. The instructors are amazing!"
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Ahmed Rahman</h4>
                                        <p class="author-role">Full Stack Developer at TechCorp</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "The Data Analytics course at BeingScholar opened so many doors for me. The hands-on projects and real-world case studies prepared me perfectly for the industry challenges."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b47c?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Fatima Khan</h4>
                                        <p class="author-role">Data Analyst at DataTech Solutions</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "Amazing learning experience! The Java Spring Boot course was comprehensive and well-structured. I got placed in a top company within 2 months of completion."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Mohammad Hassan</h4>
                                        <p class="author-role">Backend Developer at InnovateSoft</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "The AR/VR course was incredible! BeingScholar provided cutting-edge knowledge and practical skills that helped me become a VR developer at a gaming company."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Ayesha Sultana</h4>
                                        <p class="author-role">VR Developer at GameStudio Pro</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "BeingScholar's MERN Stack course was exactly what I needed. The mentorship and project-based learning approach made all the difference in my web development journey."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Rahul Ahmed</h4>
                                        <p class="author-role">Frontend Developer at WebTech Ltd</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 6 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "Outstanding experience! The instructors at BeingScholar are industry experts who provided real-world insights. I'm now working as a Software Engineer at my dream company."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Sadia Rahman</h4>
                                        <p class="author-role">Software Engineer at TechGiants Inc</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 7 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "The mentorship program at BeingScholar is exceptional. My mentor guided me throughout the course and helped me secure a position at a multinational company."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Karim Uddin</h4>
                                        <p class="author-role">DevOps Engineer at CloudTech</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 8 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "BeingScholar's UI/UX design course changed my career path completely. The practical projects and portfolio building helped me transition from marketing to design successfully."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Nusrat Jahan</h4>
                                        <p class="author-role">UI/UX Designer at DesignStudio</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 9 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "The cybersecurity course at BeingScholar was comprehensive and up-to-date with industry standards. I learned both theoretical concepts and practical skills that are essential in the field."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Tanvir Islam</h4>
                                        <p class="author-role">Cybersecurity Analyst at SecureNet</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 10 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "I was amazed by the quality of education and support system at BeingScholar. The mobile app development course gave me the skills to create my own startup!"
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1506277886164-e25aa3f4ef7f?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Sabbir Ahmed</h4>
                                        <p class="author-role">Mobile App Developer & Entrepreneur</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 11 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "The digital marketing course helped me understand the modern marketing landscape. Within 3 months of completing the course, I started my own digital agency."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b47c?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Rashida Khatun</h4>
                                        <p class="author-role">Digital Marketing Consultant</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 12 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "BeingScholar's blockchain development course was ahead of its time. The knowledge I gained helped me become a blockchain consultant and work with international clients."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Mahbub Rahman</h4>
                                        <p class="author-role">Blockchain Developer at CryptoTech</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 13 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "The machine learning course at BeingScholar provided both theoretical depth and practical implementation. I'm now working as an AI researcher at a leading tech company."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Lamia Hassan</h4>
                                        <p class="author-role">AI Researcher at InnovateLab</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 14 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "BeingScholar's cloud computing course prepared me for the future of technology. The hands-on AWS and Azure training was invaluable for my current role."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Rafiq Uddin</h4>
                                        <p class="author-role">Cloud Solutions Architect</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 15 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "The game development course was a dream come true! BeingScholar provided all the tools and knowledge I needed to create my first indie game which is now on Steam."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Taslima Akter</h4>
                                        <p class="author-role">Indie Game Developer</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 16 -->
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    "BeingScholar's quality assurance course gave me a solid foundation in software testing. The practical exposure to different testing tools was excellent preparation for my career."
                                </p>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face" alt="Student" class="author-image">
                                    <div class="author-info">
                                        <h4 class="author-name">Shafiq Ahmed</h4>
                                        <p class="author-role">QA Engineer at TestPro Solutions</p>
                                        <div class="rating">
                                            <span class="stars">★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Mobile menu toggle
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.querySelector('.nav-links');
        
        mobileMenu.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                navLinks.classList.remove('active');
                mobileMenu.classList.remove('active');
            });
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
<script>
// Counter Animation for Testimonials Stats
function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-count'));
    const increment = target / 100; // Animation duration in steps
    let current = 0;
    
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target.toLocaleString();
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current).toLocaleString();
        }
    }, 20);
}

// Intersection Observer for triggering counter animation
function initCounterAnimation() {
    const statNumbers = document.querySelectorAll('.stat-number[data-count]');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                entry.target.classList.add('animated');
                animateCounter(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });
    
    statNumbers.forEach(stat => observer.observe(stat));
}

// Duplicate testimonials for seamless infinite scroll
function duplicateTestimonials() {
    const track = document.querySelector('.testimonial-track');
    if (track) {
        const testimonials = Array.from(track.children);
        
        // Clone all testimonials and append them for seamless loop
        testimonials.forEach(testimonial => {
            const clone = testimonial.cloneNode(true);
            track.appendChild(clone);
        });
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initCounterAnimation();
    duplicateTestimonials();
    
    // Optional: Pause animation on hover for better UX
    const testimonialTrack = document.querySelector('.testimonial-track');
    if (testimonialTrack) {
        testimonialTrack.addEventListener('mouseenter', () => {
            testimonialTrack.style.animationPlayState = 'paused';
        });
        
        testimonialTrack.addEventListener('mouseleave', () => {
            testimonialTrack.style.animationPlayState = 'running';
        });
    }
});
</script>
@endsection

   