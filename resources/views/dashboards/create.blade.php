@extends('layouts.app')

@section('content')
    @include('modules.tabs')
    
    <div class="container">
        <div class="row py-2 justify-content-center">
            <div class="col-8">
                <form method="POST" action="/dashboards">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Choose a name for your new dashboard:</label>

                        <input type="text"
                               class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                               id="name"
                               name="name"
                               placeholder="E.g. Fund Overview"
                               value="{{ old('name')}}">

                        @include('modules.error-field', ['field' => 'name'])
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection