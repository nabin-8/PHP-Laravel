<h1>Users page</h1>

{{-- <h3>Hello {{ $user }}</h3>

<h4>City {!! $city !!} </h4> --}}


<ul>
    @foreach ($users as $id => $u)
        <li>{{ $u['name'] }} | {{ $u['phone'] }}| {{ $u['city'] }}
            | <a href="{{ route('view.user', $id) }}">Show</a>
        </li>
    @endforeach
</ul>
