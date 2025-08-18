@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection

@section('content')
<!-- Hero Section with Parallax Effect -->
<section class="hero-about">
    <div class="hero-background">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>
    </div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    About <span class="gradient-text">BeingScholar</span>
                </h1>
                <p class="hero-subtitle">
                    Empowering the next generation of learners with cutting-edge education for the 4th industrial revolution
                </p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number" data-count="10000">0</span>
                        <span class="stat-label">Students</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-count="50">0</span>
                        <span class="stat-label">Courses</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-count="95">0</span>
                        <span class="stat-label">Success Rate</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="visual-container">
                    <img src="{{ asset('images/home.jpg') }}" alt="BeingScholar" class="hero-image">
                    <div class="image-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="mission-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Mission</h2>
            <p class="section-subtitle">Delivering world-class skills and knowledge to excel in your career</p>
        </div>
        <div class="mission-content">
            <div class="mission-text">
                <p class="mission-description">
                    At BeingScholar, we are dedicated to empowering learners for the 4th industrial revolution and beyond. 
                    Our mission is to deliver world-class skills and knowledge, enabling you to excel in your career and personal growth.
                </p>
                <div class="mission-highlights">
                    <div class="highlight-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>100% Career-Focused Curriculum</span>
                    </div>
                    <div class="highlight-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Industry-Leading Instructors</span>
                    </div>
                    <div class="highlight-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Flexible Learning Paths</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section with Cards -->
<section class="features-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Why Choose BeingScholar?</h2>
            <p class="section-subtitle">Discover what makes us the perfect learning partner</p>
        </div>
        <div class="features-grid">
            <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-icon">
                    <i class="bi bi-trophy-fill"></i>
                </div>
                <h3 class="feature-title">Professional Development</h3>
                <p class="feature-description">
                    100% of our learners report career benefits, including promotions and new opportunities.
                </p>
                <div class="feature-stat">
                    <span class="stat-value">100%</span>
                    <span class="stat-text">Success Rate</span>
                </div>
            </div>

            <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <h3 class="feature-title">Expert Trainers</h3>
                <p class="feature-description">
                    Learn from industry leaders and experienced educators with real-world expertise.
                </p>
                <div class="feature-stat">
                    <span class="stat-value">15+</span>
                    <span class="stat-text">Years Experience</span>
                </div>
            </div>

            <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-icon">
                    <i class="bi bi-globe2"></i>
                </div>
                <h3 class="feature-title">Remote Learning</h3>
                <p class="feature-description">
                    Access courses and resources from anywhere, anytime with our advanced platform.
                </p>
                <div class="feature-stat">
                    <span class="stat-value">24/7</span>
                    <span class="stat-text">Access</span>
                </div>
            </div>

            <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-icon">
                    <i class="bi bi-graph-up-arrow"></i>
                </div>
                <h3 class="feature-title">Self Development</h3>
                <p class="feature-description">
                    Flexible learning paths to help you grow at your own pace and schedule.
                </p>
                <div class="feature-stat">
                    <span class="stat-value">∞</span>
                    <span class="stat-text">Possibilities</span>
                </div>
            </div>

            <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-icon">
                    <i class="bi bi-infinity"></i>
                </div>
                <h3 class="feature-title">Lifetime Access</h3>
                <p class="feature-description">
                    Revisit course materials whenever you need with our lifetime access guarantee.
                </p>
                <div class="feature-stat">
                    <span class="stat-value">∞</span>
                    <span class="stat-text">Lifetime</span>
                </div>
            </div>

            <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-icon">
                    <i class="bi bi-headset"></i>
                </div>
                <h3 class="feature-title">24/7 Support</h3>
                <p class="feature-description">
                    Get help whenever you need it with our dedicated support team always available.
                </p>
                <div class="feature-stat">
                    <span class="stat-value">24/7</span>
                    <span class="stat-text">Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Innovation Section -->
<section class="innovation-section">
    <div class="container">
        <div class="innovation-content">
            <div class="innovation-text">
                <h2 class="innovation-title">Innovation in Education</h2>
                <p class="innovation-description">
                    We are committed to continuous research and innovation in online education, ensuring our curriculum 
                    and student engagement strategies remain at the forefront of flexible, effective learning.
                </p>
                <div class="innovation-features">
                    <div class="innovation-item">
                        <i class="bi bi-lightbulb-fill"></i>
                        <div>
                            <h4>Research-Driven</h4>
                            <p>Cutting-edge research in educational technology</p>
                        </div>
                    </div>
                    <div class="innovation-item">
                        <i class="bi bi-cpu-fill"></i>
                        <div>
                            <h4>AI-Powered Learning</h4>
                            <p>Personalized learning experiences with AI</p>
                        </div>
                    </div>
                    <div class="innovation-item">
                        <i class="bi bi-shield-check-fill"></i>
                        <div>
                            <h4>Quality Assurance</h4>
                            <p>Rigorous quality standards in all courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="innovation-visual">
                <div class="tech-grid">
                    <div class="tech-item">AI</div>
                    <div class="tech-item">ML</div>
                    <div class="tech-item">VR</div>
                    <div class="tech-item">AR</div>
                    <div class="tech-item">IoT</div>
                    <div class="tech-item">5G</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="contact-cta">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Start Your Learning Journey?</h2>
            <p class="cta-subtitle">Join thousands of successful learners and transform your career today</p>
            <div class="cta-buttons">
                <a href="/courses" class="btn-primary">Explore Courses</a>
                <a href="/contact" class="btn-secondary">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    // Initialize AOS (Animate On Scroll)
    AOS.init({
        duration: 800,
        once: true
    });

    // Animated counters
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-count'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current);
        }, 16);
    }

    // Start counter animation when visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('[data-count]');
                counters.forEach(counter => animateCounter(counter));
                observer.unobserve(entry.target);
            }
        });
    });

    const heroStats = document.querySelector('.hero-stats');
    if (heroStats) {
        observer.observe(heroStats);
    }

    // Floating shapes animation
    const shapes = document.querySelectorAll('.shape');
    shapes.forEach((shape, index) => {
        shape.style.animationDelay = `${index * 0.5}s`;
    });
</script>
@endsection
