<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CalanderController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\BillingController;
use Illuminate\Support\Facades\App;

Route::get('/',[HomeController::class,'index']);


// this will directly open login page in our website
Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);


Route::get('/view_profile',[AdminController::class,'view_profile']);
Route::get('/edit_profile',[AdminController::class,'edit_profile']);


Route::get('form/allbooking',[BookingController::class,'allbooking']);
Route::get('form/addbooking',[BookingController::class,'addbooking']);
Route::post('form/savebooking',[BookingController::class,'saveRecord']);
Route::get('/delete_record/{id}',[BookingController::class,'deleterecord'])->name('delete_record');
Route::get('/update_record/{id}', [BookingController::class, 'updaterecord'])->name('update_record');
Route::put('/update_data_confirm/{id}', [BookingController::class, 'update_data_confirm'])->name('update_data_confirm');

Route::post('/update-status/{id}', [BookingController::class, 'updateStatus'])->name('update-status');


Route::get('form/customers',[BookingController::class,'customers']);



Route::get('/all_rooms',[RoomController::class,'allrooms']);
Route::get('/edit_rooms',[RoomController::class,'editrooms']);
Route::get('/add_rooms',[RoomController::class,'addrooms']);
Route::post('/save_rooms',[RoomController::class,'saveRoom']);
Route::get('/delete_record1/{id}',[RoomController::class,'deleterecord1']);

Route::post('/update-roomstatus/{id}', [RoomController::class, 'updateRoomStatus'])->name('update-roomstatus');





Route::get('employee/list',[EmployeeController::class,'listemployees']);
Route::get('employee/leave',[EmployeeController::class,'leave']);
Route::get('form/addemployee',[EmployeeController::class,'addemployee']);
Route::get('form/addleave',[EmployeeController::class,'addleave']);
Route::post('form/saveemployee',[EmployeeController::class,'saveEmployee']);
Route::get('/delete_emp/{id}',[EmployeeController::class,'deleteEmp']);
Route::get('/update_emp/{id}', [EmployeeController::class, 'updateemp'])->name('update_emp');
Route::put('/update_emp_confirm/{id}', [EmployeeController::class, 'update_emp_confirm'])->name('update_emp_confirm');



Route::get('/calander',[CalanderController::class,'calander']);
Route::post('/add-event', [CalanderController::class, 'createEvent']);


Route::get('/check',[CheckController::class,'index']);
Route::get('/sheet-report',[CheckController::class,'sheetReport']);
Route::post('/check_store',[CheckController::class,'CheckStore']);


Route::get('/billing',[BillingController::class,'billing']);
Route::post('/savebill',[BillingController::class,'savebill']);
Route::get('/billing_report',[BillingController::class,'billing_report']);
Route::get('/delete_billrecord/{id}',[BillingController::class,'deletebillrecord']);
Route::get('/update_billrecord/{id}', [BillingController::class, 'updatebillrecord'])->name('update_billrecord');
Route::put('/update_billdata_confirm/{id}', [BillingController::class, 'update_billdata_confirm'])->name('update_billdata_confirm');

