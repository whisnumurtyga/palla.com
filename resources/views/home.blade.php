@extends('layouts/main')


@section('container')
    
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <br>
      <h1 class="text-light display-4 thj" style="margin-top: 150px"> Make Your Home  <span>Empty Space</span> <br> to make <span>Profit</span></h1> 
    </div>
</div>

<div class="container ">

  {{-- ADVANTAGE --}}
  <div class="row justify-content-center">
    <div class="col-lg-6 info-panel">
      <div class="row">
        <div class="col-lg">
          <h2><i class="bi bi-clock-history st"></i></h2>
          <h5 class="ms-4">Saving Time</h5>
        </div>
        <div class="col-lg">
          <h2><i class="bi bi-card-checklist  mc"></i></h2>
          <h5 class="ms-3">Many Choice</h5>
        </div>
        <div class="col-lg">
          <h2><i class="bi bi-check2-square et"></i></h2>
          <h5 class="ms-3">Easy Transaction</h5>
        </div>
      </div>
    </div>
  </div>

  {{-- ABOUT US --}}
  <div class="row about">
    <div class="col-lg-6">
      <img src="/img/home/1.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-lg-6">
      <h3><span>Warehouse</span> like a <span>House</span></h3>
      <p class="mt-3">Palla.com merupakan suatu platform dimana anda bisa menyewakan warehouse anda dengan hanya ruang kosong pada rumah anda </p>
      <a href="/dashboard" class="btn btn-warning btn-lg btn-sm tombol mt-3">JOIN WITH US !!</a>
    </div>
  </div>

    {{-- ABOUT US --}}
    <div class="row about">
      <div class="col-lg-6">
        <h3><span>Need</span> a <span>Warehouse ?</span></h3>
        <p class="mt-3">Palla.com merupakan suatu platform dimana anda bisa mencari warehouse pada waktu tertentu atau sementara </p>
        <a href="/warehouses" class="btn btn-warning btn-lg btn-sm tombol mt-3">CHECK NOW !!</a>
      </div>
      <div class="col-lg-6">
        <img src="/img/home/2.jpg" alt="" class="img-fluid">
      </div>
    </div>



  

</div>

<br><br><br><br><br><br><br><br>

@endsection

