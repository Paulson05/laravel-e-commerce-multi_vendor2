<!doctype html>
<html lang="en">



<head>
    <title>admin @yield('title')</title>
@include('backend.layout.partials.head')
</head>
<body class="theme-cyan">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{url('backend/assets/images/loader.gif')}}" width="100" height="100" alt="Lucid"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

   @include('backend.layout.partials.navbar')

   @include('backend.layout.partials.sidebar')

   @yield('content')

</div>

<!-- Javascript -->
@include('backend.layout.partials.script')

</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/html/light/frontend.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jun 2021 11:16:48 GMT -->
</html>
