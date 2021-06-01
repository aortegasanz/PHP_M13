<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get   ('client/list',    [ClientController::class, 'index'] )->name('client.list');    

Route::get   ('booking/list',      [BookingController::class, 'index'] )->name('booking.list');
Route::get   ('booking/show/{id}', [BookingController::class, 'show']  )->name('booking.show');    
Route::get   ('booking/create',    [BookingController::class, 'create'])->name('booking.create');  
Route::get   ('booking/edit/{id}', [BookingController::class, 'edit']  )->name('booking.edit');    
Route::put   ('booking/store',     [BookingController::class, 'store'] )->name('booking.store');   
Route::delete('booking/delete',    [BookingController::class, 'delete'])->name('booking.delete');
