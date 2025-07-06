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
                        <img src="https://images.pexels.com/photos/256401/pexels-photo-256401.jpeg?auto=compress&w=400" alt="AI Python Course">
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
                        <img src="https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg?auto=compress&w=400" alt="Deep Learning Course">
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
                        <img src="https://images.pexels.com/photos/1181676/pexels-photo-1181676.jpeg?auto=compress&w=400" alt="Data Structures Course">
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
                        <img src="https://images.pexels.com/photos/1181677/pexels-photo-1181677.jpeg?auto=compress&w=400" alt="NLP Course">
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
                        <img src="https://images.pexels.com/photos/1181678/pexels-photo-1181678.jpeg?auto=compress&w=400" alt="ML Theory Course">
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
                        <img src="https://images.pexels.com/photos/1181679/pexels-photo-1181679.jpeg?auto=compress&w=400" alt="Reinforcement Learning Course">
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
                        <img src="https://images.pexels.com/photos/1181680/pexels-photo-1181680.jpeg?auto=compress&w=400" alt="Pandas Course">
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
                        <img src="https://images.pexels.com/photos/1181681/pexels-photo-1181681.jpeg?auto=compress&w=400" alt="Python OOP Course">
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

                <!-- Course 9 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="https://images.pexels.com/photos/1181682/pexels-photo-1181682.jpeg?auto=compress&w=400" alt="JavaScript Course">
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
                    </div>
                </div>

                <!-- Course 10 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="https://images.pexels.com/photos/1181684/pexels-photo-1181684.jpeg?auto=compress&w=400" alt="System Design Course">
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
                        <button class="course-btn toggle-details" data-course="11">View Details</button>
                    </div>
                </div>

                <!-- Course 11 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="https://images.pexels.com/photos/1181685/pexels-photo-1181685.jpeg?auto=compress&w=400" alt="AI Product Course">
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
                        <button class="course-btn toggle-details" data-course="12">View Details</button>
                    </div>
                </div>

                <!-- Course 12 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&w=400" alt="Data Analytics Course">
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
                        <button class="course-btn toggle-details" data-course="13">View Details</button>
                    </div>
                </div>

                <!-- Course 13 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="https://images.pexels.com/photos/1181687/pexels-photo-1181687.jpeg?auto=compress&w=400" alt="Scholarship Course">
                        <div class="course-badge">40% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>How to Get Full Fund Scholarship for Higher Study</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 1</span>
                            <span class="tag seats-tag">100 seats remaining</span>
                            <span class="tag days-tag">110 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Complete guide to securing full-funded scholarships for international higher education opportunities.</p>
                        </div>
                        <div class="course-price">
                            <span class="old-price">৳900</span>
                            <span class="new-price">৳540</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="14">View Details</button>
                    </div>
                </div>

                <!-- Course 14 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="https://images.pexels.com/photos/1181688/pexels-photo-1181688.jpeg?auto=compress&w=400" alt="Chatbot Course">
                        <div class="course-badge">40% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Build your AI agent Chatbot with Langchain Framework</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 1</span>
                            <span class="tag seats-tag">100 seats remaining</span>
                            <span class="tag days-tag">110 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Create intelligent chatbots using Langchain framework and modern AI technologies.</p>
                        </div>
                        <div class="course-price">
                            <span class="old-price">৳1200</span>
                            <span class="new-price">৳720</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="15">View Details</button>
                    </div>
                </div>

                <!-- Course 15 -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="https://images.pexels.com/photos/1181689/pexels-photo-1181689.jpeg?auto=compress&w=400" alt="Kids Programming Course">
                        <div class="course-badge">16% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Programming for kids (Level-1) - One to One mentorship</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 1</span>
                            <span class="tag seats-tag">15 seats remaining</span>
                            <span class="tag days-tag">57 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Personalized programming education for children with one-on-one mentorship and guidance.</p>
                        </div>
                        <div class="course-price">
                            <span class="old-price">৳42000</span>
                            <span class="new-price">৳35280</span>
                        </div>
                        <button class="course-btn toggle-details" data-course="16">View Details</button>
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
    </script>
</body>
</html> 