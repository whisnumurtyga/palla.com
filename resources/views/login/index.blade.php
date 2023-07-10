@extends('layouts/main')

@section('container')
            <br><br><br><br>
            {{-- @if (session()->has('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                
            @endif --}}
    
    
            {{-- @if (session()->has('loginError'))
    
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
            @endif --}}
    
<div class="container ">
    <div class="row ">
        <div class="col-lg-6 ">
            <div class="row justify-content-end ">
                <div class="col-lg-7 log-set">
                    <br><br><br>
                    <main class="form-login">
                        <h1 class="h3 text-center  mb-4 hlg-rg" style="letter-spacing: 4px">MASUK</h1>
                        <form action="/login" method="POST">
                                        @csrf
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                <label for="floatingInput">Email address</label>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-sm btn-warning tombol mt-4 login"  type="submit">Login</button>
                        </form>
                    </main>
                    <small class="d-block text-center mt-3 "><a href="/register" class="btn btn-outline-primary btn-sm text-decoration-none">Register</a> </small>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="img/sign-in/sign.jpeg" class="img-log-reg" height="500px" alt="">
        </div>
    </div>
</div>
    

@endsection