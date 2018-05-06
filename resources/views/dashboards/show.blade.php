@extends('layouts.app')

@section('content')
    @include('modules.tabs')
    
    <div class="container">
        <div class="row py-2 justify-content-center">
            <div class="col-10">
                <div class="row">
                    @foreach($dashboard->reports as $report)
                        <div class="col-6">
                            <{{ snake_case($report->name) }}></{{ snake_case($report->name) }}>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection