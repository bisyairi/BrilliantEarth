<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>{{config('app.name', 'BrilliantEarth')}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
        <!-- Place favicon.ico in the root directory -->
        <!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
		<!-- Font-Awesome css -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		<!-- Flaticon css -->
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
		<!-- venobox css -->
        <link rel="stylesheet" href="{{asset('venobox/venobox.css')}}" type="text/css" media="screen" />
		<!-- nivo slider css -->
		<link rel="stylesheet" href="{{asset('lib/css/nivo-slider.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('lib/css/preview.css')}}" type="text/css" media="screen" />
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('style.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
		<!-- modernizr css -->
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

        @yield('extra-script')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--Header Area Start-->
        @include('inc.navbar')
        <!--Header Area End-->

        @yield('content')

        <!-- Footer Area Start -->
        @include('inc.footerarea')
        <!-- Footer Area End -->

        <!-- Footer Bottom Area -->
        @include('inc.footerbtm')
        <!-- Footer Bottom End -->

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
		<!-- bootstrap js -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
		<!-- owl.carousel js -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<!-- jquery-ui js -->
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
		<!-- jquery countdown js -->
        <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
		<!-- jquery countdown js -->
        <script type="text/javascript" src="{{asset('venobox/venobox.min.js')}}"></script>
		<!-- jquery Meanmenu js -->
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
		<!-- wow js -->
        <script src="{{asset('js/wow.min.js')}}"></script>
		<!-- scrollUp JS -->
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
		<!-- plugins js -->
        <script src="{{asset('js/plugins.js')}}"></script>
		<!-- Nivo slider js -->
		<script src="{{asset('lib/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
		<script src="{{asset('lib/home.js')}}" type="text/javascript"></script>
		<!-- main js -->
        <script src="{{asset('js/main.js')}}"></script>

        @yield('extra-js')
    </body>
</html>
