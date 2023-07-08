<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function listemployees()
    {
        return view('admin.employee.employeeslist');
    }
}
