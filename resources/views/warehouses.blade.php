@extends('layouts/main')


@section('container')

<div class="container">

    
    <h1 class="text-center mb- mt-3">{{ $title }}</h1>    
    
    <div class="row justify-content-center mt-3 mb-3">
        <div class="col-md-6 mb-4">
            <form action="/warehouses" method="GET">
                @if (request('location'))
                <input type="hidden" name="location" value="{{ request('location') }}">
                @endif
                @if (request('type'))
                <input type="hidden" name="type" value="{{ request('type') }}">
                @endif
                <div class="input-group mb-3" >
                    <input type="text" class="form-control" placeholder="Search.."  name="search" value="{{ request('search') }}" style="border-radius: 30px">
                    <button class="btn btn-outline-warning" type="submit" style="border-radius: 30px; margin-left: 0px"><i class="bi bi-search"></i></button>
                </div>
            </form>
    </div>
</div>


@if ($warehouses->count())

<div class="row ">
    @foreach ($warehouses as $warehouse)
    <div class="col-lg-3 justify-content-center"> 
        <div class="card mb-4 mt-3" style="width: 18rem; border-radius: 15px">
                {{-- <a href="/warehouses/{{ $warehouse->slug }}"><img src="https://source.unsplash.com/500x480?warehouse" class="card-img-top" alt="warehouse" style="border-radius: 15px 0"></a> --}}
                <a href="/warehouses/{{ $warehouse->slug }}"><img src="/img/warehouses/{{ mt_rand(1,18) }}.jpg" class="card-img-top" alt="warehouse" width="200px" height="250px" style="border-radius: 15px 0"></a>
                {{-- <img src="https://unsplash.it/350/?warehouse" class="card-img-top" alt="warehouse"> --}}
                <div class="card-body pb-5 pt-5">
                    <h5 class="card-title text-center" style="margin-top: -40px"><a href="/warehouses/{{ $warehouse->slug }}" class="text-decoration-none text-dark">{{ $warehouse->title }}</a></h5>
                    <div class="row">
                        <div class="col-lg-8">
                            <small class="d-flex mt-0 mb-0"> Luas: <a href="/warehouses?type={{ $warehouse->type->slug }}" class="me-1 ms-1 text-decoration-none">{{ $warehouse->type->type }}</a> </small>
                            <small> Location:  <a href="/warehouses?location={{ $warehouse->location->slug }}" class="ms-1 text-decoration-none">{{  $warehouse->location->name }}</a> </small>

                        </div>
                        <div class="col-lg-4">
                            
                            <p style="color: #5C5959; font-weight: 200; margin-left: -5px">Rp {{ number_format($warehouse->harga) }}  </p>
                            {{-- <p style="margin-top: -25px; font-weight: 50; color: #5C5959;">/hr</p> --}}
                        </div>
                    </div>
                {{-- <p class="card-text mt-3">{{ $warehouse->excerpt }}</p> --}}
                {{-- <a href="/warehouses/{{ $warehouse->slug }}" class="btn btn-warning"><i class="bi bi-eye"></i>  View</a> --}}
            </div>
        </div>
    </div>
    @endforeach
</div>

@else

<p class="text-center fs-4">No warehouse found.</p>
<br><br><br><br><br><br><br>

@endif

</div>

@endsection

