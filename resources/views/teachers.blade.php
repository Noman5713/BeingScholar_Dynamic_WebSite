@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/teachers.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection
@section('content')
    <div class="teachers-header">
        <div class="container">
            <h1>Our Esteemed Educators</h1>
            <p>Guiding minds with expertise and dedication, our teachers empower learners to achieve their goals. Learn from industry professionals with years of real-world experience.</p>
        </div>
    </div>

    <div class="container">
        <div class="teacher-filter">
            <button class="filter-button active" data-filter="all">All Teachers</button>
            <button class="filter-button" data-filter="programming">Programming</button>
            <button class="filter-button" data-filter="data-science">Data Science</button>
            <button class="filter-button" data-filter="design">Design</button>
            <button class="filter-button" data-filter="business">Business</button>
        </div>

        <div class="teachers-grid">
            <!-- Teacher 1 -->
            <div class="teacher-card" data-category="programming">
                <img src="{{ asset('images/teachers/teacher1.jpg') }}" alt="John Doe" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">John Doe</h3>
                    <h4 class="teacher-position">Senior Software Engineer</h4>
                    <p class="teacher-organization">TechGiant Inc.</p>
                    <p class="teacher-bio">John is a seasoned software engineer with over 10 years of experience in full-stack development. He specializes in Python, JavaScript, and cloud technologies.</p>
                    <div class="teacher-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
            </div>

            <!-- Teacher 2 -->
            <div class="teacher-card" data-category="data-science">
                <img src="{{ asset('images/teachers/teacher2.jpg') }}" alt="Jane Smith" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">Jane Smith</h3>
                    <h4 class="teacher-position">Data Science Lead</h4>
                    <p class="teacher-organization">DataWorks Analytics</p>
                    <p class="teacher-bio">Jane leads data science initiatives with expertise in machine learning, predictive modeling, and data visualization. She has worked on projects across finance and healthcare.</p>
                    <div class="teacher-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
            </div>

            <!-- Teacher 3 -->
            <div class="teacher-card" data-category="programming">
                <img src="{{ asset('images/teachers/teacher3.jpg') }}" alt="Ahmed Khan" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">Ahmed Khan</h3>
                    <h4 class="teacher-position">Full Stack Developer</h4>
                    <p class="teacher-organization">InnovaTech Solutions</p>
                    <p class="teacher-bio">Ahmed specializes in modern web development frameworks and mobile app development. He has created numerous successful applications and mentored junior developers.</p>
                    <div class="teacher-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-medium"></i></a>
                    </div>
                </div>
            </div>

            <!-- Teacher 4 -->
            <div class="teacher-card" data-category="design">
                <img src="{{ asset('images/teachers/teacher4.jpg') }}" alt="Sophia Chen" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">Sophia Chen</h3>
                    <h4 class="teacher-position">UX/UI Design Lead</h4>
                    <p class="teacher-organization">Creative Design Studio</p>
                    <p class="teacher-bio">Sophia has transformed user experiences for Fortune 500 companies. Her design philosophy combines aesthetics with functionality to create intuitive interfaces.</p>
                    <div class="teacher-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-behance"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>

            <!-- Teacher 5 -->
            <div class="teacher-card" data-category="business">
                <img src="{{ asset('images/teachers/teacher5.jpg') }}" alt="Michael Johnson" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">Michael Johnson</h3>
                    <h4 class="teacher-position">Digital Marketing Strategist</h4>
                    <p class="teacher-organization">Growth Hackers Inc.</p>
                    <p class="teacher-bio">Michael has helped startups and established businesses grow their online presence through strategic digital marketing campaigns and SEO optimization.</p>
                    <div class="teacher-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
            </div>

            <!-- Teacher 6 -->
            <div class="teacher-card" data-category="data-science">
                <img src="{{ asset('images/teachers/teacher6.jpg') }}" alt="Priya Patel" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">Priya Patel</h3>
                    <h4 class="teacher-position">AI Research Scientist</h4>
                    <p class="teacher-organization">Future AI Labs</p>
                    <p class="teacher-bio">Priya conducts cutting-edge research in artificial intelligence and deep learning. She has published numerous papers in leading journals and conferences.</p>
                    <div class="teacher-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fas fa-book"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filter functionality
            const filterButtons = document.querySelectorAll('.filter-button');
            const teacherCards = document.querySelectorAll('.teacher-card');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active class
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter teachers
                    const filter = this.getAttribute('data-filter');
                    
                    teacherCards.forEach(card => {
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
