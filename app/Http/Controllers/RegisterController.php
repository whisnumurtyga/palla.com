<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:32',
            'username' => 'required|min:3|max:16|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:32',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);


        User::create($validatedData);

        $request->session()->flash('success', 'Registration Success !');

        return redirect('/login');

        // return back('/login')->with('success', 'Registration successfully !!');
    }


}
