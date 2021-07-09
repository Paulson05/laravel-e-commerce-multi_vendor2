<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class WhishlistController extends Controller
{
  public function  index(){
      return view('Frontend.whishlist');
  }
public function whishlistStore(Request $request){

    $product_id= $request->input('product_id');
    $product_qty= $request->input('product_qty');
    $product = Product::getProductByCart($product_id);
    $price =$product[0]['offer_price'];
    $whishlist_array=[];

    foreach ( Cart::instance('whistlist')->content() as $item){
        $whishlist_array[] = $item->id;
    }

    if (in_array($product_id,$whishlist_array)){
        $response['present']="item is already in whishlist";
    }
    else{
        $result=Cart::instance('whistlist')->add($product_id,$product[0]['title'], $product_qty, $price)->assciate('App\Models\Product');
       if ($result){
           $response['status']=true;
           $response['message']="item has been save to whishlist";
           $response['whislist']=Cart::instance('whislist')->count();
       }
       return json_encode($response);
    }



}
public function moveToCart(Request $request){
$item = Cart::instance('whishlist')->remove($request->input('rowId'));
Cart::instance('whishlist')->remove($request->input(rowId));
$result = Cart::instance('shopping')->add($item->id, $item->name,1,$item->price)->associate();
    if ($result){
        $response['status']=true;
        $response['message']="item has been move to cart";
        $response['cart_count']=Cart::instance('shopping')->count();
    }
    if($request->ajax()){
        $whishlist= view('Frontend.whishlist');
    }

    return json_encode($response);
}

}
