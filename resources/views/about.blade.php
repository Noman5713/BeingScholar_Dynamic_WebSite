@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
@endsection

@section('content')
<div class="about-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1 class="display-5 fw-bold">About BeingScholar</h1>
                <p class="lead">At BeingScholar, we are dedicated to empowering learners for the 4th industrial revolution and beyond. Our mission is to deliver world-class skills and knowledge, enabling you to excel in your career and personal growth.</p>
                <ul class="about-feature-list">
                    <li><strong>Professional Development:</strong> 100% of our learners report career benefits, including promotions and new opportunities.</li>
                    <li><strong>Expert Trainers:</strong> Learn from industry leaders and experienced educators.</li>
                    <li><strong>Remote Learning:</strong> Access courses and resources from anywhere, anytime.</li>
                    <li><strong>Self Development:</strong> Flexible learning paths to help you grow at your own pace.</li>
                    <li><strong>Lifetime Access:</strong> Revisit course materials whenever you need.</li>
                </ul>
                <p>We are committed to continuous research and innovation in online education, ensuring our curriculum and student engagement strategies remain at the forefront of flexible, effective learning.</p>
            </div>
            <div class="col-md-5 about-image-container">
                <img src="{{ asset('images/home.jpg') }}" alt="BeingScholar" class="about-image">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row about-section">
        <div class="col-md-4 mb-4">
            <div class="feature-card">
                <i class="bi bi-person-badge feature-icon"></i>
                <h5 class="feature-title">Expert Trainers</h5>
                <p class="feature-text">Our trainers are industry professionals with years of experience, dedicated to your success.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="feature-card">
                <i class="bi bi-laptop feature-icon"></i>
                <h5 class="feature-title">Remote Learning</h5>
                <p class="feature-text">Learn from anywhere in the world with our flexible, online courses and resources.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="feature-card">
                <i class="bi bi-graph-up-arrow feature-icon"></i>
                <h5 class="feature-title">Self Development</h5>
                <p class="feature-text">Grow your skills at your own pace and unlock new career opportunities with BeingScholar.</p>
            </div>
        </div>
    </div>
    
    <div class="row about-section">
        <div class="col-md-6">
            <h4 class="about-info-title">Student Support</h4>
            <p class="about-info-text">We are committed to bringing significant changes in online-based learning by doing extensive research for course curriculum preparation, student engagement, and flexible education. Our support team is always here to help you succeed.</p>
        </div>
        <div class="col-md-6">
            <h4 class="about-info-title">Contact Information</h4>
            <ul class="contact-list">
                <li><strong>Address:</strong> Daffodil International University, Daffodil Smart City, Dhaka-1216</li>
                <li><strong>Phone:</strong> +880 1571044054</li>
                <li><strong>Email:</strong> info@beingscholar.com</li>
            </ul>
        </div>
    </div>
</div>
@endsection
