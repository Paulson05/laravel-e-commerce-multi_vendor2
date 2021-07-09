@extends('Frontend.template.default')
@section('content')
    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Cart</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Cart Area -->
    <div class="cart_area section_padding_100_70 clearfix">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12">
                    <div class="cart-table">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-30">
                                <thead>
                                <tr>
                                    <th scope="col"><i class="icofont-ui-delete"></i></th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
                                <tr>
                                    <th scope="row">
                                        <i class="icofont-close"></i>
                                    </th>
                                    <td>
                                        <img src="img/product-img/onsale-1.png" alt="Product">
                                    </td>
                                    <td>
                                        <a href="#">{{$item->title}}</a>
                                    </td>
                                    <td>${{$item->price}}</td>
                                    <td>
                                        <div class="quantity">
                                            <input type="number" class="qty-text" data-id="{{$item->rowId}}" id="qty-input-{{$item->rowId}}" step="1" min="1" max="99" name="quantity" value="{{$item->qty}}">
                                            <input type="hidden"  data-id="{{$item->rowId}}"  data-product-quantity="{{$item->stock}}" id="update-cart-{{$item->rowId}}">

                                        </div>
                                    </td>
                                    <td>${{$item->price}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="cart-apply-coupon mb-30">
                        <h6>Have a Coupon?</h6>
                        <p>Enter your coupon code here &amp; get awesome discounts!</p>
                        <!-- Form -->
                        <div class="coupon-form">
                            <form action="{{route('coupon.add')}}" method="POST" id="coupon-form">
                                $csrf
                                <input type="text" class="form-control" name="code" placeholder="Enter Your Coupon Code">
                                <button type="submit" class="coupon-btn btn btn-primary">Apply Coupon</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="cart-total-area mb-30">
                        <h5 class="mb-3">Cart Totals</h5>
                        <div class="table-responsive">
                            <table class="table mb-3">
                                <tbody>
                                <tr>
                                    <td>Sub Total</td>
                                    <td{{(Cart::subtotal())}}</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>$10.00</td>
                                </tr>
                                <tr>
                                    <td>VAT (10%)</td>
                                    <td>$5.60</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>${{(Cart::subtotal())}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{route('checkoutbilling')}}" class="btn btn-primary d-block">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('script')
    <script>
        $(document).on('click', '.coupon-btn', function (e){
            e.preventDefault();
            var code = $('input[name=code]').val();
            $('.coupon-btn').html('<i class= "fa fa-spinner ta-spin"></i> applying...');
            $('#coupon-form').submit();
        })
    </script>
 <script>
     $(document).on('click','.qty-text', function (){
         var id = $(this).data('id');

         var spinner =$(this),input=spinner.closest("div.quantity").find('input[type="number"]');

         // alert(input.val());
         // alert(id);
$
         if (input.val()==1){
           return false;
       }
       if (input.val()!=1){
           var newVal = parseFloat(input.val());
           $('#qty-input-'+id).val(newVal);
       }

       var  productQuantity= $("#update-cart-"+id).data('product-quantity');
       alert(productQuantity);
       update_car(id,productQuantity)
     });
     function update_cart(id,productQuantity){
         var rowId = id;
         var product_qty= $('#qty-input-'+rowId).val();
         var token="{{csrf_token()}}";
         var path= "route('cart.update')";

         $.ajax({
             url:path,
             type:"POST",
             data:{
                 _token:token,
                 product_qty:product_qty,
                 rowId:rowId,
                 productQuantity:productQuantity,
             },
             success:function (data){
                 console.log(data);
                 if (data['status']){

                 }
             }
         })
     }
 </script>
    @endsection
