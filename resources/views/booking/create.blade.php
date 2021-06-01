@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>RESERVES</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif        
        <form action="{{ route('booking.store') }}" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Data Reserva</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="date" name="booking_date">
                </div>
            </div>
            <br/>           
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Des de</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="date" name="booking_start_date">
                </div>
            </div>
            <br/>           
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Fins a</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="date" name="booking_end_date">
                </div>
            </div>
            <br/>           
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Client</label>
                </div>
                <div class="col-auto">
                    <select class="form-control" name="client">
                        <option value="">-</option>
                    @foreach (App\Models\Client::get() as $client)
                        <option value="{{ $client->id }}">{{ $client->name }} </option>
                    @endforeach
                    </select>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-2">
                    <label class="form-label">PAX</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="number" name="pax">
                </div>
            </div>
            <br/>            
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Import</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="number" name="import">
                </div>
            </div>
            <br/>              
            <div class="row">
                <div class="col-2">
                    <button class="btn btn-primary" type="submit" value="create">Enmagatzemar</input> 
                </div>
                <div class="col-2">
                    <a href=" {{ route('booking.list') }}" class="btn btn-secondary">Tornar</a> 
                </div>
            </div>
        </form>
    </div>
@endsection