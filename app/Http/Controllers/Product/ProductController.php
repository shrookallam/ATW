<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Data = Product::get();
        return view('back.products.products', compact('Data'));
    }
 
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.Products.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request)
    {
        
        $Product = new Product();
        $Product->name = $request->name;
        $Product->price = $request->price;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . rand(11111, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/products'), $fileName);
            $Product->image = $fileName;
        }

        $Product->save();
        return redirect()->back();
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Product = Product::find($id);
        return view('back.Products.update', compact('Product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function Update(Request $request ,$id)
    {
        $Product = Product::find($id);
        $Product->name = $request->name;
        $Product->price = $request->price;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . rand(11111, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/products'), $fileName);
            $Product->image = $fileName;
        }
        $Product->update();
        return redirect()->back();
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }

}
