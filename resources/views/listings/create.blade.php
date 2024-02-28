@section("title", "Create Listing")

<x-layout>
    <h1>Create new job</h1>
    <br>
    <form action="{{ route('listing.store') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" id="title" name="title" class="form-control" placeholder="Job title">
            <label for="title">Job Title</label>
            @error('title')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="number" id="salary" name="salary" class="form-control" placeholder="Salary">
            <label for="salary">Salary</label>
            @error('salary')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="number" id="exp" name="exp" class="form-control" placeholder="Experience">
            <label for="exp">Experience</label>
            @error('exp')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" id="tag" name="tag" class="form-control" placeholder="Tag (Comma separated value)">
            <label for="tag">Tag (Comma separated value)</label>
            @error('tag')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="description">Job Description</label>
            <textarea class="form-control mt-2" id="description" name="description"></textarea>
            @error('description')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="requirements">Requirements</label>
            <textarea class="form-control mt-2" id="requirements" name="requirements"></textarea>
            @error('requirements')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="text" id="location" name="location" class="form-control" placeholder="Job location">
            <label for="location">Job location</label>
            @error('location')
            <p class="text-danger mt-3">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-sm btn-primary mb-3">Add new Job</button>
    </form>
</x-layout>