@if($errors->get($field))
    <small>
        <ul class='text-danger'>
            @foreach($errors->get($field) as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </small>
@endif