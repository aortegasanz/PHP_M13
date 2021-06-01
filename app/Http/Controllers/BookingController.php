<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\Booking;

class BookingController extends Controller
{

    public function index() {                
        $bookings = Booking::all();
        $clients = Client::all();        
        $pageContent = 'Llista de Reserves';
        return view('booking.index', compact('pageContent', 'bookings', 'clients'));
    }   

    public function show($id) {
        $booking = Booking::findOrFail($id);
        $pageContent = 'Vista Detall Reserva';
        return view('booking.show', compact('pageContent', 'booking'));
    }

    public function create(Request $request) {
        $clients = Client::all();
        return view('booking.create', ['pageContent' => 'Afegir reserva', 'clients' => $clients]);
    }

    public function edit(Request $request, $id) {
        $booking = Booking::findOrFail($id);
        $clients = Client::all();
        $pageContent = 'Vista Edició Reserves';
        return view('booking.edit', compact('pageContent', 'booking' , 'clients'));
    }

    public function delete(Request $request) {
        $booking = Booking::findOrFail($request->id);
        $booking->delete();
        return redirect()->route('booking.list')->with(['success' => 'Dades esborrades correctament.']);
    }

    public function store(Request $request) {
        if (Booking::find($request->id)) {
            $booking = Booking::findOrFail($request->id);
        } else {
            $booking = new Booking;
        }
        //dd($request);
        $booking->booking_date = $request->booking_date;
        $booking->booking_start_date = $request->booking_start_date;
        $booking->booking_end_date = $request->booking_end_date;
        $booking->client_id = $request->client;
        $booking->pax = $request->pax;
        $booking->import = $request->import;
        $booking->save();   
        return redirect()->route('booking.list')->with(['success' => 'Dades enmagatzemades correctament.']);
    }
   
}