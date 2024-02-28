@section("title", "Create Company")
<x-layout>
    <h1>Create new company</h1>
    <br>
    <form action="{{ route('company.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" id="name" name="name" class="form-control" placeholder="Company Name">
            <label for="name">Company Name</label>
            @error('name')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="email" id="email" name="email" class="form-control" placeholder="Company Email">
            <label for="email">Company Email</label>
            @error('email')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" id="website" name="website" class="form-control" placeholder="Company Website">
            <label for="website">Company Website</label>
            @error('website')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" id="slogan" name="slogan" class="form-control" placeholder="Company Slogan">
            <label for="slogan">Company Slogan</label>
            @error('slogan')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="company_type">Company Type</label>
            <select id="company_type" class="custom-select form-control mt-2" name="company_type">
                <option value="1-10">1-20</option>
                <option value="20-50">20-50</option>
                <option value="50-100">50-100</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="category">Company Category</label>
            <select id="category" class="custom-select form-control mt-2" name="category_id">
                <option>-- select -- </option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="user">Company User</label>
            <select id="user" class="custom-select form-control mt-2" name="user_id">
                <option>-- select -- </option>
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="description">Company Description</label>
            <textarea class="form-control mt-2" id="description" name="description"></textarea>
            @error('description')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="image">Company Logo</label>
            <input type="file" class="form-control mt-2" id="image" name="image">
            @error('image')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="status">Status</label>
            <select id="status" class="custom-select form-control mt-2" name="status">
                <option value="1">Active</option>
                <option value="2">Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-sm btn-primary mb-3">Add Company</button>
    </form>
</x-layout>