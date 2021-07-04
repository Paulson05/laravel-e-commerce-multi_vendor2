<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function getproductcategory(Request $request, $slug){

        $categories = Category::with(['products'])->where('slug', $slug)->first();
//        return $request->all();
        $sort = '';
        if($request->sort  !=null){
            $sort = $request->sort;
        }
        if ($categories==null){
            return view('error404');
        }
        else{
            if ($sort=='priceAsc'){
                $products = Product::where(['status' => 'active', 'cat_id' =>$categories->id])->orderBy('offer_price', 'ASC')->paginate(5);
            }
            elseif ($sort=='priceDesc'){
                $products = Product::where(['status' => 'active', 'cat_id' =>$categories->id])->orderBy('offer_price', 'DESC')->paginate(5);

            }
            elseif ($sort=='DiscAsc'){
                $products = Product::where(['status' => 'active', 'cat_id' =>$categories->id])->orderBy('price', 'ASC')->paginate(5);

            }
            elseif ($sort=='DiscDesc'){
                $products = Product::where(['status' => 'active', 'cat_id' =>$categories->id])->orderBy('price', 'DESC')->paginate(5);

            }
            elseif ($sort=='titleAsc'){
                $products = Product::where(['status' => 'active', 'cat_id' =>$categories->id])->orderBy('title', 'ASC')->paginate(5);

            }
            elseif ($sort=='titleDesc'){
                $products = Product::where(['status' => 'active', 'cat_id' =>$categories->id])->orderBy('title', 'DESC')->paginate(5);
            }
            else{
                $products = Product::where(['status' => 'active', 'cat_id' =>$categories->id])->paginate(5);

            }
        }

        $route = 'product-category';
  if ($request->ajax()){
      $view = view('Frontend.productdetail', compact('products'))->render();
      return  response()->json(['html'=>$view]);
  }

        return view('frontend.productcategory')->with([
            'categories' => $categories,
            'route' => $route
        ]);
    }

    public function productDetail($slug){
        $product = Product::with('rel_prod')->where('slug', $slug)->first();
            if ($product){
                return view('frontend.productdetail')->with([
                    'product' => $product
                ]);
            }
            else{
                return 'product not found';
            }
    }
}
