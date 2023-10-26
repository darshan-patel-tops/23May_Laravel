<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\product2;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // $products = product2::where('visible',true)->get();
        $products = product2::all();
        // dd($products);
        return view('seller.product.index',compact('products'));
    }
    public function add()
    {
        return view('seller.product.add');
    }
    public function store(Request $request,product2 $data)
    {
        // dd($request->name);
        // dd($request);
        // $product2 = product2

        // $data->create([
        //         'name' => $request->name,
        //         'price' => $request->price,
        //         'quantity' => $request->quantity,
        //         'description' => $request->description,
        // ]);
            product2::create([
                             'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,
            ]);






            return redirect('seller/all-products')->with('message','Product Added Successfully');
        // dd("inside function");
    }

    public function update($id)
    {
        // product2::where('id','=',$id)->get();
        $data = product2::where('id',$id)->get();
        return view('seller.product.update',compact('data'));
        // dd($data);
    }
    public function update_change($id,Request $request)
    {
        // dd($request);
       $data =  product2::where('id','=',$id)->get();
       $data[0]->update([

'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,


       ]);
       return redirect('seller/all-products')->with('message','Product Updated Successfully');

        // dd($data);
    }
}
