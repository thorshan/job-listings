<div class="d-flex flex-column justify-content-between" style="height:100%; background-color:#eee;">
    <div class="d-flex flex-column px-2">
        @php
            foreach (auth()->user()->user_role as $row) {
                $userRole = $row;
            }
        @endphp
        <a href="{{route('dashboard')}}" class="btn btn-light shadow-sm rounded-0 mt-2 mb-1 d-flex align-items-center">
            <i class="fa-solid fa-gauge-high mx-4 me-3 text-primary"></i>Dashboard</a>
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa-solid fa-layer-group mx-4 me-3 text-primary"></i>Category
        </button>
        <div class="collapse" id="collapseOne">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('category.create') }}" class="text-decoration-none text-secondary">Add new</a>
                <div class="my-2"></div>
                <a href="{{ route('category.index') }}" class="text-decoration-none text-secondary">All Categories</a>
            </div>
        </div>
        {{-- @dd() --}}
        @if($userRole->id == 1)
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa-solid fa-landmark mx-4 me-3 text-primary"></i>Company
        </button>
        <div class="collapse" id="collapseTwo">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('company.create') }}" class="text-decoration-none text-secondary">Add new</a>
                <div class="my-2"></div>
                <a href="{{ route('company.index') }}" class="text-decoration-none text-secondary">All Companies</a>
            </div>
        </div>
        @endif
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThe" aria-expanded="false" aria-controls="collapseThe"><i class="fa-solid fa-clipboard-list mx-4 me-3 text-primary"></i>Jobs
        </button>
        <div class="collapse" id="collapseThe">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('listing.create') }}" class="text-decoration-none text-secondary">Add new</a>
                <div class="my-2"></div>
                <a href="{{ route('listing.index') }}" class="text-decoration-none text-secondary">All Jobs</a>
            </div>
        </div>
        @if($userRole->id == 1)
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22"><i class="fa-solid fa-user mx-4 me-3 text-primary"></i>User
        </button>
        <div class="collapse" id="collapse22">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('users') }}" class="text-decoration-none text-secondary">All Users</a>
            </div>
        </div>
        @endif
        @if($userRole->id == 1)
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour"><i class="fa-solid fa-user-group mx-4 me-3 text-primary"></i>Roles
        </button>
        <div class="collapse" id="collapsefour">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('roles.create') }}" class="text-decoration-none text-secondary">Add new</a>
                <div class="my-2"></div>
                <a href="{{ route('roles.index') }}" class="text-decoration-none text-secondary">All Roles</a>
            </div>
        </div>
        @endif
        @if($userRole->id == 1)
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive"><i class="fa-solid fa-lock mx-4 me-3 text-primary"></i>Assign Roles
        </button>
        <div class="collapse" id="collapsefive">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('user-roles.create') }}" class="text-decoration-none text-secondary">Assign role</a>
                <div class="my-2"></div>
                <a href="{{ route('user-roles.index') }}" class="text-decoration-none text-secondary">User Roles</a>
            </div>
        </div>
        @endif
    </div>
    <div class="mx-3 my-3">
        Login as : {{auth()->user()->name}}
    </div>
</div>
