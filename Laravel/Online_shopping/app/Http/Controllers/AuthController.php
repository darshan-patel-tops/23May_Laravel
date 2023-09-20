<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view ("login");
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
}
