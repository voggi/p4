@if(session('alert'))
    <div class="container">
        <div class="row py-4 justify-content-center">
            <div class="col-12 col-md-10">
                <div class="alert alert-success text-center" role="alert">
                    {{ session('alert') }}
                </div>
            </div>
        </div>
    </div>
@endif
