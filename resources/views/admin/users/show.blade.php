@extends('layout.app')

@section('title', "Profile")

@include('partials._nav')

@section('content')

<div class="container-fluid px-5">
    <h1 class="my-3">Profile</h1>
    <form action="{{route('update.user', $user->id)}}" method="POST" class="w-50">
        @csrf
        @method("PUT")
        <div class="form-floating mb-3">
            <input type="text" id="name" name="name" placeholder="Name" class="form-control" value="{{$user->name}}">
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" id="name" name="name" placeholder="Name" class="form-control" value="{{$user->email}}">
            <label for="name">Name</label>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>

@endsection