<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendence;

class CheckController extends Controller
{
    public function index()
    {
        return view('admin.employee.check')->with(['employees' => User::all()]);
    }

    public function checkStore(Request $request)
    {
        foreach ($request->attd as $date => $employeeAttendences) {
            foreach ($employeeAttendences as $employeeId => $status) {
                $attendence = new Attendence();
                $attendence->emp_id = $employeeId;
                $attendence->attendance_date = $date;
                $attendence->status = $status;
                $attendence->save();
            }
        }

        return redirect()->back()->with('message', 'Attendance submitted successfully!');
    }

    public function sheetReport()
    {
        return view('admin.employee.sheet-report')->with(['employees' => User::all()]);
    }
}
