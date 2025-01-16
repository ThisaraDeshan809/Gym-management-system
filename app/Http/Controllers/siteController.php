<?php

namespace App\Http\Controllers;

use App\Models\PricePackage;
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

    public function pricing(){

        $packages = PricePackage::all();
        return view('dashboards.user.pricing',compact('packages'));
    }

    public function checkout($id){

        $package = PricePackage::findOrFail($id);

        return view('dashboards.user.checkout',compact('package'));
    }
}
