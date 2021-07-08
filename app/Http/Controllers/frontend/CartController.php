<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
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
  public function dashboard(){
        return view('Frontend.cartdashboard');
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
    Cart::instance('shopping')->add($product_id,$product[0]['title'],$product_qty, $price)->assciate('App\Model\Product');

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


//    public function cartUpdate(Request $request){
//        $this->validate($request,[
//            'product_qty' => 'required|numeric',
//        ]);
//        $rowId =$request->input('rowId');
//        $request_quantity= $request->input('product_qty');
//        $productQuantity= $request->input('productQuantity');
//
//        if ($request_quantity>$productQuantity){
//            $message= "we currentyly do not have  enough item in stock";
//            $response['status']=false;
//        }
//        elseif($request_quantity<1){
//            $message= "you can add less than 1 quantity";
//            $response['status']=false;
//        }
//        else{
//            Cart::instance('shopping')->update($rowId, $request_quantity);
//            $message= "quantity was updated successfully";
//            $response['status']=true;
//        }
//
//        if($request->ajax()){
//            $header= view('')->render();
//            $response['header']=$header;
//        }
//        return json_encode($response);
//    }
//
//    public function CouponAdd(Request $request){
//       $coupon = Coupon::where('code', $request->input('code'))->first();
//
//       if (!$coupon){
//           return back()->with('error', 'invalid coupon , plsese enter valid coupon code');
//       }
//        if ($coupon){
//            $total_price= Cart::instance('shopping')->subtotal();
//            session()->put('coupon',[
//                'id'=> $coupon->id,
//                'code,'=> $coupon->code,
//                'value'=> $coupon->discount($total_price),
//            ]);
//            return back()->with('success', 'coupon applied succcesfully');
//
//        }
//    }

}
