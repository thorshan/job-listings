<div class="d-flex flex-column justify-content-between" style="height:100%; background-color:#eee;">
    <div class="d-flex flex-column px-2">
        <a href="{{route('dashboard')}}" class="btn btn-light shadow-sm rounded-0 mt-2 mb-1 d-flex align-items-center">
            <i class="fa-solid fa-gauge-high mx-4 me-3"></i>Dashboard</a>
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa-solid fa-layer-group mx-4 me-3"></i>Category
        </button>
        <div class="collapse" id="collapseOne">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('category.create') }}" class="text-decoration-none text-secondary">Add new</a>
                <div class="my-2"></div>
                <a href="{{ route('category.index') }}" class="text-decoration-none text-secondary">All Categories</a>
            </div>
        </div>
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa-solid fa-landmark mx-4 me-3"></i>Company
        </button>
        <div class="collapse" id="collapseTwo">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('company.create') }}" class="text-decoration-none text-secondary">Add new</a>
                <div class="my-2"></div>
                <a href="{{ route('company.index') }}" class="text-decoration-none text-secondary">All Companies</a>
            </div>
        </div>
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThe" aria-expanded="false" aria-controls="collapseThe"><i class="fa-solid fa-clipboard-list mx-4 me-3"></i>Jobs
        </button>
        <div class="collapse" id="collapseThe">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('listing.create') }}" class="text-decoration-none text-secondary">Add new</a>
                <div class="my-2"></div>
                <a href="{{ route('listing.index') }}" class="text-decoration-none text-secondary">All Jobs</a>
            </div>
        </div>
        {{-- <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapsClasses" aria-expanded="false" aria-controls="collaplseClasses"><i class="fa-solid fa-chalkboard-user mx-4 me-3"></i>Classes
        </button>
        <div class="collapse" id="collapsClasses">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('classes.create') }}" class="text-decoration-none text-secondary">Add Class</a>
                <div class="my-2"></div>
                <a href="{{ route('classes.index') }}" class="text-decoration-none text-secondary">All Classes</a>
            </div>
        </div>
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapsStudents" aria-expanded="false" aria-controls="collapseStudents"><i class="fa-solid fa-person mx-4 me-3"></i>Students
        </button>
        <div class="collapse" id="collapsStudents">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('users.index') }}" class="text-decoration-none text-secondary">All Students</a>
            </div>
        </div>
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser"><i class="fa-solid fa-user mx-4 me-3"></i>Users
        </button>
        <div class="collapse" id="collapseUser">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('users.index') }}" class="text-decoration-none text-secondary">All Users</a>
            </div>
        </div>
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="fa-solid fa-building-shield mx-4 me-3"></i>Administration
        </button>
        <div class="collapse" id="collapseFour">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('role.permission.assign') }}" class="text-decoration-none text-secondary">Assign Permissions</a>
                <div class="my-2"></div>
                <a href="{{ route('role.permission.index') }}" class="text-decoration-none text-secondary">All Role Permissions</a>
                <div class="my-2"></div>
                <a href="{{ route('userRole.index') }}" class="text-decoration-none text-secondary">Manage roles</a>
                <div class="my-2"></div>
                <a href="{{ route('permission-group.index') }}" class="text-decoration-none text-secondary">Manage Group</a>
                <div class="my-2"></div>
                <a href="{{ route('permissions.index') }}" class="text-decoration-none text-secondary">Manage Permission</a>
            </div>
        </div> --}}
    </div>
    <div class="mx-3 my-3">
        Login as : {{auth()->user()->name}}
    </div>
</div>