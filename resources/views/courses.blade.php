@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/courses.css') }}">
@endsection
@section('content')
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
                @foreach($courses as $course)
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset($course->banner_image) }}" alt="{{ $course->title }}">
                        <div class="course-badge">
                            @if($course->price < 1000)
                                New
                            @else
                                {{ round((($course->price * 1.5 - $course->price) / ($course->price * 1.5)) * 100) }}% OFF
                            @endif
                        </div>
                    </div>
                    <div class="course-info">
                        <h3>{{ $course->title }}</h3>
                        <div class="course-tags">
                            <span class="tag batch-tag">{{ $course->batch_number }}</span>
                            @if($course->max_students)
                                <span class="tag seats-tag">{{ $course->max_students }} seats remaining</span>
                            @endif
                            @if($course->start_date && $course->end_date)
                                @php
                                    $daysRemaining = \Carbon\Carbon::parse($course->end_date)->diffInDays(now());
                                @endphp
                                <span class="tag days-tag">{{ $daysRemaining }} days remaining</span>
                            @endif
                        </div>
                        <div class="course-details">
                            <p class="course-description">{{ Str::limit($course->description, 150) }}</p>
                        </div>
                        <div class="course-short-details">
                            <p class="short-description">{{ Str::limit($course->description, 100) }}</p>
                            <div class="course-price">
                                @if($course->price > 1000)
                                    <span class="old-price">৳{{ number_format($course->price * 1.5) }}</span>
                                @endif
                                <span class="new-price">৳{{ number_format($course->price) }}</span>
                            </div>
                        </div>
                        <button class="course-details-btn" data-course-id="{{ $course->id }}">
                            Details
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        // Mobile menu toggle
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.querySelector('.nav-links');
        
        mobileMenu.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                navLinks.classList.remove('active');
                mobileMenu.classList.remove('active');
            });
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

        // Course details navigation functionality
        document.querySelectorAll('.course-details-btn').forEach(button => {
            button.addEventListener('click', function(e) {
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