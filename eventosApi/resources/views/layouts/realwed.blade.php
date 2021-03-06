<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2019 14:27:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="wedding vendor directory HTML template">

    <title> Kaya </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('app.name', 'Kaya') }}</title>--}}


    <!-- Bootstrap -->
    <link href="/realwed/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="/realwed/fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="/realwed/fontello/css/fontello.css" rel="stylesheet">
    <!-- OwlCarosuel CSS -->
    <link href="/realwed/css/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="/realwed/css/owl.theme.default.css" type="text/css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/realwed/images/favicon.ico">
    <!-- Style CSS -->
    <link href="/realwed/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div id="app">

    <!-- header -->
    <div class="header">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                        <div class="header-text">
                            <p class="wlecome-text">Bem vindo ao Kaya</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                        <div class="header-text text-right">
                            <p>És um vendedor?<a href="vendor-form.html" class="text-white">Amplie o seu negócio aqui!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.header-top -->
        <!-- navigation start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg navbar-classic">
                        <a class="navbar-brand" href="/"> <img src="/realwed/images/logo.png" alt=""></a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar mt-0"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-classic">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                                <li class="nav-item">
                                    {{--<a class="nav-link" href="/home" id="menu-1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                        {{--Home--}}
                                    {{--</a>--}}
                                    <router-link to="/" class="nav-link" id="menu-1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Home
                                    </router-link>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Serviços
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-2">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Listing</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="list-grid-view.html">
                                                        List Grid View</a>
                                                </li>
                                                <li><a class="dropdown-item" href="list-view-sidebar.html">
                                                        List View Sidebar</a>
                                                </li>
                                                <li><a class="dropdown-item" href="list-half-screen-map.html">
                                                        List Half Screen Map</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">List Single</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="list-single-1.html">
                                                        List Single 1</a>
                                                </li>
                                                <li><a class="dropdown-item" href="list-single-2.html">
                                                        List Single 2</a>
                                                </li>
                                                <li><a class="dropdown-item" href="list-single-3.html">
                                                        List Single With Video</a>
                                                </li>
                                                <li><a class="dropdown-item" href="list-single-4.html">
                                                        List Single With Gallery</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="vendor-category.html">
                                                Vendor By Categories</a>
                                        </li>
                                        <li><a class="dropdown-item" href="vendor-location.html">
                                                Vendor By Locations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Supplier
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-3">
                                        <li><a class="dropdown-item" href="supplier-dresses-list.html" title="">Dresses</a></li>
                                        <li><a class="dropdown-item" href="supplier-cake-list.html" title="">Cakes</a></li>
                                        <li><a class="dropdown-item" href="supplier-florist-list.html" title="">Florist</a></li>
                                        <li><a class="dropdown-item" href="supplier-photographer-list.html" title="">Photographers</a></li>
                                        <li><a class="dropdown-item" href="supplier-videographer-list.html" title="">Videographer</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-4">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Real Weddings</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="real-wedding-list.html" title="">Real Weddings List</a></li>
                                                <li><a class="dropdown-item" href="real-wedding-single.html" title="">Real Weddings Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Forms</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="vendor-form.html" title="">Vendors Form</a></li>
                                                <li><a class="dropdown-item" href="couple-form.html" title="">Couple Form</a></li>
                                                <li><a class="dropdown-item" href="forgot-password.html" title="">Forgot Password</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Help Center</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="help-center.html" title="">Help Center</a></li>
                                                <li><a class="dropdown-item" href="help-category-list.html" title="">Help Category List</a></li>
                                                <li><a class="dropdown-item" href="help-category-single.html" title="">Help Category Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Email Template</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="email-template/new-id-password.html" title="">New ID/Password</a></li>
                                                <li><a class="dropdown-item" href="email-template/reset-password.html" title="">Reset Password</a></li>
                                                <li><a class="dropdown-item" href="email-template/forgot-password.html" title="">Forgot Password</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">About <span class="badge badge-success">New</span></a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="about-us.html" title="">About v1</a></li>
                                                <li><a class="dropdown-item" href="about-us-2.html" title="">About v2</a></li>
                                                <li><a class="dropdown-item" href="about-us-3.html" title="">About v3 </a></li>
                                                <li><a class="dropdown-item" href="about-us-4.html" title="">About v4 </a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="team-page.html" title="">Meet the Team</a></li>
                                        <li><a class="dropdown-item" href="pricing.html" title="">Pricing</a></li>
                                        <li><a class="dropdown-item" href="error-404.html" title="">404</a></li>
                                        <li><a class="dropdown-item" href="faq.html" title="">FAQ's</a></li>
                                        <li><a class="dropdown-item" href="contact-us.html" title="">Contact us</a></li>
                                        <li><a class="dropdown-item" href="vendor-location.html" title="">Vendor Locations</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-5">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Blog Listing</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="blog-listing.html" title="">Listing</a></li>
                                                <li><a class="dropdown-item" href="blog-classic.html" title="">Classic</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">List Single</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="blog-single.html" title="">Blog Single</a></li>
                                                <li><a class="dropdown-item" href="blog-full-screen-single.html" title="">Blog Single Full Screen</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown mega-dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Elements <span class="badge badge-success">New</span>
                                    </a>
                                    <ul class="dropdown-menu mega-dropdown-menu" aria-labelledby="menu-6">
                                        <li class="row">
                                            <ul class="col">
                                                <li><a class="dropdown-item" href="shortcode-tabs.html">
                                                        Tabs</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-accordions.html">
                                                        Accordions</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-alerts.html">
                                                        Alerts</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-bullet-list.html">
                                                        Bullet List</a>
                                                </li>

                                            </ul>
                                            <ul class="col">

                                                <li><a class="dropdown-item" href="shortcode-dropcap.html">
                                                        Drop Cap</a>
                                                </li>

                                                <li><a class="dropdown-item" href="shortcode-buttons.html">
                                                        Buttons</a>
                                                </li>

                                                <li><a class="dropdown-item" href="shortcode-blockquote.html">
                                                        Blockquotes</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-email-subscriber.html">
                                                        Email Subscriber</a>
                                                </li>
                                            </ul>
                                            <ul class="col">

                                                <li><a class="dropdown-item" href="shortcode-socialmedia.html">
                                                        Social Media</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-typography.html">
                                                        Typography</a>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                </li>
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown" style="margin-top: 0px">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                            {{--<img src="{{Auth::user()->foto}}" alt="..." class="rounded-circle" style="width: 40px; height: 40px;">--}}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                            <a class="dropdown-item" href="/minha_conta">Minha Conta</a>

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                {{--<li class="nav-item dropdown">--}}
                                    {{--<a class="nav-link dropdown-toggle" href="#" id="menu-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                        {{--User Panel--}}
                                        {{--<img src="..." alt="..." class="rounded-circle">--}}
                                    {{--</a>--}}
                                    {{--<ul class="dropdown-menu" aria-labelledby="menu-7">--}}
                                        {{--<li class="dropdown-submenu">--}}
                                            {{--<a class="dropdown-item dropdown-toggle" href="#">Vendor Dashboard </a>--}}
                                            {{--<ul class="dropdown-menu ">--}}
                                                {{--<li><a class="dropdown-item" href="vendor-dashboard-overview.html" title="">Dashboard</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="vendor-dashboard-listing.html" title="">Listing</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="vendor-dashboard-add-listing.html" title="">Add Listing</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="vendor-dashboard-pricing.html" title="">Pricing</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="vendor-dashboard-request-quote.html" title="">Request Quote</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="vendor-dashboard-reviews.html" title="">Reviews</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="vendor-dashboard-profile.html" title=""> Profile</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li class="dropdown-submenu">--}}
                                            {{--<a class="dropdown-item dropdown-toggle" href="#">Couple Dashboard</a>--}}
                                            {{--<ul class="dropdown-menu ">--}}
                                                {{--<li><a class="dropdown-item" href="couple-dashboard-overview.html" title="">Dashboard</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="couple-dashboard-mywishlist.html" title="">My Listing</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="couple-dashboard-todolist.html" title="">To Do List</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="couple-dashboard-budget.html" title="">Budget</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="couple-dashboard-guest-manager.html" title="">Guest Manager</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="couple-dashboard-add-new-guest.html" title="">Add New Guest</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="couple-dashboard-table-planner.html" title="">Seating Table</a></li>--}}
                                                {{--<li><a class="dropdown-item" href="couple-dashboard-profile.html" title=""> Profile</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a class="dropdown-item" href="couple-rsvp-page.html" title="">RSVP</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            </ul>
                            {{--<a href="#" class="btn btn-default btn-sm">Get Started Now</a>--}}

                        </div>


                    </nav>
                </div>
            </div>
        </div>
        <!-- navigation close -->
    </div>
    <!-- /.header -->
    <!-- hero-section -->
<!-- /.feature-section -->
  {{--<home-component></home-component>--}}
    <router-view></router-view>
    <!-- social-media-section -->

    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12 text-right">
                    <div class="social-icons">
                        <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.social-media-section -->
    <!-- footer-section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- footer-widget -->
                    <div class="footer-widget">
                        <a href="#"><img src="/realwed/images/footer-logo.png" alt="" class="mb20"></a>
                        <p class="mb10">Vestibulum ante elit, convallis quis nibh in, vulputate rhoncus massa. In hac habitasse platea dictumst.</p>
                        <p>In hac habitasse platea dictumst simple dummy content here.</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            Contact Address
                        </h3>
                        <p>4998 Elk Creek Road Canton,
                            <br> GA 30114</p>
                        <p class="mb0 text-default">+0-800-1234-123</p>
                        <p class="mb0 text-default">info@realwed.com</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            About Company
                        </h3>
                        <ul class="listnone">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Pricing Plan</a></li>
                            <li><a href="#">Meet The Team</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- /.footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            List you Business
                        </h3>
                        <p>Are you vendor ? List your venue and service get more from listing business.</p>
                        <a href="#" class="btn btn-default">List your Business</a>
                    </div>
                </div>
                <!-- /.footer-widget -->
            </div>
        </div>
    </div>
    <!-- tiny-footer-section -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                    <p>© 2018 RealWed. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.tiny-footer-section -->
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/realwed/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/realwed/js/bootstrap.min.js"></script>

<!-- owl-carousel js -->
<script src="/realwed/js/owl.carousel.min.js"></script>
<!-- nice-select js -->
<script src="/realwed/js/jquery.nice-select.min.js"></script>
<script src="/realwed/js/fastclick.js"></script>
<script src="/realwed/js/custom-script.js"></script>
<script src="/realwed/js/return-to-top.js"></script>

{{--<!-- Scripts -->--}}
<script src="{{ asset('js/app.js') }}" defer></script>
</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2019 14:29:44 GMT -->
</html>
