@extends('layouts.app')

@section('content')
    @include('modules.tabs')
    
    <div class="container">
        <div class="row py-2 justify-content-center">
            <div class="col-8">
                Details of the dashboard {{ $dashboard->name }} will go here.
            </div>
        </div>
    </div>
@endsection