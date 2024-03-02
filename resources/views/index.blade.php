@extends('layout.app')

@section('title', 'Link | Job Portal')

@include('partials._default-nav')

@section('content')

    <div class="container-fluid px-5">
        {{-- Search form --}}
        <div class="my-5">
            <form action="{{ route('search') }}" method="get">
                <input class="form-control" type="search" name="search" id="search"
                    placeholder="Industry, Job title, Job type, ...">
            </form>
        </div>
        {{--  --}}

        {{-- Job Listings --}}
        @foreach ($listings as $listing)
            @if($listing->company->status != 2)
            <a href="{{ route('listing.show', $listing->id) }}"
                class="card-container card my-3 shadow-sm rounded text-decoration-none p-3">
                <h4>{{ $listing->title }}</h4>
                <p><i class="fa-solid fa-wallet text-primary"></i> ${{ $listing->salary }}</p>
                <div class="d-flex">
                    @php
                        $tags = explode(', ', $listing->tag);
                    @endphp
                    @foreach ($tags as $value)
                        <p class="me-2 bg-primary py-1 px-2 text-white rounded me-2">{{ $value }}</p>
                    @endforeach
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset($listing->company->image) }}" width="50" alt="">
                    <h6 class="ms-3">{{ $listing->company->name }}</h6>
                </div>
                <img src="{{ asset($listing->company->image) }}" class="card-image">
            </a>
            @endif
        @endforeach

    </div>
    @include('partials._footer')
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
            top: 0;
            right: 0;
            opacity: .1;
            z-index: 0;
        }

        .tag {
            z-index: 2;
        }
    </style>

@endsection
