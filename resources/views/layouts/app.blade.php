<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TaxhubBD') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!--theme js--->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/mousescroll.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/publicHome.css') }}" rel="stylesheet">
    <!-- core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('assets/images/ico/logo.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/images/ico/logo-144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/images/ico/logo-114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/images/ico/logo-72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/ico/logo-57.png')}}">

</head>
<body>
    <div id="app">
       @include('layouts.publicHome.header')

        <main class="py-0">
            @yield('content')
        </main>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; <a href="http://www.taxhubbd.com">TaxhubBD</a>
                    </div>
                    <div class="col-sm-6">
                        <ul class="social-icons">
                            Stay Connected With 
                            <li><a href="https://www.facebook.com/Taxhubbd-342276302800457/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://plus.google.com/105088297140247921156"><i class="fa fa-google-plus"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer--> 
    </div>

    <script src="/js/publicHome.js"></script>
</body>
</html>
