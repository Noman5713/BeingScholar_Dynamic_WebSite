@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/success.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection
@section('content')
    <div class="success-header">
        <div class="container">
            <h1>Success Stories & Reviews</h1>
            <p>Discover how BeingScholar has transformed careers and lives. Read inspiring success stories from our students
                and share your own journey with our community.</p>
        </div>
    </div>

    <div class="container">
        <!-- Success & Reviews Filter -->
        <div class="success-filter">
            <button class="filter-button active" data-filter="all">All Stories</button>
            <button class="filter-button" data-filter="programming">Programming</button>
            <button class="filter-button" data-filter="data-science">Data Science</button>
            <button class="filter-button" data-filter="design">Design</button>
            <button class="filter-button" data-filter="business">Business</button>
        </div>

        <!-- Success Stories Grid -->
        <div class="success-grid">
            @if(isset($stories) && $stories->count() > 0)
                @foreach($stories as $story)
                    <div class="success-card" data-category="{{ $story->category }}">
                        @if($story->image)
                            <img src="{{ asset($story->image) }}" alt="{{ $story->title }}" class="success-image">
                        @else
                            <img src="{{ asset('images/success.png') }}" alt="{{ $story->title }}" class="success-image">
                        @endif
                        <div class="success-info">
                            <h3 class="success-title">{{ $story->title }}</h3>
                            <div class="success-meta">
                                <div class="success-author">
                                    <span class="author-name">{{ $story->name }}</span>
                                </div>
                                <div class="success-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $story->rating)
                                            <i class="fas fa-star star"></i>
                                        @elseif($i - 0.5 <= $story->rating)
                                            <i class="fas fa-star-half-alt star"></i>
                                        @else
                                            <i class="far fa-star star"></i>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <p class="success-content">{{ $story->story }}</p>
                            <div class="success-footer">
                                <span class="success-course">{{ $story->course }}</span>
                                <span class="success-date">{{ $story->created_at->format('F d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Default Success Stories if no database entries exist -->
                <!-- Success Story 1 -->
                <div class="success-card" data-category="programming">
                    <img src="{{ asset('images/success.png') }}" alt="Success Story" class="success-image">
                    <div class="success-info">
                        <h3 class="success-title">From Beginner to Full-Stack Developer in 6 Months</h3>
                        <div class="success-meta">
                            <div class="success-author">
                                <img src="{{ asset('images/download.png') }}" alt="Author" class="author-avatar">
                                <span class="author-name">Ahmed Rahman</span>
                            </div>
                            <div class="success-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                            </div>
                        </div>
                        <p class="success-content">Before joining BeingScholar, I had zero coding experience. The comprehensive
                            curriculum and supportive instructors helped me master full-stack development. Within 6 months, I
                            landed a job at a tech startup with a salary that exceeded my expectations. The hands-on projects
                            were particularly valuable as they closely mimicked real-world scenarios.</p>
                        <div class="success-footer">
                            <span class="success-course">Web Development Bootcamp</span>
                            <span class="success-date">July 15, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Success Story 2 -->
                <div class="success-card" data-category="data-science">
                    <img src="{{ asset('images/success.png') }}" alt="Success Story" class="success-image">
                    <div class="success-info">
                        <h3 class="success-title">Career Transition to Data Science</h3>
                        <div class="success-meta">
                            <div class="success-author">
                                <img src="{{ asset('images/download (1).png') }}" alt="Author" class="author-avatar">
                                <span class="author-name">Fatima Khan</span>
                            </div>
                            <div class="success-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star-half-alt star"></i>
                            </div>
                        </div>
                        <p class="success-content">I was working in marketing but wanted to pivot to data science.
                            BeingScholar's structured program made this transition possible. The instructors were patient with
                            beginners and the community support was incredible. Now I'm working as a junior data analyst at a
                            leading company, applying what I learned in real-world data projects.</p>
                        <div class="success-footer">
                            <span class="success-course">Data Science & Analytics</span>
                            <span class="success-date">June 28, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Success Story 3 -->
                <div class="success-card" data-category="design">
                    <img src="{{ asset('images/success.png') }}" alt="Success Story" class="success-image">
                    <div class="success-info">
                        <h3 class="success-title">Became a Freelance UI/UX Designer</h3>
                        <div class="success-meta">
                            <div class="success-author">
                                <img src="{{ asset('images/download.png') }}" alt="Author" class="author-avatar">
                                <span class="author-name">Taufiq Islam</span>
                            </div>
                            <div class="success-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                            </div>
                        </div>
                        <p class="success-content">The UI/UX Design course at BeingScholar was transformative. I learned both
                            theory and practical skills that allowed me to build a strong portfolio. Within weeks of completing
                            the course, I secured my first freelance client. Now I have a consistent stream of projects and I'm
                            making more than I did in my previous job.</p>
                        <div class="success-footer">
                            <span class="success-course">UI/UX Design Masterclass</span>
                            <span class="success-date">August 5, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Success Story 4 -->
                <div class="success-card" data-category="business">
                    <img src="{{ asset('images/success.png') }}" alt="Success Story" class="success-image">
                    <div class="success-info">
                        <h3 class="success-title">Launched My Own Digital Marketing Agency</h3>
                        <div class="success-meta">
                            <div class="success-author">
                                <img src="{{ asset('images/download (1).png') }}" alt="Author" class="author-avatar">
                                <span class="author-name">Nadia Rahman</span>
                            </div>
                            <div class="success-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="far fa-star star"></i>
                            </div>
                        </div>
                        <p class="success-content">After completing the Digital Marketing course, I gained the confidence to
                            start my own agency. The practical assignments helped me understand client needs and develop
                            effective strategies. The business planning module was particularly helpful in setting up my company
                            structure and acquiring my first clients.</p>
                        <div class="success-footer">
                            <span class="success-course">Digital Marketing Mastery</span>
                            <span class="success-date">May 20, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Success Story 5 -->
                <div class="success-card" data-category="programming">
                    <img src="{{ asset('images/success.png') }}" alt="Success Story" class="success-image">
                    <div class="success-info">
                        <h3 class="success-title">Doubled My Salary with AI Development Skills</h3>
                        <div class="success-meta">
                            <div class="success-author">
                                <img src="{{ asset('images/download.png') }}" alt="Author" class="author-avatar">
                                <span class="author-name">Karim Hassan</span>
                            </div>
                            <div class="success-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star-half-alt star"></i>
                            </div>
                        </div>
                        <p class="success-content">I was already a developer, but the AI specialization at BeingScholar opened
                            new doors for me. The course was challenging but incredibly rewarding. I applied my new skills at
                            work and was promoted to a senior role with double my previous salary. The AI projects in my
                            portfolio impressed my managers and set me apart from colleagues.</p>
                        <div class="success-footer">
                            <span class="success-course">AI Based Software Development</span>
                            <span class="success-date">July 3, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Success Story 6 -->
                <div class="success-card" data-category="data-science">
                    <img src="{{ asset('images/success.png') }}" alt="Success Story" class="success-image">
                    <div class="success-info">
                        <h3 class="success-title">Remote Data Engineer Position at International Company</h3>
                        <div class="success-meta">
                            <div class="success-author">
                                <img src="{{ asset('images/download (1).png') }}" alt="Author" class="author-avatar">
                                <span class="author-name">Raisa Begum</span>
                            </div>
                            <div class="success-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                            </div>
                        </div>
                        <p class="success-content">BeingScholar's Big Data course provided me with the technical skills and
                            confidence to apply for international positions. I now work remotely for a European tech company as
                            a data engineer, earning in foreign currency while living in Bangladesh. The career counseling and
                            interview preparation were invaluable parts of the program.</p>
                        <div class="success-footer">
                            <span class="success-course">Big Data Engineering</span>
                            <span class="success-date">April 12, 2025</span>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <!-- Submit Your Success Story Form -->
        <div class="review-form-container">
            <h2 class="review-form-title">Share Your Success Story</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="successForm" action="{{ route('success.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="course" class="form-label">Course You Completed</label>
                            <select id="course" name="course" class="form-control" required>
                                <option value="">Select a course</option>
                                <option value="ai-python">AI Based Software Development With Python</option>
                                <option value="deep-learning">Deep Learning with Computer Vision</option>
                                <option value="web-dev">Full Stack Web Development</option>
                                <option value="ux-design">UI/UX Design Masterclass</option>
                                <option value="digital-marketing">Digital Marketing Mastery</option>
                                <option value="data-science">Data Science & Analytics</option>
                                <option value="big-data">Big Data Engineering</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" name="category" class="form-control" required>
                                <option value="">Select a category</option>
                                <option value="programming">Programming</option>
                                <option value="data-science">Data Science</option>
                                <option value="design">Design</option>
                                <option value="business">Business</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="form-label">Success Story Title</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="story" class="form-label">Your Success Story</label>
                    <textarea id="story" name="story" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Upload Image (Optional)</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>

                <div class="form-group">
                    <label class="form-label">Rate Your Experience</label>
                    <div class="rating-selector">
                        <input type="radio" id="star5" name="rating" value="5" required>
                        <label for="star5" title="5 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4" title="4 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3" title="3 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2" title="2 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1" title="1 star"><i class="fas fa-star"></i></label>
                    </div>
                </div>

                <div class="buttons-container">
                    <button type="reset" class="form-button form-button-secondary">Reset</button>
                    <button type="submit" class="form-button">Submit Your Story</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Filter functionality
            const filterButtons = document.querySelectorAll('.filter-button');
            const successCards = document.querySelectorAll('.success-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Update active class
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    // Filter success stories
                    const filter = this.getAttribute('data-filter');

                    successCards.forEach(card => {
                        if (filter === 'all' || card.getAttribute('data-category') === filter) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
@endsection