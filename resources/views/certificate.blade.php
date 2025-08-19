@extends('layouts.main')

@section('head')
<style>
/* BeingScholar Certificate Portfolio - Modern & User-Friendly Design */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    color: #1a202c;
    line-height: 1.6;
}

.certificate-container {
    max-width: 1440px;
    margin: 0 auto;
    padding: 2rem;
    min-height: 100vh;
}

/* Enhanced Hero Section with BeingScholar Branding */
.hero-section {
    background: linear-gradient(135deg, #1a365d 0%, #2d3748 50%, #1a202c 100%);
    border-radius: 24px;
    padding: 4rem 3rem;
    color: white;
    margin-bottom: 3rem;
    position: relative;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(26, 54, 93, 0.3);
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><defs><pattern id="grain" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="30" cy="30" r="1.5" fill="white" opacity="0.1"/><circle cx="10" cy="10" r="1" fill="white" opacity="0.05"/><circle cx="50" cy="40" r="1" fill="white" opacity="0.05"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grain)"/></svg>');
    opacity: 0.6;
}

.hero-section::after {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: float 20s linear infinite;
    opacity: 0.3;
}

@keyframes float {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}

.hero-content {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: 3rem;
    align-items: center;
}

.profile-section {
    display: flex;
    align-items: center;
    gap: 2rem;
}

.profile-image {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 4px solid rgba(255, 255, 255, 0.3);
    object-fit: cover;
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.profile-image:hover {
    transform: scale(1.05);
}

.profile-info h1 {
    font-size: 2.8rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
    letter-spacing: -0.025em;
    background: linear-gradient(135deg, #ffffff 0%, #e2e8f0 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.profile-info p {
    font-size: 1.3rem;
    opacity: 0.9;
    font-weight: 400;
    color: #cbd5e0;
}

.stats-overview {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
    text-align: center;
}

.stat-item {
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(20px);
    padding: 2rem 1.5rem;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
    cursor: pointer;
}

.stat-item:hover {
    background: rgba(255, 255, 255, 0.18);
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.stat-number {
    display: block;
    font-size: 3rem;
    font-weight: 900;
    margin-bottom: 0.5rem;
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.stat-label {
    font-size: 1rem;
    opacity: 0.9;
    font-weight: 600;
    color: #e2e8f0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.action-section {
    display: flex;
    flex-direction: column;
    gap: 1.2rem;
}

.primary-btn {
    background: linear-gradient(135deg, #ffffff 0%, #f7fafc 100%);
    color: #1a202c;
    padding: 1.2rem 2.5rem;
    border-radius: 16px;
    border: none;
    font-weight: 700;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    text-decoration: none;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.primary-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
}

.secondary-btn {
    background: transparent;
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.4);
    padding: 1rem 2rem;
    border-radius: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    backdrop-filter: blur(10px);
}

.secondary-btn:hover {
    background: rgba(255, 255, 255, 0.15);
    border-color: rgba(255, 255, 255, 0.6);
    transform: translateY(-2px);
}

/* Enhanced Main Content Layout */
.main-content {
    display: grid;
    grid-template-columns: 320px 1fr;
    gap: 3rem;
}

/* Modern Sidebar with Better UX */
.sidebar {
    background: white;
    border-radius: 24px;
    padding: 2.5rem;
    height: fit-content;
    box-shadow: 0 8px 40px rgba(0, 0, 0, 0.08);
    border: 1px solid #e2e8f0;
    position: sticky;
    top: 2rem;
}

.sidebar h3 {
    font-size: 1.4rem;
    font-weight: 800;
    margin-bottom: 2.5rem;
    color: #1a202c;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.sidebar h3::before {
    content: '🎯';
    font-size: 1.2rem;
}

.filter-group {
    margin-bottom: 2.5rem;
}

.filter-group h4 {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 1.2rem;
    color: #2d3748;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.filter-options {
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
}

.filter-option {
    padding: 1rem 1.5rem;
    border-radius: 16px;
    background: #f8fafc;
    border: 2px solid transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 600;
    color: #4a5568;
    display: flex;
    align-items: center;
    gap: 0.8rem;
    position: relative;
    overflow: hidden;
}

.filter-option::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 0;
    background: linear-gradient(135deg, #1a365d, #2d3748);
    transition: width 0.3s ease;
    z-index: 0;
}

.filter-option:hover,
.filter-option.active {
    background: linear-gradient(135deg, #1a365d, #2d3748);
    color: white;
    border-color: #1a365d;
    transform: translateX(5px);
}

.filter-option:hover::before,
.filter-option.active::before {
    width: 100%;
}

.filter-option span {
    position: relative;
    z-index: 1;
}

.search-box {
    position: relative;
    margin-bottom: 2.5rem;
}

.search-input {
    width: 100%;
    padding: 1.2rem 1.2rem 1.2rem 3.5rem;
    border: 2px solid #e2e8f0;
    border-radius: 16px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: #f8fafc;
    font-weight: 500;
}

.search-input:focus {
    outline: none;
    border-color: #1a365d;
    background: white;
    box-shadow: 0 0 0 3px rgba(26, 54, 93, 0.1);
}

.search-icon {
    position: absolute;
    left: 1.2rem;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    color: #9ca3af;
    transition: color 0.3s ease;
}

.search-input:focus + .search-icon {
    color: #1a365d;
}

/* Enhanced Content Area */
.content-area {
    background: white;
    border-radius: 24px;
    padding: 3rem;
    box-shadow: 0 8px 40px rgba(0, 0, 0, 0.08);
    border: 1px solid #e2e8f0;
}

.content-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3rem;
    padding-bottom: 2rem;
    border-bottom: 2px solid #f1f5f9;
}

.content-title {
    font-size: 2.2rem;
    font-weight: 800;
    color: #1a202c;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.content-title::before {
    content: '🏆';
    font-size: 2rem;
}

.view-toggle {
    display: flex;
    background: #f7fafc;
    border-radius: 16px;
    padding: 0.4rem;
    border: 2px solid #e2e8f0;
}

.view-btn {
    padding: 0.8rem 1.5rem;
    border: none;
    background: transparent;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    color: #6b7280;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.view-btn.active {
    background: white;
    color: #1a365d;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transform: translateY(-1px);
}

/* Enhanced Certificate Grid */
.certificates-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(420px, 1fr));
    gap: 2.5rem;
}

.certificate-card {
    background: white;
    border-radius: 24px;
    padding: 2.5rem;
    border: 2px solid #f1f5f9;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.certificate-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 6px;
    background: linear-gradient(90deg, #1a365d, #2d3748, #4a5568);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.certificate-card:hover {
    border-color: #1a365d;
    transform: translateY(-8px);
    box-shadow: 0 25px 60px rgba(26, 54, 93, 0.15);
}

.certificate-card:hover::before {
    transform: scaleX(1);
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 2rem;
}

.course-icon {
    width: 80px;
    height: 80px;
    border-radius: 20px;
    background: linear-gradient(135deg, #1a365d, #2d3748);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.8rem;
    letter-spacing: -0.025em;
    box-shadow: 0 8px 25px rgba(26, 54, 93, 0.3);
    transition: transform 0.3s ease;
}

.certificate-card:hover .course-icon {
    transform: scale(1.1) rotate(5deg);
}

.status-badge {
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.025em;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.status-completed {
    background: linear-gradient(135deg, #dcfce7, #bbf7d0);
    color: #166534;
    border: 2px solid #22c55e;
}

.status-progress {
    background: linear-gradient(135deg, #fef3c7, #fde68a);
    color: #92400e;
    border: 2px solid #f59e0b;
}

.card-content h3 {
    font-size: 1.6rem;
    font-weight: 800;
    color: #1a202c;
    margin-bottom: 0.8rem;
    line-height: 1.3;
}

.card-content p {
    color: #6b7280;
    margin-bottom: 2rem;
    font-size: 1.1rem;
    font-weight: 500;
}

.course-meta {
    display: flex;
    gap: 2rem;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    color: #6b7280;
    font-size: 1rem;
    font-weight: 600;
    background: #f8fafc;
    padding: 0.8rem 1.2rem;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
}

.meta-icon {
    width: 18px;
    height: 18px;
    color: #1a365d;
}

.progress-section {
    margin-bottom: 2rem;
    background: #f8fafc;
    padding: 1.5rem;
    border-radius: 16px;
    border: 2px solid #e2e8f0;
}

.progress-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.progress-label {
    font-weight: 700;
    color: #374151;
    font-size: 1.1rem;
}

.progress-percent {
    font-weight: 800;
    color: #1a365d;
    font-size: 1.2rem;
}

.progress-bar {
    width: 100%;
    height: 12px;
    background: #e5e7eb;
    border-radius: 8px;
    overflow: hidden;
    position: relative;
}

.progress-fill {
    height: 100%;
    background: linear-gradient(90deg, #1a365d, #2d3748);
    border-radius: 8px;
    transition: width 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.progress-fill::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.3) 50%, transparent 60%);
    animation: shimmer 2s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

.skills-section {
    margin-bottom: 2rem;
}

.skills-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.skill-tag {
    background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
    color: #1a365d;
    padding: 0.6rem 1.2rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    border: 2px solid #e2e8f0;
    transition: all 0.3s ease;
}

.skill-tag:hover {
    background: linear-gradient(135deg, #1a365d, #2d3748);
    color: white;
    transform: translateY(-2px);
}

.card-actions {
    display: flex;
    gap: 1rem;
}

.action-btn {
    flex: 1;
    padding: 1rem 1.5rem;
    border-radius: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    text-decoration: none;
    font-size: 1rem;
    border: 2px solid transparent;
}

.btn-primary {
    background: linear-gradient(135deg, #1a365d, #2d3748);
    color: white;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #2d3748, #4a5568);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(26, 54, 93, 0.3);
}

.btn-secondary {
    background: #f8fafc;
    color: #1a365d;
    border-color: #e2e8f0;
}

.btn-secondary:hover {
    background: #f1f5f9;
    border-color: #1a365d;
    transform: translateY(-2px);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .main-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .hero-content {
        grid-template-columns: 1fr;
        gap: 2rem;
        text-align: center;
    }
    
    .stats-overview {
        grid-template-columns: repeat(4, 1fr);
    }
}

@media (max-width: 768px) {
    .certificate-container {
        padding: 1rem;
    }
    
    .hero-section {
        padding: 2.5rem 2rem;
    }
    
    .profile-section {
        flex-direction: column;
        text-align: center;
    }
    
    .stats-overview {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .certificates-grid {
        grid-template-columns: 1fr;
    }
    
    .card-actions {
        flex-direction: column;
    }
}

/* Animations */
@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-slide-up {
    animation: slideUp 0.6s ease-out forwards;
}

/* Icon styles */
.icon {
    width: 20px;
    height: 20px;
    fill: currentColor;
}
</style>
@endsection

@section('content')
<div class="certificate-container">
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <div class="profile-section">
                <img src="{{ asset('images/AirBrush_20221127125253.jpg') }}" alt="K. M. Arafat Islam" class="profile-image">
                <div class="profile-info">
                    <h1>K. M. Arafat Islam</h1>
                    <p>BeingScholar Learner & Future Leader</p>
                </div>
            </div>
            
            <div class="stats-overview">
                <div class="stat-item">
                    <span class="stat-number">8</span>
                    <span class="stat-label">Completed</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">3</span>
                    <span class="stat-label">In Progress</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">340</span>
                    <span class="stat-label">Hours Learned</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">96%</span>
                    <span class="stat-label">Average Score</span>
                </div>
            </div>
            
            <div class="action-section">
                <a href="#" class="primary-btn" onclick="downloadAll()">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <polyline points="7,10 12,15 17,10"/>
                        <line x1="12" y1="15" x2="12" y2="3"/>
                    </svg>
                    Download Portfolio
                </a>
                <a href="#" class="secondary-btn" onclick="shareProfile()">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="18" cy="5" r="3"/>
                        <circle cx="6" cy="12" r="3"/>
                        <circle cx="18" cy="19" r="3"/>
                        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>
                        <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
                    </svg>
                    Share Profile
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Filter Courses</h3>
            
            <div class="search-box">
                <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="m21 21-4.35-4.35"/>
                </svg>
                <input type="text" class="search-input" placeholder="Search courses..." id="searchInput">
            </div>
            
            <div class="filter-group">
                <h4>📈 Status</h4>
                <div class="filter-options">
                    <div class="filter-option active" data-filter="all" onclick="filterCourses('all')"><span>All Courses</span></div>
                    <div class="filter-option" data-filter="completed" onclick="filterCourses('completed')"><span>✅ Completed</span></div>
                    <div class="filter-option" data-filter="in-progress" onclick="filterCourses('in-progress')"><span>⏳ In Progress</span></div>
                </div>
            </div>
            
            <div class="filter-group">
                <h4>📊 Category</h4>
                <div class="filter-options">
                    <div class="filter-option" data-category="all" onclick="filterByCategory('all')"><span>All Categories</span></div>
                    <div class="filter-option" data-category="web" onclick="filterByCategory('web')"><span>💻 Web Development</span></div>
                    <div class="filter-option" data-category="mobile" onclick="filterByCategory('mobile')"><span>📱 Mobile Development</span></div>
                    <div class="filter-option" data-category="data" onclick="filterByCategory('data')"><span>📊 Data Science</span></div>
                    <div class="filter-option" data-category="design" onclick="filterByCategory('design')"><span>🎨 UI/UX Design</span></div>
                    <div class="filter-option" data-category="marketing" onclick="filterByCategory('marketing')"><span>📈 Digital Marketing</span></div>
                </div>
            </div>
        </div>

        <!-- Content Area -->
        <div class="content-area">
            <div class="content-header">
                <h2 class="content-title">My Learning Journey</h2>
                <div class="view-toggle">
                    <button class="view-btn active" data-view="grid" onclick="changeView('grid')">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="7" height="7"/>
                            <rect x="14" y="3" width="7" height="7"/>
                            <rect x="14" y="14" width="7" height="7"/>
                            <rect x="3" y="14" width="7" height="7"/>
                        </svg>
                    </button>
                    <button class="view-btn" data-view="list" onclick="changeView('list')">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
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

            <!-- Certificates Grid -->
            <div class="certificates-grid" id="certificatesGrid">
                <!-- Course 1: Web Development Fundamentals -->
                <div class="certificate-card animate-slide-up" data-status="completed" data-category="web">
                    <div class="card-header">
                        <div class="course-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 32px; height: 32px;">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                                <polyline points="22,2 18,6 16,4"/>
                            </svg>
                        </div>
                        <span class="status-badge status-completed">✓ Completed</span>
                    </div>
                    <div class="card-content">
                        <h3>Web Development Fundamentals</h3>
                        <p>BeingScholar Academy</p>
                        <div class="course-meta">
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12,6 12,12 16,14"/>
                                </svg>
                                40 hours
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                A+ (95%)
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                Dec 2024
                            </div>
                        </div>
                        <div class="skills-section">
                            <div class="skills-grid">
                                <span class="skill-tag">HTML5</span>
                                <span class="skill-tag">CSS3</span>
                                <span class="skill-tag">JavaScript</span>
                                <span class="skill-tag">Bootstrap</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn btn-primary" onclick="downloadCertificate('web-fundamentals')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                    <polyline points="7,10 12,15 17,10"/>
                                    <line x1="12" y1="15" x2="12" y2="3"/>
                                </svg>
                                Download
                            </button>
                            <button class="action-btn btn-secondary" onclick="viewCertificate('web-fundamentals')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                View
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Course 2: Laravel PHP Framework -->
                <div class="certificate-card animate-slide-up" data-status="completed" data-category="web">
                    <div class="card-header">
                        <div class="course-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 32px; height: 32px;">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                                <line x1="8" y1="21" x2="16" y2="21"/>
                                <line x1="12" y1="17" x2="12" y2="21"/>
                                <path d="M6 8h12"/>
                                <path d="M6 12h8"/>
                            </svg>
                        </div>
                        <span class="status-badge status-completed">✓ Completed</span>
                    </div>
                    <div class="card-content">
                        <h3>Laravel PHP Framework Mastery</h3>
                        <p>BeingScholar Academy</p>
                        <div class="course-meta">
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12,6 12,12 16,14"/>
                                </svg>
                                55 hours
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                A+ (98%)
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                Nov 2024
                            </div>
                        </div>
                        <div class="skills-section">
                            <div class="skills-grid">
                                <span class="skill-tag">Laravel</span>
                                <span class="skill-tag">PHP</span>
                                <span class="skill-tag">MySQL</span>
                                <span class="skill-tag">Blade Templates</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn btn-primary" onclick="downloadCertificate('laravel-mastery')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                    <polyline points="7,10 12,15 17,10"/>
                                    <line x1="12" y1="15" x2="12" y2="3"/>
                                </svg>
                                Download
                            </button>
                            <button class="action-btn btn-secondary" onclick="viewCertificate('laravel-mastery')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                View
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Course 3: Digital Marketing (In Progress) -->
                <div class="certificate-card animate-slide-up" data-status="in-progress" data-category="marketing">
                    <div class="card-header">
                        <div class="course-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 32px; height: 32px;">
                                <path d="M3 3v18h18"/>
                                <path d="m19 9-5 5-4-4-3 3"/>
                                <circle cx="19" cy="9" r="2"/>
                                <circle cx="5" cy="21" r="2"/>
                            </svg>
                        </div>
                        <span class="status-badge status-progress">⏳ In Progress</span>
                    </div>
                    <div class="card-content">
                        <h3>Complete Digital Marketing Course</h3>
                        <p>BeingScholar Academy</p>
                        <div class="progress-section">
                            <div class="progress-header">
                                <span class="progress-label">Course Progress</span>
                                <span class="progress-percent">72%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 72%"></div>
                            </div>
                        </div>
                        <div class="course-meta">
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12,6 12,12 16,14"/>
                                </svg>
                                45 hours
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                A (91%)
                            </div>
                        </div>
                        <div class="skills-section">
                            <div class="skills-grid">
                                <span class="skill-tag">SEO</span>
                                <span class="skill-tag">Social Media</span>
                                <span class="skill-tag">Google Ads</span>
                                <span class="skill-tag">Analytics</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn btn-primary" onclick="continueCourse('digital-marketing')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="5,3 19,12 5,21"/>
                                </svg>
                                Continue Learning
                            </button>
                            <button class="action-btn btn-secondary" onclick="viewProgress('digital-marketing')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 3v18h18"/>
                                    <path d="m19 9-5 5-4-4-3 3"/>
                                </svg>
                                View Progress
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Course 4: React Native Development -->
                <div class="certificate-card animate-slide-up" data-status="completed" data-category="mobile">
                    <div class="card-header">
                        <div class="course-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 32px; height: 32px;">
                                <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                                <line x1="12" y1="18" x2="12.01" y2="18"/>
                                <path d="M8 6h8"/>
                                <path d="M8 10h8"/>
                                <path d="M8 14h5"/>
                            </svg>
                        </div>
                        <span class="status-badge status-completed">✓ Completed</span>
                    </div>
                    <div class="card-content">
                        <h3>React Native Mobile Development</h3>
                        <p>BeingScholar Academy</p>
                        <div class="course-meta">
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12,6 12,12 16,14"/>
                                </svg>
                                50 hours
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                A+ (97%)
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                Oct 2024
                            </div>
                        </div>
                        <div class="skills-section">
                            <div class="skills-grid">
                                <span class="skill-tag">React Native</span>
                                <span class="skill-tag">Redux</span>
                                <span class="skill-tag">Navigation</span>
                                <span class="skill-tag">Firebase</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn btn-primary" onclick="downloadCertificate('react-native')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                    <polyline points="7,10 12,15 17,10"/>
                                    <line x1="12" y1="15" x2="12" y2="3"/>
                                </svg>
                                Download
                            </button>
                            <button class="action-btn btn-secondary" onclick="viewCertificate('react-native')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                View
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Course 5: UI/UX Design (In Progress) -->
                <div class="certificate-card animate-slide-up" data-status="in-progress" data-category="design">
                    <div class="card-header">
                        <div class="course-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 32px; height: 32px;">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </div>
                        <span class="status-badge status-progress">⏳ In Progress</span>
                    </div>
                    <div class="card-content">
                        <h3>Professional UI/UX Design</h3>
                        <p>BeingScholar Academy</p>
                        <div class="progress-section">
                            <div class="progress-header">
                                <span class="progress-label">Course Progress</span>
                                <span class="progress-percent">45%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="course-meta">
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12,6 12,12 16,14"/>
                                </svg>
                                60 hours
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                A- (88%)
                            </div>
                        </div>
                        <div class="skills-section">
                            <div class="skills-grid">
                                <span class="skill-tag">Figma</span>
                                <span class="skill-tag">Adobe XD</span>
                                <span class="skill-tag">Prototyping</span>
                                <span class="skill-tag">User Research</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn btn-primary" onclick="continueCourse('ui-ux-design')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="5,3 19,12 5,21"/>
                                </svg>
                                Continue Learning
                            </button>
                            <button class="action-btn btn-secondary" onclick="viewProgress('ui-ux-design')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 3v18h18"/>
                                    <path d="m19 9-5 5-4-4-3 3"/>
                                </svg>
                                View Progress
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Course 6: Data Science with Python -->
                <div class="certificate-card animate-slide-up" data-status="completed" data-category="data">
                    <div class="card-header">
                        <div class="course-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 32px; height: 32px;">
                                <path d="M3 3v18h18"/>
                                <path d="m19 9-5 5-4-4-3 3"/>
                                <path d="M9 9h1m4 0h1"/>
                                <circle cx="20" cy="4" r="2"/>
                            </svg>
                        </div>
                        <span class="status-badge status-completed">✓ Completed</span>
                    </div>
                    <div class="card-content">
                        <h3>Data Science with Python</h3>
                        <p>BeingScholar Academy</p>
                        <div class="course-meta">
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12,6 12,12 16,14"/>
                                </svg>
                                65 hours
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                A+ (96%)
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                Sep 2024
                            </div>
                        </div>
                        <div class="skills-section">
                            <div class="skills-grid">
                                <span class="skill-tag">Python</span>
                                <span class="skill-tag">Pandas</span>
                                <span class="skill-tag">NumPy</span>
                                <span class="skill-tag">Matplotlib</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn btn-primary" onclick="downloadCertificate('data-science-python')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                    <polyline points="7,10 12,15 17,10"/>
                                    <line x1="12" y1="15" x2="12" y2="3"/>
                                </svg>
                                Download
                            </button>
                            <button class="action-btn btn-secondary" onclick="viewCertificate('data-science-python')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                View
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Course 7: Machine Learning (In Progress) -->
                <div class="certificate-card animate-slide-up" data-status="in-progress" data-category="data">
                    <div class="card-header">
                        <div class="course-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 32px; height: 32px;">
                                <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3z"/>
                                <path d="m19 10-7 7-7-7"/>
                                <circle cx="12" cy="18" r="3"/>
                            </svg>
                        </div>
                        <span class="status-badge status-progress">⏳ In Progress</span>
                    </div>
                    <div class="card-content">
                        <h3>Machine Learning Fundamentals</h3>
                        <p>BeingScholar Academy</p>
                        <div class="progress-section">
                            <div class="progress-header">
                                <span class="progress-label">Course Progress</span>
                                <span class="progress-percent">28%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 28%"></div>
                            </div>
                        </div>
                        <div class="course-meta">
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12,6 12,12 16,14"/>
                                </svg>
                                80 hours
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                A (89%)
                            </div>
                        </div>
                        <div class="skills-section">
                            <div class="skills-grid">
                                <span class="skill-tag">Scikit-learn</span>
                                <span class="skill-tag">TensorFlow</span>
                                <span class="skill-tag">Deep Learning</span>
                                <span class="skill-tag">Neural Networks</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn btn-primary" onclick="continueCourse('machine-learning')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="5,3 19,12 5,21"/>
                                </svg>
                                Continue Learning
                            </button>
                            <button class="action-btn btn-secondary" onclick="viewProgress('machine-learning')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 3v18h18"/>
                                    <path d="m19 9-5 5-4-4-3 3"/>
                                </svg>
                                View Progress
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Course 8: Android Development -->
                <div class="certificate-card animate-slide-up" data-status="completed" data-category="mobile">
                    <div class="card-header">
                        <div class="course-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 32px; height: 32px;">
                                <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                                <line x1="12" y1="18" x2="12.01" y2="18"/>
                                <path d="M9 9h6"/>
                                <path d="M9 13h6"/>
                                <circle cx="12" cy="6" r="1"/>
                            </svg>
                        </div>
                        <span class="status-badge status-completed">✓ Completed</span>
                    </div>
                    <div class="card-content">
                        <h3>Android App Development</h3>
                        <p>BeingScholar Academy</p>
                        <div class="course-meta">
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12,6 12,12 16,14"/>
                                </svg>
                                48 hours
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                                A+ (93%)
                            </div>
                            <div class="meta-item">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                Aug 2024
                            </div>
                        </div>
                        <div class="skills-section">
                            <div class="skills-grid">
                                <span class="skill-tag">Java</span>
                                <span class="skill-tag">Kotlin</span>
                                <span class="skill-tag">Android Studio</span>
                                <span class="skill-tag">SQLite</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn btn-primary" onclick="downloadCertificate('android-development')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                    <polyline points="7,10 12,15 17,10"/>
                                    <line x1="12" y1="15" x2="12" y2="3"/>
                                </svg>
                                Download
                            </button>
                            <button class="action-btn btn-secondary" onclick="viewCertificate('android-development')">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    initializeAnimations();
    setupSearchFunctionality();
});

function initializeAnimations() {
    const cards = document.querySelectorAll('.certificate-card');
    cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
    });
}

function setupSearchFunctionality() {
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase();
        filterBySearch(query);
    });
}

function filterCourses(status) {
    // Update active filter
    document.querySelectorAll('[data-filter]').forEach(btn => {
        btn.classList.remove('active');
    });
    document.querySelector(`[data-filter="${status}"]`).classList.add('active');
    
    // Filter cards
    const cards = document.querySelectorAll('.certificate-card');
    cards.forEach(card => {
        if (status === 'all' || card.dataset.status === status) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
    
    showNotification(`Showing ${status === 'all' ? 'all' : status} courses`);
}

function filterByCategory(category) {
    // Update active filter
    document.querySelectorAll('[data-category]').forEach(btn => {
        btn.classList.remove('active');
    });
    document.querySelector(`[data-category="${category}"]`).classList.add('active');
    
    // Filter cards
    const cards = document.querySelectorAll('.certificate-card');
    cards.forEach(card => {
        if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
    
    showNotification(`Showing ${category === 'all' ? 'all' : category} courses`);
}

function filterBySearch(query) {
    const cards = document.querySelectorAll('.certificate-card');
    cards.forEach(card => {
        const title = card.querySelector('h3').textContent.toLowerCase();
        const skills = Array.from(card.querySelectorAll('.skill-tag')).map(tag => tag.textContent.toLowerCase());
        
        if (title.includes(query) || skills.some(skill => skill.includes(query))) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

function changeView(view) {
    document.querySelectorAll('.view-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.querySelector(`[data-view="${view}"]`).classList.add('active');
    
    const grid = document.getElementById('certificatesGrid');
    if (view === 'list') {
        grid.style.gridTemplateColumns = '1fr';
    } else {
        grid.style.gridTemplateColumns = 'repeat(auto-fill, minmax(380px, 1fr))';
    }
}

function downloadCertificate(courseId) {
    showNotification(`Downloading certificate for ${courseId}...`, 'info');
    setTimeout(() => {
        showNotification('Certificate downloaded successfully!', 'success');
    }, 1500);
}

function viewCertificate(courseId) {
    showNotification(`Opening certificate for ${courseId}...`, 'info');
}

function continueCourse(courseId) {
    showNotification(`Redirecting to continue ${courseId}...`, 'info');
}

function viewProgress(courseId) {
    showNotification(`Loading progress for ${courseId}...`, 'info');
}

function downloadAll() {
    showNotification('🚀 Preparing your complete learning portfolio...', 'info');
    setTimeout(() => {
        showNotification('✅ All certificates downloaded successfully! Check your downloads folder.', 'success');
    }, 2500);
}

function shareProfile() {
    if (navigator.share) {
        navigator.share({
            title: 'My BeingScholar Learning Portfolio',
            text: 'Check out my incredible learning journey with BeingScholar Academy! 🎓✨',
            url: window.location.href
        });
    } else {
        navigator.clipboard.writeText(window.location.href);
        showNotification('🔗 Profile link copied to clipboard! Share your achievements with the world!', 'success');
    }
}

function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.style.cssText = `
        position: fixed;
        top: 2rem;
        right: 2rem;
        padding: 1.2rem 2rem;
        border-radius: 16px;
        color: white;
        font-weight: 600;
        z-index: 10000;
        max-width: 400px;
        box-shadow: 0 12px 40px rgba(0,0,0,0.25);
        transform: translateX(100%);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        font-size: 1rem;
        backdrop-filter: blur(20px);
        border: 2px solid rgba(255,255,255,0.1);
    `;
    
    switch(type) {
        case 'success':
            notification.style.background = 'linear-gradient(135deg, #10b981, #059669)';
            break;
        case 'error':
            notification.style.background = 'linear-gradient(135deg, #ef4444, #dc2626)';
            break;
        default:
            notification.style.background = 'linear-gradient(135deg, #1a365d, #2d3748)';
    }
    
    notification.innerHTML = `
        <div style="display: flex; align-items: center; gap: 0.75rem;">
            <div style="font-size: 1.2rem;">
                ${type === 'success' ? '✅' : type === 'error' ? '❌' : 'ℹ️'}
            </div>
            <span>${message}</span>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => notification.style.transform = 'translateX(0)', 100);
    
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => document.body.removeChild(notification), 400);
    }, 4000);
}
</script>
@endsection
