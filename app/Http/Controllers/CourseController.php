<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('status', 'active')->get();
        return view('courses', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('course-detail', compact('course'));
    }
} 