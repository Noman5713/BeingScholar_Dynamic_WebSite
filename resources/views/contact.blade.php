@extends('layouts.main')

@section('head')
    <title>Contact Us - BeingScholar</title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Let's <span class="hero-gradient">Connect</span> & Collaborate
                </h1>
                <p class="hero-subtitle">
                    I'm always excited to meet new people, discuss innovative projects, and build amazing things together. Let's start a conversation!
                </p>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="social-section">
        <div class="container">
            <div class="social-header">
                <h2>Connect With Me</h2>
                <p>Choose your preferred platform to get in touch</p>
            </div>
            
            <div class="social-buttons">
                <a href="https://facebook.com/arafat.islam" class="social-button facebook" target="_blank">
                    <div class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social-content">
                        <h3>Facebook</h3>
                        <p>Follow my updates and connect on Facebook</p>
                    </div>
                </a>

                <a href="https://instagram.com/arafat.islam" class="social-button instagram" target="_blank">
                    <div class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="social-content">
                        <h3>Instagram</h3>
                        <p>See my latest photos and behind-the-scenes</p>
                    </div>
                </a>

                <a href="https://linkedin.com/in/arafat-islam" class="social-button linkedin" target="_blank">
                    <div class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <div class="social-content">
                        <h3>LinkedIn</h3>
                        <p>Professional networking and career updates</p>
                    </div>
                </a>

                <a href="mailto:k.m.arafat.islam@gmail.com" class="social-button email">
                    <div class="social-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="social-content">
                        <h3>Email</h3>
                        <p>Send me a direct message via email</p>
                    </div>
                </a>

                <a href="https://wa.me/8801540189333" class="social-button whatsapp" target="_blank">
                    <div class="social-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="social-content">
                        <h3>WhatsApp</h3>
                        <p>Quick messages and real-time communication</p>
                    </div>
                </a>

                <a href="tel:+8801540189333" class="social-button phone">
                    <div class="social-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="social-content">
                        <h3>Phone Call</h3>
                        <p>Direct phone call for urgent matters</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-container">
                <div class="form-header">
                    <h2>Show Your Interest & Subscribe</h2>
                    <p>Tell me about your interests and stay updated with my latest work and projects</p>
                </div>

                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="interest">Your Primary Interest *</label>
                        <select id="interest" name="interest" required>
                            <option value="">Select your interest</option>
                            <option value="web-development">Web Development</option>
                            <option value="software-engineering">Software Engineering</option>
                            <option value="mobile-development">Mobile App Development</option>
                            <option value="ai-ml">Artificial Intelligence & ML</option>
                            <option value="data-science">Data Science</option>
                            <option value="cybersecurity">Cybersecurity</option>
                            <option value="blockchain">Blockchain Technology</option>
                            <option value="iot">Internet of Things (IoT)</option>
                            <option value="game-development">Game Development</option>
                            <option value="ui-ux">UI/UX Design</option>
                            <option value="digital-marketing">Digital Marketing</option>
                            <option value="entrepreneurship">Entrepreneurship</option>
                            <option value="research">Academic Research</option>
                            <option value="collaboration">Project Collaboration</option>
                            <option value="mentorship">Mentorship</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="experience">Your Experience Level</label>
                        <select id="experience" name="experience">
                            <option value="">Select your level</option>
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="advanced">Advanced</option>
                            <option value="expert">Expert</option>
                            <option value="student">Student</option>
                            <option value="professional">Professional</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Tell me more about your interests or project ideas</label>
                        <textarea id="message" name="message" placeholder="Share your thoughts, project ideas, questions, or anything you'd like to discuss. I'm excited to hear from you!"></textarea>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="newsletter" name="newsletter" checked>
                        <label for="newsletter">Subscribe to my newsletter for updates on new projects, tech insights, and opportunities</label>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="updates" name="updates">
                        <label for="updates">Get notified about collaboration opportunities and events</label>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="privacy" name="privacy" required>
                        <label for="privacy">I agree to the privacy policy and terms of service *</label>
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i>
                        Submit & Subscribe
                    </button>

                    <div class="success-message" id="successMessage">
                        <i class="fas fa-check-circle"></i>
                        Thank you! Your information has been submitted successfully. You're now subscribed to updates!
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Location</h3>
                    <p>Dhaka, Bangladesh<br>Available for remote collaboration worldwide</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Response Time</h3>
                    <p>Usually within 24 hours<br>Monday - Friday: 9 AM - 9 PM (GMT+6)</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>Open to projects, partnerships,<br>and innovative opportunities</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Form submission handling
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);
        
        // Simple validation
        if (!data.firstName || !data.lastName || !data.email || !data.interest) {
            alert('Please fill in all required fields.');
            return;
        }
        
        if (!data.privacy) {
            alert('Please agree to the privacy policy and terms of service.');
            return;
        }
        
        // Simulate form submission
        const submitBtn = document.querySelector('.submit-btn');
        const successMessage = document.getElementById('successMessage');
        
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
        submitBtn.disabled = true;
        
        setTimeout(() => {
            // Show success message
            successMessage.style.display = 'block';
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Reset form
            this.reset();
            
            // Reset button
            submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit & Subscribe';
            submitBtn.disabled = false;
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 5000);
            
        }, 2000);
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe animated elements
    document.querySelectorAll('.social-button, .form-container, .info-card').forEach(el => {
        observer.observe(el);
    });
</script>
@endsection