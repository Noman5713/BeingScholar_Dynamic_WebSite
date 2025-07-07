<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@beingscholar.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Test Student',
            'email' => 'student@beingscholar.com',
            'password' => Hash::make('password'),
            'role' => 'student',
            'email_verified_at' => now(),
        ]);

        Course::create([
            'title' => 'Professional Certification in Java Spring Boot and Web App Development',
            'description' => 'Learn Java Spring Boot framework and develop professional web applications. This comprehensive course covers everything from basic concepts to advanced features.',
            'instructor' => 'Dr. John Smith',
            'duration' => '12 weeks',
            'level' => 'Intermediate',
            'prerequisites' => 'Basic knowledge of Java programming, HTML, CSS',
            'price' => 299.99,
            'status' => 'active',
            'max_students' => 50,
            'start_date' => '2025-07-12',
            'end_date' => '2025-10-12',
            'batch_number' => 'Batch 03',
        ]);

        Course::create([
            'title' => 'Applied Data Analytics Masterclass',
            'description' => 'Master data analytics with practical applications. Learn to analyze, visualize, and interpret data for business insights.',
            'instructor' => 'Prof. Sarah Johnson',
            'duration' => '10 weeks',
            'level' => 'Advanced',
            'prerequisites' => 'Basic statistics, Python programming',
            'price' => 399.99,
            'status' => 'active',
            'max_students' => 30,
            'start_date' => '2025-07-13',
            'end_date' => '2025-09-21',
            'batch_number' => 'Batch 08',
        ]);

        Course::create([
            'title' => 'Academia2Industry Mern Stack Launchpad',
            'description' => 'Complete MERN stack development course covering MongoDB, Express.js, React.js, and Node.js for full-stack web development.',
            'instructor' => 'Mike Chen',
            'duration' => '16 weeks',
            'level' => 'Beginner',
            'prerequisites' => 'Basic programming concepts',
            'price' => 249.99,
            'status' => 'active',
            'max_students' => 40,
            'start_date' => '2025-08-01',
            'end_date' => '2025-11-24',
            'batch_number' => 'Batch 02',
        ]);
    }
}
