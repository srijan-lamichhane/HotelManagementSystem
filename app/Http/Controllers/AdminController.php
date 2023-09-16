<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;


use Illuminate\Http\Request;

use App\Models\profile;

class AdminController extends Controller
{

    public function view_profile()
    {
        return view('admin.profile');
    }

    public function edit_profile()
    {
        return view('admin.editprofile');
    }


    
}
