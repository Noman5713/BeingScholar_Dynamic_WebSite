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
        <li><a href="#courses">Courses</a></li>
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
  <section class="popular-courses" id="popular-courses">
    <div class="container">
      <h2 class="section-title">Popular Courses</h2>
      <p class="section-subtitle">Explore all of our courses and pick your suitable ones to enroll and start learning with us! We ensure that you will never regret it!</p>
      <div class="courses-grid">
        <!-- Course 1 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/256401/pexels-photo-256401.jpeg?auto=compress&w=400" alt="AI Python Course">
            <div class="course-badge">32% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 9</span>
              <span class="seats-info">100 seats remaining</span>
              <span class="days-info">56 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>AI Based Software Development With Python</h3>
            <div class="course-price">
              <span class="old-price">৳7500</span>
              <span class="new-price">৳5100</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 2 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg?auto=compress&w=400" alt="Deep Learning Course">
            <div class="course-badge">33% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 7</span>
              <span class="seats-info">100 seats remaining</span>
              <span class="days-info">65 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Deep Learning with Computer Vision</h3>
            <div class="course-price">
              <span class="old-price">৳6000</span>
              <span class="new-price">৳4020</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 3 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181676/pexels-photo-1181676.jpeg?auto=compress&w=400" alt="Data Structures Course">
            <div class="course-badge">New</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">Pre-recorded</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Data Structure and Algorithm with Leetcode Exercise</h3>
            <div class="course-price">
              <span class="new-price">৳1100</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 4 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181677/pexels-photo-1181677.jpeg?auto=compress&w=400" alt="NLP Course">
            <div class="course-badge">33% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 8</span>
              <span class="seats-info">100 seats remaining</span>
              <span class="days-info">8 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Machine Learning for Natural Language Processing</h3>
            <div class="course-price">
              <span class="old-price">৳6000</span>
              <span class="new-price">৳4020</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 5 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181678/pexels-photo-1181678.jpeg?auto=compress&w=400" alt="ML Theory Course">
            <div class="course-badge">80% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">Pre-recorded</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Theory of Machine Learning (A-Z in Bangla)</h3>
            <div class="course-price">
              <span class="old-price">৳3000</span>
              <span class="new-price">৳600</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 6 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181679/pexels-photo-1181679.jpeg?auto=compress&w=400" alt="Reinforcement Learning Course">
            <div class="course-badge">40% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">75 seats remaining</span>
              <span class="days-info">246 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Deep Reinforcement Learning For Research</h3>
            <div class="course-price">
              <span class="old-price">৳3000</span>
              <span class="new-price">৳1800</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 7 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181680/pexels-photo-1181680.jpeg?auto=compress&w=400" alt="Pandas Course">
            <div class="course-badge">50% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">Pre-recorded</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Pandas in Python (A-Z in Bangla)</h3>
            <div class="course-price">
              <span class="old-price">৳2000</span>
              <span class="new-price">৳1000</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 8 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181681/pexels-photo-1181681.jpeg?auto=compress&w=400" alt="Python OOP Course">
            <div class="course-badge">New</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">Pre-recorded</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Python Fundamentals with Object Oriented Programming</h3>
            <div class="course-price">
              <span class="new-price">৳1000</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 9 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181682/pexels-photo-1181682.jpeg?auto=compress&w=400" alt="JavaScript Course">
            <div class="course-badge">New</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">Pre-recorded</span>
            </div>
          </div>
          <div class="course-info">
            <h3>JavaScript for New Developer</h3>
            <div class="course-price">
              <span class="new-price">৳1000</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 10 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181683/pexels-photo-1181683.jpeg?auto=compress&w=400" alt="React Course">
            <div class="course-badge">40% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">386 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>React JS (A-Z) For Backend Developer</h3>
            <div class="course-price">
              <span class="old-price">৳5000</span>
              <span class="new-price">৳3000</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 11 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181684/pexels-photo-1181684.jpeg?auto=compress&w=400" alt="System Design Course">
            <div class="course-badge">50% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">49 seats remaining</span>
              <span class="days-info">266 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>System Design Software Developer - 01</h3>
            <div class="course-price">
              <span class="old-price">৳7000</span>
              <span class="new-price">৳3500</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 12 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181685/pexels-photo-1181685.jpeg?auto=compress&w=400" alt="AI Product Course">
            <div class="course-badge">New</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">50 seats remaining</span>
              <span class="days-info">132 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>End to End AI Product Development for Fresher</h3>
            <div class="course-price">
              <span class="new-price">৳7500</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 13 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&w=400" alt="Data Analytics Course">
            <div class="course-badge">40% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 2</span>
              <span class="seats-info">50 seats remaining</span>
              <span class="days-info">5 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Data Analytics With Machine Learning</h3>
            <div class="course-price">
              <span class="old-price">৳7500</span>
              <span class="new-price">৳4500</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 14 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181687/pexels-photo-1181687.jpeg?auto=compress&w=400" alt="Scholarship Course">
            <div class="course-badge">40% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">100 seats remaining</span>
              <span class="days-info">110 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>How to Get Full Fund Scholarship for Higher Study</h3>
            <div class="course-price">
              <span class="old-price">৳900</span>
              <span class="new-price">৳540</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 15 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181688/pexels-photo-1181688.jpeg?auto=compress&w=400" alt="Chatbot Course">
            <div class="course-badge">40% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">100 seats remaining</span>
              <span class="days-info">110 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Build your AI agent Chatbot with Langchain Framework</h3>
            <div class="course-price">
              <span class="old-price">৳1200</span>
              <span class="new-price">৳720</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 16 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181689/pexels-photo-1181689.jpeg?auto=compress&w=400" alt="Kids Programming Course">
            <div class="course-badge">16% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">15 seats remaining</span>
              <span class="days-info">57 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Programming for kids (Level-1) - One to One mentorship</h3>
            <div class="course-price">
              <span class="old-price">৳42000</span>
              <span class="new-price">৳35280</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 17 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181690/pexels-photo-1181690.jpeg?auto=compress&w=400" alt="Problem Solving Course">
            <div class="course-badge">New</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">Pre-recorded</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Problem Solving for Interview Preparation</h3>
            <div class="course-price">
              <span class="new-price">৳1200</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 18 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181691/pexels-photo-1181691.jpeg?auto=compress&w=400" alt="Backend AI Course">
            <div class="course-badge">40% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">25 seats remaining</span>
              <span class="days-info">5 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Backend AI Development Bootcamp (Offline)</h3>
            <div class="course-price">
              <span class="old-price">৳25000</span>
              <span class="new-price">৳15000</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 19 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181692/pexels-photo-1181692.jpeg?auto=compress&w=400" alt="Mobile App Course">
            <div class="course-badge">New</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">50 seats remaining</span>
              <span class="days-info">30 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Mobile App Development with Flutter</h3>
            <div class="course-price">
              <span class="new-price">৳8000</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
        <!-- Course 20 -->
        <div class="course-card">
          <div class="course-image">
            <img src="https://images.pexels.com/photos/1181693/pexels-photo-1181693.jpeg?auto=compress&w=400" alt="Blockchain Course">
            <div class="course-badge">25% OFF</div>
            <div class="course-meta">
              <span class="batch-info">Batch 1</span>
              <span class="seats-info">40 seats remaining</span>
              <span class="days-info">45 days remaining</span>
            </div>
          </div>
          <div class="course-info">
            <h3>Blockchain and Smart Contract Development</h3>
            <div class="course-price">
              <span class="old-price">৳12000</span>
              <span class="new-price">৳9000</span>
            </div>
            <a href="#" class="course-btn">Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    <!--Homepage-->
    <section class="intro">
        <h1><b>DIU BeingScholar</b></h1>
        <p><b>Gateway to Education and Opportunities</b></p>
    </section>
</body>
</html>

   