<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
Route::get('form/editbooking',[BookingController::class,'editbooking']);
Route::get('form/addbooking',[BookingController::class,'addbooking']);
Route::post('form/savebooking',[BookingController::class,'saveRecord']);


Route::get('/all_rooms',[RoomController::class,'allrooms']);
