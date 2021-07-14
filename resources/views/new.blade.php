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
            $products = $products->whereIn('cat_id', $cat_ids)->paginate(10);

        }
        $sort = $_GET['sortBy'];
        if(!empty($_GET['sortBy'])){


            if ($sort=='priceASC'){
                $products = Product::where('status', 'active')->orderBy('offer_price', 'ASC');

            }
            elseif ($sort=='priceDesc'){
                $products = Product::where(['status' => 'active')->orderBy('offer_price', 'DESC');

            }
            elseif ($sort=='DiscAsc'){
                $products = Product::where(['status' => 'active')->orderBy('price', 'ASC');

            }
            elseif ($sort=='DiscDesc'){
                $products = Product::where(['status' => 'active')->orderBy('price', 'DESC';

            }
            elseif ($sort=='titleAsc'){
                $products = Product::where(['status' => 'active')->orderBy('title', 'ASC');

            }
            elseif ($sort=='titleDesc'){
                $products = Product::where(['status' => 'active'])->orderBy('title', 'DESC');
            }
            else{
                $products = Product::where(['status' => 'active', 'cat_id' =>$products->id])->paginate(20);

            }
        }



        if(!empty($_GET['price_range'])){
            $price= explode('_', $_GET['price_range']);
//           $price[0]= floor($price[0]);
//           $price[1]=ceil($price[1]);
//           $products->whereBetween('offer_price', $price);
            if (isset($price[0]) && is_numeric($price[0])) $price[0] = floor($price[0]);
        }

        $price= explode('_', $_GET['price_range']);
        $price[0]= floor($price[0]);
        $price[1]=ceil($price[1]);
        $products->whereBetween('offer_price', $price);


        $products = Product::where('status', 'active')->paginate(10);
        $cats = Category::where(['status'=>'active', 'is_parent'=>1])->with('products')->orderBy('title','ASC')->get();

        return view('Frontend.shop')->with([
            'products' => $products,
            'cats'=> $cats,
        ]);
    }

    public function shopFilter(Request  $request){

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
        return \redirect()->route('shop', $catUrl);
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






<script>
$(document).ready(function (){
    if ($('$slider-range').length > 0){
        const max_value = parseInt($('#slider-range').data('max')) || 500;
        alert(max_value);
        const min_value = parseInt($('#slider-range').data('min')) || 0;
        const  currency = $("#slider-range").data('currency') || '';
        let price_range = min_value+'-'+max_value;
                // alert(max_value);

                if ($('#price_range').length > 0 && $("#price_range").val()){
                    price_range = $("#price_range").val().trim();
                }
               let price = price_range.split('_');

                $('#slider-range').slider({
                    range:true,
                    min:min_value,
                    max:max_value,
                    value:price,
                    slide:function (event, ui){
            $('#amount').val(ui.value[0])
                    }
                });
            }
});

</script>
