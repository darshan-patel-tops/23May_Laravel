<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view ("login");
    }
    public function login_auth(Request $request)
    {
        // dd($request);
        $request->validate(['email'=>'required','password' =>'required']);

        $credential = $request->only('email','password');

        // dd($credential);
        if(Auth::attempt($credential))
        {
            // dd(Auth::user());
            if(Auth::user()->role_as == 0)
            {

                return redirect('/home')->with('status',"Login Successful");
            }
            else if(Auth::user()->role_as == 1)
            {
                return redirect('/admin')->with('status',"Login Successful");
            }
            else
            {
                return redirect('/home')->with('status',"Login Successful");
            }
                // dd("login success");
        }
        else
        {
            return redirect ('/login')->with('status',"Email Or Password Is Incorrect");
            // dd("inavlaid data");
        }
    }
    public function register()
    {
        return view ("register");
    }
    public function store(Request $request,User $user)
    {
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->password = $request->password;
        $user->save();
        return redirect('/login');
        // dd($request);
        // echo "<pre>";
        // print_r($kishan);
        // echo "inside if";
        // return view ("register");
    }

    public function logout()
    {
        // dd("inside fucntion");
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
