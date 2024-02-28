@extends('layout.app')

@section('title', 'Link | Job Portal')

@include('partials._nav')

@section('content')

    <div class="container-fluid px-5">
        {{-- Search form --}}
        <div class="my-5">
            <form action="" method="get">
                <input class="form-control" type="search" name="search" id="search"
                    placeholder="Industry, Job title, Job type ...">
            </form>
        </div>
        {{--  --}}

        <div class="d-flex aligin-items-center justify-content-center my-3">
            <img src="{{ asset('hero.jpeg') }}" class="img-fluid" alt="...">
        </div>

        {{-- Job Listings --}}
        <x-card></x-card>
        
    </div>

@endsection
