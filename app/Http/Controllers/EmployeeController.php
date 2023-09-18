<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function listemployees(Request $request)
    {

        $search = $request['search'] ?? "";
        if ($search != "") {
            //where
            $employee = User::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
        } else {

            $employee = User::all();
        }
        return view('admin.employee.employeeslist', compact('employee','search'));
    }

    public function leave()
    {
        $leave = Employee::all();
        return view('admin.employee.leave', compact('leave'));
    }

    public function addemployee()
    {
        return view('admin.employee.addemployee');
    }
    public function addleave()
    {
        return view('admin.employee.addleave');
    }

    public function saveEmployee(Request $request)
    {

        $employee = new User;
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $employee->join_date = $request->input('join_date');
        $employee->birth_date = $request->input('birth_date');
        $employee->role = $request->input('role');
        $employee->password = Hash::make($request->input('password'));
        // Handle the file upload and store the 'filename'
        if ($request->hasFile('filename')) {
            $file = $request->file('filename');
            $path = $file->store('files', 'public');
            $employee->filename = $path;
        }


        $employee->save();

        return redirect()->to(url('employee/list'))->with('message', 'New Employee Added Sucessfully!');
    }

    public function deleteEmp($id)
    {
        $employee = User::find($id);
        $employee->delete();
        return redirect()->back()->with('message', 'Data deleted Sucessfully!');
    }



    //for employee leave
    public function saveLeave(Request $request)
    {

        $leave = new Employee();
        $leave->e_id = $request->input('e_id');
        $leave->name = $request->input('name');
        $leave->leave_type = $request->input('leave_type');
        $leave->from = $request->input('from');
        $leave->to = $request->input('to');
        $leave->days = $request->input('days');
        $leave->reason = $request->input('reason');
        $leave->save();

        return redirect()->to(url('employee/leave'))->with('message', 'Leave Added Sucessfully!');
    }
    public function deleteLeave($id)
    {
        $leave = Employee::find($id);
        $leave->delete();
        return redirect()->back()->with('message', 'Data deleted Sucessfully!');
    }



    public function updateemp($id)
    {
        $employee = User::find($id);
        return view('admin.employee.editemployee', compact('employee'));
    }

    public function update_emp_confirm(Request $request, $id)
    {
        $employee = User::find($id);

        $employee = new User;
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $employee->join_date = $request->input('join_date');
        $employee->birth_date = $request->input('birth_date');
        $employee->role = $request->input('role');
        $employee->password = Hash::make($request->input('password'));

        // Save the updated data to the database
        $employee->save();

        // Redirect to a success page or perform any other desired action
        return redirect()->to(url('employee/list'))->with('message', 'Data updated successfully!');
    }
}
