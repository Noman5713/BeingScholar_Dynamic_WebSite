<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <meta name="description" content="Get in touch with K. M. Arafat Islam. Connect through various social platforms and stay updated with my latest work.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS Variables */
        :root {
            --primary-blue: #2563eb;
            --primary-blue-light: #3b82f6;
            --primary-blue-dark: #1d4ed8;
            --secondary-blue: #eff6ff;
            --accent-blue: #dbeafe;
            
            --text-dark: #1e293b;
            --text-medium: #475569;
            --text-light: #64748b;
            --text-white: #ffffff;
            
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-tertiary: #f1f5f9;
            
            --border-light: #e2e8f0;
            --border-medium: #cbd5e1;
            
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
            
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;
            --radius-2xl: 1.5rem;
            
            --font-primary: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            --font-display: 'Playfair Display', Georgia, serif;
        }

        /* Reset & Base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-primary);
            line-height: 1.6;
            color: var(--text-dark);
            background: var(--bg-secondary);
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Header */
        .header {
            background: var(--bg-primary);
            padding: 1rem 0;
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: var(--font-display);
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-blue);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-medium);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--primary-blue);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--secondary-blue) 0%, var(--bg-primary) 100%);
            padding: 4rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 100%;
            height: 200%;
            background: radial-gradient(circle, var(--accent-blue) 0%, transparent 70%);
            opacity: 0.5;
            animation: float 20s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(180deg) scale(1.1); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-family: var(--font-display);
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--text-medium);
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-gradient {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Social Media Buttons */
        .social-section {
            padding: 3rem 0;
            background: var(--bg-primary);
        }

        .social-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .social-header h2 {
            font-family: var(--font-display);
            font-size: 2.5rem;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .social-header p {
            font-size: 1.125rem;
            color: var(--text-medium);
        }

        .social-buttons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .social-button {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            border-radius: var(--radius-xl);
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
            border: 2px solid transparent;
        }

        .social-button:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }

        .social-button.facebook {
            background: linear-gradient(135deg, #1877f2, #42a5f5);
            color: white;
        }

        .social-button.instagram {
            background: linear-gradient(135deg, #e1306c, #fd1d1d, #fcb045);
            color: white;
        }

        .social-button.linkedin {
            background: linear-gradient(135deg, #0077b5, #00a0dc);
            color: white;
        }

        .social-button.email {
            background: linear-gradient(135deg, #ea4335, #fbbc05);
            color: white;
        }

        .social-button.whatsapp {
            background: linear-gradient(135deg, #25d366, #128c7e);
            color: white;
        }

        .social-button.phone {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: white;
        }

        .social-icon {
            font-size: 2rem;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-lg);
        }

        .social-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .social-content p {
            opacity: 0.9;
            font-size: 0.9rem;
        }

        /* Interest & Subscribe Form */
        .contact-form-section {
            padding: 4rem 0;
            background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-primary) 100%);
        }

        .form-container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--bg-primary);
            padding: 3rem;
            border-radius: var(--radius-2xl);
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--border-light);
        }

        .form-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .form-header h2 {
            font-family: var(--font-display);
            font-size: 2.5rem;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .form-header p {
            font-size: 1.125rem;
            color: var(--text-medium);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 1rem;
            border: 2px solid var(--border-light);
            border-radius: var(--radius-lg);
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px var(--secondary-blue);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin: 1rem 0;
        }

        .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary-blue);
        }

        .checkbox-group label {
            margin: 0;
            font-size: 0.9rem;
        }

        .submit-btn {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-light));
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: var(--radius-lg);
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Success Message */
        .success-message {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 1rem;
            border-radius: var(--radius-lg);
            margin-top: 1rem;
            text-align: center;
            display: none;
        }

        /* Contact Info Section */
        .contact-info-section {
            padding: 4rem 0;
            background: var(--text-dark);
            color: var(--text-white);
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
        }

        .info-card {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-xl);
            backdrop-filter: blur(10px);
        }

        .info-icon {
            font-size: 2.5rem;
            color: var(--primary-blue-light);
            margin-bottom: 1rem;
        }

        .info-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-white);
        }

        .info-card p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
        }

        /* Footer */
        .footer {
            background: var(--text-dark);
            color: var(--text-white);
            padding: 2rem 0;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer p {
            color: rgba(255, 255, 255, 0.7);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 0 1rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .social-buttons {
                grid-template-columns: 1fr;
            }

            .nav-links {
                display: none;
            }

            .hero-section {
                padding: 2rem 0;
            }

            .form-container {
                padding: 2rem;
            }

            .hero-title {
                font-size: 2.5rem;
            }
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .social-button,
        .form-container,
        .info-card {
            animation: fadeInUp 0.8s ease forwards;
        }

        .social-button:nth-child(1) { animation-delay: 0.1s; }
        .social-button:nth-child(2) { animation-delay: 0.2s; }
        .social-button:nth-child(3) { animation-delay: 0.3s; }
        .social-button:nth-child(4) { animation-delay: 0.4s; }
        .social-button:nth-child(5) { animation-delay: 0.5s; }
        .social-button:nth-child(6) { animation-delay: 0.6s; }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">BeingScholar</div>
                <nav>
                    <ul class="nav-links">
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="certificate.html">Certificates</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

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

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 BeingScholar. All rights reserved. Built with passion and dedication.</p>
        </div>
    </footer>

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
</body>
</html>