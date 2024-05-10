<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class UserController extends Controller
{
    public function user()
    {
        $data['getRecord'] = User::getRecordUser();
        return view('backend.user.list', $data);
    }

    public function add_user(Request $request)
    {
        return view('backend.user.add');
    }

    public function insert_user(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->status= trim($request->status);
        $save->save();

        return redirect('panel/user/list')->with('success', "User Successfully Created");
    }

    public function edit_user($id)
    {
        $data['getRecord'] = User::getSingle($id);
        return view('backend.user.edit', $data);
    }

    public function update_user($id, Request $request)
    {
        $save = User::getSingle($id);
        $save->name = trim($request->name);
        $save->email = trim($request->email);

        if(!empty($request->password))
        {
            $save->password = Hash::make($request->password);
        }
        
        $save->status= trim($request->status);
        $save->save();

        return redirect('panel/user/list')->with('success', "User Successfully Updated");
    }

    public function delete_user($id)
    {
        $save = User::getSingle($id);

        // Check if the user exists
    if ($save) {
        // Delete the user
        $save->delete();

        return redirect('panel/user/list')->with('success', "User deleted successfully");
    } 
    else {
        return "User not found";
    }
    }
}
