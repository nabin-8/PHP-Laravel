{{-- <h1>Our Post Page</h1>
<a href="/">Home page</a>
<a href="/about">about page</a> --}}


@extends('layouts.masterlayout');

@section('content')
    <h2>Post page</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, repudiandae vel. Voluptate animi earum impedit
        eum harum autem quia a maiores? Explicabo tempora dicta distinctio assumenda aut molestias, enim itaque.</p>
@endsection

@section('title')
    Post
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
