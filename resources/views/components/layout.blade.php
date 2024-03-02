@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="">
            @include('partials._nav')
        </div>
        <div class="row" style="height:100vh;">
            <div class="g-0" style="width:20%;">
                @include('partials._sidenav')
            </div>
            <div class="g-0 px-5 py-3" style="width:80%">
                {{ $slot }}
                <div class="mt-5">
                    <p class="text-secondary"><span class="text-primary">&copy; 2024</span> Hola. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
