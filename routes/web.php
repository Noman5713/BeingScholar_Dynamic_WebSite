<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/course/{id}', function ($id) {
    // Course data mapping based on the course ID
    $courseData = [
        1 => [
            'id' => 1,
            'title' => 'AI Based Software Development With Python',
            'badge' => '32% OFF',
            'batch' => 'Batch 9',
            'seats' => '100 seats remaining',
            'days' => '56 days remaining',
            'image' => asset('images/Course_Card_Banner/a.png'),
            'old_price' => '7500',
            'new_price' => '5100',
            'duration' => '6-8 Months',
            'class_type' => 'Live Classes',
            'access' => 'Lifetime',
            'description' => 'Master AI development with Python and build intelligent applications. This comprehensive course covers machine learning, deep learning, natural language processing, and computer vision. You will learn to implement AI algorithms from scratch and use popular frameworks like TensorFlow, PyTorch, and scikit-learn. By the end of this course, you will be able to develop end-to-end AI solutions and deploy them in production environments.

The course is designed for developers who want to transition into AI development and for students who want to build a strong foundation in artificial intelligence. We will cover both theoretical concepts and practical implementations, ensuring you understand not just how to use AI tools, but how they work under the hood.

Key topics include supervised and unsupervised learning, neural networks, deep learning architectures, natural language processing, computer vision, and AI ethics. You will work on real-world projects including chatbots, recommendation systems, image classification, and predictive analytics.',
            'curriculum' => [
                ['Course objectives and expectations', 'Python fundamentals for AI', 'Setting up development environment'],
                ['Introduction to Artificial Intelligence', 'Machine Learning basics', 'Types of learning algorithms'],
                ['Data preprocessing and cleaning', 'Feature engineering', 'Data visualization with Python'],
                ['Supervised learning algorithms', 'Linear and logistic regression', 'Decision trees and random forests'],
                ['Unsupervised learning', 'Clustering algorithms', 'Dimensionality reduction'],
                ['Introduction to neural networks', 'Perceptrons and multilayer networks', 'Backpropagation algorithm'],
                ['Deep learning fundamentals', 'Convolutional Neural Networks', 'Image processing and computer vision'],
                ['Recurrent Neural Networks', 'LSTM and GRU networks', 'Natural Language Processing'],
                ['Advanced deep learning topics', 'Transfer learning', 'Generative Adversarial Networks'],
                ['AI frameworks and libraries', 'TensorFlow and PyTorch', 'Model deployment strategies'],
                ['Project work and portfolio building', 'Industry best practices', 'AI ethics and responsible development']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Ahmed Rahman', 'comment' => 'Excellent course with comprehensive coverage of AI concepts. The instructor explains complex topics very clearly.', 'rating' => 5],
                    ['name' => 'Fatima Khan', 'comment' => 'Great practical approach with real-world projects. I learned to build my own AI applications.', 'rating' => 5],
                    ['name' => 'Mohammad Ali', 'comment' => 'The course structure is well-organized and the assignments are challenging but rewarding.', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Rashida Begum', 'comment' => 'Highly recommended for anyone wanting to enter the AI field. Great value for money!', 'rating' => 5],
                    ['name' => 'Karim Hassan', 'comment' => 'The instructor is knowledgeable and patient. Excellent support throughout the course.', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'Student Success Story - AI Developer'],
                    ['title' => 'Course Overview and Expectations'],
                    ['title' => 'Alumni Testimonial - Career Transition']
                ]
            ]
        ],
        2 => [
            'id' => 2,
            'title' => 'Deep Learning with Computer Vision',
            'badge' => '33% OFF',
            'batch' => 'Batch 7',
            'seats' => '100 seats remaining',
            'days' => '65 days remaining',
            'image' => asset('images/Course_Card_Banner/b.png'),
            'old_price' => '6000',
            'new_price' => '4020',
            'duration' => '40-45 Classes',
            'class_type' => 'Live Classes',
            'access' => 'Lifetime',
            'description' => 'Explore computer vision with deep learning and build sophisticated image recognition and object detection systems. This course provides hands-on experience with state-of-the-art computer vision techniques including convolutional neural networks, image segmentation, object detection, and facial recognition.

You will learn to work with popular computer vision libraries like OpenCV, PIL, and deep learning frameworks such as TensorFlow and PyTorch. The course covers both traditional computer vision methods and modern deep learning approaches, giving you a comprehensive understanding of the field.

Projects include building image classifiers, implementing object detection systems, creating facial recognition applications, and developing real-time video analysis tools. You will also learn about advanced topics like transfer learning, data augmentation, and model optimization for deployment.',
            'curriculum' => [
                ['Introduction to Computer Vision', 'Image fundamentals', 'Digital image processing basics'],
                ['Python libraries for CV', 'OpenCV installation and setup', 'Basic image operations'],
                ['Image preprocessing techniques', 'Filtering and enhancement', 'Geometric transformations'],
                ['Feature detection and extraction', 'Edge detection algorithms', 'Corner and blob detection'],
                ['Traditional ML for CV', 'Image classification with ML', 'Support Vector Machines for images'],
                ['Introduction to Deep Learning', 'Neural networks for images', 'Convolutional layers'],
                ['Convolutional Neural Networks', 'CNN architectures', 'Image classification with CNNs'],
                ['Advanced CNN architectures', 'ResNet, VGG, and Inception', 'Transfer learning techniques'],
                ['Object detection fundamentals', 'YOLO and R-CNN families', 'Real-time object detection'],
                ['Image segmentation', 'Semantic and instance segmentation', 'U-Net and Mask R-CNN'],
                ['Face recognition and analysis', 'Facial landmark detection', 'Emotion recognition'],
                ['Video analysis and tracking', 'Motion detection', 'Object tracking algorithms'],
                ['Advanced topics', 'Generative models for images', 'Style transfer and GANs'],
                ['Model deployment', 'Optimization for mobile', 'Real-world applications']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Sadia Islam', 'comment' => 'Amazing course for computer vision. The projects are very practical and industry-relevant.', 'rating' => 5],
                    ['name' => 'Tanvir Ahmed', 'comment' => 'Great depth in covering both traditional and deep learning approaches to computer vision.', 'rating' => 5],
                    ['name' => 'Nabila Rahman', 'comment' => 'Excellent instructor and well-structured curriculum. Highly recommended!', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Omar Faruk', 'comment' => 'The hands-on approach really helped me understand complex CV concepts.', 'rating' => 5],
                    ['name' => 'Ayesha Khatun', 'comment' => 'Perfect course for anyone interested in computer vision and AI.', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'Computer Vision Project Showcase'],
                    ['title' => 'Student Portfolio Review'],
                    ['title' => 'Industry Expert Interview']
                ]
            ]
        ],
        3 => [
            'id' => 3,
            'title' => 'Data Structure and Algorithm with Leetcode Exercise',
            'badge' => 'New',
            'batch' => 'Batch 1',
            'seats' => null,
            'days' => null,
            'image' => asset('images/Course_Card_Banner/c.png'),
            'old_price' => null,
            'new_price' => '1100',
            'duration' => '24 Classes',
            'class_type' => 'Pre-recorded',
            'access' => 'Lifetime',
            'description' => 'Master data structures and algorithms with hands-on Leetcode practice for interview preparation. This course is designed to help you excel in technical interviews and become a better programmer. You will learn fundamental data structures and algorithms while solving hundreds of problems from Leetcode.

The course covers arrays, strings, linked lists, stacks, queues, trees, graphs, and advanced topics like dynamic programming and greedy algorithms. Each concept is explained with clear examples and followed by extensive practice problems.

You will develop problem-solving skills that are essential for technical interviews at top companies like Google, Facebook, Amazon, and Microsoft. The course also covers time and space complexity analysis, helping you write efficient code.',
            'curriculum' => [
                ['Course objectives and expectations', 'Overview of data structures and algorithms', 'Problem-solving strategies'],
                ['Python programming refresher', 'Syntax, variables, and data types', 'Control flow and functions'],
                ['Array fundamentals', 'Array operations and manipulations', 'Two-pointer technique'],
                ['String processing', 'String algorithms', 'Pattern matching'],
                ['Linked Lists', 'Implementation and operations', 'Solving linked list problems'],
                ['Stacks and Queues', 'Implementation and applications', 'Stack and queue problems'],
                ['Trees and Binary Trees', 'Tree traversals', 'Binary search trees'],
                ['Binary Tree problems', 'Tree algorithms', 'Advanced tree structures'],
                ['Graph fundamentals', 'Graph representations', 'Graph traversal algorithms'],
                ['Graph algorithms', 'Shortest path algorithms', 'Minimum spanning tree'],
                ['Sorting algorithms', 'Comparison of sorting techniques', 'Custom sorting'],
                ['Searching algorithms', 'Binary search variations', 'Search in rotated arrays'],
                ['Dynamic Programming', 'DP fundamentals', 'Common DP patterns'],
                ['Advanced DP', 'Optimization problems', 'State space reduction'],
                ['Greedy algorithms', 'Greedy strategy', 'Proving correctness'],
                ['Backtracking', 'Recursive problem solving', 'Optimization with backtracking'],
                ['Advanced topics', 'Bit manipulation', 'Mathematical algorithms'],
                ['Interview preparation', 'Problem-solving techniques', 'Time management strategies']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Rafiq Hasan', 'comment' => 'Excellent preparation for technical interviews. The Leetcode problems are very well selected.', 'rating' => 5],
                    ['name' => 'Samina Akter', 'comment' => 'Great course structure with progressive difficulty. Helped me land my dream job!', 'rating' => 5],
                    ['name' => 'Imran Khan', 'comment' => 'The explanation of algorithms is clear and the practice problems are comprehensive.', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Farah Ahmed', 'comment' => 'Best DSA course I have taken. The instructor explains complex concepts very simply.', 'rating' => 5],
                    ['name' => 'Shahid Rahman', 'comment' => 'Perfect for interview preparation. I solved 200+ Leetcode problems!', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'Success Story - From Zero to Hero'],
                    ['title' => 'Algorithm Visualization Demo'],
                    ['title' => 'Interview Tips and Tricks']
                ]
            ]
        ]
        // Add more courses as needed...
    ];

    // Get course data or return 404
    $course = $courseData[$id] ?? abort(404);
    
    return view('course-detail', compact('course'));
});

Route::get('/enroll/{id}', function ($id) {
    // Course enrollment data mapping
    $enrollmentData = [
        1 => [
            'id' => 1,
            'title' => 'AI Based Software Development With Python',
            'badge' => '32% OFF',
            'batch' => 'Batch 9',
            'duration' => '6-8 Months',
            'class_type' => 'Live Classes',
            'seats' => '100 seats remaining',
            'days' => '56 days remaining',
            'image' => asset('images/Course_Card_Banner/a.png'),
            'old_price' => '7500',
            'new_price' => '5100',
            'category' => 'Artificial Intelligence & Machine Learning',
            'experience_label' => 'Programming Experience Level',
            'experience_options' => [
                'beginner' => 'Beginner (No programming experience)',
                'basic' => 'Basic (Some Python knowledge)',
                'intermediate' => 'Intermediate (1-2 years experience)',
                'advanced' => 'Advanced (3+ years experience)'
            ],
            'motivation_placeholder' => 'e.g., I want to transition into AI development, build intelligent applications, or enhance my career prospects...',
            'highlights' => [
                'Lifetime access to course materials',
                'Live interactive sessions with expert instructors',
                'Real-world AI projects and portfolio building',
                'Industry-recognized certification',
                'Job placement assistance',
                'Access to exclusive AI development community',
                'Regular assignments and code reviews',
                'Coverage of TensorFlow, PyTorch, and scikit-learn'
            ]
        ],
        2 => [
            'id' => 2,
            'title' => 'Deep Learning with Computer Vision',
            'badge' => '33% OFF',
            'batch' => 'Batch 7',
            'duration' => '40-45 Classes',
            'class_type' => 'Live Classes',
            'seats' => '100 seats remaining',
            'days' => '65 days remaining',
            'image' => asset('images/Course_Card_Banner/b.png'),
            'old_price' => '6000',
            'new_price' => '4020',
            'category' => 'Computer Vision & Deep Learning',
            'experience_label' => 'Computer Vision Experience',
            'experience_options' => [
                'beginner' => 'Beginner (No CV experience)',
                'basic' => 'Basic (Familiar with image processing)',
                'intermediate' => 'Intermediate (Some deep learning knowledge)',
                'advanced' => 'Advanced (Working with CNNs)'
            ],
            'motivation_placeholder' => 'e.g., I want to build image recognition systems, work on autonomous vehicles, or develop computer vision applications...',
            'highlights' => [
                'Hands-on experience with OpenCV and deep learning',
                'Build real-time object detection systems',
                'Face recognition and image segmentation projects',
                'Industry-standard CNN architectures (ResNet, YOLO)',
                'Transfer learning and model optimization',
                'Portfolio of computer vision applications',
                'Expert guidance on research papers',
                'GPU-accelerated training techniques'
            ]
        ],
        3 => [
            'id' => 3,
            'title' => 'Data Structure and Algorithm with Leetcode Exercise',
            'badge' => 'New',
            'batch' => 'Batch 1',
            'duration' => '24 Classes',
            'class_type' => 'Pre-recorded',
            'seats' => null,
            'days' => null,
            'image' => asset('images/Course_Card_Banner/c.png'),
            'old_price' => null,
            'new_price' => '1100',
            'category' => 'Data Structures & Algorithms',
            'experience_label' => 'Programming & Problem Solving Experience',
            'experience_options' => [
                'beginner' => 'Beginner (Basic programming knowledge)',
                'intermediate' => 'Intermediate (Some DSA knowledge)',
                'advanced' => 'Advanced (Regular competitive programming)',
                'expert' => 'Expert (Preparing for FAANG interviews)'
            ],
            'motivation_placeholder' => 'e.g., I want to crack technical interviews at top companies, improve my problem-solving skills, or master competitive programming...',
            'highlights' => [
                'Comprehensive coverage of all major data structures',
                'Step-by-step algorithm explanations',
                '200+ Leetcode problems with detailed solutions',
                'Interview preparation for top tech companies',
                'Time and space complexity analysis',
                'Pattern recognition for similar problems',
                'Weekly mock interview sessions',
                'Personalized feedback on coding style'
            ]
        ],
        4 => [
            'id' => 4,
            'title' => 'Machine Learning for Natural Language Processing',
            'badge' => '33% OFF',
            'batch' => 'Batch 8',
            'duration' => '5 Months',
            'class_type' => 'Live Classes',
            'seats' => '100 seats remaining',
            'days' => '8 days remaining',
            'image' => asset('images/Course_Card_Banner/d.png'),
            'old_price' => '6000',
            'new_price' => '4020',
            'category' => 'Natural Language Processing & AI',
            'experience_label' => 'NLP & Machine Learning Experience',
            'experience_options' => [
                'beginner' => 'Beginner (No NLP experience)',
                'basic' => 'Basic (Some text processing knowledge)',
                'intermediate' => 'Intermediate (Familiar with ML concepts)',
                'advanced' => 'Advanced (Experience with transformers)'
            ],
            'motivation_placeholder' => 'e.g., I want to build chatbots, work on language translation, or develop text analysis systems...',
            'highlights' => [
                'Advanced NLP techniques and transformers',
                'Build intelligent chatbots and language models',
                'Sentiment analysis and text classification',
                'Named entity recognition and information extraction',
                'Pre-trained models (BERT, GPT, T5)',
                'Real-world NLP project implementations',
                'Industry applications and case studies',
                'Research paper discussions and implementations'
            ]
        ],
        5 => [
            'id' => 5,
            'title' => 'Theory of Machine Learning (A-Z in Bangla)',
            'badge' => '80% OFF',
            'batch' => 'Batch 1',
            'duration' => '5 Hours (23 Videos)',
            'class_type' => 'Pre-recorded',
            'seats' => null,
            'days' => null,
            'image' => asset('images/Course_Card_Banner/e.png'),
            'old_price' => '3000',
            'new_price' => '600',
            'category' => 'Machine Learning Fundamentals',
            'experience_label' => 'Mathematical Background',
            'experience_options' => [
                'basic' => 'Basic (High school mathematics)',
                'intermediate' => 'Intermediate (College-level math)',
                'advanced' => 'Advanced (Statistics and calculus)',
                'expert' => 'Expert (Strong mathematical foundation)'
            ],
            'motivation_placeholder' => 'e.g., I want to understand ML theory deeply, prepare for advanced courses, or strengthen my mathematical foundation...',
            'highlights' => [
                'Complete theoretical foundation in Bangla',
                'Mathematical concepts explained simply',
                'Perfect for beginners and intermediate learners',
                'Video lectures with visual explanations',
                'Downloadable course materials',
                'Self-paced learning experience',
                'Certificate of completion',
                'Foundation for advanced ML courses'
            ]
        ]
    ];

    // Get enrollment data or return 404
    $course = $enrollmentData[$id] ?? abort(404);
    
    return view('enroll', compact('course'));
});

Route::get('/mycourses', function () {
    return view('myCourses');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('admin.logout');
    
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        // Course Management Routes
        Route::get('/manage-courses', [App\Http\Controllers\AdminController::class, 'manageCourses'])->name('admin.courses');
        Route::get('/courses/create', [App\Http\Controllers\AdminController::class, 'createCourse'])->name('admin.courses.create');
        Route::post('/courses', [App\Http\Controllers\AdminController::class, 'storeCourse'])->name('admin.courses.store');
        Route::get('/courses/{course}/edit', [App\Http\Controllers\AdminController::class, 'editCourse'])->name('admin.courses.edit');
        Route::put('/courses/{course}', [App\Http\Controllers\AdminController::class, 'updateCourse'])->name('admin.courses.update');
        Route::delete('/courses/{course}', [App\Http\Controllers\AdminController::class, 'deleteCourse'])->name('admin.courses.delete');
        
        // User Management Routes
        Route::get('/users', [App\Http\Controllers\AdminController::class, 'manageUsers'])->name('admin.users');
        Route::get('/users/{user}/edit', [App\Http\Controllers\AdminController::class, 'editUser'])->name('admin.users.edit');
        Route::put('/users/{user}', [App\Http\Controllers\AdminController::class, 'updateUser'])->name('admin.users.update');
        Route::delete('/users/{user}', [App\Http\Controllers\AdminController::class, 'deleteUser'])->name('admin.users.delete');
        
        Route::get('/mycourses', [App\Http\Controllers\AdminController::class, 'myCourses'])->name('admin.mycourses');
    });
});

Route::get('/certificate', function () {
    return view('certificate');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/studentdashboard', function () {
    return view('studentdashboard');
});
