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
        // dd($request->files);
        // dd($request);
        // $product2 = product2

        // $data->create([
        //         'name' => $request->name,
        //         'price' => $request->price,
        //         'quantity' => $request->quantity,
        //         'description' => $request->description,
        // ]);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $path = "upload/product/";
            $extension = $file->getClientOriginalExtension();
            $filename = $path .time().'.'.$extension;
            $file->move($path,$filename);




            // move();
            // dd($filename);

        }


            product2::create([
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'image'=>$filename
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
       if($request->hasFile('image'))
       {
           $file = $request->file('image');
           $path = "upload/product/";
           $extension = $file->getClientOriginalExtension();
           $filename = $path .time().'.'.$extension;
           $file->move($path,$filename);




           // move();
           // dd($filename);

           $data[0]->update([

                    'name' => $request->name,
                    'price' => $request->price,
                    'quantity' => $request->quantity,
                    'description' => $request->description,
                    'image'=>$filename,
                    'visible'=>$request->visible ? '1' : '0'
                ]);
            }
            $data[0]->update([

                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'visible'=>$request->visible ? '1' : '0'
                //  'image'=>$filename

        ]);
       return redirect('seller/all-products')->with('message','Product Updated Successfully');

        // dd($data);
    }



    public function delete($id)
    {
        $data = product2::findOrFail($id);
        // dd($data);
        $data->delete();
        return redirect('seller/all-products')->with('message','Product Deleted Successfully');


    }
}
