<?php

namespace App\Http\Controllers;

use App\Models\billing;
use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BillingController extends Controller
{
    public function billing()
    {

        // Fetch all booking data
        // $bookingData = Booking::all();

        // Fetch the data you want to prepopulate from the booking table
        // $bookingData = Booking::select('name', 'room_type', 'room_number')->first();

        $latestBooking = Booking::orderBy('created_at', 'desc')->first();

        // Calculate the stay days
        $arrivalDate = Carbon::parse($latestBooking->arrival_date);
        $departureDate = Carbon::parse($latestBooking->departure_date);
        $stayDays = $arrivalDate->diffInDays($departureDate);


        // Pass the data to the billing view
        // return view('admin.billing.billing', compact('bookingData'));


        return view('admin.billing.billing', compact('latestBooking', 'stayDays'));
    }


    public function savebill(Request $request)
    {

        // Create a new new instance and set the values from the form
        $data = new billing;


        $data->name = $request->input('name');
        $data->room_type = $request->input('room_type');
        $data->room_number = $request->input('room_number');
        $data->billing_date = $request->input('billing_date');
         // Modify the format of billing_time to 'HH:MM:SS'
        $data->billing_time = Carbon::parse($request->input('billing_time'))->format('H:i:s');
        $data->no_of_days_stay = $request->input('no_of_days_stay');
        $data->price = $request->input('price');

        // Calculate total based on no_of_days_stay and price
        $data->total = $request->input('no_of_days_stay') * $request->input('price');

        $data->transaction_type = $request->input('transaction_type');



        // Save the data to the database
        $data->save();
        return redirect()->to(url('/billing'))->with('message', 'bill recorded sucessfully!');
    }
}
