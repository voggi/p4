<div class="container">
    <div class="row py-4 justify-content-center">
        <div class="col-10 col-sm-12">
            <ul class="nav nav-tabs justify-content-center">
                @if($dashboards)
                    @foreach($dashboards as $link => $dashboard)
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is($link) ? 'active' : '' }}" href="{{ url($link) }}">{{ $dashboard->name }}</a>
                        </li>
                    @endforeach
                @endif

                <li class="nav-item">
                    <a class="nav-link {{ request_is_not_show() ? 'active' : '' }}" href="{{ url('dashboards') }}">Manage</a>
                </li>
            </ul>
        </div>
    </div>
</div>