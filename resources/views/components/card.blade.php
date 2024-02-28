<a href="#" class="card-container card my-3 shadow rounded text-decoration-none p-3 mt-5">
    <h4>Title</h4>
    <p><i class="fa-solid fa-dollar-sign text-primary"></i> $20000</p>
    <div class="d-flex">
        <p class="me-2 bg-primary p-1 text-white rounded">Tag</p>
        <p class="me-2 bg-primary p-1 text-white rounded">Tag</p>
        <p class="me-2 bg-primary p-1 text-white rounded">Tag</p>
        <p class="me-2 bg-primary p-1 text-white rounded">Tag</p>
    </div>
    <div class="d-flex align-items-center">
        <img src="{{ asset('uploads/1709048175.png') }}" width="50" alt="">
        <h6 class="ms-3">Company Name</h6>
    </div>
    <img src="{{ asset('uploads/1709048175.png') }}" class="card-image">
</a>

<style>
    .card-container {
        background: linear-gradient(to right, #fff, #eee);
        position: relative;
        overflow: hidden;
    }
    .card-image {
        position: absolute;
        width: 300px;
        transform: rotate(-25deg);
        top: -10;
        right:0;
        opacity: .3;
    }
</style>
