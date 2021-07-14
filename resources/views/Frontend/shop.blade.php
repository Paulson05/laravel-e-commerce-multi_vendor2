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
            <form action="{{route('shop.filter')}}" method="post">
                @csrf
            <div class="row">


                        <div class="col-12 col-sm-5 col-md-4 col-lg-3">


                                <div class="shop_sidebar_area">

                                    <!-- Single Widget -->
                                    <div class="widget catagory mb-30">
                                        <h6 class="widget-title">Product Categories</h6>
                                        <div class="widget-desc">
                                            <!-- Single Checkbox -->
                                            @if(!empty($_GET['category']))
                                                @php
                                            $filter_cats= explode(',',$_GET['category'])
                                                @endphp
                                            @endif
                                            @if(count($cats)>0)

                                                @foreach($cats as $item)
                                                    <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                                        <input type="checkbox" @if(!empty($filter_cats) && in_array($item->slug,$filter_cats)) checked @endif class="custom-control-input" id="{{$item->slug}}" name="category[]" onchange="this.form.submit();" value="{{$item->slug}}">
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
                                                <div id="slider-range" data-min="{{Helper::minPrice()}}" data-max="{{Helper::maxPrice()}}" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="{{Helper::minPrice()}}" data-value-max="{{Helper::maxPrice()}}" data-label-result="Price:">
                                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                                </div>
                                                <input type="hidden" id="price_range" value="@if(!empty($_GET['price'])) {{$_GET['price']}} @endif" name="price_range">
                                                <input style="border: 0; width: 50%;" type="text" readonly id="amount" value="${{Helper::minPrice()}} _${{Helper::maxPrice()}}">
{{--                                                <div class="range-price"  id="amount">price: {{Helper::minPrice()}} - {{Helper::maxPrice()}}</div>--}}
                                                <button type="submit" class="btn btn-success float-right" style="margin: 12px 0px 12px 0px; height: 30px;">filter</button>
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
                                                                            @if(count($brands)>0)
                                                                                @foreach($brands as $brand)
                                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                                <input type="checkbox" class="custom-control-input" id="{{$item->slug}}">
                                                <label class="custom-control-label" for="{{$brand->slug}}">{{$brand->title}}<span class="text-muted"></span>({{count($brand->products)}})</label>
                                            </div>
                                                                                @endforeach
                                                                            @else
                                            <p class="text-center">brands not found</p>
                                                                                @endif
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
                                                <li><a href="#">X</a>{{App\Models\Product::where(['status'=> 'active', 'size'=> 'X'])->count()}}</li>
                                                <li><a href="#">S</a>{{App\Models\Product::where(['status'=> 'active', 'size'=> 'S'])->count()}}</li>
                                                <li><a href="#">M</a>{{App\Models\Product::where(['status'=> 'active', 'size'=> 'M'])->count()}}</li>
                                                <li><a href="#">L</a>{{App\Models\Product::where(['status'=> 'active', 'size'=> 'L'])->count()}}</li>
                                                <li><a href="#">XL</a>{{App\Models\Product::where(['status'=> 'active', 'size'=> 'XL'])->count()}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


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
                                        <p>Total product : {{$products->count()}}</p>
                                    </div>
                                </div>

                                <select id="sortBy" name="sortBy" class="small right" onchange="this.form.submit();">
{{--                                    <option>default</option>--}}
{{--                                    <option value="priceAsc" @if(!empty($_GET['sortBy']) && $_GET(['sortBy'] == 'priceAsc')) selected @endif >Price - lower to higher</option>--}}
{{--                                    <option value="priceDesc" @if(!empty($_GET['sortBy']) && $_GET(['sortBy'] == 'priceDesc')) selected @endif >Price - Higher to lower</option>--}}
{{--                                    <option value="titleAsc"   @if(!empty($_GET['sortBy']) && $_GET(['sortBy'] == 'titleAsc')) selected @endif >Alphabetic Ascsending</option>--}}
{{--                                    <option value="titleDesc" @if(!empty($_GET['sortBy']) && $_GET(['sortBy'] == 'titleDesc')) selected @endif>Alphabetic Descending</option>--}}
{{--                                    <option value="DiscAsc" @if(!empty($_GET['sortBy']) && $_GET(['sortBy'] == 'DiscAsc')) selected @endif>Dicsount - Lower to higher</option>--}}
{{--                                    <option value="DiscDesc" @if(!empty($_GET['sortBy']) && $_GET(['sortBy'] == 'DiscDesc')) selected @endif >Dicsount - Higher to higher</option>--}}
                                    <option>default</option>
                                    <option value="priceAsc" {{old('sortBy')== 'priceAsc' ? 'selected' : ''}} >Price - lower to higher</option>
                                    <option value="priceDesc" {{old('sortBy')== 'priceDesc' ? 'selected' : ''}} >Price - Higher to lower</option>
                                    <option value="titleAsc" {{old('sortBy')== 'titleAsc' ? 'selected' : ''}} >Alphabetic Ascsending</option>
                                    <option value="titleDesc" {{old('sortBy')== 'titleDesc' ? 'selected' : ''}}>Alphabetic Descending</option>
                                    <option value="DiscAsc" {{old('sortBy')== 'DiscAsc' ? 'selected' : ''}}>Dicsount - Lower to higher</option>
                                    <option value="DiscDesc" {{old('sortBy')== 'DiscDesc' ? 'selected' : ''}} >Dicsount - Higher to higher</option>
                                </select>

                            </div>

                            <div class="shop_grid_product_area">

                                <div class="row justify-content-center">

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

                                </div>
                            </div>

                            <!-- Shop Pagination Area -->
{{--                          {{$products->links('vendor.pagination.custom')}}--}}


                        </div>

            </div>
            </form>
        </div>
    </section>
@endsection
@section('script')

    <script>
        $(document).ready(function (){
            if ($('#slider-range').length > 0){
                const max_price = parseInt($('#slider-range').data('max')) || 500;
                const min_price= parseInt($('#slider-range').data('min')) || 0;
                const  currency = $("#slider-range").data('currency') || '';
                let price_range = min_price+'-'+max_price;

                if ($("#price_range").length > 0 && $("#price_range").val()){
                    price_range = $("#price_range").val().trim();
                }
                let price = price_range.split('_');

                $('#slider-range').slider({
                    range:true,
                    min:min_price,
                    max:max_price,
                    value:price,
                    slide:function (event, ui){
                        $('#amount').val('$'+ui.values[0]+"_"+'$'+ui.values[1]);
                        $('#price_range').val(ui.values[0]+"_"+ui.values[1]);

                    }
                })
            }
        });
    </script>

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
