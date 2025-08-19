@extends('layouts.dashboard')
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
            <div class="avatar">
                <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" alt="User Avatar" />
            </div>
        </div>
    </div>
    <div class="my-courses-title">My Courses</div>
    <div class="courses-list">
        <!-- Course 1 -->
        <div class="course-card">
            <img class="course-img" src="{{ asset('images/Course_Card_Banner/i.png') }}" alt="Batch 11">
            <div class="course-info">
                <div class="course-title">Professional Certificate in Java Spring boot and Web App Developnent</div>
                <div class="progress-bar">
                    <div class="progress" style="width: 68%;"></div>
                    <span class="progress-label">68%</span>
                </div>
                <div class="course-actions">
                    <button class="course-btn">Continue Course</button>
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
                    <button class="course-btn">Continue Course</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- Place any page-specific scripts here -->
@endsection