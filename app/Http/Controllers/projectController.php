<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Profile;
use App\Models\Project;
use App\Models\SubImage;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function newProject($id){

        $profile = Profile::findOrFail($id);

        return view('dashboards.admin.newProject',compact('profile'));
    }


    public function storeProject(Request $request, $id)
    {
        $request->validate([
            'mainimage' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'project_title' => 'required|string|max:255',
            'project_description' => 'nullable|string',
            'client' => 'nullable|string|max:255',
            'web' => 'nullable|string|max:255',
            'start_month' => 'required|string',
            'end_month' => 'required|string',
        ]);
    
        $mainimagePath = null;
        if ($request->hasFile('mainimage')) {
            $mainimagePath = $request->file('mainimage')->store('main_images', 'public');
        }
    
        $profile = Profile::findOrFail($id);
    
        $profile->projects()->create([
            'mainimage' => $mainimagePath, // Ensure the field matches the column in the database
            'project_title' => $request->input('project_title'),
            'project_description' => $request->input('project_description'),
            'client' => $request->input('client'),
            'web' => $request->input('web'),
            'start_month' => $request->input('start_month'),
            'end_month' => $request->input('end_month'),
        ]);
    
        return redirect()->route('viewProfile', $profile)->with('success', 'Project created successfully');
    }

    public function editProject($id){

        $project = Project::findOrFail($id);

        return view('dashboards.admin.editProject',compact('project'));
    }

    public function updateProject(Request $request, $id)
    {
        $request->validate([
            'mainimage' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'project_title' => 'required|string|max:255',
            'project_description' => 'nullable|string',
            'client' => 'nullable|string|max:255',
            'web' => 'nullable|string|max:255',
            'start_month' => 'required|string',
            'end_month' => 'required|string',
        ]);
    

        $project = Project::findOrFail($id);
    
           // Handle main image
            if ($request->hasFile('mainimage')) {
                // Delete old image if it exists
                if ($project->mainimage && Storage::disk('public')->exists($project->mainimage)) {
                    Storage::disk('public')->delete($project->mainimage);
                }

                // Store new image and update path
                $project->mainimage = $request->file('mainimage')->store('main_images', 'public');
            }
    
        $project->update([
            'mainimage' => $project->mainimage,
            'project_title' => $request->input('project_title'),
            'project_description' => $request->input('project_description'),
            'client' => $request->input('client'),
            'web' => $request->input('web'),
            'start_month' => $request->input('start_month'),
            'end_month' => $request->input('end_month'),
        ]);
    
        return redirect()->route('viewProfile', $project)->with('success', 'Project updated successfully');
    }


    public function deleteProject($id){

        $project = Project::findOrFail($id);


        if ($project->mainimage && Storage::disk('public')->exists($project->mainimage)) {
            Storage::disk('public')->delete($project->mainimage);
        }


        $project->delete();

        return redirect()->route('viewProfile', $project)->with('success', 'Project deleted successfully');
    }


    public function addSubImage($id){

        $project = Project::findOrFail($id);
        $subimages = SubImage::where('project_id', $id)->get();

        return view('dashboards.admin.addSubImage',compact('project','subimages'));
    }


    public function storeSubImage(Request $request, $id){

        $request->validate([
            'sub_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $subimagePath = null;
        if ($request->hasFile('sub_image')) {
            $subimagePath = $request->file('sub_image')->store('sub_images', 'public');
        }

        $project = Project::findOrFail($id);

        $project->sub_images()->create([
            'sub_image' => $subimagePath,
        ]);

        return redirect()->back()->with('success', 'Image added successfully');

    }

    public function deleteSubImage($id){

        $subimage = SubImage::findOrFail($id);


        if ($subimage->sub_image && Storage::disk('public')->exists($subimage->sub_image)) {
            Storage::disk('public')->delete($subimage->sub_image);
        }


        $subimage->delete(); 
        return redirect()->back()->with('success', 'image deleted successfully');
    }
    
}
