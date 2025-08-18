@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/courses.css') }}">
@endsection
@section('content')
    <!-- Courses Header Section -->
    <section class="courses-header">
        <div class="container">
            <h1 class="courses-title">All Courses</h1>
            <p class="courses-subtitle">Explore all of our courses and pick your suitable ones to enroll and start learning
                with us! We ensure that you will never regret it!</p>
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
                <!-- Course 1: C Programming -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/a.png') }}" alt="C Programming">
                        <div class="course-badge">New</div>
                    </div>
                    <div class="course-info">
                        <h3>C Programming</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 01</span>
                            <span class="tag seats-tag">25 seats remaining</span>
                            <span class="tag days-tag">45 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Master the fundamentals of C programming language. Learn syntax,
                                data structures, pointers, and memory management through hands-on projects.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Master the fundamentals of C programming language. Learn syntax,
                                data structures, pointers...</p>
                            <div class="course-price">
                                <span class="old-price">৳1,500</span>
                                <span class="new-price">৳800</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="1">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 2: Python Programming -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/b.png') }}" alt="Python Programming">
                        <div class="course-badge">47% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Python Programming</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 02</span>
                            <span class="tag seats-tag">30 seats remaining</span>
                            <span class="tag days-tag">60 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Learn Python from basics to advanced concepts. Cover OOP, data
                                structures, web frameworks, and real-world applications.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Learn Python from basics to advanced concepts. Cover OOP, data
                                structures, web frameworks...</p>
                            <div class="course-price">
                                <span class="old-price">৳2,500</span>
                                <span class="new-price">৳1,500</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="2">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 3: Java Programming -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/c.png') }}" alt="Java Programming">
                        <div class="course-badge">40% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Java Programming</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 03</span>
                            <span class="tag seats-tag">20 seats remaining</span>
                            <span class="tag days-tag">50 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Comprehensive Java course covering core concepts, OOP principles,
                                collections, multithreading, and enterprise development.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Comprehensive Java course covering core concepts, OOP principles,
                                collections, multithreading...</p>
                            <div class="course-price">
                                <span class="old-price">৳3,000</span>
                                <span class="new-price">৳1,800</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="3">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 4: Web Development -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/d.png') }}" alt="Web Development">
                        <div class="course-badge">33% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Web Development</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 04</span>
                            <span class="tag seats-tag">15 seats remaining</span>
                            <span class="tag days-tag">75 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Full-stack web development course. Learn HTML, CSS, JavaScript,
                                React, Node.js, and database integration for modern web applications.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Full-stack web development course. Learn HTML, CSS, JavaScript,
                                React, Node.js...</p>
                            <div class="course-price">
                                <span class="old-price">৳4,500</span>
                                <span class="new-price">৳3,000</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="4">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 5: Data Structures & Algorithms -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/e.png') }}" alt="Data Structures & Algorithms">
                        <div class="course-badge">25% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Data Structures & Algorithms</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 05</span>
                            <span class="tag seats-tag">22 seats remaining</span>
                            <span class="tag days-tag">55 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Master essential data structures and algorithms. Learn arrays,
                                linked lists, trees, graphs, sorting, and searching techniques.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Master essential data structures and algorithms. Learn arrays,
                                linked lists, trees, graphs...</p>
                            <div class="course-price">
                                <span class="old-price">৳2,800</span>
                                <span class="new-price">৳2,100</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="5">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 6: Database Management -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/f.png') }}" alt="Database Management">
                        <div class="course-badge">New</div>
                    </div>
                    <div class="course-info">
                        <h3>Database Management</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 06</span>
                            <span class="tag seats-tag">35 seats remaining</span>
                            <span class="tag days-tag">40 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Learn database design, SQL queries, normalization, and database
                                administration. Cover MySQL, PostgreSQL, and NoSQL databases.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Learn database design, SQL queries, normalization, and database
                                administration...</p>
                            <div class="course-price">
                                <span class="new-price">৳900</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="6">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 7: Mobile App Development -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/g.png') }}" alt="Mobile App Development">
                        <div class="course-badge">35% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Mobile App Development</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 07</span>
                            <span class="tag seats-tag">18 seats remaining</span>
                            <span class="tag days-tag">65 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Create mobile applications for Android and iOS. Learn Flutter,
                                React Native, and native development with hands-on projects.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Create mobile applications for Android and iOS. Learn Flutter,
                                React Native...</p>
                            <div class="course-price">
                                <span class="old-price">৳3,800</span>
                                <span class="new-price">৳2,500</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="7">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 8: Machine Learning -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/h.png') }}" alt="Machine Learning">
                        <div class="course-badge">20% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Machine Learning</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 08</span>
                            <span class="tag seats-tag">12 seats remaining</span>
                            <span class="tag days-tag">70 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Introduction to machine learning algorithms, data preprocessing,
                                model training, and evaluation using Python and popular ML libraries.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Introduction to machine learning algorithms, data preprocessing,
                                model training...</p>
                            <div class="course-price">
                                <span class="old-price">৳5,000</span>
                                <span class="new-price">৳4,000</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="8">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 9: Cybersecurity -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/i.png') }}" alt="Cybersecurity">
                        <div class="course-badge">30% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Cybersecurity</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 09</span>
                            <span class="tag seats-tag">28 seats remaining</span>
                            <span class="tag days-tag">50 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Learn cybersecurity fundamentals, network security, ethical
                                hacking, and security protocols to protect systems and data.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Learn cybersecurity fundamentals, network security, ethical
                                hacking...</p>
                            <div class="course-price">
                                <span class="old-price">৳3,500</span>
                                <span class="new-price">৳2,450</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="9">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 10: Cloud Computing -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/j.png') }}" alt="Cloud Computing">
                        <div class="course-badge">15% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>Cloud Computing</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 10</span>
                            <span class="tag seats-tag">20 seats remaining</span>
                            <span class="tag days-tag">55 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Master cloud platforms like AWS, Azure, and Google Cloud. Learn
                                deployment, scaling, and cloud architecture best practices.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Master cloud platforms like AWS, Azure, and Google Cloud. Learn
                                deployment, scaling...</p>
                            <div class="course-price">
                                <span class="old-price">৳4,200</span>
                                <span class="new-price">৳3,570</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="10">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 11: DevOps -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/k.png') }}" alt="DevOps">
                        <div class="course-badge">New</div>
                    </div>
                    <div class="course-info">
                        <h3>DevOps</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 11</span>
                            <span class="tag seats-tag">25 seats remaining</span>
                            <span class="tag days-tag">42 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Learn DevOps practices, CI/CD pipelines, containerization with
                                Docker, Kubernetes, and infrastructure automation.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Learn DevOps practices, CI/CD pipelines, containerization with
                                Docker, Kubernetes...</p>
                            <div class="course-price">
                                <span class="new-price">৳950</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="11">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Course 12: UI/UX Design -->
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/Course_Card_Banner/l.png') }}" alt="UI/UX Design">
                        <div class="course-badge">45% OFF</div>
                    </div>
                    <div class="course-info">
                        <h3>UI/UX Design</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">Batch 12</span>
                            <span class="tag seats-tag">30 seats remaining</span>
                            <span class="tag days-tag">48 days remaining</span>
                        </div>
                        <div class="course-details">
                            <p class="course-description">Master user interface and user experience design. Learn design
                                principles, prototyping, user research, and design tools like Figma.</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">Master user interface and user experience design. Learn design
                                principles, prototyping...</p>
                            <div class="course-price">
                                <span class="old-price">৳2,200</span>
                                <span class="new-price">৳1,210</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="12">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        // Mobile menu toggle
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.querySelector('.nav-links');

        mobileMenu.addEventListener('click', function () {
            navLinks.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function () {
                navLinks.classList.remove('active');
                mobileMenu.classList.remove('active');
            });
        });

        // Course search functionality
        document.querySelector('.search-btn').addEventListener('click', function () {
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
        document.querySelector('.course-search-input').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                document.querySelector('.search-btn').click();
            }
        });

        // Course details navigation functionality
        document.querySelectorAll('.course-details-btn').forEach(button => {
            button.addEventListener('click', function (e) {
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