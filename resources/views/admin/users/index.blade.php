@section('title', 'Users')
<x-layout>
    <h1>All Users</h1>
    <br>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <br>
    <table class="table table-sm table-hover">
        <thead>
            <th>#</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Created Date</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ Carbon\Carbon::parse($user->created_at)->format('d-M-Y') }}</td>
                    <td><form action="{{ route('user.destroy', $user->id) }}" method="post"
                        onclick="return confirm('Are you sure want to delete?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
