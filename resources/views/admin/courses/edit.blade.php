<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course - BeingScholar Admin</title>
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
        .current-image {
            max-width: 200px;
            border-radius: 8px;
            margin-top: 10px;
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
                    <h1 class="h2">Edit Course</h1>
                    <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Back to Courses
                    </a>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Course Information</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.courses.update', $course) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Course Title *</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $course->title) }}" required>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description *</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description', $course->description) }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="instructor" class="form-label">Instructor *</label>
                                                <input type="text" class="form-control @error('instructor') is-invalid @enderror" id="instructor" name="instructor" value="{{ old('instructor', $course->instructor) }}" required>
                                                @error('instructor')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="duration" class="form-label">Duration *</label>
                                                <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ old('duration', $course->duration) }}" placeholder="e.g., 8 weeks, 40 hours" required>
                                                @error('duration')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="level" class="form-label">Level *</label>
                                                <select class="form-select @error('level') is-invalid @enderror" id="level" name="level" required>
                                                    <option value="">Select Level</option>
                                                    <option value="Beginner" {{ old('level', $course->level) == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                                                    <option value="Intermediate" {{ old('level', $course->level) == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                                    <option value="Advanced" {{ old('level', $course->level) == 'Advanced' ? 'selected' : '' }}>Advanced</option>
                                                </select>
                                                @error('level')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="price" class="form-label">Price ($) *</label>
                                                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $course->price) }}" required>
                                                @error('price')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="prerequisites" class="form-label">Prerequisites</label>
                                        <textarea class="form-control @error('prerequisites') is-invalid @enderror" id="prerequisites" name="prerequisites" rows="3">{{ old('prerequisites', $course->prerequisites) }}</textarea>
                                        @error('prerequisites')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="banner_image" class="form-label">Banner Image</label>
                                        <input type="file" class="form-control @error('banner_image') is-invalid @enderror" id="banner_image" name="banner_image" accept="image/*">
                                        @error('banner_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="form-text text-muted">Recommended size: 800x400px, Max: 2MB</small>
                                        
                                        @if($course->banner_image)
                                            <div class="mt-2">
                                                <label class="form-label">Current Image:</label>
                                                <img src="{{ asset('storage/' . $course->banner_image) }}" alt="Current Banner" class="current-image d-block">
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="max_students" class="form-label">Max Students</label>
                                        <input type="number" class="form-control @error('max_students') is-invalid @enderror" id="max_students" name="max_students" value="{{ old('max_students', $course->max_students) }}" min="1">
                                        @error('max_students')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="batch_number" class="form-label">Batch Number</label>
                                        <input type="text" class="form-control @error('batch_number') is-invalid @enderror" id="batch_number" name="batch_number" value="{{ old('batch_number', $course->batch_number) }}" placeholder="e.g., Batch 01">
                                        @error('batch_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="start_date" class="form-label">Start Date</label>
                                                <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date', $course->start_date?->format('Y-m-d')) }}">
                                                @error('start_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="end_date" class="form-label">End Date</label>
                                                <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ old('end_date', $course->end_date?->format('Y-m-d')) }}">
                                                @error('end_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Update Course
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 