<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class roleController extends Controller
{
    public function roleManagement(){

        $roles = Role::get();

        return view('dashboards.admin.roleManagement', compact('roles'));
    }

    public function storeRole(Request $request){

        $validatedData = $request->validate([
            'roleName' => 'required|string|max:255',
        ]);

        Role::create([
            'name' => $validatedData['roleName']
        ]);

        $notification = [
            'message' => 'role created succesfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('roleManagement')->with($notification);
    }

    public function deleteRole($id)
    {
        try {
            $selectedRole = Role::findOrFail($id);
    
            if ($selectedRole->permissions()->exists()) {
                $notification = [
                    'message' => 'Role cannot be deleted as it has associated permissions',
                    'alert-type' => 'error'
                ];
                return redirect()->route('roleManagement')->with($notification);
            }
    
            $userCount = DB::table('model_has_roles')->where('role_id', $selectedRole->id)->count();
            if ($userCount > 0) {
                $notification = [
                    'message' => 'Role cannot be deleted as it is assigned to users',
                    'alert-type' => 'error'
                ];
                return redirect()->route('roleManagement')->with($notification);
            }
    
            $selectedRole->delete();
        
            $notification = [
                'message' => 'Role deleted successfully',
                'alert-type' => 'success'
            ];

        } catch (\Exception $e) {

            $notification = [
                'message' => 'There was an error deleting the role',
                'alert-type' => 'error'
            ];
        }
    
        return redirect()->route('roleManagement')->with($notification);
    }

    public function viewRole($id){


        
        $role = Role::findOrfail($id);

        $permissions = Permission::all();

        return view('dashboards.admin.viewRole', compact('role', 'permissions'));
    }
}
