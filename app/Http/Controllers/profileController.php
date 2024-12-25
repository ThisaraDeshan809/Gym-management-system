<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Profile;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Qualification;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function newProfile(){

        return view('dashboards.admin.newProfile');
    }

    public function storeProfile(Request $request){

        $request->validate([

            'profile_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|max:15',
            'whatsapp' => 'nullable|max:15',
            'designation' => 'required|nullable|string|max:255',
            'discription' => 'nullable|string',
            'profileimage' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'cv' => 'nullable|mimes:pdf,doc,docx|max:5120',

        ]);

        $profileImagePath = null;
        if ($request->hasFile('profileimage')) {
            $profileImagePath = $request->file('profileimage')->store('profile_images', 'public');
        }

        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cv_files', 'public');
        }


        Profile::create([
            'profile_name' => $request->input('profile_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'whatsapp' => $request->input('whatsapp'),
            'designation' => $request->input('designation'),
            'discription' =>$request->input('discription'),
            'profile_image' => $profileImagePath,
            'cv' => $cvPath,
        ]);

        return redirect()->route('profileDetails')->with('success','profile created successfully');
    }


    public function profileDetails(){

        $profiledetails = Profile::get();
        return view('dashboards.admin.profileDetails',compact('profiledetails'));
    }

    public function viewProfile($id){

        $profiledetail = Profile::findOrFail($id);
        $qualifications = Qualification::where('profile_id', $id)->paginate(3);
        $experiences = Experience::where('profile_id',$id)->paginate(3);
        $projects = Project::where('profile_id',$id)->paginate(3);
        $skills = Skill::where('profile_id',$id)->paginate(3);
        
        
        return view('dashboards.admin.viewProfile',compact('profiledetail','qualifications','experiences','projects','skills'));
    }

    
    public function editProfile($id){


        $profiledetail = Profile::findOrFail($id);
        return view('dashboards.admin.updateProfile',compact('profiledetail'));
    }
    
    
    
    public function updateProfile(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
    

        $request->validate([
            'profile_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $profile->id,
            'phone' => 'required|max:15',
            'whatsapp' => 'nullable|max:15',
            'designation' => 'nullable|string|max:255',
            'discription' => 'nullable|string',
            'profileimage' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'cv' => 'nullable|mimes:pdf,doc,docx|max:5120',
        ]);
    
        if ($request->hasFile('profileimage')) {
            if ($profile->profile_image) {
                Storage::disk('public')->delete($profile->profile_image);
            }
            $profile->profile_image = $request->file('profileimage')->store('profile_images', 'public');
        }
    

        if ($request->hasFile('cv')) {
            if ($profile->cv) {
                Storage::disk('public')->delete($profile->cv);
            }
            $profile->cv = $request->file('cv')->store('cv_files', 'public');
        }
    
        $profile->update([
            'profile_name' => $request->input('profile_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'whatsapp' => $request->input('whatsapp'),
            'designation' => $request->input('designation'),
            'discription' => $request->input('discription'),
            'profile_image' => $profile->profile_image,
            'cv' => $profile->cv,
        ]);
    
        return redirect()->back()->with('success', 'Profile updated successfully');
    }


    public function storeSkill(Request $request , $id ){
       
        $request->validate([
            'skill' => 'required|string|max:255',
        ]);

        $profile = Profile::findOrFail($id);

        $profile->skills()->create([
            'skill' => $request->input('skill'),
        ]);

        return redirect()->back()->with('success', 'skill added successfully');

    }


    public function deleteSkill($id){

        $skill = Skill::findOrFail($id);

        $skill->delete();

        return redirect()->back()->with('success', 'skill deleted successfully');
    }


    public function downloadCV($id){

        $profile = Profile::findOrFail($id);

        if (!$profile->cv) {
            return redirect()->back()->with('error', 'CV not available.');
        }

        $filePath = storage_path('app/public/' . $profile->cv);

        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'CV file not found.');
        }

        $customFileName = 'Dhanushka Bandara CV.' . pathinfo($filePath, PATHINFO_EXTENSION);

        return response()->download($filePath, $customFileName);
    }






    
}
