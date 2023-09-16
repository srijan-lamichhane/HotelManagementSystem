<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;  // Import the Booking model
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

            return view('admin.home', ['lastBookingId' => $lastBookingId]);
        } else {
            return view('employee.home');
        }
    }
}
