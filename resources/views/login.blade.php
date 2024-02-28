@extends('layout.app')

@section('title', 'Login')

@section('content')
<h1>Login</h1>
    <br>
    <form action="{{ route('authenticate')}}" method="POST">
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
        <button type="submit" class="btn btn-sm btn-primary">Login</button>
    </form>
@endsection