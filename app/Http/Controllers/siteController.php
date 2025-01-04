<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function aboutUs(){

        return view('dashboards.user.aboutUs');
    }

    public function ourTeam(){

        return view('dashboards.user.ourTeam');
    }

    public function contactUs(){

        return view('dashboards.user.contactUs');
    }
}
