<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course - BeingScholar Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            background: #2c3e50;
        }
        .sidebar .nav-link {
            color: #ecf0f1;
            padding: 15px 20px;
            border-radius: 0;
        }
        .sidebar .nav-link:hover {
            background: #34495e;
            color: #fff;
        }
        .sidebar .nav-link.active {
            background: #3498db;
            color: #fff;
        }
        .main-content {
            background: #f8f9fa;
            min-height: 100vh;
        }
        .course-banner {
            max-width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <div class="text-center mb-4">
                        <h4 class="text-white">BeingScholar</h4>
                        <p class="text-muted">Admin Panel</p>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tachometer-alt me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.courses.index') }}">
                                <i class="fas fa-book me-2"></i>
                                Manage Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.users') }}">
                                <i class="fas fa-users me-2"></i>
                                Manage Users
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Course Details</h1>
                    <div>
                        <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-warning">
                            <i class="fas fa-edit me-2"></i>Edit
                        </a>
                        <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Back to Courses
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">{{ $course->title }}</h5>
                            </div>
                            <div class="card-body">
                                @if($course->banner_image)
                                    <img src="{{ asset('storage/' . $course->banner_image) }}" alt="Course Banner" class="course-banner mb-3">
                                @endif
                                
                                <h6>Description:</h6>
                                <p>{{ $course->description }}</p>
                                
                                @if($course->prerequisites)
                                    <h6>Prerequisites:</h6>
                                    <p>{{ $course->prerequisites }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Course Information</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-sm">
                                    <tr>
                                        <td><strong>Instructor:</strong></td>
                                        <td>{{ $course->instructor }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Duration:</strong></td>
                                        <td>{{ $course->duration }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Level:</strong></td>
                                        <td><span class="badge bg-info">{{ $course->level }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Price:</strong></td>
                                        <td>{{ $course->formatted_price }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Status:</strong></td>
                                        <td><span class="badge bg-{{ $course->status === 'active' ? 'success' : 'secondary' }}">{{ ucfirst($course->status) }}</span></td>
                                    </tr>
                                    @if($course->batch_number)
                                    <tr>
                                        <td><strong>Batch:</strong></td>
                                        <td>{{ $course->batch_number }}</td>
                                    </tr>
                                    @endif
                                    @if($course->max_students)
                                    <tr>
                                        <td><strong>Max Students:</strong></td>
                                        <td>{{ $course->max_students }}</td>
                                    </tr>
                                    @endif
                                    @if($course->start_date)
                                    <tr>
                                        <td><strong>Start Date:</strong></td>
                                        <td>{{ $course->start_date->format('M j, Y') }}</td>
                                    </tr>
                                    @endif
                                    @if($course->end_date)
                                    <tr>
                                        <td><strong>End Date:</strong></td>
                                        <td>{{ $course->end_date->format('M j, Y') }}</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td><strong>Created:</strong></td>
                                        <td>{{ $course->created_at->format('M j, Y') }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 