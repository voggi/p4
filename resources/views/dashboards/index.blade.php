@extends('layouts.app')

@section('content')
    @include('modules.tabs')

    @include('modules.alert')

    <div class="container">
        <div class="row py-2 justify-content-center">
            <div class="col-10">
                <a href="{{ url('dashboards/create') }}" class="btn btn-outline-primary btn-block">Add a New Dashboard <i class="fas fa-plus"></i></a>
            </div>
        </div>

        @foreach($dashboards as $link => $dashboard)
            <div class="row py-2 justify-content-center">
                <div class="col-10">
                    <div class="card text-center">
                        <div class="card-header">
                            <a href="{{ url($link) }}">{{ $dashboard->name }} <i class="fas fa-chevron-right"></i></a>
                        </div>

                        <div class="card-body">
                            @if ($dashboard->reports->count() > 0)
                                @include('modules.report-cards', ['reports' => $dashboard->reports])
                            @else
                                <p>No reports selected - click edit to add reports to this dashboard.</p>
                            @endif
                        </div>

                        <div class="card-footer">
                            <a href="{{ url($link) . '/edit' }}" class="btn btn-outline-primary">Edit <i class="far fa-edit"></i></a>

                            <a href="{{ url($link) . '/delete' }}" class="btn btn-outline-danger">Remove <i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection