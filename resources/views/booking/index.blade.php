@extends('layouts.dashboard')
@section('page')
    @php $currentPage = 'bookings' @endphp
@endsection
@section('content')
        <h1>LLISTAT DE RESERVES</h1>
        @if (Session::get('success'))
            <div class="alert alert-success">{!! Session::get('success') !!}</div>
            @php Session::forget('success') @endphp
        @endif
        <br/>
        <a class="btn btn-primary" href="{{ route('booking.create') }}">Nova Reserva</a>
        <br/>
        <br/>
        @if (isset($bookings))
            <div class="col-lg-12">
                <h2 class="title-1 m-b-25">{{ $pageContent }}</h2>
                <div class="table-responsive table--no-card m-b-40">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Data Reserva</th>
                                <th>Client</th>
                                <th>Des de</th>
                                <th>Fins a</th>
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
            @foreach ($bookings as $elem)
                <tr>
                    <td>{{ $elem->id }}</td>
                    <td>{{ $elem->booking_date }}</td>
                    <td>{{ $elem->Client->name }}</td>
                    <td>{{ $elem->booking_start_date }}</td>
                    <td>{{ $elem->booking_end_date }}</td>
                    <td>
                        <a href="{{ route('booking.show', $elem->id) }}"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('booking.edit', $elem->id) }}"><i class="fa fa-edit"></i></a> 
                        <form action="{{ route('booking.delete', $elem->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{ $elem->id }}"/>
                            <button type="submit" style="background:white;"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection