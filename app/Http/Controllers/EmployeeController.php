<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function listemployees()
    {
        return view('admin.employee.employeeslist');
    }
    public function leave()
    {
        return view('admin.employee.leave');
    }
    public function holiday()
    {
        return view('admin.employee.holiday');
    }
    public function attendence()
    {
        return view('admin.employee.attendence');
    }
}
