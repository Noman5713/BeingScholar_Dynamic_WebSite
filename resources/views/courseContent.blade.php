<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Lesson - BeingScholar</title>
    <style>
        body {
            margin: 0;
            color: #333;
            font-family: 'Segoe UI', Arial, sans-serif;
            min-height: 100vh;
            background: #f8f9fa;
        }

        .header-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 32px;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 1.6rem;
            font-weight: bold;
            color: #2b6cb0;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-name {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            background: #e0e0e0;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .course-layout {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 20px;
            padding: 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Lesson Sidebar */
        .lessons-sidebar {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            height: fit-content;
            position: sticky;
            top: 90px;
        }

        .course-info {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
        }

        .course-title {
            font-size: 18px;
            font-weight: 700;
            color: mediumslateblue;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .course-progress {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #666;
        }

        .progress-bar-small {
            flex: 1;
            height: 6px;
            background: #e0e0e0;
            border-radius: 3px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: mediumslateblue;
            border-radius: 3px;
        }

        .lessons-list {
            max-height: 600px;
            overflow-y: auto;
        }

        .lesson-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-bottom: 8px;
            border: 2px solid transparent;
        }

        .lesson-item:hover {
            background: #f8f9fa;
            border-color: #e0e0e0;
        }

        .lesson-item.active {
            background: #e8f2ff;
            border-color: mediumslateblue;
        }

        .lesson-item.completed {
            background: #f0f9f0;
        }

        .lesson-number {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
            color: #666;
            flex-shrink: 0;
        }

        .lesson-number.active {
            background: mediumslateblue;
            color: white;
        }

        .lesson-number.completed {
            background: #28a745;
            color: white;
        }

        .lesson-details {
            flex: 1;
        }

        .lesson-title {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            margin-bottom: 4px;
        }

        .lesson-type {
            font-size: 12px;
            color: #666;
        }

        /* Main Content Area */
        .lesson-content {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Video Section */
        .video-section {
            background: #000;
            position: relative;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .video-placeholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #333;
            color: white;
            font-size: 18px;
        }

        .play-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-left: 4px;
        }

        .play-button:hover {
            background: white;
            transform: scale(1.05);
        }

        /* Content Body */
        .content-body {
            padding: 30px;
        }

        .lesson-header {
            margin-bottom: 25px;
        }

        .current-lesson-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .lesson-info {
            display: flex;
            gap: 20px;
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .lesson-description {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 30px;
        }

        /* Content Tabs */
        .content-tabs {
            display: flex;
            gap: 5px;
            margin-bottom: 25px;
            border-bottom: 2px solid #f0f0f0;
        }

        .tab-button {
            background: none;
            border: none;
            padding: 12px 20px;
            font-size: 14px;
            font-weight: 600;
            color: #666;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: all 0.2s ease;
        }

        .tab-button.active {
            color: mediumslateblue;
            border-bottom-color: mediumslateblue;
        }

        .tab-button:hover {
            color: #333;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* PDF Section */
        .pdf-section {
            text-align: center;
            padding: 40px 20px;
        }

        .pdf-icon {
            font-size: 48px;
            color: #dc3545;
            margin-bottom: 15px;
        }

        .pdf-info {
            margin-bottom: 20px;
        }

        .pdf-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .pdf-size {
            font-size: 14px;
            color: #666;
        }

        .download-btn {
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 24px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .download-btn:hover {
            background: #c82333;
            transform: translateY(-2px);
        }

        /* Quiz Section */
        .quiz-section {
            padding: 20px 0;
        }

        .quiz-question {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .question-text {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .quiz-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .quiz-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .quiz-option:hover {
            border-color: mediumslateblue;
        }

        .quiz-option.selected {
            border-color: mediumslateblue;
            background: #e8f2ff;
        }

        .quiz-option.correct {
            border-color: #28a745;
            background: #d4edda;
        }

        .quiz-option.incorrect {
            border-color: #dc3545;
            background: #f8d7da;
        }

        .quiz-actions {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .quiz-btn {
            background: mediumslateblue;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quiz-btn:hover {
            background: #7b68ee;
        }

        .quiz-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        /* Navigation */
        .lesson-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            background: #f8f9fa;
            border-top: 1px solid #e0e0e0;
        }

        .nav-btn {
            background: black;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-btn:hover {
            background: #333;
            transform: translateY(-1px);
        }

        .nav-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        .complete-btn {
            background: #28a745;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .complete-btn:hover {
            background: #218838;
            transform: translateY(-1px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .course-layout {
                grid-template-columns: 1fr;
                padding: 15px;
            }

            .lessons-sidebar {
                position: static;
                order: 2;
                margin-top: 20px;
            }

            .header-bar {
                padding: 12px 15px;
            }

            .content-body {
                padding: 20px;
            }

            .lesson-navigation {
                padding: 15px 20px;
                flex-direction: column;
                gap: 15px;
            }

            .content-tabs {
                flex-wrap: wrap;
            }

            .tab-button {
                flex: 1;
                min-width: 80px;
            }
        }

        /* Custom Scrollbar */
        .lessons-list::-webkit-scrollbar {
            width: 6px;
        }

        .lessons-list::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .lessons-list::-webkit-scrollbar-thumb {
            background: mediumslateblue;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <div class="header-bar">
        <div class="logo">BeingScholar</div>
       <div class="user-profile">
            <span class="user-name">{{ Auth::user()->name ?? 'Student' }}</span>
            <div class="avatar">
                <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" alt="User Avatar" />
            </div>
        </div>
        </div>
    </div>

    <div class="course-layout">
        <!-- Lessons Sidebar -->
        <div class="lessons-sidebar">
            <div class="course-info">
                <div class="course-title">Java Spring Boot Complete Course</div>
                <div class="course-progress">
                    <div class="progress-bar-small">
                        <div class="progress-fill" style="width: 35%;"></div>
                    </div>
                    <span>7/20</span>
                </div>
            </div>

            <div class="lessons-list">
                <div class="lesson-item completed" onclick="selectLesson(1, 'Introduction to Java', 'video')">
                    <div class="lesson-number completed">✓</div>
                    <div class="lesson-details">
                        <div class="lesson-title">Introduction to Java</div>
                        <div class="lesson-type"> Video • 15 min</div>
                    </div>
                </div>

                <div class="lesson-item completed" onclick="selectLesson(2, 'Java Basics', 'video')">
                    <div class="lesson-number completed">✓</div>
                    <div class="lesson-details">
                        <div class="lesson-title">Java Basics</div>
                        <div class="lesson-type"> Video • 22 min</div>
                    </div>
                </div>

                <div class="lesson-item completed" onclick="selectLesson(3, 'Java Syntax Guide', 'pdf')">
                    <div class="lesson-number completed">✓</div>
                    <div class="lesson-details">
                        <div class="lesson-title">Java Syntax Guide</div>
                        <div class="lesson-type"> PDF • Study Material</div>
                    </div>
                </div>

                <div class="lesson-item active" onclick="selectLesson(4, 'Object-Oriented Programming', 'video')">
                    <div class="lesson-number active">4</div>
                    <div class="lesson-details">
                        <div class="lesson-title">Object-Oriented Programming</div>
                        <div class="lesson-type"> Video • 28 min</div>
                    </div>
                </div>

                <div class="lesson-item" onclick="selectLesson(5, 'OOP Quiz', 'quiz')">
                    <div class="lesson-number">5</div>
                    <div class="lesson-details">
                        <div class="lesson-title">OOP Quiz</div>
                        <div class="lesson-type"> Quiz • 5 questions</div>
                    </div>
                </div>

                <div class="lesson-item" onclick="selectLesson(6, 'Spring Framework Intro', 'video')">
                    <div class="lesson-number">6</div>
                    <div class="lesson-details">
                        <div class="lesson-title">Spring Framework Introduction</div>
                        <div class="lesson-type"> Video • 35 min</div>
                    </div>
                </div>

                <div class="lesson-item" onclick="selectLesson(7, 'Spring Boot Setup', 'video')">
                    <div class="lesson-number">7</div>
                    <div class="lesson-details">
                        <div class="lesson-title">Spring Boot Setup</div>
                        <div class="lesson-type"> Video • 18 min</div>
                    </div>
                </div>

                <div class="lesson-item" onclick="selectLesson(8, 'Spring Boot Reference', 'pdf')">
                    <div class="lesson-number">8</div>
                    <div class="lesson-details">
                        <div class="lesson-title">Spring Boot Reference</div>
                        <div class="lesson-type"> PDF • Documentation</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="lesson-content">
            <!-- Video Section -->
            <div class="video-section" id="videoSection">
                <div class="video-container">
                    <!-- YouTube embed example -->
                    <iframe id="videoFrame" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0"
                        allowfullscreen style="display: none;"></iframe>

                    <!-- Video placeholder -->
                    <div class="video-placeholder" id="videoPlaceholder">
                        <div class="play-button" onclick="loadVideo()">
                            <span style="font-size: 20px;">▶</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <div class="lesson-header">
                    <h1 class="current-lesson-title" id="lessonTitle">Object-Oriented Programming in Java</h1>
                    <div class="lesson-info">
                        <span> 28 minutes</span>
                        <span> Lesson 4 of 20</span>
                        <span> Beginner Level</span>
                    </div>
                </div>

                <div class="lesson-description" id="lessonDescription">
                    Learn the fundamental concepts of Object-Oriented Programming (OOP) in Java. This lesson covers
                    classes, objects, inheritance, polymorphism, and encapsulation with practical examples.
                </div>

                <!-- Content Tabs -->
                <div class="content-tabs">
                    <button class="tab-button active" onclick="showTab('overview')">Overview</button>
                    <button class="tab-button" onclick="showTab('materials')"> Materials</button>
                    <button class="tab-button" onclick="showTab('quiz')"> Practice Quiz</button>
                </div>

                <!-- Overview Tab -->
                <div class="tab-content active" id="overview">
                    <h3>What You'll Learn</h3>
                    <ul style="line-height: 1.8; color: #555;">
                        <li>Understanding Classes and Objects</li>
                        <li>Creating and using constructors</li>
                        <li>Implementing inheritance and polymorphism</li>
                        <li>Working with access modifiers</li>
                        <li>Best practices for OOP in Java</li>
                    </ul>

                    <div
                        style="background: #e8f4fd; border-left: 4px solid #2196f3; padding: 15px; border-radius: 4px; margin: 20px 0;">
                        <strong> Tip:</strong> Make sure to practice coding along with the video. Create your own
                        examples to reinforce the concepts!
                    </div>
                </div>

                <!-- Materials Tab -->
                <div class="tab-content" id="materials">
                    <div class="pdf-section">
                        <!-- PDF icon removed -->
                        <div class="pdf-info">
                            <div class="pdf-title">OOP Concepts Reference Guide</div>
                            <div class="pdf-size">PDF • 2.1 MB • 15 pages</div>
                        </div>
                        <a href="#" class="download-btn" onclick="downloadPDF()">
                            <span></span>
                            Download PDF
                        </a>
                    </div>

                    <div
                        style="background: #fff3cd; border-left: 4px solid #ffc107; padding: 15px; border-radius: 4px; margin-top: 20px;">
                        <strong> Study Material:</strong> This PDF contains detailed explanations, code examples, and
                        exercises to practice OOP concepts.
                    </div>
                </div>

                <!-- Quiz Tab -->
                <div class="tab-content" id="quiz">
                    <div class="quiz-section">
                        <div class="quiz-question">
                            <div class="question-text">1. What is the main purpose of encapsulation in OOP?</div>
                            <div class="quiz-options">
                                <label class="quiz-option">
                                    <input type="radio" name="q1" value="a">
                                    <span>To make code run faster</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q1" value="b">
                                    <span>To hide internal implementation details</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q1" value="c">
                                    <span>To reduce memory usage</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q1" value="d">
                                    <span>To create multiple objects</span>
                                </label>
                            </div>
                        </div>

                        <div class="quiz-question">
                            <div class="question-text">2. Which keyword is used to inherit from a parent class in Java?
                            </div>
                            <div class="quiz-options">
                                <label class="quiz-option">
                                    <input type="radio" name="q2" value="a">
                                    <span>implements</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q2" value="b">
                                    <span>extends</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q2" value="c">
                                    <span>inherit</span>
                                </label>
                                <label class="quiz-option">
                                    <input type="radio" name="q2" value="d">
                                    <span>super</span>
                                </label>
                            </div>
                        </div>

                        <div class="quiz-actions">
                            <button class="quiz-btn" onclick="checkAnswers()">Check Answers</button>
                            <button class="quiz-btn" onclick="resetQuiz()">Reset Quiz</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="lesson-navigation">
                <button class="nav-btn" onclick="previousLesson()" id="prevBtn">
                    Previous Lesson
                </button>

                <button class="complete-btn" onclick="markComplete()">
                    Mark Complete
                </button>

                <button class="nav-btn" onclick="nextLesson()" id="nextBtn">
                    Next Lesson
                </button>
            </div>
        </div>
    </div>

    <script>
        let currentLesson = 4;
        const lessons = [
            { id: 1, title: 'Introduction to Java', type: 'video', completed: true },
            { id: 2, title: 'Java Basics', type: 'video', completed: true },
            { id: 3, title: 'Java Syntax Guide', type: 'pdf', completed: true },
            { id: 4, title: 'Object-Oriented Programming', type: 'video', completed: false },
            { id: 5, title: 'OOP Quiz', type: 'quiz', completed: false },
            { id: 6, title: 'Spring Framework Introduction', type: 'video', completed: false },
            { id: 7, title: 'Spring Boot Setup', type: 'video', completed: false },
            { id: 8, title: 'Spring Boot Reference', type: 'pdf', completed: false }
        ];

        function selectLesson(lessonId, title, type) {
            // Update lesson selection
            document.querySelectorAll('.lesson-item').forEach(item => {
                item.classList.remove('active');
            });
            event.currentTarget.classList.add('active');

            // Update content
            document.getElementById('lessonTitle').textContent = title;
            currentLesson = lessonId;

            // Show appropriate content based on type
            if (type === 'video') {
                document.getElementById('videoSection').style.display = 'block';
                updateLessonInfo(`📹 Video lesson`, `Lesson ${lessonId} of ${lessons.length}`);
            } else if (type === 'pdf') {
                document.getElementById('videoSection').style.display = 'none';
                updateLessonInfo(`📄 PDF Material`, `Lesson ${lessonId} of ${lessons.length}`);
            } else if (type === 'quiz') {
                document.getElementById('videoSection').style.display = 'none';
                updateLessonInfo(`❓ Practice Quiz`, `Lesson ${lessonId} of ${lessons.length}`);
                showTab('quiz');
            }
        }

        function updateLessonInfo(type, lesson) {
            const infoDiv = document.querySelector('.lesson-info');
            infoDiv.innerHTML = `
                <span>${type}</span>
                <span> ${lesson}</span>
                <span> Beginner Level</span>
            `;
        }

        function showTab(tabName) {
            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('active');
            });

            // Show selected tab
            document.getElementById(tabName).classList.add('active');
            event.target.classList.add('active');
        }

        function loadVideo() {
            const iframe = document.getElementById('videoFrame');
            const placeholder = document.getElementById('videoPlaceholder');

            placeholder.style.display = 'none';
            iframe.style.display = 'block';
        }

        function downloadPDF() {
            alert('Downloading PDF... (This would trigger an actual download in a real implementation)');
        }

        function checkAnswers() {
            const q1Answer = document.querySelector('input[name="q1"]:checked');
            const q2Answer = document.querySelector('input[name="q2"]:checked');

            // Reset all options
            document.querySelectorAll('.quiz-option').forEach(option => {
                option.classList.remove('correct', 'incorrect');
            });

            // Check Q1 (correct answer is 'b')
            if (q1Answer) {
                const q1Options = document.querySelectorAll('input[name="q1"]');
                q1Options.forEach(option => {
                    const label = option.parentElement;
                    if (option.value === 'b') {
                        label.classList.add('correct');
                    } else if (option.checked) {
                        label.classList.add(option.value === 'b' ? 'correct' : 'incorrect');
                    }
                });
            }

            // Check Q2 (correct answer is 'b')
            if (q2Answer) {
                const q2Options = document.querySelectorAll('input[name="q2"]');
                q2Options.forEach(option => {
                    const label = option.parentElement;
                    if (option.value === 'b') {
                        label.classList.add('correct');
                    } else if (option.checked) {
                        label.classList.add(option.value === 'b' ? 'correct' : 'incorrect');
                    }
                });
            }
        }

        function resetQuiz() {
            document.querySelectorAll('input[type="radio"]').forEach(input => {
                input.checked = false;
            });
            document.querySelectorAll('.quiz-option').forEach(option => {
                option.classList.remove('correct', 'incorrect');
            });
        }

        function markComplete() {
            const currentLessonItem = document.querySelector('.lesson-item.active .lesson-number');
            currentLessonItem.classList.remove('active');
            currentLessonItem.classList.add('completed');
            currentLessonItem.textContent = '✓';

            const completeBtn = document.querySelector('.complete-btn');
            completeBtn.textContent = '✓ Completed!';
            completeBtn.style.background = '#28a745';

            // Update progress
            updateProgress();

            setTimeout(() => {
                nextLesson();
            }, 1500);
        }

        function previousLesson() {
            if (currentLesson > 1) {
                const prevLesson = lessons[currentLesson - 2];
                selectLesson(prevLesson.id, prevLesson.title, prevLesson.type);
            }
        }