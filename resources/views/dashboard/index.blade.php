@extends('dashboard/layouts/main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
    </div>


    <div class="row mt-5">
        <div class="col-lg-4 "> 
            <div class="card mb-4 mt-3" style="width: 18rem; border-radius: 15px">
                    {{-- <a href=""><img src="https://source.unsplash.com/500x480?warehouse" class="card-img-top" alt="warehouse" style="border-radius: 15px 0"></a> --}}
                    <img src="/img/warehouses/{{ mt_rand(2,10) }}.jpg" class="card-img-top" alt="warehouse" width="200px" height="250px" style="border-radius: 15px 0">
                    {{-- <img src="https://unsplash.it/350/?warehouse" class="card-img-top" alt="warehouse"> --}}
                    <div class="card-body pb-3 pt-5">
                        <h5 class="card-title text-center" style="margin-top: -40px"><a href="" class="text-decoration-none text-dark">Make warehouse from house</a></h5>
                        {{-- <hr> --}}
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque</p>
                                <a href="" class="btn btn-warning btn-sm" style="border-radius: 30px; margin-left:200px">View</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 "> 
            <div class="card mb-4 mt-3" style="width: 18rem; border-radius: 15px">
                    {{-- <a href=""><img src="https://source.unsplash.com/500x480?warehouse" class="card-img-top" alt="warehouse" style="border-radius: 15px 0"></a> --}}
                    <img src="/img/warehouses/{{ mt_rand(2,10) }}.jpg" class="card-img-top" alt="warehouse" width="200px" height="250px" style="border-radius: 15px 0">
                    {{-- <img src="https://unsplash.it/350/?warehouse" class="card-img-top" alt="warehouse"> --}}
                    <div class="card-body pb-3 pt-5">
                        <h5 class="card-title text-center" style="margin-top: -40px"><a href="" class="text-decoration-none text-dark">6 tips to provide warehouse</a></h5>
                        {{-- <hr> --}}
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque</p>
                                <a href="" class="btn btn-warning btn-sm" style="border-radius: 30px; margin-left:200px">View</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 "> 
            <div class="card mb-4 mt-3" style="width: 18rem; border-radius: 15px">
                    {{-- <a href=""><img src="https://source.unsplash.com/500x480?warehouse" class="card-img-top" alt="warehouse" style="border-radius: 15px 0"></a> --}}
                    <img src="/img/warehouses/{{ mt_rand(2,10) }}.jpg" class="card-img-top" alt="warehouse" width="200px" height="250px" style="border-radius: 15px 0">
                    {{-- <img src="https://unsplash.it/350/?warehouse" class="card-img-top" alt="warehouse"> --}}
                    <div class="card-body pb-3 pt-5">
                        <h5 class="card-title text-center" style="margin-top: -40px"><a href="" class="text-decoration-none text-dark">House is Warehouse</a></h5>
                        {{-- <hr> --}}
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque</p>
                                <a href="" class="btn btn-warning btn-sm" style="border-radius: 30px; margin-left:200px">View</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection