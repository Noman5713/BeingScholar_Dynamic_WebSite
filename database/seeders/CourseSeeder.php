<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'title' => 'AI Based Software Development With Python',
                'description' => 'Master AI development with Python and build intelligent applications. This comprehensive course covers machine learning, deep learning, natural language processing, and computer vision.',
                'instructor' => 'Administrator',
                'duration' => '6-8 Months',
                'level' => 'Intermediate',
                'prerequisites' => 'Basic Python knowledge, Mathematics fundamentals',
                'price' => 5100.00,
                'banner_image' => 'images/Course_Card_Banner/a.png',
                'status' => 'active',
                'max_students' => 100,
                'start_date' => '2024-01-15',
                'end_date' => '2024-07-15',
                'batch_number' => 'Batch 9',
            ],
            [
                'title' => 'Deep Learning with Computer Vision',
                'description' => 'Explore computer vision with deep learning and build sophisticated image recognition and object detection systems.',
                'instructor' => 'Administrator',
                'duration' => '40-45 Classes',
                'level' => 'Advanced',
                'prerequisites' => 'Python, Basic ML concepts',
                'price' => 4020.00,
                'banner_image' => 'images/Course_Card_Banner/b.png',
                'status' => 'active',
                'max_students' => 80,
                'start_date' => '2024-02-01',
                'end_date' => '2024-06-01',
                'batch_number' => 'Batch 7',
            ],
            [
                'title' => 'Data Structure and Algorithm with Leetcode Exercise',
                'description' => 'Master data structures and algorithms with hands-on Leetcode practice for interview preparation.',
                'instructor' => 'Administrator',
                'duration' => '24 Classes',
                'level' => 'Beginner',
                'prerequisites' => 'Basic programming knowledge',
                'price' => 1100.00,
                'banner_image' => 'images/Course_Card_Banner/c.png',
                'status' => 'active',
                'max_students' => 150,
                'start_date' => '2024-01-01',
                'end_date' => '2024-03-01',
                'batch_number' => 'Batch 1',
            ],
            [
                'title' => 'Machine Learning for Natural Language Processing',
                'description' => 'Advanced NLP techniques and transformers to build intelligent chatbots and language models.',
                'instructor' => 'Administrator',
                'duration' => '5 Months',
                'level' => 'Intermediate',
                'prerequisites' => 'Python, Basic ML concepts',
                'price' => 4020.00,
                'banner_image' => 'images/Course_Card_Banner/d.png',
                'status' => 'active',
                'max_students' => 90,
                'start_date' => '2024-03-01',
                'end_date' => '2024-08-01',
                'batch_number' => 'Batch 8',
            ],
            [
                'title' => 'Theory of Machine Learning (A-Z in Bangla)',
                'description' => 'Complete theoretical foundation in Bangla with mathematical concepts explained simply.',
                'instructor' => 'Administrator',
                'duration' => '5 Hours (23 Videos)',
                'level' => 'Beginner',
                'prerequisites' => 'High school mathematics',
                'price' => 600.00,
                'banner_image' => 'images/Course_Card_Banner/e.png',
                'status' => 'active',
                'max_students' => 200,
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'batch_number' => 'Batch 1',
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
} 