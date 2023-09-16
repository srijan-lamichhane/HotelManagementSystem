<?php

namespace App\Http\Controllers;

use App\Http\Flash;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\attendence;
use App\Models\Leave;

class CheckController extends Controller
{
    public function index()
    {
        return view('admin.employee.check')->with(['employees' => Employee::all()]);
    }

    public function CheckStore(Request $request)
    {
        if (isset($request->attd)) {
            foreach ($request->attd as $keys => $values) {
                foreach ($values as $key => $value) {
                    if ($employee = Employee::whereId(request('emp_id'))->first()) {
                        if (
                            !attendence::whereattendence_date($keys)
                                ->whereEmp_id($key)
                                ->whereType(0)
                                ->first()
                        ) {
                            $data = new attendence();
                            
                            $data->emp_id = $key;
                            $emp_req = Employee::whereId($data->emp_id)->first();
                            $data->attendence_time = date('H:i:s', strtotime($emp_req->schedules->first()->time_in));
                            $data->attendence_date = $keys;
                            
                            $emps = date('H:i:s', strtotime($employee->schedules->first()->time_in));
                            if (!($emps > $data->attendence_time)) {
                                $data->status = 0;
                           
                            }
                            $data->save();
                        }
                    }
                }
            }
        }
        if (isset($request->leave)) {
            foreach ($request->leave as $keys => $values) {
                foreach ($values as $key => $value) {
                    if ($employee = Employee::whereId(request('emp_id'))->first()) {
                        if (
                            !Leave::whereLeave_date($keys)
                                ->whereEmp_id($key)
                                ->whereType(1)
                                ->first()
                        ) {
                            $data = new Leave();
                            $data->emp_id = $key;
                            $emp_req = Employee::whereId($data->emp_id)->first();
                            $data->leave_time = $emp_req->schedules->first()->time_out;
                            $data->leave_date = $keys;
                            if ($employee->schedules->first()->time_out <= $data->leave_time) {
                                $data->status = 1;
                                
                            }
                            
                            $data->save();
                        }
                    }
                }
            }
        }
        flash()->success('Success', 'You have successfully submited the attendence !');
        return back();
    }
    public function sheetReport()
    {
        

    return view('admin.sheet-report')->with(['employees' => Employee::all()]);
    }
}

