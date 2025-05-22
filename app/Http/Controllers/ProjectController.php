<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string',
            'tools_used' => 'nullable|array',
            'tags' => 'nullable|array|max:10',
            'image' => 'required|image|max:2048',
            'thumbnail' => 'nullable|image|max:1024',
            'project_type' => 'required|in:image,text,link,prototype',
            'status' => 'required|in:draft,published',
        ]);

        $imagePath = $request->file('image')->store('projects', 'public');

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $project = Project::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'tools_used' => $validated['tools_used'],
            'tags' => $validated['tags'],
            'image_path' => $imagePath,
            'thumbnail_path' => $thumbnailPath ?? null,
            'project_type' => $validated['project_type'],
            'status' => $validated['status'],
            'user_id' => Auth::id()
        ]);

        return redirect()->route('dashboard')->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
