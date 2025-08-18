@extends('layouts.main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/courseContent.css') }}">
@endsection
@section('content')

    <div class="course-content-main">
        <div class="video-area">
            <div class="main-course-title">{{ $course->title }}</div>
            <div class="video-player">
                @if($currentLesson && $currentLesson->type === 'video')
                    <video src="{{ $currentLesson->content_url ?? '' }}" controls
                        poster="{{ asset($course->banner_image ?? 'images/Course_Card_Banner/default.png') }}"></video>
                @elseif($currentLesson && $currentLesson->type === 'pdf')
                    <div class="pdf-viewer">
                        <h3>{{ $currentLesson->title }}</h3>
                        <p>{{ $currentLesson->description }}</p>
                        @if($currentLesson->content_url)
                            <a href="{{ asset($currentLesson->content_url) }}" target="_blank" class="pdf-link">Open PDF</a>
                        @endif
                    </div>
                @else
                    <div class="no-content">
                        <h3>{{ $currentLesson ? $currentLesson->title : 'Welcome to the Course' }}</h3>
                        <p>{{ $currentLesson ? $currentLesson->description : 'Select a lesson to start learning.' }}</p>
                    </div>
                @endif
            </div>
            <div class="nav-btns">
                <button class="nav-btn" id="prevBtn">Previous</button>
                <button class="nav-btn" id="nextBtn">Next</button>
            </div>
        </div>
        <div class="sidebar">
            @php
                $totalLessons = $course->activeModules->sum(function ($module) {
                    return $module->activeLessons->count();
                });
                $currentModuleIndex = 1;
                $currentLessonIndex = 1;

                if ($currentLesson) {
                    foreach ($course->activeModules as $index => $module) {
                        if ($module->activeLessons->contains('id', $currentLesson->id)) {
                            $currentModuleIndex = $index + 1;
                            $currentLessonIndex = $module->activeLessons->search(function ($lesson) use ($currentLesson) {
                                return $lesson->id === $currentLesson->id;
                            }) + 1;
                            break;
                        }
                    }
                }
            @endphp

            <div class="progress-label">Running Module : {{ $currentModuleIndex }}</div>
            <div class="progress-bar-bg">
                <div class="progress-bar-fill"
                    style="width: {{ $totalLessons > 0 ? (($currentLessonIndex / $totalLessons) * 100) : 0 }}%;"></div>
            </div>
            <div style="color:#888; font-size:0.95rem; margin-bottom:16px;">{{ $currentLessonIndex }}/{{ $totalLessons }}
            </div>
            <div class="lesson-list">
                @foreach($course->activeModules as $moduleIndex => $module)
                    <div class="module-header">{{ $module->title }}</div>
                    @foreach($module->activeLessons as $lessonIndex => $lesson)
                        <div class="lesson-card {{ $currentLesson && $currentLesson->id === $lesson->id ? 'active' : '' }}">
                            <a href="{{ route('course.lesson', ['courseId' => $course->id, 'lessonId' => $lesson->id]) }}"
                                class="lesson-link">
                                <div class="lesson-card-title">{{ $lesson->title }}</div>
                                <div class="lesson-card-details">
                                    {{ ucfirst($lesson->type) }} • {{ $lesson->duration ?? 'Study Material' }}
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        @if($currentLesson)
            const currentLessonId = {{ $currentLesson->id }};
            const allLessons = [
                @foreach($course->activeModules as $module)
                    @foreach($module->activeLessons as $lesson)
                        {{ $lesson->id }},
                    @endforeach
                @endforeach
                ];

            const currentIndex = allLessons.indexOf(currentLessonId);

            // Previous button
            if (currentIndex > 0) {
                prevBtn.addEventListener('click', function () {
                    const prevLessonId = allLessons[currentIndex - 1];
                    window.location.href = "{{ route('course.lesson', ['courseId' => $course->id, 'lessonId' => '__LESSON_ID__']) }}".replace('__LESSON_ID__', prevLessonId);
                });
            } else {
                prevBtn.disabled = true;
                prevBtn.style.opacity = '0.5';
            }

            // Next button
            if (currentIndex < allLessons.length - 1) {
                nextBtn.addEventListener('click', function () {
                    const nextLessonId = allLessons[currentIndex + 1];
                    window.location.href = "{{ route('course.lesson', ['courseId' => $course->id, 'lessonId' => '__LESSON_ID__']) }}".replace('__LESSON_ID__', nextLessonId);
                });
            } else {
                nextBtn.disabled = true;
                nextBtn.style.opacity = '0.5';
            }
        @else
            // If no lesson selected, show first lesson on next click
            nextBtn.addEventListener('click', function () {
                @if($course->activeModules->count() > 0 && $course->activeModules->first()->activeLessons->count() > 0)
                    const firstLessonId = {{ $course->activeModules->first()->activeLessons->first()->id }};
                    window.location.href = "{{ route('course.lesson', ['courseId' => $course->id, 'lessonId' => '__LESSON_ID__']) }}".replace('__LESSON_ID__', firstLessonId);
                @endif
                });

            prevBtn.disabled = true;
            prevBtn.style.opacity = '0.5';
        @endif
    });
</script>