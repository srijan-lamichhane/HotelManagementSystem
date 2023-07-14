<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function listemployees()
    {
        $employee = Employee::all();
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

        $employee = new Employee;
        $employee->emp_id = $request->input('emp_id');
        $employee->name = $request->input('name');
        $employee->email_id = $request->input('email_id');
        $employee->ph_number = $request->input('ph_number');
        $employee->join_date = $request->input('join_date');
        $employee->role = $request->input('role');    
            
        $employee->save();

        return redirect()->to(url('employee/list'))->with('message', 'New Employee Added Sucessfully!');
    }

    public function deleteEmp($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->back()->with('message', 'Data deleted Sucessfully!');
    }

}
