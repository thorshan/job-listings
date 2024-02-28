@section('title', 'Job Listings')

<x-layout>
    <h1>All jobs</h1>
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
            <th>Job title</th>
            <th>Salary</th>
            <th>Job tags</th>
            <th>Company</th>
            <th>User</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($listings as $listing)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="{{ route('listing.show', $listing->id) }}">{{$listing->title}}</a>
                    </td>
                    <td>{{ $listing->salary }}</td>
                    <td>{{ $listing->tag }}</td>
                    <td>{{ $listing->company->name }}</td>
                    <td>{{ $listing->user->name }}</td>
                    {{--  --}}
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('listing.edit', $listing->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('listing.destroy', $listing->id) }}" method="post"
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
