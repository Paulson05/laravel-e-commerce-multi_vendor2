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
<section class="welcome_area">
    <div class="welcome_slides owl-carousel">
        <!-- Single Slide -->
        <div class="single_slide bg-img" style="background-image: url(img/bg-img/8.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-7 col-md-8">
                        <div class="welcome_slide_text">
                            <p data-animation="fadeInUp" data-delay="0">Special Offer</p>
                            <h2 data-animation="fadeInUp" data-delay="300ms">40% Off Today</h2>
                            <h4 data-animation="fadeInUp" data-delay="600ms">Only $78</h4>
                            <a href="#" class="btn btn-primary" data-animation="fadeInUp" data-delay="1s">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-5 col-md-4">
                        <div class="welcome_slide_image">
                            <img src="img/bg-img/slide-1.png" alt="" data-animation="bounceInUp" data-delay="500ms">
                            <div class="discount_badge" data-animation="bounceInDown" data-delay="1.2s">
                                <span>30%<br>OFF</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="single_slide bg-img" style="background-image: url(img/bg-img/7.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-md-8">
                        <div class="welcome_slide_text">
                            <p data-animation="fadeInUp" data-delay="0">Sustainable Clock</p>
                            <h2 data-animation="fadeInUp" data-delay="300ms">Smart Watch</h2>
                            <h4 data-animation="fadeInUp" data-delay="600ms">Only $31 <span class="regular-price">$43</span></h4>
                            <a href="#" class="btn btn-primary" data-animation="fadeInUp" data-delay="600ms">Check Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="single_slide bg-img" style="background-image: url(img/bg-img/6.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="welcome_slide_text">
                            <p class="text-white" data-animation="fadeInUp" data-delay="0">100% Cotton</p>
                            <h2 class="text-white" data-animation="fadeInUp" data-delay="300ms">Hot Shoes</h2>
                            <h4 class="text-white" data-animation="fadeInUp" data-delay="600ms">Now $19</h4>
                            <a href="#" class="btn btn-primary" data-animation="fadeInUp" data-delay="900ms">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Slides Area -->

@yield('content')
<!-- Special Featured Area -->

<!-- Footer Area -->
@include('Frontend.template.partials.footer')<!-- Footer Area -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
@include('Frontend.template.partials.script')

</body>


</html>
