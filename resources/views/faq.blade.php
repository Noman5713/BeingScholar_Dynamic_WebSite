@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
@endsection
@section('content')
    <!-- All page content previously inside <body> goes here, except for navbar/footer -->
    <!-- Background decoration -->
    <div class="bg-decoration">
        <div class="bg-shape bg-shape-1"></div>
        <div class="bg-shape bg-shape-2"></div>
        <div class="bg-shape bg-shape-3"></div>
    </div>

    <section class="faq-section" id="faq">
        <div class="faq-container">
            <!-- Header with enhanced design -->
            <div class="faq-header">
                <div class="faq-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/>
                        <circle cx="12" cy="17" r="1"/>
                    </svg>
                    Help Center
                </div>
                <h1 class="faq-title">Frequently Asked Questions</h1>
                <p class="faq-subtitle">Find answers to the most common questions about our courses, certifications, and services. Can't find what you're looking for? <a href="{{ url('/contact') }}" class="contact-link">Contact our support team</a>.</p>
            </div>

            <!-- Search functionality -->
            <div class="faq-search">
                <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="m21 21-4.35-4.35"/>
                </svg>
                <input type="text" class="search-input" placeholder="Search frequently asked questions..." id="faqSearch">
                <div class="search-results-count" id="searchCount"></div>
            </div>

            <!-- Category tabs -->
            <div class="faq-categories">
                <button class="category-btn active" data-category="all">
                    <span>All Questions</span>
                    <span class="category-count">10</span>
                </button>
                <button class="category-btn" data-category="courses">
                    <span>Courses</span>
                    <span class="category-count">4</span>
                </button>
                <button class="category-btn" data-category="scholarships">
                    <span>Scholarships</span>
                    <span class="category-count">3</span>
                </button>
                <button class="category-btn" data-category="support">
                    <span>Support</span>
                    <span class="category-count">3</span>
                </button>
            </div>

            <div class="faq-list" id="faqList">

                <div class="faq-item" data-category="courses">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-1">
                        <span class="question-text">What is a microcredential?</span>
                        <div class="question-meta">
                            <span class="question-number">01</span>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" id="faq-1" role="region" aria-labelledby="faq-1-btn">
                        <div class="answer-content">
                            <p>A microcredential is a short, focused course designed to teach a specific skill or subject area. Unlike traditional degrees, microcredentials are faster to complete, industry-aligned, and often stackable toward larger qualifications or job roles. They're perfect for upskilling or adding proof of expertise to your resume or LinkedIn.</p>
                            <div class="answer-tags">
                                <span class="tag">Certification</span>
                                <span class="tag">Skills</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="courses">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-2">
                        <span class="question-text">Who are these courses for?</span>
                        <div class="question-meta">
                            <span class="question-number">02</span>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" id="faq-2" role="region" aria-labelledby="faq-2-btn">
                        <div class="answer-content">
                            <p>Our courses are designed for students, early-career professionals, and anyone who wants to enhance their academic, technical, or extracurricular profile. Whether you're preparing for scholarships, internships, or university applications — we've got you covered.</p>
                            <div class="answer-tags">
                                <span class="tag">Students</span>
                                <span class="tag">Professionals</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="courses">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-3">
                        <span class="question-text">How do I enroll in a course?</span>
                        <div class="question-meta">
                            <span class="question-number">03</span>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" id="faq-3" role="region" aria-labelledby="faq-3-btn">
                        <div class="answer-content">
                            <p>Enrolling is simple:</p>
                            <div class="steps-list">
                                <div class="step">
                                    <span class="step-number">1</span>
                                    <span>Visit our Courses page</span>
                                </div>
                                <div class="step">
                                    <span class="step-number">2</span>
                                    <span>Choose a course that fits your goal</span>
                                </div>
                                <div class="step">
                                    <span class="step-number">3</span>
                                    <span>Click Enroll Now and create a free account</span>
                                </div>
                                <div class="step">
                                    <span class="step-number">4</span>
                                    <span>Make payment (if applicable) or start learning instantly for free</span>
                                </div>
                            </div>
                            <p>You'll get access to all course materials, assignments, and community discussions right after enrolling.</p>
                            <div class="answer-tags">
                                <span class="tag">Enrollment</span>
                                <span class="tag">Getting Started</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="courses">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-4">
                        <span class="question-text">Do I get a certificate after completing a course?</span>
                        <div class="question-meta">
                            <span class="question-number">04</span>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" id="faq-4" role="region" aria-labelledby="faq-4-btn">
                        <div class="answer-content">
                            <p>Yes! Upon successful completion of each course, you'll receive a verifiable digital certificate. These certificates can be shared on your LinkedIn, CV, or university applications to demonstrate your learning and commitment.</p>
                            <div class="answer-tags">
                                <span class="tag">Certificate</span>
                                <span class="tag">Verification</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="scholarships">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-5">
                        <span class="question-text">Are your certificates internationally recognized?</span>
                        <div class="question-meta">
                            <span class="question-number">05</span>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" id="faq-5" role="region" aria-labelledby="faq-5-btn">
                        <div class="answer-content">
                            <p>While our certificates are not equivalent to university degrees, they are recognized by many employers and academic institutions as proof of skill and knowledge. They add strong value to your scholarship or job applications, especially when backed by real-world project work.</p>
                            <div class="answer-tags">
                                <span class="tag">Recognition</span>
                                <span class="tag">Global</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="scholarships">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-6">
                        <span class="question-text">What scholarships does Beingscholar help with?</span>
                        <div class="question-meta">
                            <span class="question-number">06</span>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" id="faq-6" role="region" aria-labelledby="faq-6-btn">
                        <div class="answer-content">
                            <p>We guide students through scholarships such as:</p>
                            <div class="scholarship-grid">
                                <div class="scholarship-item">🇪🇺 Erasmus Mundus</div>
                                <div class="scholarship-item">🇩🇪 DAAD (Germany)</div>
                                <div class="scholarship-item">🇯🇵 MEXT (Japan)</div>
                                <div class="scholarship-item">🇺🇸 Fulbright (USA)</div>
                                <div class="scholarship-item">🇬🇧 Commonwealth & Chevening</div>
                                <div class="scholarship-item">🇸🇪 Swedish Institute</div>
                            </div>
                            <p>You'll find eligibility criteria, document templates, application walkthroughs, and mentorship support on our Scholarship page.</p>
                            <div class="answer-tags">
                                <span class="tag">International</span>
                                <span class="tag">Guidance</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="scholarships">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-7">
                        <span class="question-text">What is ECA and how can it help my profile?</span>
                        <div class="question-meta">
                            <span class="question-number">07</span>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" id="faq-7" role="region" aria-labelledby="faq-7-btn">
                        <div class="answer-content">
                            <p>ECA stands for Extracurricular Activities — things like volunteering, leadership, competitions, community service, and workshops. Strong ECA involvement boosts your scholarship and admission chances by showing you're more than just grades.</p>
                            <p>We help you discover, track, and showcase your ECAs in a way that matters to global universities.</p>
                            <div class="answer-tags">
                                <span class="tag">Profile Building</span>
                                <span class="tag">Activities</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="support">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-8">
                        <span class="question-text">Do I need IELTS to apply abroad?</span>
                        <div class="question-meta">
                            <span class="question-number">08</span>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" id="faq-8" role="region" aria-labelledby="faq-8-btn">
                        <div class="answer-content">
                            <p>Not always! Some universities accept alternatives:</p>
                            <div class="alternative-tests">
                                <div class="test-option">
                                    <div class="test-icon">📝</div>
                                    <div>
                                        <strong>MOI</strong>
                                        <span>Medium of Instruction</span>
                                    </div>
                                </div>
                                <div class="test-option">
                                    <div class="test-icon">🦉</div>
                                    <div>
                                        <strong>Duolingo</strong>
                                        <span>English Test</span>
                                    </div>
                                </div>
                                <div class="test-option">
                                    <div class="test-icon">🏫</div>
                                    <div>
                                        <strong>Internal Tests</strong>
                                        <span>University specific</span>
                                    </div>
                                </div>
                            </div>
                            <p>We provide country-wise and university-wise guidance on IELTS waivers.</p>
                            <div class="answer-tags">
                                <span class="tag">Language Tests</span>
                                <span class="tag">Waivers</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="support">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-9">
                        <span class="question-text">What's your refund policy?</span>
                        <div class="question-meta">
                            <span class="question-number">09</span>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" id="faq-9" role="region" aria-labelledby="faq-9-btn">
                        <div class="answer-content">
                            <div class="policy-highlight">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M9 12l2 2 4-4"/>
                                    <circle cx="12" cy="12" r="10"/>
                                </svg>
                                <div>
                                    <strong>7-Day Money Back Guarantee</strong>
                                    <span>No questions asked policy</span>
                                </div>
                            </div>
                            <p>If you purchase a course and are unsatisfied within the first 7 days, you can request a full refund. Refunds are processed within 3–5 business days.</p>
                            <div class="note-box">
                                <strong>Note:</strong> Refunds do not apply to completed courses or downloaded certificates.
                            </div>
                            <div class="answer-tags">
                                <span class="tag">Policy</span>
                                <span class="tag">Guarantee</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="support">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-10">
                        <span class="question-text">How can I get personal help or mentorship?</span>
                        <div class="question-meta">
                            <span class="question-number">10</span>
                            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" id="faq-10" role="region" aria-labelledby="faq-10-btn">
                        <div class="answer-content">
                            <p>We offer 1-on-1 mentorship sessions covering:</p>
                            <div class="mentorship-services">
                                <div class="service">
                                    <div class="service-icon">✍️</div>
                                    <span>SOP Writing</span>
                                </div>
                                <div class="service">
                                    <div class="service-icon">📄</div>
                                    <span>CV Review</span>
                                </div>
                                <div class="service">
                                    <div class="service-icon">🎯</div>
                                    <span>University Shortlisting</span>
                                </div>
                                <div class="service">
                                    <div class="service-icon">💡</div>
                                    <span>Scholarship Strategy</span>
                                </div>
                            </div>
                            <p>You can book a session through our Mentorship page or reach out via the Contact Us section.</p>
                            <div class="answer-tags">
                                <span class="tag">1-on-1</span>
                                <span class="tag">Mentorship</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Help section -->
            <div class="faq-help">
                <div class="help-content">
                    <h3>Still need help?</h3>
                    <p>Can't find the answer you're looking for? Our support team is here to help.</p>
                    <div class="help-actions">
                        <a href="{{ url('/contact') }}" class="help-btn primary">Contact Support</a>
                        <a href="#chat" class="help-btn secondary">Live Chat</a>
                    </div>
                </div>
                <div class="help-stats">
                    <div class="stat">
                        <strong>24/7</strong>
                        <span>Support Available</span>
                    </div>
                    <div class="stat">
                        <strong>&lt;2hrs</strong>
                        <span>Average Response</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        // Enhanced FAQ functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            const searchInput = document.getElementById('faqSearch');
            const searchCount = document.getElementById('searchCount');
            const categoryBtns = document.querySelectorAll('.category-btn');

            // FAQ toggle functionality
            faqItems.forEach(item => {
                const questionBtn = item.querySelector('.faq-question');
                
                questionBtn.addEventListener('click', () => {
                    const isOpen = item.classList.contains('open');
                    
                    // Close all items
                    faqItems.forEach(i => {
                        i.classList.remove('open');
                        i.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                    });
                    
                    // Open clicked item if it wasn't open
                    if (!isOpen) {
                        item.classList.add('open');
                        questionBtn.setAttribute('aria-expanded', 'true');
                    }
                });
            });

            // Search functionality
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                let visibleCount = 0;

                faqItems.forEach(item => {
                    const questionText = item.querySelector('.question-text').textContent.toLowerCase();
                    const answerText = item.querySelector('.answer-content').textContent.toLowerCase();
                    
                    if (questionText.includes(searchTerm) || answerText.includes(searchTerm)) {
                        item.style.display = 'block';
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Update search count
                if (searchTerm) {
                    searchCount.textContent = `${visibleCount} result${visibleCount !== 1 ? 's' : ''} found`;
                    searchCount.style.display = 'block';
                } else {
                    searchCount.style.display = 'none';
                }
            });

            // Category filtering
            categoryBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const category = btn.dataset.category;
                    
                    // Update active button
                    categoryBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    
                    // Filter items
                    faqItems.forEach(item => {
                        if (category === 'all' || item.dataset.category === category) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                    
                    // Clear search when switching categories
                    searchInput.value = '';
                    searchCount.style.display = 'none';
                });
            });

            // Smooth scroll for anchors
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
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

            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    // Close all open FAQ items
                    faqItems.forEach(item => {
                        item.classList.remove('open');
                        item.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                    });
                }
            });
        });
    </script>
@endsection
