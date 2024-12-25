<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Profile;
use Illuminate\Http\Request;

class experienceController extends Controller
{
    public function newExperience($id){

        $profile = Profile::findOrFail($id);

        return view('dashboards.admin.newExperience',compact('profile'));
    }


    public function storeExperience(Request $request,$id){
        $request->validate([

            'company_name' => 'required|string|max:255',
            'position'     => 'required|string|max:255',
            'description'     => 'nullable|string',
            'year'            => 'required|string|max:25',

        ]);

        $profile = Profile::findOrFail($id);

        $profile->experiences()->create([
            'company_name' => $request->input('company_name'),
            'position'     => $request->input('position'),
            'description'  => $request->input('description'),
            'year'         => $request->input('year'),
        ]);

        return redirect()->route('viewProfile',$profile)->with('success', 'Experience added Successfully.');
    }

    public function editExperience($id){

        $experience = Experience::findOrFail($id);

        return view('dashboards.admin.editExperience',compact('experience'));
    }

    public function updateExperience(Request $request,$id){

        $experience = Experience::findOrFail($id); 

        $request->validate([

            'company_name' => 'required|string|max:255',
            'position'     => 'required|string|max:255',
            'description'     => 'nullable|string',
            'year'            => 'required|string|max:25',

        ]);


        $experience->update([
            'company_name' => $request->input('company_name'),
            'position'     => $request->input('position'),
            'description'  => $request->input('description'),
            'year'         => $request->input('year'),
        ]);

        return redirect()->route('viewProfile',$experience)->with('success', 'Experience updated Successfully.');
    }


    public function deleteExperience($id){

        $experience = Experience::findOrFail($id);

        $experience->delete();

        return redirect()->back()->with('success', 'Experience deleted Successfully.');
    }


}
