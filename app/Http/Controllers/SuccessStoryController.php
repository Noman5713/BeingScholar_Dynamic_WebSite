<?php

namespace App\Http\Controllers;

use App\Models\SuccessStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SuccessStoryController extends Controller
{
    /**
     * Display the success stories page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $stories = SuccessStory::where('is_approved', true)
                              ->orderBy('created_at', 'desc')
                              ->get();
        
        return view('success', compact('stories'));
    }

    /**
     * Store a newly created success story in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'course' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'story' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/success'), $imageName);
            $imagePath = 'images/success/' . $imageName;
        }

        SuccessStory::create([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course,
            'category' => $request->category,
            'title' => $request->title,
            'story' => $request->story,
            'image' => $imagePath,
            'rating' => $request->rating,
            'is_approved' => false, // Needs admin approval
        ]);

        return redirect()->route('success.index')
            ->with('success', 'Your success story has been submitted and is pending review.');
    }
}
