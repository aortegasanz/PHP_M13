@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>RESERVA</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif    
        @if ($booking)
            <div class="row">
                <div class="col-4">
                    <strong>#</strong>
                </div>
                <div class="col-auto">
                    {{ $booking->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Data Reserva</strong>
                </div>
                <div class="col-auto">
                    {{ $booking->booking_date }}
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Des de</strong>
                </div>
                <div class="col-auto">
                    {{ $booking->booking_start_date }}
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Fins a</strong>
                </div>
                <div class="col-auto">
                    {{ $booking->booking_end_date }}
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Client</strong>
                </div>
                <div class="col-auto">
                    {{ $booking->Client->name }}
                </div> 
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>PAX</strong>
                </div>
                <div class="col-auto">
                    {{ $booking->pax }}
                </div>            
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Import (€)</strong>
                </div>
                <div class="col-auto">
                    {{ $booking->import }}
                </div>            
            </div>            
            <br/>
            <div class="row">
                <div class="col-2">
                    <a href=" {{ route('booking.list') }}" class="btn btn-secondary">Tornar</a> 
                </div>
            </div>
        @endif
    </div>
@endsection