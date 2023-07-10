@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 mt=5">Edit Warehouse</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>    
@endif

<form method="post" action="/dashboard/warehouses/{{ $warehouse->slug }}" >
        @method('put')
        @csrf
    <div class="col-lg-6">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $warehouse->title) }}" autofocus>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $warehouse->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Days Available: </label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ old('stock', $warehouse->stock) }}">
            @error('stock')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Price</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $warehouse->harga) }}">
            @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="location_id" class="form-label">Location</label>
            <select class="form-select" name="location_id">
                @foreach ($locations as $location)
                    @if (old('location_id', $warehouse-> location_id) == $location->id)
                        <option value="{{ $location->id }}" selected>{{ $location->detail }}</option>
                    @else
                        <option value="{{ $location->id }}">{{ $location->detail }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Luas</label>
            <select class="form-select" name="type_id">
                @foreach ($types as $type)
                    @if (old('type_id', $warehouse-> type_id) == $type->id)
                        <option value="{{ $type->id }}" selected>{{ $type->type }}</option>
                    @else
                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input type="hidden" id="description" name="description" value="{{ old('description', $warehouse->description) }}">
            <trix-editor input="description"></trix-editor>
        </div>
        
        <button type="submit" class="fw-bold btn btn-warning" style="border-radius: 30px" >Save</button>
    </div>
</form>

<h1 style="margin-top: 200px"></h1>


<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/warehouses/checkSlug?title=' + title.value)
         .then(response => response.json())
         .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });
</script>
@endsection
