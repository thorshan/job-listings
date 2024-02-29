@section('title', "All Roles")

<x-layout>
    <h1>All Roles</h1>
    <br>
    <a href="{{route('roles.create')}}">Add new</a>
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
            <th>Role Name</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="post"
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