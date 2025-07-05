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


   <!--Homepage-->
    <section class="intro">
        <h1><b>DIU BeingScholar</b></h1>
        <p><b>Gateway to Education and Opportunities</b></p>
    </section>
</body>
</html>

   