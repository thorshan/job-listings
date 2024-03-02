@extends('layout.app')

@section('title', 'Contact Us')

@include('partials._default-nav')

@section('content')
    <div class="container">
        <div class="card text-bg-dark my-5">
            <img src="{{ asset('hero.jpeg') }}" class="card-img opacity-25" alt="..." style="height: 350px">
            <div class="card-img-overlay">
                <h1 class="card-title text-center mt-5">Contact Us</h1>
                <p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <form action="#" method="POST" class="w-75">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInput" class="form-label">Subject</label>
                    <textarea type="text" class="form-control" id="exampleInput" rows="10" placeholder="Write a message ..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @include('partials._footer')
@endsection
