<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/eduhome/eduhome/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Aug 2023 10:00:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduhome - Educational HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website') }}/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('website') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/et-line-icon.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/reset.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/responsive.css">
    <script src="{{ asset('website') }}/js/vendor/modernizr-3.11.2.min.js"></script>
</head>

<body>


    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="{{ asset('website') }}/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header Area Start -->
    <header class="top" style="background-color:Tomato;">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="header-top-left">
                            <p>HAVE ANY QUESTION ? +880 5698 598 6587</p>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 col-sm-4">
		                    <div class="header-top-right text-md-end text-center">
		                        <ul>
                                    
		                            <li><a href="{{asset('website')}}/login.html">login</a></li>
		                            <li><a href="{{asset('website')}}/signup.html">signup</a></li>
                                    <li><a href="{{asset('website')}}/signup.html">Logout</a></li>
		                        </ul>
		                    </div>
		                </div> --}}
                </div>
            </div>
        </div>
        <div class="header-area two header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-5 col-6">
                        <div class="logo">
                            <a href="{{ asset('website') }}/index.html"><img
                                    src="{{ asset('website') }}/img/logo/logo2.png" alt="eduhome" /></a>
                        </div>
                    </div>
                    @if (Auth::check('login'))
                        <div class="col-md-9 col-sm-7 col-6">
                            <div class="content-wrapper text-end">
                                <!-- Main Menu Start -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            @auth

                                            <li><a href="{{ route('quiz') }}">Exam</a>
                                                    @guest
                                                        @if (Auth::has('login'))
                                                    <li><a href="{{ route('login') }}">login</a></li>
                            @endif
                            @if (Auth::has('register'))
                                <li><a href="{{ route('register') }}">signup</a></li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    {{-- <a class="dropdown-item" href="{{ route('profile') }}">view profile</a> --}}

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                                </div>
                            </li>
                        @endguest
                    @endauth
                    </ul>
                    </nav>
                </div>
                <!--Search Form Start-->
                <div class="search-btn">
                    <ul class="header-search search-toggle">
                        <li class="search-menu">
                            <i class="fa fa-search"></i>
                        </li>
                    </ul>
                    <div class="search">
                        <div class="search-form">
                            <form id="search-form" action="#">
                                <input type="search" placeholder="Search here..." name="search" />
                                <button type="submit">
                                    <span><i class="fa fa-search"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End of Search Form-->
                <!-- Main Menu End -->
            </div>
        </div>
    @else
        <div class="col-md-9 col-sm-7 col-6">
            <div class="content-wrapper text-end">
                <!-- Main Menu Start -->
                <div class="main-menu">
                    <nav>
                        <ul>
                            {{-- <li><a href="{{ asset('website') }}/blog.html">blog</a> --}}


                            <li><a href="{{ route('examlist') }}">Exam</a></li>

                            <li><a href="{{ route('login') }}">login</a></li>


                        </ul>
                    </nav>
                </div>
                <!--Search Form Start-->
                <div class="search-btn">
                    <ul class="header-search search-toggle">
                        <li class="search-menu">
                            <i class="fa fa-search"></i>
                        </li>
                    </ul>
                    <div class="search">
                        <div class="search-form">
                            <form id="search-form" action="#">
                                <input type="search" placeholder="Search here..." name="search" />
                                <button type="submit">
                                    <span><i class="fa fa-search"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End of Search Form-->
                <!-- Main Menu End -->
            </div>
        </div>
        @endif

        <div class="col-12">
            <div class="mobile-menu hidden-sm"></div>
        </div>
        </div>
        </div>
        </div>
    </header>
