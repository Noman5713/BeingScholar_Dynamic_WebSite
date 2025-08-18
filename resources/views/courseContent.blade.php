@extends('layouts.main')
@section('head')
<link rel="stylesheet" href="{{ asset('css/courseContent.css') }}">    
@endsection
@section('content')
   
    <div class="course-content-main">
        <div class="video-area">
            <div class="main-course-title">Professional Certificate in Java Spring Boot and Web App Development</div>
            <div class="video-player">
                <video src="" controls
                    poster="{{ asset('images/Course_Card_Banner/i.png') }}"></video>
            </div>
            <div class="nav-btns">
                <button class="nav-btn">Previous</button>
                <button class="nav-btn">Next</button>
            </div>
        </div>
        <div class="sidebar">
            <div class="progress-label">Running Module : 1</div>
            <div class="progress-bar-bg">
                <div class="progress-bar-fill"></div>
            </div>
            <div style="color:#888; font-size:0.95rem; margin-bottom:16px;">2/7</div>
            <div class="lesson-list">
                <div class="lesson-card">
                    <div class="lesson-card-title">Module 1: Introduction to Java</div>
                    <div class="lesson-card-details">Video • 15 min</div>
                </div>
                <div class="lesson-card">
                    <div class="lesson-card-title">Module 2: Java Basics</div>
                    <div class="lesson-card-details">Video • 22 min</div>
                </div>
                <div class="lesson-card">
                    <div class="lesson-card-title">Module 3: Java Syntax Guide</div>
                    <div class="lesson-card-details">PDF • Study Material</div>
                </div>
                <div class="lesson-card">
                    <div class="lesson-card-title">Module 4: Object-Oriented Programming</div>
                    <div class="lesson-card-details">Video • 28 min</div>
                </div>
                <div class="lesson-card">
                    <div class="lesson-card-title">Module 5: Spring Framework Introduction</div>
                    <div class="lesson-card-details">Video • 35 min</div>
                </div>
                <div class="lesson-card">
                    <div class="lesson-card-title">Module 6: Spring Boot Setup</div>
                    <div class="lesson-card-details">Video • 18 min</div>
                </div>
                <div class="lesson-card">
                    <div class="lesson-card-title">Module 7: Spring Boot Reference</div>
                    <div class="lesson-card-details">PDF • Documentation</div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- Place any page-specific scripts here -->
@endsection