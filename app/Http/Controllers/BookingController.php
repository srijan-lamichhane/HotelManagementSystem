<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //view all booking
    public function allbooking()
    {
        return view('admin.booking.allbooking');
    }
    public function editbooking()
    {
        return view('admin.booking.editbooking');
    }
    public function addbooking()
    {
        return view('admin.booking.addbooking');
    }


    // save booking record
    public function saveRecord(Request $request)
    {
        $request->validate([
            
            'name' => 'required|string|max:255',
            'time' => 'required|string|max:255',
            'arrival_date' => 'required|string|max:255',
            'departure_date' => 'required|string|max:255',
            'email_id' => 'required|string|max:255',
            'phone' => 'required|string|max:255',

        ]);
    }
}