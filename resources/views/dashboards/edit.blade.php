@extends('layouts.app')

@section('content')
    @include('modules.tabs')
    
    <div class="container">
        <div class="row py-2 justify-content-center">
            <div class="col-12 col-md-10">
                <form method="POST" action="/dashboards/{{ $dashboard->id }}">
                    {{ method_field('put') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Change the name:</label>

                        <input type="text"
                               class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                               id="name"
                               name="name"
                               value="{{ old('name', $dashboard->name)}}">

                        @include('modules.error-field', ['field' => 'name'])
                    </div>

                    <div class="form-group">
                        <label>Select the reports for your dashboard:</label>

                        @foreach($reports as $report)
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="checkbox"
                                       name="selection[]"
                                       value="{{ $report->id }}"
                                       id="{{ snake_case($report->name) }}"
                                       {{ (in_array($report->id, $selectedReports)) ? 'checked' : '' }}>

                                <label class="form-check-label" for="{{ snake_case($report->name) }}">
                                    {{ $report->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Save Changes <i class="fas fa-cloud-upload-alt"></i></button>
                </form>
            </div>
        </div>
    </div>
@endsection