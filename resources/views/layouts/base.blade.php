<!doctype html>
<html lang="en">
<head>
<title>Oculux | Home</title>
<meta charset="utf-8">
@yield('top_styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/animate-css/vivify.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/c3/c3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/vendor/toastr/toastr.min.css')}}">
@yield('after_styles')

<link rel="stylesheet" href="{{asset('assets_1/css/site.min.css')}}">




</head>
<body class="theme-cyan font-montserrat">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<div id="wrapper">
    <!-- top nav bar start -->
    @include('layouts._partial._top_navbar')
    <!-- end Top Nav Bar -->
  	<!-- Side Menu start -->
    @include('layouts._partial._sidemenu')
    <!-- Side Menu End Bar -->
    <div id="main-content">
        @yield('content')
    </div>    
</div>
<!-- Javascript -->
@yield('before_scripts')
<script src="{{asset('assets_1/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets_1/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('assets_1/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('assets_1/js/index.js')}}"></script>
<script src="{{asset('assets_1/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/vendor/toastr/toastr.js')}}"></script>
@yield('after_scripts')

<script src="{{asset('assets_1/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets_1/js/pages/tables/jquery-datatable.js')}}"></script>
<script>
	// {{ Session::get("notify.message")}}
	// {{ Session::get("notify.type")}}
	// $type = "error";
    // $message = "hello";
    $positionClass = 'toast-top-right';
    toastr.remove();
    toastr[$type]($message, '', {
    	"timeOut": "1500",
        positionClass: $positionClass
    });
</script>
</body>
</html>