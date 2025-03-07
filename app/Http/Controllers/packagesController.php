<?php

namespace App\Http\Controllers;

use App\Models\PricePackage;
use App\Models\User;
use Illuminate\Http\Request;

class packagesController extends Controller
{
    public function allPackages(){

        $packages = PricePackage::all();
        $trainers = User::role('Trainer')->get();
        return view('dashboards.admin.packages',compact('packages','trainers'));
    }

    public function storePackage(Request $request){

        $request->validate([
            'package_name' => 'required|string|max:255',
            'package_description' => 'required|string|max:255',
            'price' => 'required|string|max:15',
        ]);

        PricePackage::create([
            'package_name' => $request->input('package_name'),
            'package_description' => $request->input('package_description'),
            'trainer_id' => $request->input('trainer_id'),
            'duration' => $request->input('duration'),
            'price' => $request->input('price'),
        ]);

        return redirect()->back()->with('success', 'Package created successfully.');
    }

    public function updatePackage(Request $request,$id){

        $request->validate([
            'package_name' => 'required|string|max:255',
            'package_description' => 'required|string|max:255',
            'price' => 'required|string|max:15',
        ]);

        $package = PricePackage::findOrFail($id);

        $package->update([
            'package_name' => $request->input('package_name'),
            'package_description' => $request->input('package_description'),
            'price' => $request->input('price'),
        ]);

        return redirect()->back()->with('success', 'Package created successfully.');

    }

    public function deletePackage($id){

        $package = PricePackage::findOrFail($id);
        $package->delete();

        return redirect()->back()->with('success', 'Package deleted successfully.');
    }
}
