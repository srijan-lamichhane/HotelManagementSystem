<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //view all booking
    public function allbooking()
    {
        return view('admin.allbooking');
    }
    public function editbooking()
    {
        return view('admin.editbooking');
    }
    public function addbooking()
    {
        return view('admin.addbooking');
    }
}