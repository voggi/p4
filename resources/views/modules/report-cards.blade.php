<div class="row justify-content-center">
    @foreach($reports as $report)
        <div class="col-6 col-md-2">
            <div class="card h-100">
                <img class="card-img-top"
                     src="{{ '/images/' . snake_case($report->name) . '.png' }}"
                     alt="{{ $report->name . ' Chart' }}">

                <div class="card-body">
                    <p class="card-text">{{ $report->name }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>