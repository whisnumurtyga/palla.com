@extends('layouts/main')

@section('container')
    
<div class="container ">
        <h1 class="mt-5 text-center">Detail Pemesanan</h1>
</div>
    
@if (!empty($order))          
<div class="container">
    <button class="btn btn-warning btn-sm"  style="border-radius: 30px;">
        <a href="/transactions" class="text-decoration-none" style="color: black; "><i class="bi bi-arrow-left"></i> Back </a>
    </button>
</div>
<div class="col-lg-12  justify-content-center" style="margin-bottom: 200px">
    <p align="right">Date:  {{ $order->date }}</p>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Warehouse Name</th>
                <th>Time Booking</th>
                <th>Price </th>
                <th>Total Pay</th>
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
                <td>Rp  {{ number_format($dOrder->total_pay) }}</td>
            </tr>
            @endforeach
            <tr class="mt-3">
                <td colspan="4" align="right"><strong>Total Pay:  </strong></td>
                <td a><strong>Rp  {{ number_format($order->total_price) }}</strong></td>
            </tr>
        </tbody>
    </table>
</div>
@endif



@endsection