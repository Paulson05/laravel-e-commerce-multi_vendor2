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
                            <option value="priceDesc" {{old('sortBy')== 'priceDesc' ? 'selected' : ''}} >Price - Higher to lower</option>
                            <option value="titleAsc" {{old('sortBy')== 'titleAsc' ? 'selected' : ''}} >Alphabetic Ascsending</option>
                            <option value="titleDesc" {{old('sortBy')== 'titleDesc' ? 'selected' : ''}}>Alphabetic Descending</option>
                            <option value="DiscAsc" {{old('sortBy')== 'DiscAsc' ? 'selected' : ''}}>Dicsount - Lower to higher</option>
                            <option value="DiscDesc" {{old('sortBy')== 'DiscDesc' ? 'selected' : ''}} >Dicsount - Higher to higher</option>
                        </select>
                    </div>

                    <div class="shop_grid_product_area">
                        <div class="row justify-content-center">
                       @include('Frontend.singlepage')


                            </div>

                        <div class="page-loader-wrapper">
                            <div class=" ">
                                <div class="m-t-30 ajax-load text-center" style="display: none !important;"><img src="{{url('backend/assets/images/loader.gif')}}" width="50%" height="50%" alt="Lucid"></div>

                            </div>

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
                        $('.ajax_load').html('no more product avaliable');
                        return;
                    }
                    $('.ajax-load').hide();
                    $('#product-data').append(data.html);
                })

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
