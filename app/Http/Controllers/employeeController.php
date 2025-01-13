<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function newEmployee(){

        $employees = Employee::get();

        return view('dashboards.admin.newEmployee',compact('employees'));
    }

    public function storeEmployee(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'designation' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:employees,email',
        ]);

        Employee::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'designation' => $request->input('designation'),
            'email' => $request->input('email'),

        ]);
        
        return redirect()->back()->with('success', 'Employee created successfully.');
    }

    public function editEmployee($id){

        $employee = Employee::findOrFail($id);
        return view('dashboards.admin.editEmployee',compact('employee'));
    }

    public function updateEmployee(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'designation' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:employees,email,' . $id,
        ]);
    
        $employee = Employee::findOrFail($id);
        $employee->name = $request->input('name');
        $employee->address = $request->input('address');
        $employee->phone = $request->input('phone');
        $employee->designation = $request->input('designation');
        $employee->email = $request->input('email');
        $employee->save();
    
        return redirect()->back()->with('success', 'Employee updated successfully.');
    }

    
    public function deleteEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->back()->with('success', 'Employee deleted successfully.');
    }



}
