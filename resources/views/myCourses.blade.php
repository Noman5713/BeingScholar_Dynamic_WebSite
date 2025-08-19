@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/mycourses.css') }}">

@endsection
@section('content')
    <div class="header-bar">
        <div class="header-left">
            <a href="{{ route('student.dashboard') }}" style="color: #2b6cb0; text-decoration: none; margin-right: 20px; font-size: 1.2rem;">
                ← Back to Dashboard
            </a>
            <div class="logo" style="font-size:1.6rem;font-weight:bold;color:#2b6cb0;">BeingScholar</div>
        </div>
        <div class="user-profile">
            <span class="user-name">{{ Auth::user()->name ?? 'Student' }}</span>
            <div class="profile-dropdown" style="position: relative; display: inline-block;">
                <div class="avatar" onclick="toggleDropdown()" style="cursor: pointer;">
                    <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" alt="User Avatar" />
                </div>
                <div id="profileDropdown" class="dropdown-content" style="display: none; position: absolute; right: 0; top: 100%; background-color: white; min-width: 120px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; border-radius: 5px;">
                    <form action="{{ route('student.logout') }}" method="POST" style="margin: 0;">
                        @csrf
                        <button type="submit" style="background: none; border: none; color: #333; text-decoration: none; cursor: pointer; width: 100%; text-align: left; padding: 12px 16px; display: block; font-size: 14px;">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="my-courses-title">My Courses</div>
    <div class="courses-list">
        <!-- Course 1 -->
        <div class="course-card">
            <img class="course-img" src="{{ asset('images/Course_Card_Banner/i.png') }}" alt="Batch 11">
            <div class="course-info">
                <div class="course-title">Professional Certificate in Java Spring boot and Web App Development</div>
                <div class="progress-bar">
                    <div class="progress" style="width: 68%;"></div>
                    <span class="progress-label">68%</span>
                </div>
                <div class="course-actions">
                    <a href="{{ url('/courseContent/1') }}" class="course-btn">Continue Course</a>
                </div>
            </div>
        </div>
        <!-- Course 2 -->
        <div class="course-card">
            <img class="course-img" src="{{ asset('images/Course_Card_Banner/e.png') }}" alt="Recommended Course">
            <div class="course-info">
                <div class="course-title">Applied Data Analytics Masterclass</div>
                <div class="progress-bar">
                    <div class="progress" style="width: 0%;"></div>
                    <span class="progress-label">0%</span>
                </div>
                <div class="course-actions">
                    <a href="{{ url('/courseContent/2') }}" class="course-btn">Continue Course</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
        }

        // Close dropdown when clicking outside
        window.onclick = function(event) {
            if (!event.target.matches('.avatar') && !event.target.matches('.avatar img')) {
                const dropdown = document.getElementById('profileDropdown');
                if (dropdown.style.display === 'block') {
                    dropdown.style.display = 'none';
                }
            }
        }
    </script>
@endsection