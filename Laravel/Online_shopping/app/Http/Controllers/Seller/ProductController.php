<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('seller.product.index');
    }
    public function add()
    {
        return view('seller.product.add');
    }
}
