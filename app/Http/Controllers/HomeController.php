<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\addrooms;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            // Retrieve the last booking record
            $lastBooking = Booking::latest()->first();
            // Assign the ID to $lastBookingId
            $lastBookingId = $lastBooking ? $lastBooking->id : null;

            // Retrieve the last room record
            $lastRoom = addrooms::latest()->first();
            // Assign the ID to $lastRoomId
            $lastRoomId = $lastRoom ? $lastRoom->id : null;

            $data = Booking::all();

            
            $lastEmp = User::latest()->first();
          
            $lastEmpId = $lastEmp ? $lastEmp->id : null;
            
            return view('admin.home', compact('lastBookingId', 'lastRoomId', 'lastEmpId', 'data'));

        } else {
            return view('employee.home');
        }
    }
}
