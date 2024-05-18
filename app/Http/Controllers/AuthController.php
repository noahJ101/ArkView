<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\PageModel;

use App\Mail\RegisterMail;

use App\Mail\ForgotPasswordMail;

use Illuminate\Support\Facades\Hash;

use RealRashid\SweetAlert\Facades\Alert;

use Mail;

use Auth;

use Str;

class AuthController extends Controller
{
    public function login()
    {
        $getPage = PageModel::getSlug('login');
        $data['meta_title'] = !empty($getPage) ? $getPage->meta_title : '';
        $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';
        $data['meta_keywords'] = !empty($getPage) ? $getPage->meta_keywords : '';
        return view('auth.login', $data);
    }

    public function register()
    {
        $getPage = PageModel::getSlug('register');
        $data['meta_title'] = !empty($getPage) ? $getPage->meta_title : '';
        $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';
        $data['meta_keywords'] = !empty($getPage) ? $getPage->meta_keywords : '';
        return view('auth.register', $data);
    }

    public function forgot()
    {
        $getPage = PageModel::getSlug('forgot');
        $data['meta_title'] = !empty($getPage) ? $getPage->meta_title : '';
        $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';
        $data['meta_keywords'] = !empty($getPage) ? $getPage->meta_keywords : '';
        return view('auth.forgot_password', $data);
    }

    public function reset($token)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user))
        {
            $getPage = PageModel::getSlug('reset');
            $data['meta_title'] = !empty($getPage) ? $getPage->meta_title : '';
            $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';
            $data['meta_keywords'] = !empty($getPage) ? $getPage->meta_keywords : '';
            $data['user'] = $user;
        return view('auth.reset', $data);
    }
    else
    {
        abort(404);
    }

}

public function post_reset($token, Request $request)

{
    $user = User::where('remember_token', '=', $token)->first();
    if(!empty($user))
    {
        if($request->password == $request->cpassword)
        {
            $user->password = Hash::make($request->password);
            if(empty($user->email_verified_at))
            {
                $user->email_verified_at = date('Y-m-d H:i:s'); 
            }
           
            $user->remember_token = Str::random(40);
            $user->save();

            return redirect('login')->with('success', "Password successfully reset"); 

        }
        else
        {
            return redirect()->back()->with('error', "Password and Confirm Password does not match"); 
        }
      
}
else
{
    abort(404);
}
}

    public  function forgot_password(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user))
        {

            $user->remember_token = Str::random(40);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->back()->with('success', "Kindly check your email and reset your password");
        }
        else
        {
            return redirect()->back()->with('error', "Email address not found");
        }
    }

    public function auth_login(Request $request)
    {
       $remember = !empty($request->remember) ? true : false;

       if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
       {
        if(!empty(Auth::user()->email_verified_at))
        {
            return redirect('panel/dashboard');
        }
        else
        {
            $user_id = Auth::user()->id;
            Auth::logout();
            $save = User::getSingle($user_id);
            $save->remember_token = Str::random(40);
            $save->save();
            

            Mail::to($save->email)->send(new RegisterMail($save));

           // Alert::success('Please kindly verify your email address, Kindly Verify your Email Address.', 'Account Created Successfully');
    
            return redirect()->back()->with('success', "Kindly Verify your email address");
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
            'password' => 'required',
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

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
    
}
