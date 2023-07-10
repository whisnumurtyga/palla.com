@extends('layouts/main')

@section('container')
<br><br><br><br>
<div class="container ">
    <div class="row ">
        <div class="col-lg-6 ">
            <div class="row justify-content-end ">
                <div class="col-lg-7 reg-set">
                    <br><br><br>
                    <main class="form-registration">
                        <h1 class="h3 text-center  mb-4 hlg-rg" >DAFTAR</h1>
                        <form action="/register" method="POST">
                            @csrf
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}" required>
                                    <label for="name">Name</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror 
                                </div>                
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required>
                                    <label for="username">Username</label>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror 
                                </div>
                                <div class="form-floating">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
                                    <label for="floatingInput">Email address</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror 
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror 
                                </div>
                            <button class="w-100 btn btn-lg btn-sm btn-warning tombol mt-4 login"  type="submit">Register</button>
                        </form>
                    </main>
                    <small class="d-block text-center mt-3 "><a href="/login" class="btn btn-outline-primary btn-sm text-decoration-none">Login</a> </small>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="img/sign-in/sign.jpeg" class="img-log-reg" height="500px" alt="">
        </div>
    </div>
</div>
    

@endsection