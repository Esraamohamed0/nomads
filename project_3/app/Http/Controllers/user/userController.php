<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function register()
    {

        return view('auth.registerUser');
    }

    public function storeUser(Request $request)
    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'gender' => 'required|string|max:255',
//            'phone' => 'required|string|max:11',
//            'idNumber' => 'required|string|max:14',
//            'city' => 'required|string|max:20',
//            'birthday' =>'required|string|max:20',
//            'password' => 'required|string|min:8|confirmed',
//            'password_confirmation' => 'required',
//        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'birthday' =>$request->birthday,
            'password' => Hash::make($request->password),

        ]);
        return redirect('home');

    }
}
