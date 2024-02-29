@section('title', 'Edit User Role')

<x-layout>
    <h1>Edit user role</h1>
    <br>
    <form action="{{ route('user-roles.update', $user_role->id) }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-select">
                <option> -- select -- </option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{$user->id == $user_role->user->id ? 'selected' : ""}}>{{ $user->name }}</option>
                @endforeach
                @error('user_id')
                    <p class="text-danger mt-3">{{ $message }}</p>
                @enderror
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="role_id">User</label>
            <select name="role_id" id="role_id" class="form-select">
                <option> -- select -- </option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" {{$role->id == $user_role->role->id ? 'selected' : ""}}>{{ $role->name }}</option>
                @endforeach
                @error('role_id')
                    <p class="text-danger mt-3">{{ $message }}</p>
                @enderror
            </select>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Assign Role</button>
    </form>
</x-layout>
