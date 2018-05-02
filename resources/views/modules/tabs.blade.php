<div class="container">
    <div class="row py-4 justify-content-center">
        <div class="col">
            <ul class="nav nav-tabs">
                @if($dashboards)
                    @foreach($dashboards as $link => $dashboard)
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is(substr($link, 1)) ? 'active' : '' }}" href="{{ $link }}">{{ $dashboard->name }}</a>
                        </li>
                    @endforeach
                @endif

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboards') ? 'active' : '' }}" href="{{ url('dashboards') }}">Manage</a>
                </li>
            </ul>
        </div>
    </div>
</div>