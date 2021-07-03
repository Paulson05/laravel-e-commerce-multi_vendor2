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
@yield('content')
<!-- Special Featured Area -->

<!-- Footer Area -->
@include('Frontend.template.partials.footer')<!-- Footer Area -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
@include('Frontend.template.partials.script')

</body>


</html>
