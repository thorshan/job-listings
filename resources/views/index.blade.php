@extends('layout.app')

@section('title', 'Link | Job Portal')

@include('partials._nav')

@section('content')

    <div class="container-fluid px-5">
        {{-- Search form --}}
        <div class="my-5">
            <form action="{{ route('search') }}" method="get">
                <input class="form-control" type="search" name="search" id="search"
                    placeholder="Industry, Job title, Job type ...">
            </form>
        </div>
        {{--  --}}

        {{-- Job Listings --}}
        @foreach ($listings as $listing)
            <a href="#" class="card-container card my-3 shadow-sm rounded text-decoration-none p-3">
                <h4>{{ $listing->title }}</h4>
                <p><i class="fa-solid fa-wallet text-primary"></i> ${{ $listing->salary }}</p>
                <div class="d-flex">
                    <p class="me-2 bg-primary py-1 px-2 text-white rounded">{{ $listing->tag }}</p>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset($listing->company->image) }}" width="50" alt="">
                    <h6 class="ms-3">{{ $listing->company->name }}</h6>
                </div>
                <img src="{{ asset($listing->company->image) }}" class="card-image">
            </a>
        @endforeach

    </div>
    <style>
        .card-container {
            background: linear-gradient(to right, #fff, #eee);
            position: relative;
            overflow: hidden;
        }

        .card-image {
            position: absolute;
            width: 300px;
            transform: rotate(-25deg);
            top: -10;
            right: 0;
            opacity: .3;
        }
    </style>

@endsection
