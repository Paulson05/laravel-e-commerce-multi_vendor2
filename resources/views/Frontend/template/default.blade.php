<!doctype html>
<html lang="en">


<!-- Mirrored from demo.designing-world.com/bigshop-2.3.0/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jun 2021 11:37:07 GMT -->
<head>
    @include('Frontend.template.partials.head')
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="spinner-grow" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<!-- Header Area -->
@include('Frontend.template.partials.headersection')
<!-- Header Area End -->

<!-- Welcome Slides Area -->

<!-- Welcome Slides Area -->

@yield('content')
<!-- Special Featured Area -->

<!-- Footer Area -->
@include('Frontend.template.partials.footer')<!-- Footer Area -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
@include('Frontend.template.partials.script')
<script>
    $(document).on('click','.cart_delete', function (e){
        e.preventDefault();
        var cart_id=$(this).data('id');
        // alert(cart_id);

        var token= "{{csrf_token()}}";
        var path = "{{route('cart.delete')}}";

        $.ajax({
            url:path,
            type:"POST",
            datatype:"JSON",
            data:{
                cart_id:cart_id,

                _token:token,
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
</body>


</html>
