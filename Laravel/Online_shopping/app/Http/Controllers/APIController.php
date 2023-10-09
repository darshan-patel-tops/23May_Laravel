<?php

namespace App\Http\Controllers;

use App\Models\Navabr;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function allusers()
    {
        $user = User::all();
        $navbar = Navabr::all();
        $product = Product::all();
        // dd($user);
        return response()->json(["user"=>$user,"navbar"=>$navbar,"product"=>$product]);
    }
}
