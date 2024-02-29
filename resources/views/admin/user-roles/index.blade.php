@section('title', "All User Roles")

<x-layout>
    <h1>User Roles</h1>
    <br>
    <a href="{{route('user-roles.create')}}">Add new</a>
    {{-- Alert Box Function --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <br>
    <br>
    <table class="table table-sm table-hover">
        <thead>
            <th>#</th>
            <th>User</th>
            <th>Role</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($user_roles as $user_role)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user_role->user->name }}</td>
                    <td>{{ $user_role->role->name }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('user-roles.edit', $user_role->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('user-roles.destroy', $user_role->id) }}" method="post"
                                onclick="return confirm('Are you sure want to delete?');" class="ms-3">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>