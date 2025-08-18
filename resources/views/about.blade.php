@extends('layouts.main')
@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-7">
            <h1 class="display-5 fw-bold text-primary mb-3">About BeingScholar</h1>
            <p class="lead mb-4">At BeingScholar, we are dedicated to empowering learners for the 4th industrial revolution and beyond. Our mission is to deliver world-class skills and knowledge, enabling you to excel in your career and personal growth.</p>
            <ul class="list-unstyled mb-4">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Professional Development:</strong> 100% of our learners report career benefits, including promotions and new opportunities.</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Expert Trainers:</strong> Learn from industry leaders and experienced educators.</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Remote Learning:</strong> Access courses and resources from anywhere, anytime.</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Self Development:</strong> Flexible learning paths to help you grow at your own pace.</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Lifetime Access:</strong> Revisit course materials whenever you need.</li>
            </ul>
            <p class="mb-4">We are committed to continuous research and innovation in online education, ensuring our curriculum and student engagement strategies remain at the forefront of flexible, effective learning.</p>
        </div>
        <div class="col-md-5 text-center">
            <img src="/public/images/home.jpg" alt="BeingScholar" class="img-fluid rounded shadow" style="max-height: 320px;">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-person-badge display-4 text-primary mb-3"></i>
                    <h5 class="card-title">Expert Trainers</h5>
                    <p class="card-text">Our trainers are industry professionals with years of experience, dedicated to your success.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-laptop display-4 text-primary mb-3"></i>
                    <h5 class="card-title">Remote Learning</h5>
                    <p class="card-text">Learn from anywhere in the world with our flexible, online courses and resources.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-graph-up-arrow display-4 text-primary mb-3"></i>
                    <h5 class="card-title">Self Development</h5>
                    <p class="card-text">Grow your skills at your own pace and unlock new career opportunities with BeingScholar.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <h4 class="fw-bold text-primary">Student Support</h4>
            <p>We are committed to bringing significant changes in online-based learning by doing extensive research for course curriculum preparation, student engagement, and flexible education. Our support team is always here to help you succeed.</p>
        </div>
        <div class="col-md-6">
            <h4 class="fw-bold text-primary">Contact Information</h4>
            <ul class="list-unstyled">
                <li><strong>Address:</strong> Daffodil International University, Daffodil Smart City, Dhaka-1216</li>
                <li><strong>Phone:</strong> +880 1571044054</li>
                <li><strong>Email:</strong> info@beingscholar.com</li>
            </ul>
        </div>
    </div>
</div>
@endsection
