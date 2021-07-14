<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
     $categories = Category::where(['status'=>'active', 'is_parent'=>1])->limit(3)->orderBy('id', 'Desc')->get();
        return view('Frontend.index')->with([
            'categories' => $categories
        ]);
    }

    public function shop( Request $request){

        $products = Product::query();

        if(!empty($_GET['category'])){
            $slugs=explode(',',$_GET['category']);
            $cat_ids= Category::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            $products = $products->whereIn('cat_id', $cat_ids);

        }



        if(!empty($_GET['sortBy'])){

            if ($_GET['sortBy'] == 'priceASC'){
                $products = $products->where(['status' => 'active'])->orderBy('offer_price', 'ASC')->paginate(10);

            }
            if ($_GET['sortBy'] =='priceDesc'){
                $products = $products->where(['status' => 'active'])->orderBy('offer_price', 'DESC')->paginate(10);

            }
            if ($_GET['sortBy']=='DiscAsc'){
                $products = $products->where(['status' => 'active'])->orderBy('price', 'ASC')->paginate(10);

            }
            if ($_GET['sortBy'] =='DiscDesc'){
                $products = $products->where(['status' => 'active'])->orderBy('price', 'DESC')->paginate(10);

            }
            if ($_GET['sortBy'] =='titleAsc'){
                $products = $products->where(['status' => 'active'])->orderBy('title', 'ASC')->paginate(10);

            }
            if ($_GET['sortBy'] =='titleDesc')
            {
                $products = $products->where(['status' => 'active'])->orderBy('title', 'DESC')->paginate(10);
            }


        }
        if(!empty($_GET['price'])){
            $price=  explode('_',$_GET['price']);
            dd($price);
            $price[0]= floor($price[0]);
            $price[1]= ceil($price[1]);
            $products->whereBetween('offer_price', $price);

        }
        else{
            $products = $products->where('status','active')->paginate(10);

        }


//        $products = $products->where('status','active')->paginate(10);



        $cats = Category::where(['status'=>'active', 'is_parent'=>1])->with('products')->orderBy('title','ASC')->get();
        $brands = Brand::where(['status'=> 'active'])->with('products')->get();
        return view('Frontend.shop')->with([
            'products' => $products,
            'cats'=> $cats,
            'brands'=> $brands
        ]);
    }

    public function shopFilter(Request  $request){
//         dd($request->all());

        // CATEGORY FILTER
        $data = $request->all();

        $catUrl='';
        if(!empty($data['category'])){
            foreach ($data['category'] as $category){
                if (empty($catUrl)){
                    $catUrl .='&category='.$category;
                }
                else{
                    $catUrl .=','.$category;
                }
            }
        }
        // SORT FILTER
        $sortByUrl = "";
        if(!empty($data['sortBy'])){
//            $sort = $_GET['sortBy'];
            $sortByUrl .='&sortBy='.$data['sortBy'];

        }
        // price filter

        $price_range_url= "";

        if(!empty($data['price_range'])){
            $price_range_url .= '$price='.$data['price_range'];

        }


        return \redirect()->route('shop', $catUrl.$sortByUrl.$price_range_url);
    }
    public function auth(){
        return view('Frontend.auth.auth');
    }
    public function dashboard(){
         return view('Frontend.userdashboard.dashboard');
     }
    public function address(){
        return view('Frontend.userdashboard.address');
    }
    public function accountdetails(){
        return view('Frontend.userdashboard.accountdetail');
    }
    public function order(){
        return view('Frontend.userdashboard.order');
    }
}
