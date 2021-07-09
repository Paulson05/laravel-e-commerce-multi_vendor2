@extends('Frontend.template.default')
@section('content')
    <div class="wishlist-table section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table wishlist-table">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-30">
                                <thead>
                                <tr>
                                    <th scope="col"><i class="icofont-ui-delete"></i></th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col"></th>
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
                                            </div>
                                        </td>

                                        <td><a href="#" class="btn btn-primary btn-sm">Add to Cart</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="cart-footer text-right">
                        <div class="back-to-shop">
                            <a href="#" class="btn btn-primary">Add All Item</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


@section('script')
    <script>
        $('.move-to-cart').on('click',function (e){
            e.preventDefault();
            var rowId= $($this).data('id');
            var token = "{{csrf_token()}}";
            var path = "{{route('whishlist.movetocart')}}"

            $.ajax({
                url:path,
                type:"POSt",
                data:{
                    _token:token,
                    rowId:rowId,
                },
                beforeSend:function () {
                    $($this).html('<i class="fas fa-spinner"></i> moving to cart..')
                },
                complete:function () {
                    $($this).html('<i class="fas fa-spinner"></i> moving to cart..')
                }
            })
        })
    </script>
@endsection
