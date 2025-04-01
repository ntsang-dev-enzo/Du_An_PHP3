@extends('client.layouts.master')
@section('meta_title')
    chào bạn
@endsection
@section('content')
    <div style="color: aqua" class="container ">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel velit vel mi hendrerit ultricies. Nulla
            facilisi. Sed vel orci non ipsum gravida consectetur. Aliquam erat volutpat. Quisque semper, purus vel
            pellentesque efficitur, enim velit consectetur nisi, ut consectetur felis quam nec turpis. Integer ultricies,
            orci vel ultricies interdum, dui sem rutrum neque, et bibendum est velit at turpis.</p>
            <div class="btn btn-primary mb-3 mt-2">Đây là cái nút!</div>
    </div>
    <ul style="list-style-type: none; text-align: left;">
    @foreach ( $categories as $category )
    {{-- @dd($category) --}}
    
        <li style="color: aliceblue">{{ $category->name }}</li>
    </ul>
    @endforeach
@endsection