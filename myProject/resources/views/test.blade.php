{{-- @php
    $user = 'Hello';
    $frouts = ['Apple', 'Mango', 'Banana', 'Litchi'];
@endphp

<script>
    // let data = @json($frouts);

    let data = {{ Js::from($frouts) }}
    data.map((val) => {
        console.log(val);
    })
</script>

<h1>{{ $user }}</h1> --}}


{{-- controller --}}
<h1>Testing Page</h1>
