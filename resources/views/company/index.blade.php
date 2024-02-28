@section('title', 'Companies')

<x-layout>
    <h1>All Companies</h1>
    <br>
    <a href="{{route('company.create')}}">Add new</a>
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
            <th>Company Name</th>
            <th>Company Email</th>
            <th>Company Website</th>
            <th>User</th>
            <th>Status</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="{{ route('company.show', $company->id) }}">{{$company->name}}</a>
                    </td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->website }}</td>
                    <td>{{ $company->user->name }}</td>
                    <td>
                        @if ($company->status == 1)
                        <div class="text-success">Active</div>
                        @else
                        <div class="text-danger">Inactive</div>
                        @endif
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('company.destroy', $company->id) }}" method="post"
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
