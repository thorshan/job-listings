@extends('layout.app')

@section('title', 'Register')

@section('content')
<h1>Register</h1>
    <br>
    <form action="{{ route('create.user') }}" method="POST">
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
        <button type="submit" class="btn btn-sm btn-primary">Register</button>
    </form>
@endsection