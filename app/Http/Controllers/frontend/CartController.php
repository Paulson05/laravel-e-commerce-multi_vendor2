<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
//use Gloudemans\Shoppingcart\Cart;
 use Gloudemans\Shoppingcart\Facades\Cart;
//use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('frontend.cart.index');
    }

    public function cartStore(Request $request){
//        dd($request->all());
    $product_qty=$request->input('product_qty');
    $product_id=$request->input('product_id');
    $product=Product::getProductByCart($product_id);
//    return $product;
    $price=$product[0]['offer_price'];
//dd($price);
    $cart_array=[];

    foreach (Cart::instance('shopping')->content()as $item){
        $cart_array[]=$item->id;
    }
    Cart::instance('shopping')->add($product_id,$product[0]['title'],$product_qty, $price);

        $response['status']=true;
        $response['product_id']=$product_id;
        $response['message']="item was added to your cart";
        $response['total']=Cart::subtotal();
        $response['cart_count']=Cart::instance('shopping')->count();
        if ($request->ajax()){
            $nav=view('frontend.layout.partials.navbar')->render();
            $response['nav']=$nav;

        }


           return json_encode($response);
    }


    public function cartDelete(Request $request){

        $id=$request->input('cart_id');
        $result=Cart::instance('shopping')->remove($id);


        if($result){
            $response['status']=true;
            $response['message']="cart successfully deleted";
            $response['total']=Cart::subtotal();
            $response['cart_count']=Cart::instance('shopping')->count();
            if ($request->ajax()){
                $nav=view('frontend.layout.partials.navbar')->render();
                $response['nav']=$nav;

            }

        }
//

        return json_encode($response);
    }


}
