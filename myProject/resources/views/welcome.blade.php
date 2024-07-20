{{-- <h1>Our First Page</h1> --}}

{{-- <a href="{{ route('mypost') }}">post page</a>
<a href="{{ route('myabout') }}">about page</a> --}}

{{-- templete engine --}}
{{-- {{ 5 + 2 }}
<br><br>
{{ 'Hello World' }}
<br><br>
{{ '<h1>Hello world</h1>' }}
<br><br>
{!! '<h1>Hello world</h1>' !!} --}}

{{-- {!! "<script>alert('hello')</script>" !!} --}}

{{-- @php
    $user = '<h1>Laravel</h1>';
    $names = ['surej', 'rajan', 'himal', 'nabin'];
@endphp
{!! $user !!}
<ul>
    @foreach ($names as $name)
        @if ($loop->even)
            <li style="color: red">{{ $name }}</li>
        @elseif ($loop->odd)
            <li style="color: green">{{ $name }}</li>
            {{-- @else
            <li>{{ $name }}</li> --}}
{{-- @endif
@endforeach --}}
{{-- </ul> --}}


{{-- @include --}}
{{-- prpos --}}
{{-- @php
    $fruits = ['one' => 'Apple', 'two' => 'Mango', 'three' => 'banana', 'four' => 'orange'];
    $age = 20;
@endphp --}}
{{-- @include('pages.header', ['names' => $fruits]) --}}
{{-- @includeWhen($age > 18 ? true : false, 'pages.header', ['names' => $fruits]) --}}
{{-- @includeUnless($age > 18 ? true : false, 'pages.header', ['names' => $fruits])
<h1>Home page</h1>

@include('pages.footer')
@includeIf('pages.contact') --}}


{{-- blade template iii --}}

@extends('layouts.masterlayout');

@section('content')
    <a href="{{ route('blog') }}">Blog</a>
    <h2>Home page</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus veniam dolores possimus rem magnam alias nostrum
        perspiciatis sit! Nostrum neque necessitatibus quod illo nam unde corporis qui ratione repellat modi?</p>
@endsection

@section('title')
    Home
@endsection

@push('scripts')
    <script src="/example.js"></script>
    <script src="/example.js"></script>
    <script src="/example.js"></script>
@endpush
