<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIU BeingScholar</title>

    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">


</head>

<body>
    
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
      <div class="login-btn"><a href="#login">Login/Register</a></div>
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
                        <div class="course-price">
                            <span class="old-price">৳7500</span>
                            <span class="new-price">৳5100</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="1">View Details</button>
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
                        <div class="course-price">
                            <span class="old-price">৳6000</span>
                            <span class="new-price">৳4020</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="2">View Details</button>
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
                        <div class="course-price">
                            <span class="new-price">৳1100</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="3">View Details</button>
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
                        <div class="course-price">
                            <span class="old-price">৳6000</span>
                            <span class="new-price">৳4020</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="4">View Details</button>
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
                        <div class="course-price">
                            <span class="old-price">৳3000</span>
                            <span class="new-price">৳600</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="5">View Details</button>
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
                        <div class="course-price">
                            <span class="old-price">৳3000</span>
                            <span class="new-price">৳1800</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="6">View Details</button>
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
                        <div class="course-price">
                            <span class="old-price">৳2000</span>
                            <span class="new-price">৳1000</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="7">View Details</button>
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
                        <div class="course-price">
                            <span class="new-price">৳1000</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="8">View Details</button>
                    </div>
                </div>

            </div>
            <div class="view-all-courses-wrapper">
                <a href="#" class="btn-primary view-all-courses-btn">View All Courses</a>
            </div>
        </div>
    </section>

</body>
</html>

   