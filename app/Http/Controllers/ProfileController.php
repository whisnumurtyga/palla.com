<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('profile/index', compact('user'),[
            'title' => 'Profile',
            'active' => 'profile',
        ]);
    }

    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'password' => 'confirmed',
        // ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if(!empty($request->password))
        {
            $user->password = \Illuminate\Support\Facades\Hash::make($request->password);
        }

        $user->update();

        Alert::success('Profile has been updated', 'Success');
        return redirect('/profile');

    }
}
