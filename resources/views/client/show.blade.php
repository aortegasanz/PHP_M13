@extends('layouts.dashboard')
@section('page')
    @php $currentPage = 'clients' @endphp
@endsection
@section('content')
    <h1>CLIENT</h1>
    @if (isset($pageContent))
        <h5>{{ $pageContent }}</h5>
    @endif    
    @if ($client)
        <div class="row">
            <div class="col-4">
                <strong>#</strong>
            </div>
            <div class="col-auto">
                {{ $client->id }}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <strong>Nom</strong>
            </div>
            <div class="col-auto">
                {{ $client->name }}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <strong>Cognoms</strong>
            </div>
            <div class="col-auto">
                {{ $client->surname }}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <strong>Document</strong>
            </div>
            <div class="col-auto">
                {{ $client->document }}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <strong>City</strong>
            </div>
            <div class="col-auto">
                {{ $client->city }}
            </div> 
        </div>
        <div class="row">
            <div class="col-4">
                <strong>eMail</strong>
            </div>
            <div class="col-auto">
                {{ $client->email }}
            </div>            
        </div>
        <div class="row">
            <div class="col-4">
                <strong>Telèfon</strong>
            </div>
            <div class="col-auto">
                {{ $client->telephone }}
            </div>            
        </div>            
        <br/>
        <div class="row">
            <div class="col-2">
                <a href="{{ route('client.list') }}" class="btn btn-secondary">Tornar</a> 
            </div>
        </div>
    @endif
@endsection