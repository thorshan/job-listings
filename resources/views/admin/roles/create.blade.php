@section('title', "Create Role")

<x-layout>
    <h1>Create new role</h1>
    <br>
    <form action="{{route('roles.store')}}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" id="name" name="name" class="form-control" placeholder="Category Name">
            <label for="name">Role Name</label>
            @error('name')
                <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Add Role</button>
    </form>
</x-layout>