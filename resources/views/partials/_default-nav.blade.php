<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid px-5 d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="{{ route('listings') ? route('listings') : url()->current() }}">
            <img src="{{ asset('logo/hola-high-resolution-logo-transparent.png') }}" width="120">
        </a>
        <div class="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">Service</a>
                    </li>
                    @if (auth()->check())
                    @php
                        foreach (auth()->user()->user_role as $row) {
                            $userRole = $row;
                        }
                    @endphp
                    @if($userRole->role->id != 3)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Recruiters</a>
                    </li>
                    @endif
                    @endif
                    @if (!auth()->check())
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="me-2 btn btn-outline-primary">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                        </li>
                    @else
                    <div class="btn-group">
                        <button type="button" class="btn btn-white bg-transparent border-0 dropdown-toggle text-primary"
                            data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="{{ route('profile', auth()->user()->id) }}" class="dropdown-item"
                                    type="button">Profile</a></li>
                            @if($userRole->role->id != 3)
                            <li><a href="{{ route('dashboard') }}" class="dropdown-item" type="button">Dashboard</a></li>
                            @endif
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
