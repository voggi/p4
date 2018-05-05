<div class="container">
    <div class="row py-4 justify-content-center">
        <div class="col-10">
            <ul class="nav nav-tabs">
                @if($dashboards)
                    @foreach($dashboards as $link => $dashboard)
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is($link) ? 'active' : '' }}" href="{{ url($link) }}">{{ $dashboard->name }}</a>
                        </li>
                    @endforeach
                @endif

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboards*') ? 'active' : '' }}" href="{{ url('dashboards') }}">Manage</a>
                </li>
            </ul>
        </div>
    </div>
</div>