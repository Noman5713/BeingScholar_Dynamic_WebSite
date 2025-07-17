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

    public function manageUsers(Request $request)
    {
        $query = User::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        if ($request->filled('role_filter')) {
            $query->where('role', $request->role_filter);
        }

        if ($request->filled('status_filter')) {
            if ($request->status_filter === 'active') {
                $query->whereNotNull('email_verified_at');
            } else {
                $query->whereNull('email_verified_at');
            }
        }

        $users = $query->latest()->paginate(10)->withQueryString();
        
        return view('admin.manage-users', compact('users'));
    }

    public function updateUserRole(\Illuminate\Http\Request $request, \App\Models\User $user)
    {
        $request->validate([
            'role' => 'required|in:admin,student',
        ]);
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('success', 'User role updated successfully.');
    }

    public function toggleUserStatus(User $user)
    {
        $user->update(['email_verified_at' => $user->email_verified_at ? null : now()]);
        return redirect()->back()->with('success', 'User status updated successfully');
    }

    public function mycources()
    {
        return view('admin.mycources');
    }

    public function manageCourses()
    {
        return view('admin.manage-courses');
    }

    public function users() {
        $users = \App\Models\User::paginate(10);
        return view('admin.manage-users', compact('users'));
    }
}
