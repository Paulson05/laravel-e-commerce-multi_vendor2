@extends('Frontend.template.default')
@section('title', '| Shoppage')
@section('content')
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Shop Grid</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                        <li class="breadcrumb-item active">Shop Grid</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <section class="shop_grid_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 col-md-4 col-lg-3">
                    <form action="{{route('shop.filter')}}" method="post">
                        @csrf
                        <div class="shop_sidebar_area">

                            <!-- Single Widget -->
                            <div class="widget catagory mb-30">
                                <h6 class="widget-title">Product Categories</h6>
                                <div class="widget-desc">
                                    <!-- Single Checkbox -->
                                    @if(count($cats)>0)

                                        @foreach($cats as $item)
                                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                                <input type="checkbox" class="custom-control-input" id="{{$item->slug}}" name="category[]" onchange="this.form.submit();" value="{{$item->slug}}">
                                                <label class="custom-control-label" for="{{$item->slug}}">{{$item->title}}<span class="text-muted">({{count($item->products)}})</span></label>
                                            </div>
                                        @endforeach
                                    @else
                                        <p class="text-center">products categories not found</p>
                                    @endif
                                </div>
                            </div>

                            <!-- Single Widget -->
                            <div class="widget price mb-30">
                                <h6 class="widget-title">Filter by Price</h6>
                                <div class="widget-desc">
                                    <div class="slider-range">
                                        <div data-min="0" data-max="1350" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="1350" data-label-result="Price:">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range-price">Price: 0 - 1350</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Widget -->
                            <div class="widget color mb-30">
                                <h6 class="widget-title">Filter by Color</h6>
                                <div class="widget-desc">
                                    <!-- Single Checkbox -->
                                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label black" for="customCheck6">Black <span class="text-muted">(9)</span></label>
                                    </div>
                                    <!-- Single Checkbox -->
                                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                                        <label class="custom-control-label pink" for="customCheck7">Pink <span class="text-muted">(6)</span></label>
                                    </div>
                                    <!-- Single Checkbox -->
                                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                                        <label class="custom-control-label red" for="customCheck8">Red <span class="text-muted">(8)</span></label>
                                    </div>
                                    <!-- Single Checkbox -->
                                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                                        <label class="custom-control-label purple" for="customCheck9">Purple <span class="text-muted">(4)</span></label>
                                    </div>
                                    <!-- Single Checkbox -->
                                    <div class="custom-control custom-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                                        <label class="custom-control-label orange" for="customCheck10">Orange <span class="text-muted">(7)</span></label>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Widget -->
                            <div class="widget brands mb-30">
                                <h6 class="widget-title">Filter by brands</h6>
                                <div class="widget-desc">
                                    <!-- Single Checkbox -->
                                    {{--                                @if(count($brands)>0)--}}
                                    {{--                                    @foreach($brands as $brand)--}}
                                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                                        <label class="custom-control-label" for="customCheck11">brand<span class="text-muted"></span>(24)</label>
                                    </div>
                                    {{--                                    @endforeach--}}
                                    {{--                                @else--}}
                                    <p class="text-center">brands not found</p>
                                    {{--                                    @endif--}}
                                </div>
                            </div>

                            <!-- Single Widget -->
                            <div class="widget rating mb-30">
                                <h6 class="widget-title">Average Rating</h6>
                                <div class="widget-desc">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span class="text-muted">(103)</span></a></li>

                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(78)</span></a></li>

                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(47)</span></a></li>

                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(9)</span></a></li>

                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(3)</span></a></li>
                                    </ul>
                                </div>

                            </div>

                            <!-- Single Widget -->
                            <div class="widget size mb-30">
                                <h6 class="widget-title">Filter by Size</h6>
                                <div class="widget-desc">
                                    <ul>
                                        <li><a href="#">XS</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-12 col-sm-7 col-md-8 col-lg-9">
                    <!-- Shop Top Sidebar -->
                    <div class="shop_top_sidebar_area d-flex flex-wrap align-items-center justify-content-between">

                        <div class="view_area d-flex">
                            <div class="grid_view">
                                <a href="shop-grid-left-sidebar.html" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="icofont-layout"></i></a>
                            </div>
                            <div class="list_view ml-3">
                                <a href="shop-list-left-sidebar.html" data-toggle="tooltip" data-placement="top" title="List View"><i class="icofont-listine-dots"></i></a>

                            </div>
                            <div class="list_view ml-3">
                                <p>Total product :{{$products->total()}}</p>
                            </div>
                        </div>

                        <select class="small right">
                            <option selected>Short by Popularity</option>
                            <option value="1">Short by Newest</option>
                            <option value="2">Short by Sales</option>
                            <option value="3">Short by Ratings</option>
                        </select>

                    </div>

                    <div class="shop_grid_product_area">

                        <div class="row justify-content-center">
                            @if(count($products)>0)
                            <!-- Single Product -->
                            @foreach($products as $item)
                            <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                                <div class="single-product-area mb-30">
                                    <div class="product_image">
                                        <!-- Product Image -->
                                        <img class="normal_img" src="{{$item->photo}}" alt="">
                                        <img class="hover_img" src="img/product-img/new-9-back.png" alt="">

                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span>{{$item->conditions}}</span>
                                        </div>

                                        <!-- Wishlist -->
                                        <div class="product_wishlist">
                                            <a href="javascript:void(0);" class="add_to_wishlist" data-quantity="1" data-id="{{$item->id}}" id="add_to_wishlist_{{$item->id}}"><i class="icofont-heart"></i></a>
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
                                            <a href=""  data-quantity="1" data-product-id="{{$item->id}}" class="add_to_cart" id="add_to_cart{{$item->id}}">
                                                <i class="fa fa-cart-arrow-down">add to cart</i>

                                            </a>
                                        </div>

                                        <!-- Quick View -->
                                        <div class="product_quick_view">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                                        </div>

                                        <p class="brand_name">{{App\Models\Brand::where('id', $item->brand_id)->value('title')}}</p>
                                        <a href="#">{{$item->title}}</a>
                                        <h6 class="product-price">${{$item->price}}</h6>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                                @else

                                <p class="container text-center">product not found</p>
                            @endif

                        </div>
                    </div>

                    <!-- Shop Pagination Area -->
                  {{$products->links('vendor.pagination.custom')}}

                </div>
            </div>
        </div>
    </section>
@endsection
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
