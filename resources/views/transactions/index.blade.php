@extends('layouts/main')


@section('container')
    
<h1 class="text-center mb-5">Transaction History</h1>

<div class="container">
  {{-- <div class="row"> --}}
    <div class="col-lg-12">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Date</th>
            <th>Status</th>
            <th>Total Pay</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
          <?php $no = 1; ?>
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $order->date }}</td>
            <td>
              @if ($order->status == 1)
                  <button class="btn btn-outline-success btn-sm">Sudah dibayar </button> 
              @else
                  <a href="/checkout"><button class="btn btn-outline-danger btn-sm">Menunggu pembayaran </button></a> 
              @endif
            </td>
            <td>Rp  {{ number_format($order->total_price) }}</td>
            <td>
              <a href="/transaction/{{ $order->id }}" class="btn btn-primary btn-sm"><i class="bi bi-info-circle"></i> </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>  
      
    </div>  
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>


@endsection

