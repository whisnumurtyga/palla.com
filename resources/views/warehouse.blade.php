@extends('layouts/main')

@section('container')
<div class="container mt-5">
    <button class="btn btn-warning btn-sm"  style="border-radius: 30px;">
        <a href="/warehouses" class="text-decoration-none" style="color: black; "><i class="bi bi-arrow-left"></i> Back </a>
    </button>
    <div class="row">
        <div class="col-lg-6">
            <img src="https://source.unsplash.com/500x400?warehouse" class="img-fluid mt-3 mb-3 me-5 float-start" alt="warehouse">
            {{-- <img src="https://unsplash.it/350/?warehouse" class="mt-3 mb-3 me-5 float-start" alt="warehouse-img"> --}}
        </div>
        <div class="col-lg-6" style="margin-left: -110px;">
            <article>
                <h1 class="mt-3 mb-3">{{ $warehouse->title }}</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <small>
                        Rp {{ number_format($warehouse->harga) }} <br>
                        Available:  {{ $warehouse->stock }} Days
                        </small>
                    </div>
                    <div class="col-lg-6">
                        <small>
                            Luas: <a href="/warehouses?type={{ $warehouse->type->slug }}" class="text-decoration-none"> {{ $warehouse->type->type }} </a> <br>
                            Location: <a href="/warehouses?location={{ $warehouse->location->slug }}" class="text-decoration-none">{{ $warehouse->location->detail }}</a> 
                        </small>
                    </div>
                </div>
                <p class="mt-4" style="letter-spacing: 1px">Description </p>
                <p  style="color: #5C5959; margin-top:-15px;">{{ $warehouse->excerpt }}</p>
            </article>
            <div class="justify-content-center mt-5">
                <div class="row g-3 align-items-center">
                    <div class="row">
                        <div class="col-lg-3">
                            <form action="/order/{{ $warehouse->id }}" method="POST">
                                        @csrf
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <label for="jumlah_pesan">Berapa hari: </label>
                                            <input type="number" id="jumlah_pesan" name="jumlah_pesan" class="form-control mt-1" required>
                                        </div>
                                        <div class="col-lg-3 mt-3">
                                            <button type="submit"  id="jumlah_pesan" formmethod="POST" class="torder btn btn-outline-warning btn-lg pull-right btn-sm mt-3 ">Booking</button>
                                        </div>
                                    </div>
                            </form>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <main>
        <hr class="mt-5">

    <div class="container px-4 py-5" id="icon-grid">
        <h2 class="text-center" style="letter-spacing: 3px">Faccility</h2>
        <hr width="10%" style="margin:auto" >

        <div class="row g-4 py-5">
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"/></svg>
            <div>
            <h3 class=" mb-3 facw"><i class="bi bi-truck me-1"></i>  Delivery Service</h3>
            <p style="color: #5C5959;">Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"/></svg>
            <div>
            <h3 class=" mb-3 facw"><i class="bi bi-signpost-split me-1"></i>  Easy Road Access</h3>
            <p style="color: #5C5959;">Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"/></svg>
            <div>
            <h3 class=" mb-3 facw"><i class="bi bi-volume-down me-1"></i>  Light Activity</h2>
            <p style="color: #5C5959;">Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        </div>
    </div>
    </main>

<br><br><br><br>
</div>



@endsection