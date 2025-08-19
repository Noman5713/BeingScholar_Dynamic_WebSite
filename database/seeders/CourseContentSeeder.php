<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\CourseLesson;

class CourseContentSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing modules and lessons for courses 1 and 2
        \App\Models\CourseModule::whereIn('course_id', [1, 2])->delete();

        // Create Course 1: Java Spring Boot (to match the static link /courseContent/1)
        $javaSpringCourse = Course::updateOrCreate(
            ['id' => 1],
            [
                'title' => 'Professional Certificate in Java Spring Boot and Web App Development',
                'description' => 'Complete Java Spring Boot development course with hands-on projects',
                'instructor' => 'Dr. Sheak Rashed Haider Noori',
                'duration' => '6 Months',
                'level' => 'Intermediate',
                'prerequisites' => 'Basic Java knowledge',
                'price' => 5000.00,
                'banner_image' => 'images/Course_Card_Banner/i.png',
                'status' => 'active',
                'max_students' => 50,
                'start_date' => '2025-01-01',
                'end_date' => '2025-07-01',
                'batch_number' => 'Batch 1',
            ]
        );

        // Create Course 2: Data Analytics (to match the static link /courseContent/2)
        $dataAnalyticsCourse = Course::updateOrCreate(
            ['id' => 2],
            [
                'title' => 'Applied Data Analytics Masterclass',
                'description' => 'Master data analytics with hands-on projects and real-world applications',
                'instructor' => 'Md. Zahid Hasan',
                'duration' => '4 Months',
                'level' => 'Beginner',
                'prerequisites' => 'Basic Mathematics',
                'price' => 4000.00,
                'banner_image' => 'images/Course_Card_Banner/e.png',
                'status' => 'active',
                'max_students' => 40,
                'start_date' => '2025-02-01',
                'end_date' => '2025-06-01',
                'batch_number' => 'Batch 1',
            ]
        );

        // Create modules for the Java Spring Boot course
        $modules = [
            [
                'title' => 'Module 1: Introduction to Java',
                'description' => 'Basic Java concepts and setup',
                'order' => 1,
                'lessons' => [
                    [
                        'title' => 'Java Installation and Setup',
                        'type' => 'video',
                        'duration_minutes' => 15,
                        'order' => 1,
                        'is_free' => true,
                    ],
                    [
                        'title' => 'Java Basics Study Guide',
                        'type' => 'pdf',
                        'order' => 2,
                        'is_free' => false,
                    ],
                ]
            ],
            [
                'title' => 'Module 2: Java Basics',
                'description' => 'Variables, data types, and control structures',
                'order' => 2,
                'lessons' => [
                    [
                        'title' => 'Variables and Data Types',
                        'type' => 'video',
                        'duration_minutes' => 22,
                        'order' => 1,
                        'is_free' => false,
                    ],
                ]
            ],
            [
                'title' => 'Module 3: Java Syntax Guide',
                'description' => 'Complete syntax reference',
                'order' => 3,
                'lessons' => [
                    [
                        'title' => 'Java Syntax Reference',
                        'type' => 'pdf',
                        'order' => 1,
                        'is_free' => false,
                    ],
                ]
            ],
            [
                'title' => 'Module 4: Object-Oriented Programming',
                'description' => 'OOP concepts in Java',
                'order' => 4,
                'lessons' => [
                    [
                        'title' => 'Classes and Objects',
                        'type' => 'video',
                        'duration_minutes' => 28,
                        'order' => 1,
                        'is_free' => false,
                    ],
                ]
            ],
            [
                'title' => 'Module 5: Spring Framework Introduction',
                'description' => 'Getting started with Spring',
                'order' => 5,
                'lessons' => [
                    [
                        'title' => 'Spring Framework Overview',
                        'type' => 'video',
                        'duration_minutes' => 35,
                        'order' => 1,
                        'is_free' => false,
                    ],
                ]
            ],
            [
                'title' => 'Module 6: Spring Boot Setup',
                'description' => 'Spring Boot project setup and configuration',
                'order' => 6,
                'lessons' => [
                    [
                        'title' => 'Spring Boot Project Creation',
                        'type' => 'video',
                        'duration_minutes' => 18,
                        'order' => 1,
                        'is_free' => false,
                    ],
                ]
            ],
            [
                'title' => 'Module 7: Spring Boot Reference',
                'description' => 'Complete Spring Boot documentation',
                'order' => 7,
                'lessons' => [
                    [
                        'title' => 'Spring Boot Documentation',
                        'type' => 'pdf',
                        'order' => 1,
                        'is_free' => false,
                    ],
                ]
            ],
        ];

        // Create modules and lessons for Java Spring Boot course
        $this->createModulesAndLessons($javaSpringCourse, $modules);

        // Create modules for Data Analytics course
        $dataAnalyticsModules = [
            [
                'title' => 'Module 1: Introduction to Data Analytics',
                'description' => 'Basic concepts and overview of data analytics',
                'order' => 1,
                'lessons' => [
                    [
                        'title' => 'What is Data Analytics?',
                        'type' => 'video',
                        'duration_minutes' => 20,
                        'order' => 1,
                        'is_free' => true,
                    ],
                    [
                        'title' => 'Data Analytics Roadmap',
                        'type' => 'pdf',
                        'order' => 2,
                        'is_free' => false,
                    ],
                ]
            ],
            [
                'title' => 'Module 2: Python for Data Analytics',
                'description' => 'Using Python for data analysis',
                'order' => 2,
                'lessons' => [
                    [
                        'title' => 'Python Data Libraries',
                        'type' => 'video',
                        'duration_minutes' => 30,
                        'order' => 1,
                        'is_free' => false,
                    ],
                ]
            ],
            [
                'title' => 'Module 3: Data Visualization',
                'description' => 'Creating effective data visualizations',
                'order' => 3,
                'lessons' => [
                    [
                        'title' => 'Matplotlib and Seaborn',
                        'type' => 'video',
                        'duration_minutes' => 25,
                        'order' => 1,
                        'is_free' => false,
                    ],
                ]
            ],
        ];

        // Create modules and lessons for Data Analytics course
        $this->createModulesAndLessons($dataAnalyticsCourse, $dataAnalyticsModules);
    }

    private function createModulesAndLessons($course, $modules)
    {
        foreach ($modules as $moduleData) {
            $lessons = $moduleData['lessons'];
            unset($moduleData['lessons']);

            $module = CourseModule::create([
                'course_id' => $course->id,
                ...$moduleData
            ]);

            foreach ($lessons as $lessonData) {
                CourseLesson::create([
                    'course_module_id' => $module->id,
                    ...$lessonData
                ]);
            }
        }
    }
}
