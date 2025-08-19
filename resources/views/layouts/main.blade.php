<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeingScholar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @yield('head')
    @yield('styles')
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container nav-container">
            <div class="logo">BeingScholar</div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/courses">Courses</a></li>
                <li><a href="/teachers">Teachers</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/success">Success & Reviews</a></li>
                <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
            
            @auth
                @if(Auth::user()->isStudent())
                    <div class="user-profile-nav">
                        <div class="user-dropdown">
                            <button class="user-profile-btn" id="userProfileBtn">
                                <span class="user-name">{{ Auth::user()->name }}</span>
                                <div class="user-avatar">
                                    <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" alt="User Avatar" />
                                </div>
                                <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8">
                                    <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2" fill="none"/>
                                </svg>
                            </button>
                            <div class="user-dropdown-menu" id="userDropdownMenu">
                                <a href="{{ route('student.dashboard') }}" class="dropdown-item">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                                    </svg>
                                    Dashboard
                                </a>
                                <a href="{{ route('student.mycourses') }}" class="dropdown-item">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                    </svg>
                                    My Courses
                                </a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('student.logout') }}" method="POST" class="logout-form">
                                    @csrf
                                    <button type="submit" class="dropdown-item logout-btn">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.59L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="login-btn"><a href="/login">Login/Register</a></div>
                @endif
            @else
                <div class="login-btn"><a href="/login">Login/Register</a></div>
            @endauth
            <div class="menu-toggle" id="mobile-menu">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>
    
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h5>BeingScholar</h5>
                    <p>Develop Your Skills, Learn Something New, and Grow Your Skills From Anywhere in the World!</p>
                    <p><strong>Address:</strong> Daffodil International University, Daffodil Smart City, Dhaka-1216</p>
                    <p><strong>Phone:</strong> +880 1571044054</p>
                    <p><strong>Email:</strong> info@beingscholar.com</p>
                </div>
                <div class="footer-section">
                    <h6>Explore</h6>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/courses">Courses</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h6>Resources</h6>
                    <ul>
                        <li><a href="#">Job Guidance</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Refund Policy</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h6>Student Support</h6>
                    <p>Working to bring significant changes in online-based learning by doing extensive research for course curriculum preparation, student engagements, and looking forward to the flexible education!</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <small>&copy; {{ date('Y') }} BeingScholar. All rights reserved.</small>
            </div>
        </div>
    </footer>
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('mobile-menu');
            const navLinks = document.querySelector('.nav-links');
            
            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    navLinks.classList.toggle('show');
                    menuToggle.classList.toggle('active');
                });
            }

            // User profile dropdown
            const userProfileBtn = document.getElementById('userProfileBtn');
            const userDropdownMenu = document.getElementById('userDropdownMenu');
            
            if (userProfileBtn && userDropdownMenu) {
                userProfileBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    // Toggle dropdown
                    userDropdownMenu.classList.toggle('show');
                    userProfileBtn.classList.toggle('active');
                });

                // Close dropdown when clicking outside
                document.addEventListener('click', function(e) {
                    if (!userProfileBtn.contains(e.target) && !userDropdownMenu.contains(e.target)) {
                        userDropdownMenu.classList.remove('show');
                        userProfileBtn.classList.remove('active');
                    }
                });

                // Close dropdown when pressing Escape
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        userDropdownMenu.classList.remove('show');
                        userProfileBtn.classList.remove('active');
                    }
                });
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
