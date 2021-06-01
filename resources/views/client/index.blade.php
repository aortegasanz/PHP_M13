@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>CLIENTS</h1>
        @if (Session::get('success'))
            <div class="alert alert-success">{!! Session::get('success') !!}</div>
            @php Session::forget('success') @endphp
        @endif
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif
        @if (isset($clients))
            <table class="table">
                <tr>
                    <td><strong>#</strong></td>
                    <td><strong>Nom</strong></td>
                    <td><strong>Cognoms</strong></td>
                    <td><strong>Document</strong></td>
                    <td><strong>Ciutat</strong></td>
                    <td><strong>eMail</strong></td>
                    <td><strong>Telèfon</strong></td>
                </tr>
            @foreach ($clients as $elem)
                <tr>
                    <td>{{ $elem->id }}</td>
                    <td>{{ $elem->name }}</td>
                    <td>{{ $elem->surname }}</td>
                    <td>{{ $elem->document }}</td>
                    <td>{{ $elem->city }}</td>
                    <td>{{ $elem->email }}</td>
                    <td>{{ $elem->telephone }}</td>
                </tr>
            @endforeach
            </table>
        @endif
    </div>
@endsection