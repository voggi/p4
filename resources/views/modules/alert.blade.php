@if(session('alert'))
    <div class="container">
        <div class="row py-4 justify-content-center">
            <div class="col-10 col-sm-12">
                <div class="alert alert-success text-center" role="alert">
                    {{ session('alert') }}
                </div>
            </div>
        </div>
    </div>
@endif
