@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/studentdashboard.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="mobile-overlay" id="mobileOverlay"></div>
        <aside class="sidebar" id="sidebar">
            <h2>Student Dashboard</h2>
            <ul class="menu">
                <li><a class="active" href="#overview">Overview</a></li>
                <li><a href="#courses">My Courses</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <div class="header">
                <div class="header-left">
                    <button class="hamburger-menu" id="hamburgerMenu">
                       <span></span>
                       <span></span>
                       <span></span>
                    </button>
                    <h1>Dashboard</h1>
                </div>
                <div class="user-info">
                    <h2>Uodoy</h2>
                    <div class="avatar">
                        <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" alt="User Avatar" />
                    </div>
                </div>
            </div>
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
                                        <div class="progress-bar" style="width: 80%"></div>
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
                                        <div class="progress-bar" style="width: 65%"></div>
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
                                        <div class="progress-bar" style="width: 40%"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
@endsection
@section('scripts')
<script>
    // Mobile menu functionality
    const hamburgerMenu = document.getElementById('hamburgerMenu');
    const sidebar = document.getElementById('sidebar');
    const mobileOverlay = document.getElementById('mobileOverlay');
    function toggleSidebar() {
        sidebar.classList.toggle('show');
        mobileOverlay.classList.toggle('show');
    }
    function closeSidebar() {
        sidebar.classList.remove('show');
        mobileOverlay.classList.remove('show');
    }
    hamburgerMenu.addEventListener('click', toggleSidebar);
    mobileOverlay.addEventListener('click', closeSidebar);
    // Close sidebar when clicking on menu items (optional)
    const menuLinks = document.querySelectorAll('.menu a');
    menuLinks.forEach(link => {
        link.addEventListener('click', closeSidebar);
    });
    // Handle window resize
    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) {
            closeSidebar();
        }
    });
</script>
@endsection