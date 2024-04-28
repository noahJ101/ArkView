<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Mail\RegisterMail;

use Illuminate\Support\Facades\Hash;

use RealRashid\SweetAlert\Facades\Alert;

use Mail;

use Auth;

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

    public function forgot()
    {
        return view('auth.forgot_password');
    }

    public function auth_login(Request $request)
    {
       $remember = !empty($request->remember) ? true : false;

       if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
       {
        if(!empty(Auth::user()->email_verified_at))
        {
            echo "successfully";
            die;
        }
        else
        {
            $save = User::getSingle(Auth::user()->email_verified_at);
            $save->remember_token = Str::random(40);
            $save->save();

            Mail::to($save->email)->send(new RegisterMail($save));

            Alert::success('Account Created Successfully, Kindly Verify your Email Address.', 'Account Created Successfully');
    
            return redirect('login'); //->with('success', "Your account has been Registered Successfully");
        }
       }
       else
       {
            return redirect()->back()->with('error', "Invalid credentials. Please enter correct email and password");
       }
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

        Alert::success('Account Created Successfully, Kindly Verify your Email Address.', 'Account Created Successfully');

        return redirect('login'); //->with('success', "Your account has been Registered Successfully");

        //sweet alert confirmation
        // onclick="confirmation(event)"
    }

    public function verify($token)
    {
       $user = User::where('remember_token', '=', $token)->first();
       if(!empty($user))
       {
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->remember_token = Str::random(40);
        $user->save();
        Alert::success('Your Account Successfully Verified.', 'Account Created Successfully');
        return redirect('login');
       } 
       else
       {
        abort(404);
       }
    }
    
}
