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
        
        $hasAccess = false;
        $enrollment = null;
        
        if (auth()->check()) {
            $enrollment = \App\Models\CourseEnrollment::where('user_id', auth()->id())
                ->where('course_id', $course->id)
                ->first();
                
            if ($enrollment) {
                $hasAccess = true;
            } else {
                $verifiedTransaction = \App\Models\Transaction::where('user_id', auth()->id())
                    ->where('course_id', $course->id)
                    ->whereIn('status', ['verified', 'pending'])
                    ->first();
                    
                if ($verifiedTransaction) {
                    $hasAccess = true;
                }
            }
        }
        
        return view('course-detail', compact('course', 'hasAccess', 'enrollment'));
    }

    public function enroll($id)
    {
        $course = Course::findOrFail($id);
        return view('enroll', compact('course'));
    }

    public function checkAccess($courseId)
    {
        if (!auth()->check()) {
            return response()->json([
                'success' => false,
                'message' => 'Please login to access course content'
            ]);
        }

        $course = Course::findOrFail($courseId);
        
        $enrollment = \App\Models\CourseEnrollment::where('user_id', auth()->id())
            ->where('course_id', $courseId)
            ->first();
            
        if ($enrollment) {
            return response()->json([
                'success' => true,
                'hasAccess' => true,
                'message' => 'You have access to this course'
            ]);
        }

        $transaction = \App\Models\Transaction::where('user_id', auth()->id())
            ->where('course_id', $courseId)
            ->whereIn('status', ['verified', 'pending'])
            ->first();
            
        if ($transaction) {
            return response()->json([
                'success' => true,
                'hasAccess' => true,
                'message' => 'You have access to this course'
            ]);
        }

        return response()->json([
            'success' => false,
            'hasAccess' => false,
            'message' => 'You need to enroll in this course to access content'
        ]);
    }
} 