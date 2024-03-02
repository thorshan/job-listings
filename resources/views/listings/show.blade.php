@extends('layout.app')

@section('title', 'Job')

@include('partials._default-nav')

@section('content')
    <div class="container-fluid px-5 my-3">
        <img src="{{ asset($listing->company->image) }}" width="200" alt="">
        <h6 class="mt-3">{{ $listing->company->name }}</h6>
        <h4>{{ $listing->title }}</h4>
        <strong>Experience : {{$listing->exp}} - {{$listing->exp + 2}} years</strong>
        <p class="mt-3"><i class="fa-solid fa-wallet text-primary"></i> ${{ $listing->salary }}</p>
        <small>Job created date : {{Carbon\Carbon::parse($listing->created_at)->format('d-m-Y')}}</small>
        <div class="d-flex mt-3">
            @php
            $tags = explode(', ', $listing->tag);
            $requirements = explode('. ', $listing->requirements);
            @endphp
            @foreach ($tags as $value)
                <p class="me-2 bg-primary py-1 px-2 text-white rounded me-2">{{ $value }}</p>
            @endforeach
        </div>
        <h3>Job Description</h3>
        <hr>
        <p>{{$listing->description}}</p>
        <h3>Requirements</h3>
        <hr>
        <ul>
            @foreach ($requirements as $requirement)
            <li>{{$requirement}}</li>
            @endforeach
        </ul>
        <h3>Job Location</h3>
        <hr>
        <p>{{$listing->location}}</p>
        <h3>Empolyer Informations</h3>
        <hr>
        <p>Send your CV to : <a href="mailto:{{$listing->company->email}}">{{$listing->company->email}}</a></p>
        <p>About company : <a href="https://{{$listing->company->website}}" target="_blank">{{$listing->company->website}}</a></p>
    </div>
    @include('partials._footer')
@endsection
