{{-- <h1>About Page</h1>
<a href="/">Home page</a>
<a href="/post">about page</a> --}}


@extends('layouts.masterlayout');

@section('content')
    <h2>About page</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quasi minus perspiciatis architecto iste expedita
        dolor placeat, facilis, quidem assumenda neque corporis repudiandae. Unde excepturi nam voluptates vero dolore
        consequuntur!</p>
@endsection

@section('title')
    About
@endsection

@verbatim
    <div id="app">{{ message }}</div>
@endverbatim
@push('scripts')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



    <script>
        const {
            createApp,
            ref
        } = Vue

        createApp({
            setup() {
                const message = ref('Hello vue!')
                return {
                    message
                }
            }
        }).mount('#app')
    </script>
@endpush
