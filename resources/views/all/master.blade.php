<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>News Feed | Repository</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="{{asset('public/all/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('public/all/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('public/all/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/all/css/font-awesome.min.css')}}" />
    <link href="{{asset('public/all/css/emoji.css')}}" rel="stylesheet">

    
    <!--Google Webfont-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('public/all/images/fav.png')}}"/>
      @yield('extra-css')
	</head>
  <body>

    <!-- Header
    ================================================= -->
    @include('all.inc.header')
		
    <!--Header End-->

    <div id="page-contents">
      <div class="container">
        <div class="row">

        @include('all.inc.sideLeft')
         @yield('content')
         @include('all.inc.sideright')

         </div>
      </div>
    </div>

    @include('all.inc.footer')
   
    
    <!--preloader-->
   <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
    <!-- Scripts
    ================================================= -->
   
    <script src="{{asset('public/all/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('public/all/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/all/js/jquery.sticky-kit.min.js')}}"></script>
    <script src="{{asset('public/all/js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('public/all/js/script.js')}}"></script>
  </body>
</html>
