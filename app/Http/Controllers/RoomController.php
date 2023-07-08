<?php

namespace App\Http\Controllers ;

use Illuminate\Http\Request;
use App\Models\addrooms;
class RoomController extends Controller
{
    //view all booking
    public function allrooms()
    {
        return view('admin.room.allrooms');
    }

    public function editrooms()
    {
        return view('admin.room.editrooms');
    }
    public function addrooms()
    {
        return view('admin.room.addrooms');
    }

    public function saveRoom(Request $request)
    {
        
        // Create a new room instance and set the values from the form
        $addrooms = new addrooms;
        $addrooms->room_type = $request->input('room_type');
        $addrooms->room_number = $request->input('room_number');
        $addrooms->floor = $request->input('floor');
        $addrooms->price = $request->input('price');

        // Save the room to the database
        $addrooms->save();

        // Redirect to a success page or perform any other desired action
        return redirect('/add_rooms');
    }
    
}