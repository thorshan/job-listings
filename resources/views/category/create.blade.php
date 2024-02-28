@section("title", "Create Category")
<x-layout>
    <h1>Create new categories</h1>
    <br>
    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" id="name" name="name" class="form-control" placeholder="Category Name">
            <label for="name">Category Name</label>
            @error('name')
                <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Add Category</button>
    </form>
</x-layout>
