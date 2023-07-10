@extends('layouts/main')


@section('container')
<h1 class="text-center mt-3 mb-5">Available Locations</h1>
<button class="btn btn-warning btn-sm">
    <a href="/warehouses" class="text-decoration-none" style="color: black"><i class="bi bi-arrow-left"></i> </a>
</button>
<div class="row">
@foreach ($locations as $location)
    <div class="col-lg-4">
        <div class="card mb-4 mt-3" style="width: 18rem;">
            <img src="https://unsplash.it/350/?warehouse" class="card-img-top" alt="warehouse">
            <div class="card-body">
                <h5 class="card-title mb-0"><a href="/warehouses/{{ $location->slug }}" class="text-decoration-none">{{ $location->title }}</a></h5>
                <small class="d-flex mb-0">type <a href="" class="me-1 ms-1">{{ $location->type }}  </a>  at <a href="/locations/{{ $location->slug }}" class="ms-1">  {{ $location->name }}</a> </small>
                <h6 class="ms-auto">Rp {{ $location->harga }}</h6>
                <p class="card-text">{{ $location->excerpt }}</p>
                <a href="/warehouses/{{ $location->slug }}" class="btn btn-warning">View more</a>
            </div>
        </div>
    </div>
@endforeach
</div>


@endsection

