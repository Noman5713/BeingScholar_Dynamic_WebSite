<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - DIU BeingScholar</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/courses.css') }}">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container nav-container">
            <div class="logo">BeingScholar</div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/#about">About</a></li>
                <li><a href="/courses" class="active">Courses</a></li>
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

    <!-- Courses Header Section -->
    <section class="courses-header">
        <div class="container">
            <h1 class="courses-title">All Courses</h1>
            <p class="courses-subtitle">Explore all of our courses and pick your suitable ones to enroll and start learning with us! We ensure that you will never regret it!</p>
            <div class="courses-search">
                <input type="text" class="course-search-input" placeholder="Search courses...">
                <button class="search-btn">Search</button>
            </div>
        </div>
    </section>

    <!-- Courses Grid Section -->
    <section class="courses-section">
        <div class="container">
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
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
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
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
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
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
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
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
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
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
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
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
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
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
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
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Course 9 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/i.png') }}" alt="JavaScript Course">
                        <div class="course-badge">New</div>
                    </div>
                    <div class="course-info">
                        <h3>JavaScript for New Developer</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 1</span>
                            <span class="tag type-tag">Pre-recorded</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Complete JavaScript course for beginners. Learn modern JavaScript and web development fundamentals.</p>
                        </div>
                        <div class="course-price">
                            <span class="new-price">৳1000</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="9">View Details</button>
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Course 10 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/j.png') }}" alt="System Design Course">
                        <div class="course-badge">50% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>System Design Software Developer - 01</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 1</span>
                            <span class="tag seats-tag">49 seats remaining</span>
                            <span class="tag days-tag">266 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Master system design principles and architecture patterns for scalable software development.</p>
                        </div>
                        <div class="course-price">
                            <span class="old-price">৳7000</span>
                            <span class="new-price">৳3500</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="10">View Details</button>
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Course 11 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/k.png') }}" alt="AI Product Course">
                        <div class="course-badge">New</div>
                    </div>
                    <div class="course-info">
                        <h3>End to End AI Product Development for Fresher</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 1</span>
                            <span class="tag seats-tag">50 seats remaining</span>
                            <span class="tag days-tag">132 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Complete AI product development journey from concept to deployment for fresh graduates.</p>
                        </div>
                        <div class="course-price">
                            <span class="new-price">৳7500</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="11">View Details</button>
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Course 12 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/l.png') }}" alt="Data Analytics Course">
                        <div class="course-badge">40% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Data Analytics With Machine Learning</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 2</span>
                            <span class="tag seats-tag">50 seats remaining</span>
                            <span class="tag days-tag">5 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Combine data analytics with machine learning to extract insights and build predictive models.</p>
                        </div>
                        <div class="course-price">
                            <span class="old-price">৳7500</span>
                            <span class="new-price">৳4500</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="12">View Details</button>
                        <button class="enroll-now-btn">Enroll Now</button>
                        <div class="enroll-form-container" style="display: none;">
                            <form class="enroll-form">
                                <div class="enroll-form-group">
                                    <input type="text" class="enroll-input" placeholder="Full Name" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="email" class="enroll-input" placeholder="Email" required />
                                </div>
                                <div class="enroll-form-group">
                                    <input type="tel" class="enroll-input" placeholder="Phone Number" required />
                                </div>
                                <button type="button" class="proceed-payment-btn">Proceed to Payment</button>
                            </form>
                        </div>
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

        // Course search functionality
        document.querySelector('.search-btn').addEventListener('click', function() {
            const searchTerm = document.querySelector('.course-search-input').value.toLowerCase();
            const courseCards = document.querySelectorAll('.course-card');
            
            courseCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const description = card.querySelector('.course-description').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Enter key search
        document.querySelector('.course-search-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                document.querySelector('.search-btn').click();
            }
        });

        // Toggle course details functionality
        document.querySelectorAll('.toggle-details').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Get the specific card that was clicked
                const courseCard = this.closest('.course-card');
                const courseTags = courseCard.querySelector('.course-tags');
                const courseDetails = courseCard.querySelector('.course-details');
                const isExpanded = courseCard.classList.contains('expanded');
                
                // First, collapse all other cards
                document.querySelectorAll('.course-card').forEach(card => {
                    if (card !== courseCard) {
                        card.classList.remove('expanded');
                        const otherTags = card.querySelector('.course-tags');
                        const otherDetails = card.querySelector('.course-details');
                        const otherButton = card.querySelector('.toggle-details');
                        
                        if (otherTags) otherTags.style.maxHeight = '0';
                        if (otherDetails) otherDetails.style.maxHeight = '0';
                        if (otherButton) otherButton.textContent = 'View Details';
                    }
                });
                
                if (isExpanded) {
                    // Collapse this card
                    courseCard.classList.remove('expanded');
                    courseTags.style.maxHeight = '0';
                    courseDetails.style.maxHeight = '0';
                    this.textContent = 'View Details';
                } else {
                    // Expand this card
                    courseCard.classList.add('expanded');
                    courseTags.style.maxHeight = courseTags.scrollHeight + 'px';
                    courseDetails.style.maxHeight = courseDetails.scrollHeight + 'px';
                    this.textContent = 'Hide Details';
                }
            });
        });

        document.querySelectorAll('.enroll-now-btn').forEach((btn, idx) => {
            btn.addEventListener('click', function() {
                // Hide all other forms
                document.querySelectorAll('.enroll-form-container').forEach(f => {
                    f.style.display = 'none';
                });
                // Show this form
                const formContainer = btn.parentElement.querySelector('.enroll-form-container');
                formContainer.style.display = 'block';
                // Optionally, scroll into view
                formContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
            });
        });
    </script>
    <style>
        .enroll-form-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(25, 118, 210, 0.10);
            margin-top: 18px;
            padding: 1.5em 1.2em 1.2em 1.2em;
            max-width: 100%;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: fadeInEnroll 0.5s;
        }
        @keyframes fadeInEnroll {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .enroll-form-group {
            margin-bottom: 1em;
        }
        .enroll-input {
            width: 100%;
            padding: 0.8em;
            border: 1.5px solid #e3eaf7;
            border-radius: 7px;
            font-size: 1em;
            background: #f8f9fb;
            transition: border 0.2s;
        }
        .enroll-input:focus {
            border-color: #1976d2;
            outline: none;
            background: #fff;
        }
        .proceed-payment-btn {
            width: 100%;
            padding: 0.8em 0;
            border: none;
            border-radius: 7px;
            font-size: 1.05em;
            font-weight: 600;
            color: #fff;
            background: linear-gradient(90deg, #2563eb 0%, #38bdf8 100%);
            box-shadow: 0 2px 8px 0 rgba(37,99,235,0.10);
            cursor: pointer;
            letter-spacing: 0.02em;
            transition: background 0.3s, transform 0.18s, box-shadow 0.18s;
        }
        .proceed-payment-btn:hover {
            background: linear-gradient(90deg, #1e40af 0%, #0ea5e9 100%);
            transform: translateY(-2px) scale(1.03);
        }
    </style>
</body>
</html> 