<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::count();
        $totalCourses = Course::count();
        $activeCourses = Course::where('status', 'active')->count();
        $recentUsers = User::latest()->take(5)->get();
        $recentCourses = Course::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalUsers', 'totalCourses', 'activeCourses', 'recentUsers', 'recentCourses'));
    }

    public function manageUsers()
    {
        $users = User::latest()->paginate(10);
        return view('admin.manage-users', compact('users'));
    }

    public function updateUserRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:student,admin'
        ]);

        $user->update(['role' => $request->role]);
        return redirect()->back()->with('success', 'User role updated successfully');
    }

    public function toggleUserStatus(User $user)
    {
        $user->update(['email_verified_at' => $user->email_verified_at ? null : now()]);
        return redirect()->back()->with('success', 'User status updated successfully');
    }
}
