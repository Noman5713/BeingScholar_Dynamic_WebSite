@extends('layouts.dashboard')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/studentdashboard.css') }}">
@endsection
@section('content')
    <div class="student-dashboard-page">
        <div id="mobileOverlay"></div>
        <div class="container">
            <aside class="sidebar" id="sidebar">
                <h2>Student Dashboard</h2>
                <ul class="menu">
                    <li><a class="active" href="#overview">Overview</a></li>
                    <li><a href="{{ route('student.mycourses') }}">My Courses</a></li>
                </ul>
            </aside>
            <main class="main-content">
                <div class="header">
                    <div class="header-left">
                        <div class="hamburger-menu" id="hamburgerMenu">
                            <img class="hamburger" src="{{ asset('images/icons8-hamburger-menu-50.png') }}" alt="">
                        </div>
                        <h1>Dashboard</h1>
                    </div>
                    <div class="user-info"><span class="dashboard-greeting">Hello,
                            {{ Auth::user()->name ?? 'Student' }}!</span>
                        <div class="profile-dropdown" id="profileDropdown"><button class="profile-btn" id="profileBtn">
                                <div class="profile-avatar"><img
                                        src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp"
                                        alt="User Avatar" /></div>
                            </button>
                            <div class="dropdown-content" id="dropdownContent">
                                <form action="{{ route('student.logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" style="background: none; border: none; color: inherit; text-decoration: none; cursor: pointer; width: 100%; text-align: left; padding: 8px 12px;">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-toolbar"></div>
                <section id="overview" class="overview-section">
                    <div class="card">
                        <h2>Enrolled Courses</h2>
                        <p class="number">3</p>
                    </div>
                    <div class="card assignment">
                        <h2>Assignments Due</h2>
                        <p class="number">2</p>
                    </div>
                </section>
                <section id="courses" class="courses-section">
                    <h2>My Courses</h2>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Instructor</th>
                                    <th>Status</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Professional Certificate in Java Spring boot and Web App Developnent</td>
                                    <td>
                                        <p>Dr. Sheak Rashed Haider Noori</p>
                                        <p>Md Rezanur Rahman</p>
                                    </td>
                                    <td><span class="badge success">Active</span></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar w80"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Applied Data Analytics Masterclass</td>
                                    <td>
                                        <p>Md. Zahid Hasan</p>
                                        <p>Sadat Hasan</p>
                                    </td>
                                    <td><span class="badge success">Active</span></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar w65"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Academia2Industry Mern Stack Launched</td>
                                    <td>
                                        <p>Md. Sadhan Sarkar</p>
                                        <p>MD. Khalid Hossen</p>
                                        <p>Md. Hannan Talukder</p>
                                    </td>
                                    <td><span class="badge warning">Pending</span></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar w40"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <script>
        const profileBtn = document.getElementById('profileBtn');
        const profileDropdown = document.getElementById('profileDropdown');

        profileBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            profileDropdown.classList.toggle('show');
        });

        document.addEventListener('click', function (e) {
            if (!profileDropdown.contains(e.target)) {
                profileDropdown.classList.remove('show');
            }
        });

        const hamburgerMenu = document.getElementById('hamburgerMenu');
        const sidebar = document.getElementById('sidebar');
        const mobileOverlay = document.getElementById('mobileOverlay');

        function openSidebar() {
            sidebar.classList.add('show');
            mobileOverlay.classList.add('show');
            // Remove the manual display style manipulation
        }

        function closeSidebar() {
            sidebar.classList.remove('show');
            mobileOverlay.classList.remove('show');
        }

        hamburgerMenu.addEventListener('click', function (e) {
            e.stopPropagation();
            openSidebar();
        });

        // Since overlay can't capture clicks, add click outside functionality
        document.addEventListener('click', function (e) {
            // Close sidebar if clicking outside of it (but not on hamburger)
            if (!sidebar.contains(e.target) && !hamburgerMenu.contains(e.target) && sidebar.classList.contains('show')) {
                closeSidebar();
            }
        });

        // Remove the overlay click listener since overlay won't capture clicks
        // mobileOverlay.addEventListener('click', function () {
        //     closeSidebar();
        // });

        const menuLinks = document.querySelectorAll('.menu a');

        menuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Only close sidebar for hash links, let regular links navigate normally
                if (href && href.startsWith('#')) {
                    closeSidebar();
                }
                // For regular links like /mycourses, do nothing - let browser handle navigation
            });
        });

        window.addEventListener('resize', function () {
            if (window.innerWidth > 768) {
                closeSidebar();
            }
        });
    </script>

@endsection