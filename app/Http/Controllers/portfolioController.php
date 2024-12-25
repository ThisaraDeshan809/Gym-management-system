<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function mobileProfile(){

        $latestProfile = Profile::latest('id')->first();

        return view('dashboards.publicsite.mobileProfile',compact('latestProfile'));
    }

    public function viewProject($id){

        $project = Project::findOrFail($id);

        return view('dashboards.publicsite.viewProject',compact('project'));
        
    }
}
