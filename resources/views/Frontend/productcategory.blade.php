@extends('Frontend.template.default')
@section('content')
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Shop List</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>

                        <li class="breadcrumb-item active"> Category->{{$categories->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="shop_grid_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Shop Top Sidebar -->
                    <div class="shop_top_sidebar_area d-flex flex-wrap align-items-center justify-content-between">
                        <div class="view_area d-flex">
                            <div class="grid_view">
                                <a href="shop-grid-left-sidebar.html" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="icofont-layout"></i></a>
                            </div>
                            <div class="list_view ml-3">
                                <a href="shop-list-left-sidebar.html" data-toggle="tooltip" data-placement="top" title="List View"><i class="icofont-listine-dots"></i></a>
                            </div>
                        </div>
                        <select id="sortBy" class="small right">
                            <option>default</option>
                            <option value="priceAsc" {{old('sortBy')== 'priceAsc' ? 'selected' : ''}} >Price - lower to higher</option>
                            <option value="priceDesc">Price - Higher to lower</option>
                            <option value="titleAsc">Alphabetic Ascsending</option>
                            <option value="titleDesc">Alphabetic Descending</option>
                            <option value="DiscAsc">Dicsount - Lower to higher</option>
                            <option value="DiscDesc" >Dicsount - Higher to higher</option>
                        </select>
                    </div>

                    <div class="shop_grid_product_area">
                        <div class="row justify-content-center">
                        @if(count($products)>0)
                            @foreach($products as $item)
                                @php
                                    $photo=explode(',',$item->photo);
                                @endphp
                                <!-- Single Product -->
                                    <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                                        <div class="single-product-area mb-30">
                                            <div class="product_image">
                                                <!-- Product Image -->
                                                <img class="normal_img" src="{{$photo[0]}}" alt="">

                                                <!-- Product Badge -->
                                                <div class="product_badge">
                                                    <span>New</span>
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
                                                    <a href=""  data-quantity="1" data-product-id="{{$item->id}}" class="add_to_cart" id="add_to_cart{{$item->id}}">
                                                        <i class="fa fa-cart-arrow-down">add to cart</i>

                                                    </a>
                                                </div>

                                                <!-- Quick View -->
                                                <div class="product_quick_view">
                                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                                                </div>

                                                <p class="brand_name">{{App\Models\Brand::where('id', $item->brand_id)->value('title')}}</p>
                                                <a href="{{route('productdetail', $item->slug)}}">{{$item->title}}</a>
                                                <h6 class="product-price">${{$item->price}}</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Product -->
                                @endforeach
                            @endif


                        </div>
                    </div>

                    <!-- Shop Pagination Area -->
                    <div class="shop_pagination_area mt-30">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-sm justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">8</a></li>
                                <li class="page-item"><a class="page-link" href="#">9</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')

    <script>
        $('#sortBy').change(function (){
            var sort = $('#sortBy').val();

            window.location="{{url(''.$route.'')}}/{{$categories->slug}}?sort="+sort;
        });
    </script>

    <script>
        function  loadmoreData(page){
            $.ajax({
                url: '?page=' +page,
                type:'get',
                beforeSend:function (){
                    $('.ajax-load').show();
                },
            })
                .done(function (data){
                    if(data.html ==''){
                        $('.ajax_load').html('no more product avaible');
                        return;
                    }
                    $('.ajax-load').hide();
                    $('#product-data').append(data.html);
                })
                .fail(function (){
                    alert('something when wrong please try again')
                });
        }
        var page=1;
        $(window).scroll(function (){
            if($(window).scrollTop() +$(window).height()+120>=$(document).height()){
                page ++;
                loadmoreData(page);
            }
        })
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
@endsection
