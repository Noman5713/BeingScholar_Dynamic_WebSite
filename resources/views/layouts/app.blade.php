<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeingScholar - Student Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">BeingScholar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student.login.form') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student.register.form') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>
    @yield('content')
</main>
<footer class="bg-dark text-light pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5>BeingScholar</h5>
                <p>Develop Your Skills, Learn Something New, and Grow Your Skills From Anywhere in the World!</p>
                <p class="mb-1"><strong>Address:</strong> Daffodil International University, Daffodil Smart City, Dhaka-1216</p>
                <p class="mb-1"><strong>Phone:</strong> +880 1571044054</p>
                <p class="mb-1"><strong>Email:</strong> info@beingscholar.com</p>
            </div>
            <div class="col-md-2 mb-3">
                <h6>Explore</h6>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="/about" class="text-light text-decoration-none">About</a></li>
                    <li><a href="/courses" class="text-light text-decoration-none">Courses</a></li>
                    <li><a href="/contact" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-3">
                <h6>Resources</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light text-decoration-none">Job Guidance</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Privacy Policy</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Terms & Conditions</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Refund Policy</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h6>Student Support</h6>
                <p>Working to bring significant changes in online-based learning by doing extensive research for course curriculum preparation, student engagements, and looking forward to the flexible education!</p>
                <div>
                    <a href="#" class="text-light me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-light me-2"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="text-light me-2"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <small>&copy; {{ date('Y') }} BeingScholar. All rights reserved.</small>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optionally include Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
