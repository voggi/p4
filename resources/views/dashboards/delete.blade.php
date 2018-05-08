@extends('layouts.app')

@section('content')
    @include('modules.tabs')

    <div class="container">
        <div class="row py-2 justify-content-center">
            <div class="col-10">
                <form method="POST" action="/dashboards/{{ $dashboard->id }}">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-danger">Remove the "{{ $dashboard->name }}" Dashboard <i class="fas fa-trash-alt"></i></button>

                        <a href="/dashboards" class="btn btn-outline-secondary">Cancel <i class="fas fa-chevron-left"></i></a>
                    </div>
                </form>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-10">
                <div class="card text-center">
                    <div class="card-header">
                        {{ $dashboard->name }}
                    </div>

                    <div class="card-body">
                        @if ($dashboard->reports->count() > 0)
                            @include('modules.report-cards', ['reports' => $dashboard->reports])
                        @else
                            <p>The dashboard is empty.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection