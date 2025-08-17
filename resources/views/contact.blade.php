@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="contact.css">
@endsection
@section('content')
    <!-- All page content previously inside <body> goes here, except for navbar/footer -->
    <!-- Header -->
    <header class="header">
        <div class="container header-wrapper">
            <div class="logo">BeingScholar</div>
            <a href="#" class="contact-btn">Contact Us</a>
        </div>
    </header>

    <!-- Contact Form Section -->
    <section class="contact-section">
        <div class="container">
            <h2 class="contact-heading">Get in touch with us.<br>We're here to assist you.</h2>
            
            <!-- Add after <h2 class="contact-heading"> -->
            <div class="social-icons">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="More"><i class="fas fa-chevron-down"></i></a>
            </div>

            <form class="contact-form">
                <div class="form-row">
                    <input type="text" placeholder="Your Name" required />
                    <input type="email" placeholder="Email Address" required />
                    <input type="text" placeholder="Phone Number (optional)" />
                </div>
                <textarea placeholder="Message" rows="5" required></textarea>
                <button type="submit" class="submit-btn">Leave us a Message →</button>
            </form>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container info-wrapper">
            <div class="info-text">
                <h3>Contact Info</h3>
                <p class="highlight">We are always<br>happy to assist you</p>
            </div>
            <div class="info-details">
                <div>
                    <p class="label">Email Address</p>
                    <p>beingscholar@gmail.com</p>
                    <small>Assistance hours:<br>Sunday - Friday 10am to 6pm (GMT 6+)</small>
                </div>
                <div>
                    <p class="label">Number</p>
                    <p>+8801540189333</p>
                    <small>Assistance hours:<br>Monday - Friday 6 am to 8 pm EST</small>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <h3>Subscribe to our Newsletter</h3>
            <p class="newsletter-text">
                Subscribe for Updates: Stay informed about the latest investor updates, financial results, and announcements by subscribing to our newsletter.
            </p>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email" required />
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>
@endsection
@section('scripts')
<!-- Place any page-specific scripts here -->
@endsection