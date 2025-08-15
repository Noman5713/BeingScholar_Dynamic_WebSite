<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_users' => User::count(),
            'total_courses' => Course::count(),
            'active_courses' => Course::where('status', 'active')->count(),
            'total_enrollments' => 0,
            'monthly_revenue' => 0,
        ];

        $recentUsers = User::latest()->take(5)->get();
        $recentCourses = Course::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentUsers', 'recentCourses'));
    }

    public function manageCourses()
    {
        $courses = Course::latest()->paginate(10);
        return view('admin.manage-courses', compact('courses'));
    }

    public function storeCourse(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'max_students' => 'nullable|integer|min:1',
            'batch_number' => 'nullable|string|max:255',
            'banner_image' => 'nullable|string|max:255',
        ]);

        Course::create($request->all());

        return redirect()->route('admin.courses')->with('success', 'Course created successfully!');
    }

    public function updateCourse(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'max_students' => 'nullable|integer|min:1',
            'batch_number' => 'nullable|string|max:255',
            'banner_image' => 'nullable|string|max:255',
        ]);

        $course->update($request->all());

        return redirect()->route('admin.courses')->with('success', 'Course updated successfully!');
    }

    public function deleteCourse(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses')->with('success', 'Course deleted successfully!');
    }

    public function manageUsers()
    {
        $users = User::latest()->paginate(10);
        return view('admin.manage-users', compact('users'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,student',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $data = $request->only(['name', 'email', 'role']);
        
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.users')->with('success', 'User updated successfully!');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully!');
    }

    public function myCourses()
    {
        $courses = Course::where('instructor', 'Administrator')->latest()->paginate(10);
        return view('admin.mycourses', compact('courses'));
    }

    public function createCourse()
    {
        return view('admin.courses.create');
    }

    public function editCourse(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    public function editUser(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }
} 