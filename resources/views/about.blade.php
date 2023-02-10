@extends('main')

@section('title', 'About')

@section('content')
    <div class="container-fluid about-header mt-5"></div>
    <div class="container-fluid our-story">
        <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-between py-5"><h1>Our Story</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi praesentium repudiandae quasi consequatur hic animi quod odio, rerum iure voluptates quam saepe, nostrum pariatur sapiente corrupti alias voluptatem totam id?</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/dog.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection