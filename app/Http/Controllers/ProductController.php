<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index')->with([
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());

        $this->validate($request,[
            'title' => 'string|required',
            'slug'=> 'string|required',
            'photo'=> 'nullable',
            'status'=> 'nullable|in:active, inactive',
            'stock' => 'nullable|numeric',
            'description' => 'string|required',
            'summary' => 'required',
            'size' => 'nullable',
            'price'=> 'nullable|numeric',
            'offer_price'=> 'required',
            'discount'=> 'nullable|numeric',
            'cat_id' => 'required',
            'child_cat_id' => 'nullable',
            'brand_id' => 'required',
            'conditions' => 'nullable',


        ]);

        $data = $request->all();
        $slug=Str::slug($request->input('title'));
        $slug_count=Product::where('slug', $slug)->count();
        if ($slug_count>0){
            $slug = time(). '_'.$slug;
        }
        $data['slug']=$slug;
        $data['offer_price']=($request->price-($request->price*$request->discount)/100);
       $status =Product::create($data);
       if ($status){
           return redirect()->route('product.index');

       }
       else{
           return redirect()->back();
       }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
