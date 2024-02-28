@section("title", "Edit Category")

<x-layout>
    <h1>Edit category</h1>
    <br>
    <form action="{{route('category.update', $category->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-floating mb-3">
            <input type="text" id="name" name="name" class="form-control" placeholder="Category Name" value="{{ $category->name}}">
            <label for="name">Category Name</label>
            @error('name')
                <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Update Category</button>
    </form>
</x-layout>