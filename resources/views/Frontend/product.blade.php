<section class="best-selling-products-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading mb-50">
                    <h5>Best Selling Products</h5>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Single Product -->

            <!-- Single Product --> @php
                $new_products = App\Models\Product::where(['status'=>'active', 'conditions'=>'popular'])->OrderBy('id', 'DESC')->limit('10')->get();
            @endphp

            @if(count($new_products)>0)
                @foreach($new_products as $product)
                    @php
                        $photo=explode(',',$product->photo);
                    @endphp
            <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                <div class="single-product-area mb-30">
                    <div class="product_image">
                        <!-- Product Image -->
                        <img class="normal_img" src="{{$photo[0]}}" alt="">

                        <!-- Product Badge -->
                        <div class="product_badge">
                            <span>Top</span>
                        </div>

                        <!-- Wishlist -->
                        <div class="product_wishlist">
                            <a href="javascript:void(0);" class="add_to_wishlist" data-quantity="1" data-id="{{$product->id}}" id="add_to_wishlist_{{$product->id}}"><i class="icofont-heart"></i></a>
                        </div>

                        <!-- Compare -->
                        <div class="product_compare">
                            <a href="compare.html"><i class="icofont-exchange"></i></a>
                        </div>
                    </div>

                    <!-- Product Description -->
                    <div class="product_description">
                        <!-- Add to cart -->

                        <div class="product_add_to_cart">
                            <a href=""  data-quantity="1" data-product-id="{{$product->id}}" class="add_to_cart" id="add_to_cart{{$product->id}}">
                                <i class="fa fa-cart-arrow-down">add to cart</i>

                            </a>
                        </div>
                        <!-- Quick View -->
                        <div class="product_quick_view">
                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                        </div>

                        <a href="{{route('productdetail',$product->slug)}}">{{$product->title}}</a>
                        <h6 class="product-price">${{$product->price}}</h6>
                        <h4>Save${{$product->discount}}</h4>
                    </div>
                </div>
            </div>


                @endforeach
            @endif


        </div>
    </div>
</section>
@section('script')
    <script>
        $(document).on('click','.add_to_cart', function (e){
            e.preventDefault();
            var product_id=$(this).data('product-id');
            var product_qty=$(this).data('quantity');

            var token= "{{csrf_token()}}";
            var path = "{{route('cart.store')}}";

            $.ajax({
                url:path,
                type:"POST",
                datatype:"JSON",
                data:{
                    product_id:product_id,
                    product_qty:product_qty,
                    _token:token,
                },

                beforeSend:function (){
                    $('#add_to_cart'+product_id).html('<i class="fa fa-spinner fa-spin btn btn-secondary"></i> loading....');
                },
                complete:function (){
                    $('#add_to_cart'+product_id).html('<i class="fa fa-cart-plus btn btn-danger"></i> Added to cart');

                },

                success:function (data){
                    // console.log(data);



                    if (data['status']){
                        $('body #nav-ajax').html(data['nav']);
                        $('body #nav-counter').html(data['cart_counter']);
                        swal({
                            title: "Good job!",
                            text: data['message'],
                            icon: "success",
                            button: "ok",
                        });
                    }

                },
                error:function (err){
                    console.log(err);
                }

            });
        });
    </script>
    <script>
        $(document).on('click','.add_to_wishlist', function (e){
            e.preventDefault();
            var product_id=$(this).data('product-id');
            var product_qty=$(this).data('quantity');

            var token= "{{csrf_token()}}";
            var path = "{{route('whishlist.store')}}";

            $.ajax({
                url:path,
                type:"POST",
                datatype:"JSON",
                data:{
                    product_id:product_id,
                    product_qty:product_qty,
                    _token:token,
                },

                beforeSend:function (){
                    $('#add_to_wishlist'+product_id).html('<i class="fa fa-spinner fa-spin btn btn-secondary"></i>');
                },
                complete:function (){
                    $('#add_to_wishlist_'+product_id).html('<i class="fa fa-heart btn btn-danger"></i> Added to cart');

                },

                success:function (data){
                    // console.log(data);



                    if (data['status']){
                        $('body #nav-ajax').html(data['nav']);
                        $('body #nav-counter').html(data['cart_counter']);
                        swal({
                            title: "Good job!",
                            text: data['message'],
                            icon: "success",
                            button: "ok",
                        });
                    }

                },
                error:function (err){
                    console.log(err);
                }

            });
        });
    </script>
@endsection
