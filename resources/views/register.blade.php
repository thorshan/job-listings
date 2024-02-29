@extends('layout.app')

@section('title', 'Register')

@section('content')

    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{asset('logo/hola-high-resolution-logo-transparent.png')}}" width="200" alt="" class="my-5">
            <h1 class="mb-3">Register</h1>
            <form action="{{ route('create.user') }}" method="POST" class="w-50">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Username">
                    <label for="name">Username</label>
                    @error('name')
                        <p class="text-danger mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    <label for="email">Email</label>
                    @error('name')
                        <p class="text-danger mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    <label for="password">Password</label>
                    @error('name')
                        <p class="text-danger mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <p>Already have an account? <a href="{{ route('login') }}">login</a></p>
                </div>
                <button type="submit" class="btn btn-sm btn-primary w-100">Register</button>
            </form>
        </div>
    </div>

@endsection
