@extends('layouts/main')

@section('container')
    
    <div class="container mt-5">
        <h1 class="text-center">Checkout</h1>
    </div>

@if (!empty($order))
        @foreach ($detail_order as $dOrder)
        <div class="row mt-5">
            <div class="col-lg-8">
                <div class="card" style="width: 90%; border-radius:20px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="https://source.unsplash.com/150x100?warehouse" class="img-fluid mt-3 mb-3 me-5 float-start" alt="warehouse">
                            </div>
                            <div class="col-lg-4">
                                <h5 class="card-title" style="margin-top: 15px; font-weight:400">{{ $dOrder->warehouse->title }}</h5>
                                <small>{{ $dOrder->warehouse->type->type }} <br>Harga: {{ number_format($dOrder->warehouse->harga) }}</small>
                            </div>
                            <div class="col-lg-2 mt-5">
                                <h6 style="font-weight:300">{{ $dOrder->total }} day</h6>
                            </div>
                            <div class="col-lg-2 mt-5">
                                <h6 style="font-weight:300">Rp {{ number_format($dOrder->total_pay) }}</h6>
                            </div>
                            <div class="col-lg-1" style="margin-top: 43px">
                                <form action="/checkout/{{ $dOrder->id }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');"><i class="bi bi-x-circle"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="row" style="margin-top: -325px; margin-left: 1000px">
            <div class="col-lg-4">
                <div class="card position-relative float-right" style="width: 18rem; border-radius:30px; margin-top: -10px">
                    <div class="card-body ">
                        <h5 class="card-title text-center fs-4" style="position: relative; z-index:2;">QR Code</h5>
                        <img src="https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=1" style="margin-left: 5px; margin-top: -32px;" alt="qr.jpg">
                        <h6 class="card-text bold text-center fs-4" style="color: #5C5959; margin-top:-15px; letter-spacing:2px">Rp {{ number_format($order->total_price) }}</h6>
                        <hr>
                        <h6 class="card-title text-center" style="margin-top: 5px; font-weight:600">Support</h6>
                        <p class="card-text mt-1 text-center" style=margin-top:-15px;">BANK - E Money</p>
                    </div>
                    <button class="btn btn-primary" style="border-radius: 30px; margin-top:15px">Confirm</button>
                </div>    
            </div>
        </div>
    

    <div class="row" style="margin-top: 15px ">
        <div class="col-lg-8">
            <div class="card" style="width: 60%; border-radius:20px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href=""><img src="/img/checkout/maps1.jpg" class="mt-1" width="150px" alt=""></a>
                        </div>
                        <div class="col-lg-8" style="margin-top: -15px">
                            <h5 class="card-title" style="margin-top: 15px; font-weight:400">{{ $user->name }}</h5>
                            <p style="font-weight: 200">{{ $user->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@else 
<br><br><br><br><br><br><br>
@endif

    {{-- <img src="https://qrickit.com/api/qr.php?d=http://anyurl&qrsize=150&t=p&e=m"> --}}
    {{-- <img src="https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=1" alt=""> QR --}}

        @if (!empty($order))
        <p align="right" style="margin-top: 1000px">Date:  {{ $order->date }}</p>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Warehouse Name</th>
                    <th>Time Booking</th>
                    <th>Price </th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($detail_order as $dOrder)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $dOrder->warehouse->title }}</td>
                    <td>{{ $dOrder->total }}  Day</td>
                    <td>Rp  {{ number_format($dOrder->warehouse->harga) }}</td>
                    <td>Rp  </td>
                    <td>
                        <form action="/checkout/{{ $dOrder->id }}" method="POST">
                                    @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');"><i class="bi bi-x-circle"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <tr class="mt-3">
                    <td colspan="4" align="right"><strong>Total Pay:  </strong></td>
                    <td a><strong>Rp  {{ number_format($order->total_price) }}</strong></td>
                    <td>
                        <a href="/checkout-confirm" class="btn btn-primary d-line align-right ">  Confirm</a>
                    </td>
                </tr>
            </tbody>
        </table>
        @else 
        {{-- <h3 style="font-weight: 300; margin-top: 200px;" class="text-center">Checkout not yet</h3> --}}
        <br><br><br><br><br><br><br>
        @endif

    </div>
<br><br><br><br><br><br><br><br>

@endsection