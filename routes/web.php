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
        ],
        4 => [
            'id' => 4,
            'title' => 'Machine Learning for Natural Language Processing',
            'badge' => '33% OFF',
            'batch' => 'Batch 8',
            'seats' => '100 seats remaining',
            'days' => '8 days remaining',
            'image' => asset('images/Course_Card_Banner/d.png'),
            'old_price' => '6000',
            'new_price' => '4020',
            'duration' => '40-45 Classes',
            'class_type' => 'Live Classes',
            'access' => 'Lifetime',
            'description' => 'Learn advanced Natural Language Processing techniques and build intelligent text processing and language understanding systems. This course covers state-of-the-art NLP algorithms including text preprocessing, sentiment analysis, named entity recognition, machine translation, and language generation.

You will work with popular NLP libraries like NLTK, spaCy, and transformers, and learn to implement modern deep learning approaches for language tasks. The course includes hands-on projects with real-world datasets and covers both traditional ML approaches and cutting-edge transformer models.

Key topics include text preprocessing, feature extraction, word embeddings, RNNs for NLP, transformer architecture, BERT, GPT models, and practical applications like chatbots, sentiment analysis, and document classification.',
            'curriculum' => [
                ['Introduction to NLP', 'Text processing fundamentals', 'NLP pipeline overview'],
                ['Text preprocessing', 'Tokenization and normalization', 'Regular expressions'],
                ['Feature extraction', 'Bag of words', 'TF-IDF vectorization'],
                ['Traditional ML for NLP', 'Classification algorithms', 'Text classification projects'],
                ['Word embeddings', 'Word2Vec and GloVe', 'Semantic similarity'],
                ['Language models', 'N-gram models', 'Statistical language modeling'],
                ['Neural networks for NLP', 'RNNs and LSTMs', 'Sequence-to-sequence models'],
                ['Attention mechanisms', 'Transformer architecture', 'Self-attention'],
                ['Pre-trained models', 'BERT and variants', 'Transfer learning in NLP'],
                ['Named Entity Recognition', 'POS tagging', 'Information extraction'],
                ['Sentiment analysis', 'Opinion mining', 'Emotion detection'],
                ['Text generation', 'GPT models', 'Creative text generation'],
                ['Machine translation', 'Seq2seq with attention', 'Neural MT systems'],
                ['Advanced applications', 'Question answering', 'Text summarization']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Dr. Sarah Ahmed', 'comment' => 'Excellent coverage of modern NLP techniques. The transformer section is particularly well explained.', 'rating' => 5],
                    ['name' => 'Ibrahim Hassan', 'comment' => 'Great practical approach with real-world projects. I built my own chatbot!', 'rating' => 5],
                    ['name' => 'Amina Rahman', 'comment' => 'Comprehensive course covering both traditional and modern NLP methods.', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Tariq Ali', 'comment' => 'The best NLP course I have taken. Clear explanations and excellent projects.', 'rating' => 5],
                    ['name' => 'Nadia Khan', 'comment' => 'Perfect for anyone wanting to work with text data and language models.', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'NLP Project Showcase'],
                    ['title' => 'Transformer Model Explanation'],
                    ['title' => 'Industry Applications of NLP']
                ]
            ]
        ],
        5 => [
            'id' => 5,
            'title' => 'Theory of Machine Learning (A-Z in Bangla)',
            'badge' => '80% OFF',
            'batch' => 'Batch 1',
            'seats' => null,
            'days' => null,
            'image' => asset('images/Course_Card_Banner/e.png'),
            'old_price' => '3000',
            'new_price' => '600',
            'duration' => '5 Hours (23 Videos)',
            'class_type' => 'Pre-recorded',
            'access' => 'Lifetime',
            'description' => 'Complete machine learning theory explained in Bangla, perfect for beginners and intermediate learners. This course provides a solid theoretical foundation in machine learning concepts, algorithms, and mathematical principles behind ML systems.

The course covers fundamental concepts like supervised and unsupervised learning, model evaluation, overfitting, regularization, and optimization techniques. All explanations are provided in clear Bangla language making complex mathematical concepts accessible to Bengali-speaking students.

You will understand the mathematical foundations, statistical principles, and theoretical aspects that power modern machine learning systems, preparing you for advanced ML courses and practical implementations.',
            'curriculum' => [
                ['Introduction to Machine Learning', 'Types of learning', 'ML workflow'],
                ['Mathematical foundations', 'Linear algebra basics', 'Statistics and probability'],
                ['Supervised learning theory', 'Regression fundamentals', 'Classification principles'],
                ['Model evaluation', 'Training vs testing', 'Cross-validation'],
                ['Overfitting and regularization', 'Bias-variance tradeoff', 'Model complexity'],
                ['Optimization in ML', 'Gradient descent', 'Cost functions'],
                ['Unsupervised learning', 'Clustering theory', 'Dimensionality reduction'],
                ['Ensemble methods', 'Bagging and boosting', 'Random forests'],
                ['Neural network theory', 'Perceptrons', 'Backpropagation'],
                ['Deep learning fundamentals', 'CNN theory', 'RNN concepts'],
                ['Advanced topics', 'SVM theory', 'Kernel methods'],
                ['Model selection', 'Hyperparameter tuning', 'Performance metrics']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Rashida Khatun', 'comment' => 'Excellent theoretical foundation in Bangla. Very clear explanations.', 'rating' => 5],
                    ['name' => 'Mahmud Hasan', 'comment' => 'Perfect for understanding ML theory before practical implementation.', 'rating' => 5],
                    ['name' => 'Fatema Begum', 'comment' => 'Great value for money. Comprehensive coverage of ML theory.', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Abdul Karim', 'comment' => 'Best ML theory course in Bangla. Highly recommended!', 'rating' => 5],
                    ['name' => 'Salma Ahmed', 'comment' => 'Clear explanations of complex mathematical concepts.', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'ML Theory Fundamentals'],
                    ['title' => 'Mathematical Concepts in ML'],
                    ['title' => 'Student Success Stories']
                ]
            ]
        ],
        6 => [
            'id' => 6,
            'title' => 'Deep Reinforcement Learning For Research',
            'badge' => '40% OFF',
            'batch' => 'Batch 1',
            'seats' => '75 seats remaining',
            'days' => '246 days remaining',
            'image' => asset('images/Course_Card_Banner/f.png'),
            'old_price' => '3000',
            'new_price' => '1800',
            'duration' => '30-35 Classes',
            'class_type' => 'Live Classes',
            'access' => 'Lifetime',
            'description' => 'Advanced reinforcement learning techniques for research and development in AI systems. This course is designed for researchers and advanced practitioners who want to work on cutting-edge RL algorithms and contribute to the field.

You will learn advanced RL concepts including policy gradient methods, actor-critic algorithms, deep Q-networks, and modern approaches like PPO, SAC, and Rainbow DQN. The course emphasizes research methodology, experimental design, and reproducible research practices.

The curriculum includes implementing research papers, conducting original experiments, and developing novel RL algorithms for complex environments. You will work with state-of-the-art RL frameworks and learn to evaluate and compare different RL approaches.',
            'curriculum' => [
                ['RL fundamentals review', 'Markov Decision Processes', 'Value and policy iteration'],
                ['Deep Q-Learning', 'DQN architecture', 'Experience replay'],
                ['Policy gradient methods', 'REINFORCE algorithm', 'Actor-critic methods'],
                ['Advanced policy methods', 'PPO and TRPO', 'Natural policy gradients'],
                ['Continuous control', 'DDPG and SAC', 'Soft actor-critic'],
                ['Multi-agent RL', 'Game theory basics', 'Cooperative and competitive settings'],
                ['Hierarchical RL', 'Options framework', 'Goal-conditioned RL'],
                ['Model-based RL', 'World models', 'Planning with learned models'],
                ['Meta-learning in RL', 'Learning to learn', 'Few-shot adaptation'],
                ['Research methodology', 'Experimental design', 'Statistical analysis'],
                ['Implementing papers', 'Reproducibility', 'Code optimization'],
                ['Advanced environments', 'Robotics simulations', 'Complex domains'],
                ['Current research trends', 'Open problems', 'Future directions'],
                ['Research project', 'Original experiments', 'Paper writing']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Dr. Kamal Uddin', 'comment' => 'Excellent research-oriented course. Great for PhD students and researchers.', 'rating' => 5],
                    ['name' => 'Reza Ahmed', 'comment' => 'Very advanced content with focus on latest research developments.', 'rating' => 5],
                    ['name' => 'Nasir Khan', 'comment' => 'Challenging but rewarding. Perfect for serious RL researchers.', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Farid Rahman', 'comment' => 'Best RL course for research purposes. Highly technical and detailed.', 'rating' => 5],
                    ['name' => 'Shahin Alam', 'comment' => 'Excellent for understanding cutting-edge RL algorithms.', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'Research Project Presentations'],
                    ['title' => 'RL Algorithm Implementations'],
                    ['title' => 'Academic Career Guidance']
                ]
            ]
        ],
        7 => [
            'id' => 7,
            'title' => 'Pandas in Python (A-Z in Bangla)',
            'badge' => '50% OFF',
            'batch' => 'Batch 1',
            'seats' => null,
            'days' => null,
            'image' => asset('images/Course_Card_Banner/g.png'),
            'old_price' => '2000',
            'new_price' => '1000',
            'duration' => '15 Hours (45 Videos)',
            'class_type' => 'Pre-recorded',
            'access' => 'Lifetime',
            'description' => 'Complete Pandas library tutorial in Bangla for data manipulation and analysis with Python. This comprehensive course covers everything from basic data structures to advanced data manipulation techniques using the powerful Pandas library.

You will learn to work with DataFrames and Series, perform data cleaning, filtering, grouping, merging, and visualization. The course includes real-world datasets and practical exercises to help you master data analysis skills essential for data science and analytics roles.

All concepts are explained in clear Bangla language, making it accessible for Bengali-speaking students who want to master data manipulation and analysis using Python and Pandas.',
            'curriculum' => [
                ['Introduction to Pandas', 'Installation and setup', 'Overview of data structures'],
                ['Series fundamentals', 'Creating and manipulating Series', 'Indexing and selection'],
                ['DataFrame basics', 'Creating DataFrames', 'Basic operations'],
                ['Data loading', 'Reading CSV, Excel files', 'Database connections'],
                ['Data inspection', 'Info, describe, head/tail', 'Data types'],
                ['Data selection', 'Indexing and slicing', 'Boolean indexing'],
                ['Data cleaning', 'Handling missing values', 'Data type conversion'],
                ['Data filtering', 'Query operations', 'Conditional selection'],
                ['Data transformation', 'Apply functions', 'String operations'],
                ['Groupby operations', 'Aggregation functions', 'Group transformations'],
                ['Data merging', 'Join operations', 'Concatenation'],
                ['Pivot tables', 'Reshaping data', 'Crosstab'],
                ['Time series analysis', 'DateTime operations', 'Resampling'],
                ['Data visualization', 'Plotting with Pandas', 'Integration with matplotlib'],
                ['Advanced topics', 'Performance optimization', 'Memory management']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Rubina Akter', 'comment' => 'Perfect Pandas course in Bangla. Very detailed and practical.', 'rating' => 5],
                    ['name' => 'Jahangir Alam', 'comment' => 'Excellent for data analysis beginners. Clear explanations.', 'rating' => 5],
                    ['name' => 'Sultana Begum', 'comment' => 'Great practical examples and real-world datasets.', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Shafiq Rahman', 'comment' => 'Best Pandas tutorial in Bangla. Highly recommended for data analysts.', 'rating' => 5],
                    ['name' => 'Nasreen Khan', 'comment' => 'Comprehensive coverage of Pandas functionality.', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'Pandas Data Analysis Projects'],
                    ['title' => 'Real-world Data Cleaning'],
                    ['title' => 'Career in Data Analysis']
                ]
            ]
        ],
        8 => [
            'id' => 8,
            'title' => 'Python Fundamentals with Object Oriented Programming',
            'badge' => 'New',
            'batch' => 'Batch 1',
            'seats' => null,
            'days' => null,
            'image' => asset('images/Course_Card_Banner/h.png'),
            'old_price' => null,
            'new_price' => '1000',
            'duration' => '25 Hours (60 Videos)',
            'class_type' => 'Pre-recorded',
            'access' => 'Lifetime',
            'description' => 'Learn Python from basics to advanced Object-Oriented Programming concepts. Perfect for beginners and intermediate developers who want to master Python programming fundamentals and OOP principles.

This course covers Python syntax, data structures, control flow, functions, modules, and comprehensive OOP concepts including classes, objects, inheritance, polymorphism, and encapsulation. You will build real-world projects and learn industry best practices.

The curriculum is designed to take you from a complete beginner to a confident Python programmer ready for advanced topics like web development, data science, or machine learning.',
            'curriculum' => [
                ['Python introduction', 'Installation and setup', 'IDE configuration'],
                ['Basic syntax', 'Variables and data types', 'Input/output operations'],
                ['Control structures', 'Conditionals and loops', 'Flow control'],
                ['Data structures', 'Lists, tuples, dictionaries', 'Sets and strings'],
                ['Functions', 'Function definition', 'Parameters and arguments'],
                ['Modules and packages', 'Import statements', 'Standard library'],
                ['File handling', 'Reading and writing files', 'File operations'],
                ['Error handling', 'Try-except blocks', 'Exception handling'],
                ['OOP introduction', 'Classes and objects', 'Attributes and methods'],
                ['Inheritance', 'Single and multiple inheritance', 'Method overriding'],
                ['Polymorphism', 'Method overloading', 'Duck typing'],
                ['Encapsulation', 'Access modifiers', 'Property decorators'],
                ['Advanced OOP', 'Abstract classes', 'Static and class methods'],
                ['Design patterns', 'Common patterns', 'Best practices'],
                ['Project development', 'Building complete applications', 'Code organization']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Shakil Ahmed', 'comment' => 'Excellent Python course for beginners. Very well structured.', 'rating' => 5],
                    ['name' => 'Ruma Khatun', 'comment' => 'Perfect introduction to OOP concepts. Clear examples.', 'rating' => 5],
                    ['name' => 'Tanvir Hasan', 'comment' => 'Great foundation course for Python programming.', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Nabila Rahman', 'comment' => 'Best Python fundamentals course. Highly recommended for beginners.', 'rating' => 5],
                    ['name' => 'Arif Khan', 'comment' => 'Excellent coverage of OOP principles and practical examples.', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'Python Project Showcase'],
                    ['title' => 'OOP Concepts Explained'],
                    ['title' => 'Programming Career Path']
                ]
            ]
        ],
        9 => [
            'id' => 9,
            'title' => 'JavaScript for New Developer',
            'badge' => 'New',
            'batch' => 'Batch 1',
            'seats' => null,
            'days' => null,
            'image' => asset('images/Course_Card_Banner/i.png'),
            'old_price' => null,
            'new_price' => '1000',
            'duration' => '20 Hours (50 Videos)',
            'class_type' => 'Pre-recorded',
            'access' => 'Lifetime',
            'description' => 'Complete JavaScript course for beginners who want to learn modern JavaScript and web development fundamentals. This course covers everything from basic syntax to advanced JavaScript concepts and modern ES6+ features.

You will learn DOM manipulation, event handling, asynchronous programming, APIs, and modern JavaScript frameworks introduction. The course includes hands-on projects to build interactive web applications and prepare you for frontend development roles.

Perfect for complete beginners with no programming experience as well as developers from other languages who want to master JavaScript for web development.',
            'curriculum' => [
                ['JavaScript introduction', 'Setup and environment', 'Browser developer tools'],
                ['Basic syntax', 'Variables and data types', 'Operators and expressions'],
                ['Control structures', 'Conditionals and loops', 'Switch statements'],
                ['Functions', 'Function declarations', 'Arrow functions and scope'],
                ['Arrays and objects', 'Array methods', 'Object manipulation'],
                ['DOM manipulation', 'Selecting elements', 'Modifying content'],
                ['Event handling', 'Event listeners', 'Event propagation'],
                ['ES6+ features', 'Let/const, template literals', 'Destructuring'],
                ['Asynchronous JavaScript', 'Callbacks and promises', 'Async/await'],
                ['APIs and fetch', 'HTTP requests', 'JSON handling'],
                ['Error handling', 'Try-catch blocks', 'Debugging techniques'],
                ['Modern JavaScript', 'Modules and imports', 'Build tools introduction'],
                ['DOM projects', 'Interactive applications', 'Form validation'],
                ['API projects', 'Fetching data', 'Dynamic content'],
                ['Framework introduction', 'React basics', 'Vue.js overview']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Sakib Rahman', 'comment' => 'Excellent JavaScript course for complete beginners. Very practical.', 'rating' => 5],
                    ['name' => 'Farzana Ahmed', 'comment' => 'Great introduction to modern JavaScript and web development.', 'rating' => 5],
                    ['name' => 'Imran Ali', 'comment' => 'Perfect foundation for frontend development career.', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Rashid Hassan', 'comment' => 'Best JavaScript course for new developers. Highly recommended.', 'rating' => 5],
                    ['name' => 'Salma Begum', 'comment' => 'Clear explanations and excellent hands-on projects.', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'JavaScript Project Demos'],
                    ['title' => 'Modern Web Development'],
                    ['title' => 'Frontend Career Guide']
                ]
            ]
        ],
        10 => [
            'id' => 10,
            'title' => 'System Design Software Developer - 01',
            'badge' => '50% OFF',
            'batch' => 'Batch 1',
            'seats' => '49 seats remaining',
            'days' => '266 days remaining',
            'image' => asset('images/Course_Card_Banner/j.png'),
            'old_price' => '7000',
            'new_price' => '3500',
            'duration' => '35-40 Classes',
            'class_type' => 'Live Classes',
            'access' => 'Lifetime',
            'description' => 'Master system design principles and architecture patterns for scalable software development. This course is essential for software engineers who want to design large-scale distributed systems and prepare for system design interviews.

You will learn about scalability, reliability, availability, and consistency in distributed systems. The course covers database design, caching strategies, load balancing, microservices architecture, and real-world system design case studies.

Perfect for mid-level to senior developers who want to advance their careers and take on system architect roles. The course includes practical exercises designing systems like social media platforms, video streaming services, and e-commerce applications.',
            'curriculum' => [
                ['System design fundamentals', 'Scalability principles', 'Performance metrics'],
                ['Database design', 'SQL vs NoSQL', 'Database sharding'],
                ['Caching strategies', 'Cache patterns', 'Redis and Memcached'],
                ['Load balancing', 'Load balancer types', 'Distribution algorithms'],
                ['API design', 'RESTful services', 'API versioning'],
                ['Microservices architecture', 'Service decomposition', 'Inter-service communication'],
                ['Message queues', 'Asynchronous processing', 'Queue systems'],
                ['Distributed systems', 'CAP theorem', 'Consistency patterns'],
                ['Security design', 'Authentication', 'Authorization patterns'],
                ['Monitoring and logging', 'System observability', 'Error tracking'],
                ['Case study: Social media', 'Twitter-like system', 'Timeline generation'],
                ['Case study: Video streaming', 'YouTube-like system', 'Content delivery'],
                ['Case study: E-commerce', 'Amazon-like system', 'Payment processing'],
                ['Interview preparation', 'System design questions', 'Communication skills']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Mahbub Rahman', 'comment' => 'Excellent system design course. Perfect for senior developer interviews.', 'rating' => 5],
                    ['name' => 'Kamrul Hasan', 'comment' => 'Great practical approach with real-world case studies.', 'rating' => 5],
                    ['name' => 'Shabnam Akter', 'comment' => 'Very comprehensive coverage of distributed systems concepts.', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Aminul Islam', 'comment' => 'Best system design course for software architects. Highly recommended.', 'rating' => 5],
                    ['name' => 'Taslima Begum', 'comment' => 'Excellent preparation for system design interviews.', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'System Architecture Walkthroughs'],
                    ['title' => 'Interview Success Stories'],
                    ['title' => 'Senior Developer Career Path']
                ]
            ]
        ],
        11 => [
            'id' => 11,
            'title' => 'End to End AI Product Development for Fresher',
            'badge' => 'New',
            'batch' => 'Batch 1',
            'seats' => '50 seats remaining',
            'days' => '132 days remaining',
            'image' => asset('images/Course_Card_Banner/k.png'),
            'old_price' => null,
            'new_price' => '7500',
            'duration' => '50-60 Classes',
            'class_type' => 'Live Classes',
            'access' => 'Lifetime',
            'description' => 'Complete AI product development journey from concept to deployment for fresh graduates and entry-level developers. This comprehensive course covers the entire lifecycle of AI product development including ideation, data collection, model development, deployment, and maintenance.

You will learn to build AI products from scratch, including web applications with AI features, mobile apps with ML integration, and cloud-based AI services. The course emphasizes practical skills and industry best practices for AI product development.

Perfect for fresh graduates who want to start their careers in AI/ML product development and learn how to build production-ready AI applications that solve real-world problems.',
            'curriculum' => [
                ['AI product landscape', 'Market analysis', 'Product opportunities'],
                ['Product ideation', 'Problem identification', 'Solution design'],
                ['Data strategy', 'Data collection methods', 'Data quality assessment'],
                ['ML model development', 'Algorithm selection', 'Model training'],
                ['Model evaluation', 'Performance metrics', 'Model validation'],
                ['Backend development', 'API design', 'Database integration'],
                ['Frontend development', 'User interface design', 'User experience'],
                ['Model deployment', 'Cloud platforms', 'Containerization'],
                ['Monitoring and maintenance', 'Model performance tracking', 'Continuous integration'],
                ['Scalability considerations', 'Load handling', 'Performance optimization'],
                ['Security and privacy', 'Data protection', 'Model security'],
                ['Product analytics', 'User behavior tracking', 'A/B testing'],
                ['Business aspects', 'Monetization strategies', 'Product metrics'],
                ['Capstone project', 'End-to-end development', 'Product presentation']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Fahim Ahmed', 'comment' => 'Perfect course for fresh graduates. Comprehensive product development approach.', 'rating' => 5],
                    ['name' => 'Rashida Khatun', 'comment' => 'Excellent practical training for AI product development career.', 'rating' => 5],
                    ['name' => 'Sohel Rahman', 'comment' => 'Great end-to-end coverage from concept to deployment.', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Nasir Uddin', 'comment' => 'Best course for starting AI product development career.', 'rating' => 5],
                    ['name' => 'Ruma Begum', 'comment' => 'Practical approach with real industry projects.', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'AI Product Showcases'],
                    ['title' => 'Student Success Stories'],
                    ['title' => 'Career in AI Products']
                ]
            ]
        ],
        12 => [
            'id' => 12,
            'title' => 'Data Analytics With Machine Learning',
            'badge' => '40% OFF',
            'batch' => 'Batch 2',
            'seats' => '50 seats remaining',
            'days' => '5 days remaining',
            'image' => asset('images/Course_Card_Banner/l.png'),
            'old_price' => '7500',
            'new_price' => '4500',
            'duration' => '45-50 Classes',
            'class_type' => 'Live Classes',
            'access' => 'Lifetime',
            'description' => 'Combine data analytics with machine learning to extract insights and build predictive models from complex datasets. This course bridges the gap between traditional data analysis and modern machine learning techniques.

You will learn advanced analytics techniques including statistical analysis, data visualization, predictive modeling, and machine learning algorithm implementation. The course focuses on practical applications in business intelligence, customer analytics, and data-driven decision making.

Perfect for data analysts who want to upgrade their skills with machine learning and for ML practitioners who want to strengthen their analytics foundation.',
            'curriculum' => [
                ['Data analytics fundamentals', 'Statistical concepts', 'Analytics workflow'],
                ['Data collection and preprocessing', 'Data sources', 'Cleaning techniques'],
                ['Exploratory data analysis', 'Descriptive statistics', 'Data visualization'],
                ['Statistical inference', 'Hypothesis testing', 'Confidence intervals'],
                ['Regression analysis', 'Linear and logistic regression', 'Model interpretation'],
                ['Classification algorithms', 'Decision trees', 'Random forests'],
                ['Clustering techniques', 'K-means clustering', 'Hierarchical clustering'],
                ['Time series analysis', 'Trend analysis', 'Forecasting models'],
                ['Feature engineering', 'Feature selection', 'Dimensionality reduction'],
                ['Model evaluation', 'Cross-validation', 'Performance metrics'],
                ['Business intelligence', 'Dashboard creation', 'Reporting tools'],
                ['Customer analytics', 'Segmentation', 'Churn prediction'],
                ['Marketing analytics', 'Campaign optimization', 'ROI analysis'],
                ['Capstone project', 'End-to-end analytics', 'Business recommendations']
            ],
            'reviews' => [
                'web' => [
                    ['name' => 'Sharmin Akter', 'comment' => 'Perfect combination of analytics and ML. Very practical approach.', 'rating' => 5],
                    ['name' => 'Rafiqul Islam', 'comment' => 'Excellent course for advancing from analyst to ML practitioner.', 'rating' => 5],
                    ['name' => 'Nargis Begum', 'comment' => 'Great business focus with technical depth.', 'rating' => 4]
                ],
                'social' => [
                    ['name' => 'Kamal Ahmed', 'comment' => 'Best course for data analytics career advancement.', 'rating' => 5],
                    ['name' => 'Fatema Khan', 'comment' => 'Comprehensive coverage of analytics and ML integration.', 'rating' => 5]
                ],
                'video' => [
                    ['title' => 'Analytics Project Presentations'],
                    ['title' => 'Business Case Studies'],
                    ['title' => 'Data Career Progression']
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
        ],
        6 => [
            'id' => 6,
            'title' => 'Deep Reinforcement Learning For Research',
            'badge' => '40% OFF',
            'batch' => 'Batch 1',
            'duration' => '30-35 Classes',
            'class_type' => 'Live Classes',
            'seats' => '75 seats remaining',
            'days' => '246 days remaining',
            'image' => asset('images/Course_Card_Banner/f.png'),
            'old_price' => '3000',
            'new_price' => '1800',
            'category' => 'Reinforcement Learning & AI Research',
            'experience_label' => 'Research & Advanced ML Experience',
            'experience_options' => [
                'intermediate' => 'Intermediate (Strong ML background)',
                'advanced' => 'Advanced (Research experience)',
                'expert' => 'Expert (PhD level knowledge)',
                'researcher' => 'Active Researcher (Published papers)'
            ],
            'motivation_placeholder' => 'e.g., I want to conduct RL research, develop novel algorithms, or pursue PhD in AI...',
            'highlights' => [
                'Cutting-edge reinforcement learning research',
                'Implementation of research papers',
                'Advanced RL algorithms (PPO, SAC, Rainbow DQN)',
                'Research methodology and experimental design',
                'Original research project and publication',
                'Access to research community and mentorship',
                'Advanced mathematics and theoretical foundations',
                'Contribution to open-source RL libraries'
            ]
        ],
        7 => [
            'id' => 7,
            'title' => 'Pandas in Python (A-Z in Bangla)',
            'badge' => '50% OFF',
            'batch' => 'Batch 1',
            'duration' => '15 Hours (45 Videos)',
            'class_type' => 'Pre-recorded',
            'seats' => null,
            'days' => null,
            'image' => asset('images/Course_Card_Banner/g.png'),
            'old_price' => '2000',
            'new_price' => '1000',
            'category' => 'Data Analysis & Python Programming',
            'experience_label' => 'Python Programming Experience',
            'experience_options' => [
                'beginner' => 'Beginner (Basic Python knowledge)',
                'basic' => 'Basic (Some programming experience)',
                'intermediate' => 'Intermediate (Familiar with data types)',
                'advanced' => 'Advanced (Ready for data science)'
            ],
            'motivation_placeholder' => 'e.g., I want to analyze data professionally, work as data analyst, or prepare for data science career...',
            'highlights' => [
                'Complete Pandas mastery in Bangla language',
                'Real-world data analysis projects',
                'Data cleaning and preprocessing techniques',
                'Advanced data manipulation and transformation',
                'Integration with other Python libraries',
                'Business intelligence and reporting',
                'Practical exercises with datasets',
                'Career guidance for data analysts'
            ]
        ],
        8 => [
            'id' => 8,
            'title' => 'Python Fundamentals with Object Oriented Programming',
            'badge' => 'New',
            'batch' => 'Batch 1',
            'duration' => '25 Hours (60 Videos)',
            'class_type' => 'Pre-recorded',
            'seats' => null,
            'days' => null,
            'image' => asset('images/Course_Card_Banner/h.png'),
            'old_price' => null,
            'new_price' => '1000',
            'category' => 'Programming Fundamentals & OOP',
            'experience_label' => 'Programming Experience',
            'experience_options' => [
                'complete_beginner' => 'Complete Beginner (No programming)',
                'beginner' => 'Beginner (Some basic concepts)',
                'basic' => 'Basic (Other languages experience)',
                'switching' => 'Switching (From other languages to Python)'
            ],
            'motivation_placeholder' => 'e.g., I want to start programming career, learn Python for automation, or prepare for advanced development...',
            'highlights' => [
                'Complete Python foundation from scratch',
                'Object-oriented programming mastery',
                'Industry-standard coding practices',
                'Real-world programming projects',
                'Problem-solving and logical thinking',
                'Code organization and best practices',
                'Preparation for advanced Python courses',
                'Career guidance for software development'
            ]
        ],
        9 => [
            'id' => 9,
            'title' => 'JavaScript for New Developer',
            'badge' => 'New',
            'batch' => 'Batch 1',
            'duration' => '20 Hours (50 Videos)',
            'class_type' => 'Pre-recorded',
            'seats' => null,
            'days' => null,
            'image' => asset('images/Course_Card_Banner/i.png'),
            'old_price' => null,
            'new_price' => '1000',
            'category' => 'Web Development & JavaScript',
            'experience_label' => 'Web Development Experience',
            'experience_options' => [
                'complete_beginner' => 'Complete Beginner (No web development)',
                'html_css' => 'HTML/CSS (Basic web knowledge)',
                'basic' => 'Basic (Some programming experience)',
                'transitioning' => 'Transitioning (From other languages)'
            ],
            'motivation_placeholder' => 'e.g., I want to become frontend developer, build interactive websites, or learn modern web development...',
            'highlights' => [
                'Complete JavaScript mastery for beginners',
                'Modern ES6+ features and syntax',
                'DOM manipulation and event handling',
                'Asynchronous programming and APIs',
                'Interactive web application projects',
                'Introduction to popular frameworks',
                'Industry best practices and coding standards',
                'Frontend development career guidance'
            ]
        ],
        10 => [
            'id' => 10,
            'title' => 'System Design Software Developer - 01',
            'badge' => '50% OFF',
            'batch' => 'Batch 1',
            'duration' => '35-40 Classes',
            'class_type' => 'Live Classes',
            'seats' => '49 seats remaining',
            'days' => '266 days remaining',
            'image' => asset('images/Course_Card_Banner/j.png'),
            'old_price' => '7000',
            'new_price' => '3500',
            'category' => 'System Design & Software Architecture',
            'experience_label' => 'Software Development Experience',
            'experience_options' => [
                'junior' => 'Junior (1-2 years experience)',
                'mid_level' => 'Mid-level (3-5 years experience)',
                'senior' => 'Senior (5+ years experience)',
                'architect' => 'Architect (Looking to formalize knowledge)'
            ],
            'motivation_placeholder' => 'e.g., I want to design scalable systems, prepare for senior interviews, or become software architect...',
            'highlights' => [
                'Scalable system design principles',
                'Distributed systems architecture',
                'Database design and optimization',
                'Load balancing and caching strategies',
                'Microservices and API design',
                'Real-world case studies and projects',
                'Interview preparation for senior roles',
                'Industry best practices and patterns'
            ]
        ],
        11 => [
            'id' => 11,
            'title' => 'End to End AI Product Development for Fresher',
            'badge' => 'New',
            'batch' => 'Batch 1',
            'duration' => '50-60 Classes',
            'class_type' => 'Live Classes',
            'seats' => '50 seats remaining',
            'days' => '132 days remaining',
            'image' => asset('images/Course_Card_Banner/k.png'),
            'old_price' => null,
            'new_price' => '7500',
            'category' => 'AI Product Development & Deployment',
            'experience_label' => 'AI/ML and Development Experience',
            'experience_options' => [
                'fresh_graduate' => 'Fresh Graduate (CS/Engineering)',
                'career_changer' => 'Career Changer (From other fields)',
                'basic_ml' => 'Basic ML (Some theoretical knowledge)',
                'developer' => 'Developer (Looking to add AI skills)'
            ],
            'motivation_placeholder' => 'e.g., I want to build AI products, start AI career, or launch AI startup...',
            'highlights' => [
                'Complete AI product development lifecycle',
                'From ideation to production deployment',
                'Full-stack development with AI integration',
                'Cloud deployment and scalability',
                'Product management and business aspects',
                'Real industry projects and portfolio',
                'Startup guidance and entrepreneurship',
                'Job placement assistance in AI companies'
            ]
        ],
        12 => [
            'id' => 12,
            'title' => 'Data Analytics With Machine Learning',
            'badge' => '40% OFF',
            'batch' => 'Batch 2',
            'duration' => '45-50 Classes',
            'class_type' => 'Live Classes',
            'seats' => '50 seats remaining',
            'days' => '5 days remaining',
            'image' => asset('images/Course_Card_Banner/l.png'),
            'old_price' => '7500',
            'new_price' => '4500',
            'category' => 'Data Analytics & Machine Learning',
            'experience_label' => 'Analytics and ML Experience',
            'experience_options' => [
                'analyst' => 'Data Analyst (Looking to add ML)',
                'basic_ml' => 'Basic ML (Want analytics skills)',
                'business' => 'Business (Need technical skills)',
                'advanced' => 'Advanced (Looking for specialization)'
            ],
            'motivation_placeholder' => 'e.g., I want to advance from analyst to ML engineer, build predictive models, or lead data-driven decisions...',
            'highlights' => [
                'Perfect bridge between analytics and ML',
                'Advanced statistical analysis techniques',
                'Predictive modeling and forecasting',
                'Business intelligence and reporting',
                'Customer analytics and segmentation',
                'End-to-end analytics projects',
                'Industry case studies and applications',
                'Career advancement in data roles'
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
