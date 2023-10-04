<?php

namespace App\Http\Controllers;

use App\Models\Navabr;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //Eloquent ORM
        $navbar = Navabr::all();
        // dd($data);



        return view('home',compact('navbar'));
    }
}
