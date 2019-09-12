<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{ asset('css/plugins/slicknav.min.css') }}" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{ asset('css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{ asset('css/plugins/owl.carousel.min') }}" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{ asset('css/plugins/gijgo.css') }}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!--== Header Area Start ==-->
        <header id="header-area" class="fixed-top">
            <!--== Header Top Start ==-->
            <div id="header-top" class="d-none d-xl-block">
                <div class="container">
                    <div class="row">
                        <!--== Single HeaderTop Start ==-->
                        <div class="col-lg-3 text-left">
                            <i class="fa fa-map-marker"></i> 802/2, Mirpur, Dhaka
                        </div>
                        <!--== Single HeaderTop End ==-->

                        <!--== Single HeaderTop Start ==-->
                        <div class="col-lg-3 text-center">
                            <i class="fa fa-mobile"></i> +1 800 345 678
                        </div>
                        <!--== Single HeaderTop End ==-->

                        <!--== Single HeaderTop Start ==-->
                        <div class="col-lg-3 text-center">
                            <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
                        </div>
                        <!--== Single HeaderTop End ==-->

                        <!--== Social Icons Start ==-->
                        <div class="col-lg-3 text-right">
                            <div class="header-social-icons">
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <!--== Social Icons End ==-->
                    </div>
                </div>
            </div>
            <!--== Header Top End ==-->

            <!--== Header Bottom Start ==-->
            <div id="header-bottom">
                <div class="container">
                    <div class="row">
                        <!--== Logo Start ==-->
                        <div class="col-lg-4">
                            <a href="{{ app_path('/') }}" class="logo">
                                <img src="{{ asset('img/logo.png') }}" alt="JSOFT">
                            </a>
                        </div>
                        <!--== Logo End ==-->

                        <!--== Main Menu Start ==-->
                        <div class="col-lg-8 d-none d-xl-block">
                            <nav class="mainmenu alignright">
                                <ul>
                                    <li><a href="{{ route('home') }}">{{ __('HOME') }}</a>
                                    </li>
                                    <li><a href="{{ route('about') }}">{{ __('ABOUT') }}</a></li>
                                    <li><a href="{{ route('rental') }}">{{ __('RENTAL') }}</a></li>
                                    <li><a href="contact.html">{{ __('CONTACT') }}</a></li>
                                    @guest
                                    <li><a href="#">{{ __('ACCOUNT') }}</a>
                                        <ul>
                                            <li><a href="{{ route('login') }}">{{ __('LOGIN') }}</a></li>
                                            <li><a href="{{ route('register') }}">{{ __('REGISTER') }}</a></li>
                                        </ul>
                                    </li>
                                    @else
                                        <li><a href="#">{{ Auth::user()->name }}</a>
                                            <ul>
                                                @if(Auth::user()->type != 1)
                                                    <li><a href="{{ route('profile_user') }}">{{ __('Profile') }}</a></li>
                                                    <li>
                                                        <form method="post" action="{{ route('logout') }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger br-0 w-100">{{ __('Logout') }}</button>
                                                        </form>
                                                    </li>
                                                @else
                                                    <li><a href="{{ route('profile_admin') }}">{{ __('Profile (admin)') }}</a></li>
                                                    <li>
                                                        <form method="post" action="{{ route('logout') }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger w-100 br-0">{{ __('Logout') }}</button>
                                                        </form>
                                                    </li>
                                                @endif
                                            </ul>
                                        </li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                        <!--== Main Menu End ==-->
                    </div>
                </div>
            </div>
            <!--== Header Bottom End ==-->
        </header>
        <!--== Header Area End ==-->

        <main class="py-4">
            @yield('content')
        </main>

        <!--== Footer Area Start ==-->
        <section id="footer-area">
            <!-- Footer Bottom Start -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom End -->
        </section>
        <!--== Footer Area End ==-->
        <!--=======================Javascript============================-->
        <!--=== Jquery Min Js ===-->
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <!--=== Jquery Migrate Min Js ===-->
        <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
        <!--=== Popper Min Js ===-->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <!--=== Bootstrap Min Js ===-->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!--=== Gijgo Min Js ===-->
        <script src="{{ asset('js/plugins/gijgo.js') }}"></script>
        <!--=== Vegas Min Js ===-->
        <script src="{{ asset('js/plugins/vegas.min.js') }}"></script>
        <!--=== Isotope Min Js ===-->
        <script src="{{ asset('js/plugins/isotope.min.js') }}"></script>
        <!--=== Owl Caousel Min Js ===-->
        <script src="{{ asset('js/plugins/owl.carousel.min.js') }}"></script>
        <!--=== Waypoint Min Js ===-->
        <script src="{{ asset('js/plugins/waypoints.min.js') }}"></script>
        <!--=== CounTotop Min Js ===-->
        <script src="{{ asset('js/plugins/counterup.min.js') }}"></script>
        <!--=== YtPlayer Min Js ===-->
        <script src="{{ asset('js/plugins/mb.YTPlayer.js') }}"></script>
        <!--=== Magnific Popup Min Js ===-->
        <script src="{{ asset('js/plugins/magnific-popup.min.js') }}"></script>
        <!--=== Slicknav Min Js ===-->
        <script src="{{ asset('js/plugins/slicknav.min.js') }}"></script>

        <!--=== Mian Js ===-->
        <script src="{{ asset('js/main.js') }}"></script>
    </div>
</body>
</html>
