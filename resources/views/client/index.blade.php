@extends('layouts.dashboard')
@section('page')
    @php $currentPage = 'clients' @endphp
@endsection
@section('content')
    <h1>CLIENTS</h1>
    @if (Session::get('success'))
        <div class="alert alert-success">{!! Session::get('success') !!}</div>
        @php Session::forget('success') @endphp
    @endif
    @if (isset($clients))
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title-1 m-b-25">{{ $pageContent }}</h2>
                <div class="table-responsive table--no-card m-b-40">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Cognoms</th>
                                <th>Document</th>
                                <th>Ciutat</th>
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
        @foreach ($clients as $elem)
            <tr>
                <td>{{ $elem->id }}</td>
                <td>{{ $elem->name }}</td>
                <td>{{ $elem->surname }}</td>
                <td>{{ $elem->document }}</td>
                <td>{{ $elem->city }}</td>
                <td>
                    <div class="table-data-feature">
                        <a href="{{ route('client.show', $elem->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                            <i class="fa fa-eye"></i>
                        </a>
                        <!--
                        <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                            <i class="zmdi zmdi-edit"></i>
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                            <i class="zmdi zmdi-delete"></i>
                        </button>
                        -->
                    </div>
                </td>
            </tr>
        @endforeach
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection