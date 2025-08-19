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
                <img src="{{ asset('images/rezaur.png') }}" alt="John Doe" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">Md. Rezaur Rahman</h3>
                    <h4 class="teacher-position">Senior Software Engineer</h4>
                    <p class="teacher-organization">Enosis.</p>
                    <p class="teacher-bio">Md. Rezaur Rahman is a seasoned software engineer with over 5 years of experience in full-stack development. He specializes in Python, JavaScript, and cloud technologies.</p>
                    <div class="teacher-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
            </div>

            <!-- Teacher 2 -->
            <div class="teacher-card" data-category="data-science">
                <img src="{{ asset('images/zahidSir.jpg') }}" alt="Jane Smith" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">Md. Zahid  Hasan</h3>
                    <h4 class="teacher-position">Data Science Lead</h4>
                    <p class="teacher-organization">Daffodil Intenational University</p>
                    <p class="teacher-bio">Md. Zahid Hasan data science initiatives with expertise in machine learning, predictive modeling, and data visualization.He has worked on many projects.</p>
                    <div class="teacher-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
            </div>

            <!-- Teacher 3 -->
            <div class="teacher-card" data-category="programming">
                <img src="{{ asset('images/nooriSir.jpg') }}" alt="Ahmed Khan" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">Dr. Sheak Rashed Haider Noori</h3>
                    <h4 class="teacher-position">Proffesor and Head</h4>
                    <p class="teacher-organization">Daffodil Intenational University</p>
                    <p class="teacher-bio">Sheak Rashed Haider Noori specializes in modern web development frameworks and mobile app development. He has created numerous successful applications and mentored junior developers.</p>
                    <div class="teacher-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-medium"></i></a>
                    </div>
                </div>
            </div>

            <!-- Teacher 4 -->
            <div class="teacher-card" data-category="design">
                <img src="{{ asset('images/zionsir.jpg') }}" alt="Sophia Chen" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">Zion Mezba</h3>
                    <h4 class="teacher-position">Lecturer</h4>
                    <p class="teacher-organization">Daffodil International University</p>
                    <p class="teacher-bio">Zion Mezba specializes in modern web development frameworks and mobile app development. He has created numerous successful applications.</p>
                    <div class="teacher-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-behance"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>

            <!-- Teacher 5 -->
            <div class="teacher-card" data-category="business">
                <img src="{{ asset('images/dipuSir.jpg') }}" alt="Michael Johnson" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">Md. Hasanuzzaman Dipu</h3>
                    <h4 class="teacher-position">Assistant Professor</h4>
                    <p class="teacher-organization">Daffodil International University</p>
                    <p class="teacher-bio">Md. Hasanuzzaman Dipu specializes in Audio Engineering for AR/VR Gaming.</p>
                    <div class="teacher-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
            </div>

            <!-- Teacher 6 -->
            <div class="teacher-card" data-category="data-science">
                <img src="{{ asset('images/fizarSir.jpg') }}" alt="Priya Patel" class="teacher-image">
                <div class="teacher-info">
                    <h3 class="teacher-name">Dr. Fizar Ahamed</h3>
                    <h4 class="teacher-position">Associate Professor</h4>
                    <p class="teacher-organization">Daffodil Intenational University</p>
                    <p class="teacher-bio">Fizar Ahamed specializes in IOT and work on many successull project</p>
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
