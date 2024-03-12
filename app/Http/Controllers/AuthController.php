<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Mail\RegisterMail;

use Illuminate\Support\Facades\Hash;

use RealRashid\SweetAlert\Facades\Alert;

use Mail;

use Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function forgot_password()
    {
        return view('auth.forgot_password');
    }

    public function create_user(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->remember_token = Str::random(40);
        $save->save();

        Mail::to($save->email)->send(new RegisterMail($save));

        Alert::success('Account Created Successfully', 'Account Created Successfully');

        return redirect('login'); //->with('success', "Your account has been Registered Successfully");

        //sweet alert confirmation
        // onclick="confirmation(event)"
    }
    
}
