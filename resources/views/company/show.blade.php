@section('title', 'Company Info')

<x-layout>
    <img src="{{ asset($company->image) }}" width="200" class="p-3 mb-3" alt="logo">
    <h1 class="position-relative"><span
            class="position-absolute top-0 start-0 translate-middle p-2 border border-light rounded-circle" id="badge" style="background-color: {{ $company->status == 1 ? '#90ee90' : ($company->status == 2 ? '#f54242' : 'blue') }}">
        </span>{{ $company->name }}</h1>
    <strong class="text-primary">{{ $company->slogan }}</strong>
    <br>
    <br>
    <h4>About Company</h4>
    <hr>
    <p>{{ $company->description }}</p>
    <hr>
    <h4>Company Type</h4>
    <hr>
    <p>Employees : {{ $company->company_type }} pax.</p>
</x-layout>

<script>
    
</script>
