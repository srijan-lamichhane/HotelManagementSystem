<?php

namespace App\Http\Controllers;
use App\Models\billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function billing()
    {
        return view('admin.billing.billing');
    }

    //public function billing()
    // {
    //    return view('admin.billing.billing');

    // }
    public function savebill(Request $request)
    {

        // Create a new new instance and set the values from the form
        $data = new billing;
        $data->billing_no = $request->input('billing_no');
        $data->name = $request->input('name');
        $data->room_type = $request->input('room_type');
        $data->room_number = $request->input('room_number');
        $data->billing_date = $request->input('billing_date');
        $data->billing_time = $request->input('billing_time');
        $data->arrival_date = $request->input('arrival_date');
        $data->departure_date = $request->input('departure_date');
        $data->no_of_days_stay = $request->input('no_of_days_stay');
        $data->price = $request->input('price');
        $data->total = $request->input('total');
        $data->transaction_type = $request->input('transaction_type');
        $data->transaction_no = $request->input('transaction_no');


        // Save the data to the database
        $data->save();
        return redirect()->to(url('/billing'))->with('message', 'bill recorded!');
    }
}
