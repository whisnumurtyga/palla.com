@extends('layouts/main')

@section('container')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 ">
                <h4 class="text-center mt-2" style="color: #5C5959;">{{ $user->username }}'s  account</h4>
                <img src="img/sign-in/person.png" width="200px" class="center" style="margin-top: 0px" alt="">
                <div class="row">
                    <h5 class="text-center" style="letter-spacing: 2px"><i class="bi bi-wallet2 me-2"></i>1.920.000 </h5>
                    <a href="" class="btn btn-warning btn-sm col-lg-2" style="border-radius: 30px; margin-left: 180px;">Topup</a>
                </div>
            </div>
            <div class="col-lg-8">
                <h2 style="" class="hlg-rg"><i class="bi bi-pencil ms-2"></i> Edit Profile </h2>
                <form action="/profile" method="POST">
                    @csrf
                        <div class="col-lg mt-4">
                            <main class="form-edit">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-edit form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ $user->name }}" required>
                                        <label for="name">Name</label>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror 
                                    <div class="form-floating">
                                        <input type="email" class="form-edit form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" required value="{{ $user->email }}">
                                        <label for="floatingInput">Email address</label>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror 
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-edit form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Adress" required value="{{ $user->address }}">
                                        <label for="address">Adress</label>
                                        @error('addresss')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror 
                                    </div>
                                    </div>               
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-edit form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ $user->username }}" required>
                                        <label for="username">Username</label>
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror 
                                        <div class="form-floating">
                                            <input type="number" class="form-edit form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="phone" required value="{{ $user->phone }}">
                                            <label for="phone">Phone</label>
                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror 
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" class="form-edit form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" >
                                            <label for="floatingPassword">Password</label>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror 
                                        </div>
                                    </div>
                                </div>
                            </div>


                            </div>
                            <div class="col-lg-4">
                                <button class="pull-right btn-lg  btn btn-primary " style="margin-top: 30px; margin-left: 770px; border-radius:30px" type="submit">Save </button>
                            </div>
                            </form>
                        </main>
            </div>
        </div>
    </div>
    
{{-- <div class="container" style="margin-top: 1000px">
    <h1 class="mt-3"><i class="bi bi-person"></i>  My Profile</h1>
    <div class="col-lg-8">
        <table class="table mt-4">
            <tbody>
                <tr>
                    <td>Name </td>
                    <td> : </td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Username </td>
                    <td> : </td>
                    <td>{{ $user->username }}</td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td> : </td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Address </td>
                    <td> : </td>
                    <td>{{ $user->address }}</td>
                </tr>
                <tr>
                    <td>Phone </td>
                    <td> : </td>
                    <td>{{ $user->phone }}</td>
                </tr>
            </tbody>
        </table>
    </div>
                <br><br><br>
    <h1 class="mt-3"><i class="bi bi-pencil"></i>  Edit Profile</h1>
    <form action="/profile" method="POST">
        @csrf
            <div class="col-lg-6 mt-4">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ $user->name }}" required>
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror 
                </div>                
                <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ $user->username }}" required>
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror 
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" required value="{{ $user->email }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror 
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Adress" required value="{{ $user->address }}">
                    <label for="address">Adress</label>
                    @error('addresss')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror 
                </div>
                <div class="form-floating">
                    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="phone" required value="{{ $user->phone }}">
                    <label for="phone">Phone</label>
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror 
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" >
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror 
                </div>
            </div>
            <div class="col-lg-1">
                <button class="w-100 btn btn-lg btn-primary mt-4 " type="submit">Save</button>
            </div>
            </form> --}}
            <br><br><br>
    </div>
@endsection