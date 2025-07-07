<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::latest()->paginate(10);
        return view('admin.manage-courses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor' => 'required|string|max:255',
            'duration' => 'required|string|max:100',
            'level' => 'required|string|max:50',
            'prerequisites' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'max_students' => 'nullable|integer|min:1',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after:start_date',
            'batch_number' => 'nullable|string|max:50',
        ]);

        $data = $request->all();

        if ($request->hasFile('banner_image')) {
            $data['banner_image'] = $request->file('banner_image')->store('course-banners', 'public');
        }

        Course::create($data);

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor' => 'required|string|max:255',
            'duration' => 'required|string|max:100',
            'level' => 'required|string|max:50',
            'prerequisites' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'max_students' => 'nullable|integer|min:1',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after:start_date',
            'batch_number' => 'nullable|string|max:50',
        ]);

        $data = $request->all();

        if ($request->hasFile('banner_image')) {
            if ($course->banner_image) {
                Storage::disk('public')->delete($course->banner_image);
            }
            $data['banner_image'] = $request->file('banner_image')->store('course-banners', 'public');
        }

        $course->update($data);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        if ($course->banner_image) {
            Storage::disk('public')->delete($course->banner_image);
        }
        
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully');
    }
}
