@extends('layout.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <img src="{{asset('logo/logo.png')}}" width="200" alt="" class="my-5">
        <h2 class="mb-3">Login</h2>
        <form action="{{ route('authenticate')}}" method="POST" class="w-50">
            @csrf
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
                <p>New user? <a href="{{route('register')}}">register</a> here.</p>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

    </div>
</div>
@endsection