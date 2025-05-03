<?php

namespace App\Http\Controllers\admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $projects = Project::all()->map(function ($project) {
            $project->image = asset('storage/' . $project->image); // npr. "uploads/portfolio.jpg"
            return $project;
        });

        return view('projects/Projects',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects/AddProject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'=>'required|string|max:255',
            'image'=>'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $path = $request->file('image')->store('uploads', 'public');

        Project::create([
            'title' => $validated['title'],
            'image' => $path
        ]);

        return redirect()->route('project.index')->with('success', 'Project added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('projects/AddProject',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $project = Project::findOrFail($id);


        $validated = $request->validate([
            'title'=>'required|string|max:255',
            'image'=>'nullable|image|mimes:jpg,jpeg,png,gif',
            'video' => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:51200', // max je u kilobajtima (50MB)
            'description' => 'nullable|string'
        ]);

        $imagePath = $project->image;
        $videoPath = $project->video;

        if($request->hasFile('image')){
            if($project->image){
                Storage::disk('public')->delete($project->image);
            }
            $imagePath = $request->file('image')->store('uploads', 'public');
        }

        if($request->hasFile('video')){
            if($project->video){
                Storage::disk('public')->delete($project->video);
            }
            $videoPath = $request->file('video')->store('uploads','public');
        }


        $project->update([
            'title' => $validated['title'],
            'image' => $imagePath,
            'video' => $videoPath,
            'description' => $validated['description']
        ]);

        return redirect()->route('project.index')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();
        return redirect()->route('project.index')->with('success', 'Project deleted successfully');
    }
}
