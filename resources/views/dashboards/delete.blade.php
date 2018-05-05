@extends('layouts.app')

@section('content')
    @include('modules.tabs')

    <div class="container">
        <div class="row py-2 justify-content-center">
            <div class="col-8">
                <form method="POST" action="/dashboards/{{ $dashboard->id }}">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-danger">Yes - Remove the Below Dashboard</button>

                        <a href="/dashboards" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-8">
                <div class="card text-center">
                    <div class="card-header">
                        {{ $dashboard->name }}
                    </div>

                    <div class="card-body">
                        A list of charts will go here ...
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection