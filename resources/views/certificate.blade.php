<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Portfolio - K. M. Arafat Islam</title>
    <meta name="description" content="Professional certificate portfolio showcasing achievements in software development and technology.">
    <link rel="stylesheet" href="{{ asset('css/certificate.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🏆</text></svg>">
</head>
<body>
    <section class="certificates-section" id="certificates">
        <div class="certificates-container">
            <!-- Header with User Profile -->
            <div class="certificates-header">
                <div class="user-info">
                    <div class="user-avatar">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face" alt="K. M. Arafat Islam" id="userAvatar">
                        <div class="avatar-badge">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="user-details">
                        <h1 class="user-name" id="userName">K. M. Arafat Islam</h1>
                        <p class="user-title">Full-Stack Developer & Tech Specialist</p>
                        <div class="user-stats">
                            <div class="stat">
                                <span class="stat-number" id="completedCourses">8</span>
                                <span class="stat-label">Completed</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number" id="inProgressCourses">2</span>
                                <span class="stat-label">In Progress</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number" id="totalHours">320</span>
                                <span class="stat-label">Study Hours</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number" id="certificatesEarned">8</span>
                                <span class="stat-label">Certificates</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Action Buttons -->
                <div class="quick-actions">
                    <button class="action-btn" onclick="downloadAllCertificates()">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                            <polyline points="7,10 12,15 17,10"/>
                            <line x1="12" y1="15" x2="12" y2="3"/>
                        </svg>
                        Download All
                    </button>
                    <button class="action-btn" onclick="shareProfile()">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="18" cy="5" r="3"/>
                            <circle cx="6" cy="12" r="3"/>
                            <circle cx="18" cy="19" r="3"/>
                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>
                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
                        </svg>
                        Share Profile
                    </button>
                    <button class="action-btn" onclick="viewLearningPath()">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 3v18h18"/>
                            <path d="m19 9-5 5-4-4-3 3"/>
                        </svg>
                        Learning Path
                    </button>
                </div>
            </div>

            <!-- Navigation Tabs -->
            <div class="navigation-tabs">
                <button class="nav-tab active" data-tab="all" onclick="switchTab('all')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14,2 14,8 20,8"/>
                    </svg>
                    All Courses
                </button>
                <button class="nav-tab" data-tab="completed" onclick="switchTab('completed')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12l2 2 4-4"/>
                        <circle cx="12" cy="12" r="10"/>
                    </svg>
                    Completed <span class="count" id="completedCount">8</span>
                </button>
                <button class="nav-tab" data-tab="in-progress" onclick="switchTab('in-progress')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12,6 12,12 16,14"/>
                    </svg>
                    In Progress <span class="count" id="progressCount">2</span>
                </button>
                <button class="nav-tab" data-tab="certificates" onclick="switchTab('certificates')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    Certificates
                </button>
                <button class="nav-tab" data-tab="learning-details" onclick="switchTab('learning-details')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M12 1v6m0 6v6m11-7h-6m-6 0H1"/>
                    </svg>
                    Learning Details
                </button>
            </div>

            <!-- Search and Filter Controls -->
            <div class="certificates-controls">
                <div class="search-filter">
                    <div class="search-box">
                        <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                        <input type="text" id="searchInput" placeholder="Search courses, skills, or certificates..." autocomplete="off">
                        <button class="clear-search" id="clearSearch" onclick="clearSearch()">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="18" y1="6" x2="6" y2="18"/>
                                <line x1="6" y1="6" x2="18" y2="18"/>
                            </svg>
                        </button>
                    </div>
                    <select class="filter-select" id="categoryFilter">
                        <option value="all">All Categories</option>
                        <option value="programming">Programming</option>
                        <option value="web-development">Web Development</option>
                        <option value="data-science">Data Science</option>
                        <option value="cloud">Cloud Computing</option>
                        <option value="mobile">Mobile Development</option>
                        <option value="ai-ml">AI & Machine Learning</option>
                    </select>
                    <select class="filter-select" id="levelFilter">
                        <option value="all">All Levels</option>
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                        <option value="expert">Expert</option>
                    </select>
                </div>
                <div class="view-toggle">
                    <button class="view-btn active" data-view="grid" onclick="toggleView('grid')">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="7" height="7"/>
                            <rect x="14" y="3" width="7" height="7"/>
                            <rect x="14" y="14" width="7" height="7"/>
                            <rect x="3" y="14" width="7" height="7"/>
                        </svg>
                    </button>
                    <button class="view-btn" data-view="list" onclick="toggleView('list')">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="8" y1="6" x2="21" y2="6"/>
                            <line x1="8" y1="12" x2="21" y2="12"/>
                            <line x1="8" y1="18" x2="21" y2="18"/>
                            <line x1="3" y1="6" x2="3.01" y2="6"/>
                            <line x1="3" y1="12" x2="3.01" y2="12"/>
                            <line x1="3" y1="18" x2="3.01" y2="18"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="certificates-main">
                <!-- All Courses Tab Content -->
                <div class="tab-content active" id="all-content">
                    <div class="certificates-grid" id="certificatesGrid">
                        <!-- Completed Course 1 -->
                        <div class="certificate-card completed" data-course-id="js-advanced" data-category="web-development" data-level="advanced" data-status="completed">
                            <div class="certificate-header">
                                <div class="certificate-icon">JS</div>
                                <div class="certificate-status completed">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 12l2 2 4-4"/>
                                        <circle cx="12" cy="12" r="10"/>
                                    </svg>
                                    Completed
                                </div>
                            </div>
                            <div class="certificate-content">
                                <h3 class="certificate-title">Advanced JavaScript Development</h3>
                                <p class="certificate-issuer">Tech Academy Pro</p>
                                <div class="certificate-details">
                                    <div class="detail-item">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                            <line x1="16" y1="2" x2="16" y2="6"/>
                                            <line x1="8" y1="2" x2="8" y2="6"/>
                                            <line x1="3" y1="10" x2="21" y2="10"/>
                                        </svg>
                                        <span>Completed: Dec 15, 2024</span>
                                    </div>
                                    <div class="detail-item">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"/>
                                            <polyline points="12,6 12,12 16,14"/>
                                        </svg>
                                        <span>Duration: 40 hours</span>
                                    </div>
                                    <div class="detail-item">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                        </svg>
                                        <span>Grade: A+ (98%)</span>
                                    </div>
                                </div>
                                <div class="skills-learned">
                                    <span class="skills-label">Skills Learned:</span>
                                    <div class="skills-tags">
                                        <span class="skill-tag">ES6+</span>
                                        <span class="skill-tag">Async/Await</span>
                                        <span class="skill-tag">Modules</span>
                                        <span class="skill-tag">Testing</span>
                                    </div>
                                </div>
                                <div class="certificate-actions">
                                    <button class="cert-btn cert-btn-primary" onclick="downloadCertificate('js-advanced')">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                            <polyline points="7,10 12,15 17,10"/>
                                            <line x1="12" y1="15" x2="12" y2="3"/>
                                        </svg>
                                        Download
                                    </button>
                                    <button class="cert-btn cert-btn-secondary" onclick="verifyCertificate('CERT-JS-2024-001')">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M9 12l2 2 4-4"/>
                                            <circle cx="12" cy="12" r="10"/>
                                        </svg>
                                        Verify
                                    </button>
                                    <button class="cert-btn cert-btn-outline" onclick="viewDetails('js-advanced')">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                            <circle cx="12" cy="12" r="3"/>
                                        </svg>
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Completed Course 2 -->
                        <div class="certificate-card completed" data-course-id="python-data" data-category="programming" data-level="intermediate" data-status="completed">
                            <div class="certificate-header">
                                <div class="certificate-icon">PY</div>
                                <div class="certificate-status completed">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 12l2 2 4-4"/>
                                        <circle cx="12" cy="12" r="10"/>
                                    </svg>
                                    Completed
                                </div>
                            </div>
                            <div class="certificate-content">
                                <h3 class="certificate-title">Python for Data Science</h3>
                                <p class="certificate-issuer">DataCamp Professional</p>
                                <div class="certificate-details">
                                    <div class="detail-item">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                            <line x1="16" y1="2" x2="16" y2="6"/>
                                            <line x1="8" y1="2" x2="8" y2="6"/>
                                            <line x1="3" y1="10" x2="21" y2="10"/>
                                        </svg>
                                        <span>Completed: Nov 28, 2024</span>
                                    </div>
                                    <div class="detail-item">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"/>
                                            <polyline points="12,6 12,12 16,14"/>
                                        </svg>
                                        <span>Duration: 35 hours</span>
                                    </div>
                                    <div class="detail-item">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                        </svg>
                                        <span>Grade: A+ (96%)</span>
                                    </div>
                                </div>
                                <div class="skills-learned">
                                    <span class="skills-label">Skills Learned:</span>
                                    <div class="skills-tags">
                                        <span class="skill-tag">Pandas</span>
                                        <span class="skill-tag">NumPy</span>
                                        <span class="skill-tag">Matplotlib</span>
                                        <span class="skill-tag">Jupyter</span>
                                    </div>
                                </div>
                                <div class="certificate-actions">
                                    <button class="cert-btn cert-btn-primary" onclick="downloadCertificate('python-data')">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                            <polyline points="7,10 12,15 17,10"/>
                                            <line x1="12" y1="15" x2="12" y2="3"/>
                                        </svg>
                                        Download
                                    </button>
                                    <button class="cert-btn cert-btn-secondary" onclick="verifyCertificate('CERT-PY-2024-002')">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M9 12l2 2 4-4"/>
                                            <circle cx="12" cy="12" r="10"/>
                                        </svg>
                                        Verify
                                    </button>
                                    <button class="cert-btn cert-btn-outline" onclick="viewDetails('python-data')">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                            <circle cx="12" cy="12" r="3"/>
                                        </svg>
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- In Progress Course 1 -->
                        <div class="certificate-card in-progress" data-course-id="ml-specialization" data-category="ai-ml" data-level="advanced" data-status="in-progress">
                            <div class="certificate-header">
                                <div class="certificate-icon">ML</div>
                                <div class="certificate-status in-progress">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <polyline points="12,6 12,12 16,14"/>
                                    </svg>
                                    In Progress
                                </div>
                            </div>
                            <div class="certificate-content">
                                <h3 class="certificate-title">Machine Learning Specialization</h3>
                                <p class="certificate-issuer">Stanford Online</p>
                                <div class="progress-bar-container">
                                    <div class="progress-info">
                                        <span class="progress-label">Progress</span>
                                        <span class="progress-percentage">75%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 75%"></div>
                                    </div>
                                    <div class="progress-details">
                                        <span>15 of 20 modules completed</span>
                                    </div>
                                </div>
                                <div class="certificate-details">
                                    <div class="detail-item">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                            <line x1="16" y1="2" x2="16" y2="6"/>
                                            <line x1="8" y1="2" x2="8" y2="6"/>
                                            <line x1="3" y1="10" x2="21" y2="10"/>
                                        </svg>
                                        <span>Started: Jul 15, 2024</span>
                                    </div>
                                    <div class="detail-item">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"/>
                                            <polyline points="12,6 12,12 16,14"/>
                                        </svg>
                                        <span>Expected: Aug 30, 2025</span>
                                    </div>
                                    <div class="detail-item">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                        </svg>
                                        <span>Current Grade: A+ (97%)</span>
                                    </div>
                                </div>
                                <div class="skills-learned">
                                    <span class="skills-label">Learning:</span>
                                    <div class="skills-tags">
                                        <span class="skill-tag">TensorFlow</span>
                                        <span class="skill-tag">Neural Networks</span>
                                        <span class="skill-tag">Deep Learning</span>
                                        <span class="skill-tag">Computer Vision</span>
                                    </div>
                                </div>
                                <div class="certificate-actions">
                                    <button class="cert-btn cert-btn-primary" onclick="continueCourse('ml-specialization')">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polygon points="5,3 19,12 5,21"/>
                                        </svg>
                                        Continue Learning
                                    </button>
                                    <button class="cert-btn cert-btn-outline" onclick="viewProgress('ml-specialization')">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M3 3v18h18"/>
                                            <path d="m19 9-5 5-4-4-3 3"/>
                                        </svg>
                                        View Progress
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- More courses would be added here... -->
                        
                    </div>
                </div>

                <!-- Learning Details Tab Content -->
                <div class="tab-content" id="learning-details-content">
                    <div class="learning-analytics">
                        <div class="analytics-grid">
                            <!-- Learning Progress Chart -->
                            <div class="analytics-card">
                                <h3>Learning Progress Over Time</h3>
                                <div class="chart-container">
                                    <canvas id="progressChart" width="400" height="200"></canvas>
                                </div>
                            </div>

                            <!-- Skills Breakdown -->
                            <div class="analytics-card">
                                <h3>Skills Breakdown</h3>
                                <div class="skills-breakdown">
                                    <div class="skill-item">
                                        <div class="skill-info">
                                            <span class="skill-name">JavaScript</span>
                                            <span class="skill-level">Expert</span>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="skill-bar" style="width: 95%"></div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info">
                                            <span class="skill-name">Python</span>
                                            <span class="skill-level">Advanced</span>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="skill-bar" style="width: 88%"></div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info">
                                            <span class="skill-name">Machine Learning</span>
                                            <span class="skill-level">Intermediate</span>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="skill-bar" style="width: 75%"></div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-info">
                                            <span class="skill-name">Cloud Computing</span>
                                            <span class="skill-level">Intermediate</span>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="skill-bar" style="width: 70%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Learning Timeline -->
                            <div class="analytics-card full-width">
                                <h3>Learning Journey Timeline</h3>
                                <div class="timeline">
                                    <div class="timeline-item completed">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <div class="timeline-date">Dec 2024</div>
                                            <div class="timeline-title">Advanced JavaScript Development</div>
                                            <div class="timeline-description">Mastered ES6+, async programming, and modern JavaScript frameworks</div>
                                        </div>
                                    </div>
                                    <div class="timeline-item completed">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <div class="timeline-date">Nov 2024</div>
                                            <div class="timeline-title">Python for Data Science</div>
                                            <div class="timeline-description">Learned data analysis, visualization, and machine learning basics</div>
                                        </div>
                                    </div>
                                    <div class="timeline-item in-progress">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <div class="timeline-date">Jul 2024 - Present</div>
                                            <div class="timeline-title">Machine Learning Specialization</div>
                                            <div class="timeline-description">Currently learning neural networks and deep learning (75% complete)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Study Statistics -->
                            <div class="analytics-card">
                                <h3>Study Statistics</h3>
                                <div class="stats-grid">
                                    <div class="stat-item">
                                        <div class="stat-value">320</div>
                                        <div class="stat-label">Total Hours</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-value">95%</div>
                                        <div class="stat-label">Avg Grade</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-value">12</div>
                                        <div class="stat-label">Projects</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-value">8</div>
                                        <div class="stat-label">Certificates</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificate Detail Modal -->
    <div class="modal-overlay" id="courseModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">Certificate Details</h3>
                <button class="modal-close" id="modalClose" onclick="closeModal()">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"/>
                        <line x1="6" y1="6" x2="18" y2="18"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body" id="courseDetails">
                <!-- Dynamic content will be loaded here -->
            </div>
        </div>
    </div>

    <script>
        // State
        let currentTab = 'all';
        let currentView = 'grid';
        let allCourses = [];

        document.addEventListener('DOMContentLoaded', () => initializeApp());

        function initializeApp() {
            loadCourseData();
            setupEventListeners();
            enhanceAccessibility();
            filterCourses();
            updateDynamicCounters();
            animateOnLoad();
            console.log('Certificate dashboard initialized');
        }

        function loadCourseData() {
            allCourses = Array.from(document.querySelectorAll('.certificate-card')).map(card => ({
                id: card.dataset.courseId || card.querySelector('.certificate-title')?.textContent?.toLowerCase().replace(/\s+/g,'-') || '',
                status: card.dataset.status,
                category: card.dataset.category,
                level: card.dataset.level,
                title: card.querySelector('.certificate-title')?.textContent?.trim() || 'Untitled',
                issuer: card.querySelector('.certificate-issuer')?.textContent?.trim() || '',
                element: card
            }));
        }

        function setupEventListeners() {
            document.getElementById('searchInput').addEventListener('input', filterCourses);
            document.getElementById('categoryFilter').addEventListener('change', filterCourses);
            document.getElementById('levelFilter').addEventListener('change', filterCourses);
            document.querySelectorAll('.nav-tab').forEach(btn => btn.addEventListener('click', () => switchTab(btn.dataset.tab)));
            document.querySelectorAll('.view-btn').forEach(btn => btn.addEventListener('click', () => toggleView(btn.dataset.view)));
            // Keyboard arrow navigation for tabs
            const tabs = Array.from(document.querySelectorAll('.nav-tab'));
            tabs.forEach((tab, i) => {
                tab.addEventListener('keydown', e => {
                    if(['ArrowRight','ArrowLeft','Home','End'].includes(e.key)) { e.preventDefault(); }
                    if(e.key==='ArrowRight') tabs[(i+1)%tabs.length].focus();
                    if(e.key==='ArrowLeft') tabs[(i-1+tabs.length)%tabs.length].focus();
                    if(e.key==='Home') tabs[0].focus();
                    if(e.key==='End') tabs[tabs.length-1].focus();
                });
            });
            document.addEventListener('keydown', e => { if(e.key==='Escape') closeModal(); });
            document.getElementById('courseModal')?.addEventListener('click', e => { if(e.target.id==='courseModal') closeModal(); });
        }

        function enhanceAccessibility() {
            const tablist = document.querySelector('.navigation-tabs');
            if(tablist) tablist.setAttribute('role','tablist');
            document.querySelectorAll('.nav-tab').forEach(btn => {
                btn.setAttribute('role','tab');
                btn.id = btn.id || `tab-${btn.dataset.tab}`;
                btn.setAttribute('aria-selected', btn.classList.contains('active') ? 'true' : 'false');
                btn.setAttribute('tabindex', btn.classList.contains('active') ? '0' : '-1');
            });
            document.querySelectorAll('.tab-content').forEach(panel => {
                panel.setAttribute('role','tabpanel');
                panel.setAttribute('aria-labelledby', `tab-${panel.id.replace('-content','')}`);
            });
            const search = document.getElementById('searchInput');
            if(search) search.setAttribute('aria-label','Search courses');
        }

        function switchTab(tab) {
            currentTab = tab;
            // Update tab button states
            document.querySelectorAll('.nav-tab').forEach(btn => {
                const active = btn.dataset.tab === tab;
                btn.classList.toggle('active', active);
                btn.setAttribute('aria-selected', active ? 'true':'false');
                btn.setAttribute('tabindex', active ? '0':'-1');
            });
            // Content panels: only two real panels (all, learning-details)
            const allPanel = document.getElementById('all-content');
            const learningPanel = document.getElementById('learning-details-content');
            if(tab === 'learning-details') {
                allPanel.classList.remove('active');
                learningPanel.classList.add('active');
            } else {
                learningPanel.classList.remove('active');
                allPanel.classList.add('active');
            }
            filterCourses();
            updateResultsMessage();
            updateDynamicCounters();
            showNotification(`${tab.replace('-', ' ')} loaded`,'info');
        }

        function toggleView(view) {
            currentView = view;
            document.querySelectorAll('.view-btn').forEach(btn => btn.classList.toggle('active', btn.dataset.view === view));
            document.getElementById('certificatesGrid').classList.toggle('list-view', view==='list');
            showNotification(`${view==='grid'?'Grid':'List'} view applied`,'success');
        }

        function filterCourses() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const categoryFilter = document.getElementById('categoryFilter').value;
            const levelFilter = document.getElementById('levelFilter').value;
            let visible = 0;
            document.querySelectorAll('.certificate-card').forEach(card => {
                const title = card.querySelector('.certificate-title').textContent.toLowerCase();
                const issuer = card.querySelector('.certificate-issuer').textContent.toLowerCase();
                const category = card.dataset.category;
                const level = card.dataset.level;
                const status = card.dataset.status;
                // Tab conditions
                let tabOK = true;
                if(currentTab==='completed') tabOK = status==='completed';
                else if(currentTab==='in-progress') tabOK = status==='in-progress';
                else if(currentTab==='certificates') tabOK = status==='completed';
                // Filters
                const matchSearch = !searchTerm || title.includes(searchTerm) || issuer.includes(searchTerm);
                const matchCat = categoryFilter==='all' || category===categoryFilter;
                const matchLevel = levelFilter==='all' || level===levelFilter;
                if(tabOK && matchSearch && matchCat && matchLevel && currentTab!=='learning-details') {
                    card.style.display='block';
                    card.style.animation = `fadeInUp .4s ease ${visible*0.05}s both`;
                    visible++;
                } else {
                    card.style.display='none';
                }
            });
            updateResultsMessage(visible);
            updateDynamicCounters();
        }

        function updateResultsMessage(count) {
            const panel = document.getElementById('certificatesGrid');
            if(!panel) return;
            let msg = panel.querySelector('.no-results-message');
            if(count===0 && currentTab!=='learning-details') {
                if(!msg) {
                    msg = document.createElement('div');
                    msg.className='no-results-message';
                    msg.innerHTML = `<svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'><circle cx='11' cy='11' r='8'/><path d='m21 21-4.35-4.35'/></svg><h3>No courses found</h3><p>Try adjusting search or filters</p>`;
                    panel.appendChild(msg);
                }
                msg.classList.remove('hidden');
            } else if(msg) {
                msg.classList.add('hidden');
            }
        }

        function updateDynamicCounters() {
            const cards = Array.from(document.querySelectorAll('.certificate-card'));
            const completed = cards.filter(c => c.dataset.status==='completed' && c.style.display!=='none').length;
            const progress = cards.filter(c => c.dataset.status==='in-progress' && c.style.display!=='none').length;
            const completedAll = cards.filter(c => c.dataset.status==='completed').length;
            const progressAll = cards.filter(c => c.dataset.status==='in-progress').length;
            document.getElementById('completedCount').textContent = currentTab==='all' ? completedAll : completed;
            document.getElementById('progressCount').textContent = currentTab==='all' ? progressAll : progress;
            // Header stats (if present)
            const hCompleted = document.getElementById('completedCourses');
            if(hCompleted) hCompleted.textContent = completedAll;
            const hProgress = document.getElementById('inProgressCourses');
            if(hProgress) hProgress.textContent = progressAll;
        }

        function clearSearch() {
            document.getElementById('searchInput').value='';
            document.getElementById('categoryFilter').value='all';
            document.getElementById('levelFilter').value='all';
            filterCourses();
            document.getElementById('searchInput').focus();
        }

        function downloadCertificate(courseId) {
            showNotification(`Downloading certificate for ${courseId}...`,'info');
            setTimeout(()=> showNotification('Certificate downloaded','success'),1500);
        }

        function verifyCertificate(certId) {
            showNotification(`Verifying ${certId}...`,'info');
            setTimeout(()=> showNotification('Certificate verified','success'),1200);
        }

        function viewDetails(courseId) {
            const modal = document.getElementById('courseModal');
            const titleEl = document.getElementById('modalTitle');
            const bodyEl = document.getElementById('courseDetails');
            titleEl.textContent = 'Course Details';
            bodyEl.innerHTML = generateCourseDetails(courseId);
            modal.classList.add('active');
            document.body.style.overflow='hidden';
            modal.querySelector('.modal-close')?.focus();
        }

        function generateCourseDetails(courseId) {
            return `<div class="course-details-modal"><div class="course-header"><div class="course-thumbnail"><div class="course-icon">${courseId.toUpperCase().substring(0,2)}</div></div><div class="course-info"><h4>${courseId.replace(/-/g,' ')}</h4><p>Provider</p><div class="course-meta"><span class='meta-item'>40 hours</span><span class='meta-item'>Advanced</span><span class='meta-item'>98% Grade</span></div></div></div><div class='course-curriculum'><h5>Course Curriculum</h5><div class='curriculum-list'><div class='curriculum-item completed'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'><path d='M9 12l2 2 4-4'/><circle cx='12' cy='12' r='10'/></svg><span>Module 1</span></div><div class='curriculum-item completed'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'><path d='M9 12l2 2 4-4'/><circle cx='12' cy='12' r='10'/></svg><span>Module 2</span></div></div></div><div class='course-achievements'><h5>Achievements</h5><div class='achievements-list'><div class='achievement-item'><div class='achievement-icon'>🏆</div><div class='achievement-text'><div class='achievement-title'>Project Excellence</div><div class='achievement-desc'>Delivered high quality final project</div></div></div></div></div></div>`;
        }

        function continueCourse(courseId) { showNotification(`Continuing ${courseId}`); }
        function viewProgress(courseId) { viewDetails(courseId); }
        function downloadAllCertificates() { showNotification('Preparing download...','info'); setTimeout(()=>showNotification('All certificates downloaded','success'),2000); }
        function shareProfile() { const url = window.location.href; navigator.clipboard.writeText(url); showNotification('Profile link copied','success'); }
        function viewLearningPath() { switchTab('learning-details'); }
        function closeModal() { const modal = document.getElementById('courseModal'); modal.classList.remove('active'); document.body.style.overflow=''; }

        function showNotification(message, type='info') {
            const note = document.createElement('div');
            note.className = `notification ${type}`;
            note.textContent = message;
            Object.assign(note.style,{position:'fixed',top:'20px',right:'20px',padding:'14px 18px',background:type==='success'?'#0d9488':(type==='error'?'#dc2626':'#2563eb'),color:'#fff',borderRadius:'12px',fontSize:'0.8rem',fontWeight:'600',zIndex:10000,boxShadow:'0 4px 14px rgba(0,0,0,0.15)',transform:'translateX(120%)',transition:'transform .35s ease'});
            document.body.appendChild(note);
            requestAnimationFrame(()=> note.style.transform='translateX(0)');
            setTimeout(()=>{ note.style.transform='translateX(120%)'; setTimeout(()=> note.remove(),350); },3500);
        }

        function animateOnLoad() {
            document.querySelectorAll('.certificate-card').forEach((card,i)=>{
                card.classList.add('fade-in');
                card.style.animationDelay = `${i*0.05}s`;
            });
        }
    </script>
</body>
</html>
