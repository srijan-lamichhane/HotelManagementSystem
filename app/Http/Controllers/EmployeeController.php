<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function listemployees()
    {
        $employee = User::all();
        return view('admin.employee.employeeslist', compact('employee'));
    }

    public function leave()
    {
        return view('admin.employee.leave');
    }

    public function addemployee()
    {
        return view('admin.employee.addemployee');
    }

    public function saveEmployee(Request $request)
    {

        $validatedData = $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $employee = new User;
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $employee->join_date = $request->input('join_date');
        $employee->role = $request->input('role');    
        $employee->password = Hash::make($request->input('password'));
            
        $employee->save();

        return redirect()->to(url('employee/list'))->with('message', 'New Employee Added Sucessfully!');
    }

    public function deleteEmp($id)
    {
        $employee = User::find($id);
        $employee->delete();
        return redirect()->back()->with('message', 'Data deleted Sucessfully!');
    }

}
