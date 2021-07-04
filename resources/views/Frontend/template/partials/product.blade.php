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
                            <a href="wishlist.html"><i class="icofont-heart"></i></a>
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
                            <a href="#"><i class="icofont-cart"></i> Add to Cart</a>
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