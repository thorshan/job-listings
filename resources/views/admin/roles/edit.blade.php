@section('title', "Edit Role")

<x-layout>
    <h1>Edit role</h1>
    <br>
    <form action="{{route('roles.upadte', $role->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-floating mb-3">
            <input type="text" id="name" name="name" class="form-control" placeholder="Category Name" value="{{$role->name}}">
            <label for="name">Role Name</label>
            @error('name')
                <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Add Role</button>
    </form>
</x-layout>