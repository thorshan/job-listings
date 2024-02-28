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
                <div class="px-2" style="background: #eee">
                    <p class="lh-lg">Bradcrumbs</p>
                </div>
                {{ $slot }}
                <div class="px-2 mt-5" style="background: #eee">
                    <p class="lh-lg">&copy; 2024, All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
