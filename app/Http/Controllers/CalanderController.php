<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calander;

class CalanderController extends Controller
{
    public function calander()
    {
        return view('admin.calander');
    }

    public function createEvent(Request $request)
    {

        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date_format:Y-m-d',
        ]);

        
        // Assuming you have an Event model named 'Calander'
        Calander::create([
            'event_name' => $request->input('event_name'),
            'event_date' => $request->input('event_date'),
        ]);
    
        return redirect()->back()->with('message', 'Event added successfully!');
    }
    
}
