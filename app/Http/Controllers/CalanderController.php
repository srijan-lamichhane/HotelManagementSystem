<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calander;

class CalanderController extends Controller
{
    public function calander(){
        return view('admin.calander');
    }
}
