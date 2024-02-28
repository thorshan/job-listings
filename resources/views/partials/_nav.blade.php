<nav class="navbar bg-body-tertiary">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="{{url()->current()}}">
            <img src="{{asset('logo/logo.png')}}" width="120">
        </a>
        @if(auth()->check())
        <div class="btn-group">
            <button type="button" class="btn btn-white bg-transparent border-0 dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                {{auth()->user()->name}}
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a href="{{route('profile', auth()->user()->id)}}" class="dropdown-item" type="button">Profile</a></li>
                <li><a href="{{route('dashboard')}}" class="dropdown-item" type="button">Dashboard</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        @endif
    </div>
</nav>