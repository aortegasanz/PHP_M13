@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>LLISTAT DE RESERVES</h1>
        @if (Session::get('success'))
            <div class="alert alert-success">{!! Session::get('success') !!}</div>
            @php Session::forget('success') @endphp
        @endif
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif
        <br/>
        <a class="btn btn-primary" href="{{ route('booking.create') }}">Nova Reserva</a>
        <br/>
        <br/>
        @if (isset($bookings))
            <table class="table">
                <tr>
                    <td><strong>#</strong></td>
                    <td><strong>Data Reserva</strong></td>
                    <td><strong>Client</strong></td>
                    <td><strong>Des de</strong></td>
                    <td><strong>Fins a</strong></td>
                    <td><strong>Accions</strong></td>
                </tr>
            @foreach ($bookings as $elem)
                <tr>
                    <td>{{ $elem->id }}</td>
                    <td>{{ $elem->booking_date }}</td>
                    <td>{{ $elem->Client->name }}</td>
                    <td>{{ $elem->booking_start_date }}</td>
                    <td>{{ $elem->booking_end_date }}</td>
                    <td>
                        <a href="{{ route('booking.show', $elem->id) }}"><i class="far fa-eye"></i></a>
                        <a href="{{ route('booking.edit', $elem->id) }}"><i class="fas fa-edit"></i></a> 
                        <form action="{{ route('booking.delete', $elem->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{ $elem->id }}"/>
                            <button type="submit" style="background:white;"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>
        @endif
    </div>
@endsection