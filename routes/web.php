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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get   ('client/list',      [ClientController::class, 'index'] )->middleware('auth')->name('client.list');    
Route::get   ('client/show/{id}', [ClientController::class, 'show'] )->middleware('auth')->name('client.show');

Route::get   ('booking/list',      [BookingController::class, 'index'] )->middleware('auth')->name('booking.list');
Route::get   ('booking/show/{id}', [BookingController::class, 'show']  )->middleware('auth')->name('booking.show');    
Route::get   ('booking/create',    [BookingController::class, 'create'])->middleware('auth')->name('booking.create');  
Route::get   ('booking/edit/{id}', [BookingController::class, 'edit']  )->middleware('auth')->name('booking.edit');    
Route::put   ('booking/store',     [BookingController::class, 'store'] )->middleware('auth')->name('booking.store');   
Route::delete('booking/delete',    [BookingController::class, 'delete'])->middleware('auth')->name('booking.delete');

require __DIR__.'/auth.php';
