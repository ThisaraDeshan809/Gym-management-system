<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Education;
use App\Models\Qualification;
use Illuminate\Http\Request;

class educationController extends Controller
{
    public function newEducation($id){
       
        $profile = Profile::findOrFail($id);

        return view('dashboards.admin.newEducation',compact('profile'));

    }

    public function storeEducation(Request $request,$id){


        $request->validate([

            'university_name' => 'required|string|max:255',
            'degree_name'     => 'required|string|max:255',
            'description'     => 'nullable|string',
            'year'            => 'required|string|max:15',

        ]);

        $profile = Profile::findOrFail($id);


        $profile->qualifications()->create([
            'university_name' => $request->input('university_name'),
            'degree_name'     => $request->input('degree_name'),
            'description'     => $request->input('description'),
            'year'            => $request->input('year'),
        ]);


        return redirect()->route('viewProfile',$profile)->with('success', 'Education added Successfully');

    }


    public function editEducation($id){

        $qualification = Qualification::findOrFail($id);

        return view('dashboards.admin.editEducation',compact('qualification'));
    }

    public function updateEducation(Request $request,$id){

        $qualification = Qualification::findOrFail($id);

        $request->validate([

            'university_name' => 'required|string|max:255',
            'degree_name'     => 'required|string|max:255',
            'description'     => 'nullable|string',
            'year'            => 'required|string|max:15',
        ]);

        $qualification->update([

          'university_name' => $request->input('university_name'),
           'degree_name' => $request->input('degree_name'),
           'description' => $request->input('description'),
           'year' => $request->input('year'),

        ]);


        return redirect()->route('viewProfile',$qualification)->with('success','Education Updated Successfully');
        
    }

    public function deleteEducation($id){

        $qualification = Qualification::findOrFail($id);

        $qualification->delete();

        return redirect()->back()->with('success','Education Deleted Successfully');
    }


}
