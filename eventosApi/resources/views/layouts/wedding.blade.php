<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.hasthemes.com/wedding-v1.1/weddist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2019 13:46:57 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Weddist - Wedding Vendor Directory & Listing Bootstrap 4 Template </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" media="screen" href="/wed/assets/css/plugins.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/wed/assets/css/style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/wed/assets/image/favicon.ico">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div class="fakeloader"></div>
<div class="wrapper" id="app">
    <header class="header-top-area" style="background-color: #C2185B;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-6">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="/wed/assets/image/logo/logo.png" alt=""></a>
                    </div><!--// Logo -->
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <!-- main-menu -->
                    <nav class="main-menu text-center">
                        <ul>
                            <li class="has-dropdown"><a href="/">Home</a>
                            </li>

                            <li><a href="#">Vendors</a>
                                <ul class="sub-menu">
                                    <li><a href="vendor-grid.html">Vendor grid Page</a></li>
                                    <li><a href="vendor-details.html">Vendo Details Page</a></li>
                                    <li class="has-dropdown menu-item-has-children"><a href="#">Demo Page</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Demo 01</a></li>
                                            <li><a href="#">Demo 02</a></li>
                                            <li><a href="#">Demo 03</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Supplies</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">Product Page</a></li>
                                    <li><a href="dress-shop.html">Dress Page</a></li>
                                    <li><a href="cake-shop.html">Cakes Page</a></li>
                                    <li><a href="product-details.html">Product Details Page</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Listing</a>
                                <ul class="sub-menu">
                                    <li><a href="listing-categorie.html">Wedding Grid</a></li>
                                    <li><a href="listing-categoriel-list.html">Wedding List</a></li>
                                    <li><a href="single-wedding.html">Single Wedding Page</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blogs</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Page</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-mesonry.html">Blog Mesonry Page</a></li>
                                    <li><a href="blog-mesonry-sidebar.html">Blog Mesonry Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="pricing.html">Pricing Page</a></li>
                                    <li><a href="about.html">about Page</a></li>
                                    <li><a href="contact.html">Contact Page</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Accounts</a>
                                <ul class="sub-menu">
                                    <li><a href="RSVP.html">RSVP Page</a></li>
                                    <li><a href="login.html">Login &amp; Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!--// main-menu -->
                </div>
                <div class="col-lg-3 col-md-8 order-lg-3 col-12 d-none d-lg-block">
                    <!-- Listing Button -->
                    <div class="listing-btn">
                        <a href="#" class="btn-2 btn-radius">ADD LISTING</a>

                    </div><!--// Listing Button -->
                </div>
                <!-- Show in small device Start -->
                <div class="clickable-menu clickable-mainmenu-active d-block d-lg-none col-6">
                    <a href="#"><i class="ti-menu"></i></a>
                </div>
                <div class="clickable-mainmenu">
                    <div class="clickable-mainmenu-icon">
                        <button class="clickable-mainmenu-close">
                            <span class="ti-close"></span>
                        </button>
                    </div>

                    <div id="menu" class="text-left clickable-menu-style">
                        <ul>
                            <li><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Home one</a></li>
                                    <li><a href="index-2.html">Home two</a></li>
                                    <li><a href="index-3.html">Home three</a></li>
                                    <li><a href="index-4.html">Home Four</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Vendors</a>
                                <ul>
                                    <li><a href="vendor-grid.html">Vendor grid Page</a></li>
                                    <li><a href="vendor-details.html">Vendo Details Page</a></li>
                                    <li><a href="#">Demo Page</a>
                                        <ul>
                                            <li><a href="#">Demo 01</a></li>
                                            <li><a href="#">Demo 02</a></li>
                                            <li><a href="#">Demo 03</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Supplies</a>
                                <ul>
                                    <li><a href="shop.html">Product Page</a></li>
                                    <li><a href="dress-shop.html">Dress Page</a></li>
                                    <li><a href="cake-shop.html">Cakes Page</a></li>
                                    <li><a href="product-details.html">Product Details Page</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Listing</a>
                                <ul>
                                    <li><a href="listing-categorie.html">Wedding Grid</a></li>
                                    <li><a href="listing-categoriel-list.html">Wedding List</a></li>
                                    <li><a href="single-wedding.html">Single Wedding Page</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blogs</a>
                                <ul>
                                    <li><a href="blog.html">Blog Page</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-mesonry.html">Blog Mesonry Page</a></li>
                                    <li><a href="blog-mesonry-sidebar.html">Blog Mesonry Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="pricing.html">Pricing Page</a></li>
                                    <li><a href="about.html">about Page</a></li>
                                    <li><a href="contact.html">Contact Page</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Accounts</a>
                                <ul>
                                    <li><a href="RSVP.html">RSVP Page</a></li>
                                    <li><a href="login.html">Login &amp; Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- Listing Button -->
                    <div class="listing-btn text-center cenvers">
                        <a href="#" class="btn-2 btn-radius">ADD LISTING</a>
                    </div><!--// Listing Button -->

                </div>
                <!-- Show in small device End -->
            </div>
        </div>
    </header>
</div>



<!-- Most Resent Program  -->
<div class="most-resent-program-area section-pt section-pb-60">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>top ceremonies</h3>
                    <h2>Most Recent Programs</h2>
                </div>
            </div>
        </div>

        <div class="row row-3 resent-program-active">

            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-programs mb-30">
                    <div class="programs-image">
                        <a href="single-wedding.html"><img src="/wed/assets/image/progrem/01.jpg" alt=""></a>
                    </div>
                    <div class="programs-info-box">
                        <h5><a href="single-wedding.html">Marage Ceremony</a></h5>
                        <div class="programs-details d-flex justify-content-between">
                            <div class="location">
                                <i class="ti-location-pin"></i> <span>Around Florida</span>
                            </div>
                            <div class="reting d-flex">
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--// Single-programs -->
            </div>

            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-programs mb-30">
                    <div class="programs-image">
                        <a href="single-wedding.html"><img src="/wed/assets/image/progrem/02.jpg" alt=""></a>
                    </div>
                    <div class="programs-info-box">
                        <h5><a href="single-wedding.html">Wedding Stage</a></h5>
                        <div class="programs-details d-flex justify-content-between">
                            <div class="location">
                                <i class="ti-location-pin"></i> <a href="#"><span>Around Florida</span></a>
                            </div>
                            <div class="reting d-flex">
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--// Single-programs -->
            </div>

            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-programs mb-30">
                    <div class="programs-image">
                        <a href="single-wedding.html"><img src="/wed/assets/image/progrem/03.jpg" alt=""></a>
                    </div>
                    <div class="programs-info-box">
                        <h5><a href="single-wedding.html">Marage Ceremony</a></h5>
                        <div class="programs-details d-flex justify-content-between">
                            <div class="location">
                                <i class="ti-location-pin"></i> <span>Wedding Intior</span>
                            </div>
                            <div class="reting d-flex">
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--// Single-programs -->
            </div>

            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-programs mb-30">
                    <div class="programs-image">
                        <a href="single-wedding.html"><img src="/wed/assets/image/progrem/04.jpg" alt=""></a>
                    </div>
                    <div class="programs-info-box">
                        <h5><a href="single-wedding.html">Couple Meetpoient</a></h5>
                        <div class="programs-details d-flex justify-content-between">
                            <div class="location">
                                <i class="ti-location-pin"></i> <span>Around Florida</span>
                            </div>
                            <div class="reting d-flex">
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--// Single-programs -->
            </div>

            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-programs mb-30">
                    <div class="programs-image">
                        <a href="single-wedding.html"><img src="/wed/assets/image/progrem/05.jpg" alt=""></a>
                    </div>
                    <div class="programs-info-box">
                        <h5><a href="single-wedding.html">Minimal Wedding</a></h5>
                        <div class="programs-details d-flex justify-content-between">
                            <div class="location">
                                <i class="ti-location-pin"></i> <span>Around Florida</span>
                            </div>
                            <div class="reting d-flex">
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--// Single-programs -->
            </div>

            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-programs mb-30">
                    <div class="programs-image">
                        <a href="single-wedding.html"><img src="/wed/assets/image/progrem/03.jpg" alt=""></a>
                    </div>
                    <div class="programs-info-box">
                        <h5><a href="single-wedding.html">Wedding Minimal</a></h5>
                        <div class="programs-details d-flex justify-content-between">
                            <div class="location">
                                <i class="ti-location-pin"></i> <span>Around Florida</span>
                            </div>
                            <div class="reting d-flex">
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--// Single-programs -->
            </div>

        </div>

    </div>
</div>
<!--// Most Resent Program  -->

<!-- Work Proces -->
<div class="work-proces-area section-pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>work proces</h3>
                    <h2>How It Works</h2>
                </div>
            </div>
        </div>

        <div class="row work-proces-active">

            <div class="col-lg-4">
                <!-- Single Proces -->
                <div class="single-proces mb-30">
                    <div class="image">
                        <img src="/wed/assets/image/icon/icon-02.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Search Listing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    </div>
                </div><!--// Single Proces -->
            </div>
            <div class="col-lg-4">
                <!-- Single Proces -->
                <div class="single-proces mb-30">
                    <div class="image">
                        <img src="/wed/assets/image/icon/icon-01.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Add Directory List</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    </div>
                </div><!--// Single Proces -->
            </div>
            <div class="col-lg-4">
                <!-- Single Proces -->
                <div class="single-proces mb-30">
                    <div class="image">
                        <img src="/wed/assets/image/icon/icon-03.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Add Directory List</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    </div>
                </div><!--// Single Proces -->
            </div>
            <div class="col-lg-4">
                <!-- Single Proces -->
                <div class="single-proces mb-30">
                    <div class="image">
                        <img src="/wed/assets/image/icon/icon-03.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Get Your Result</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    </div>
                </div><!--// Single Proces -->
            </div>
        </div>

    </div>
</div>
<!--// Work Proces -->
<!-- Get-start-contact Start -->
<div class="get-start-contact-area get-contact-bg section-pb section-pt" data-black-overlay="3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
                <div class="get-start-text text-center">
                    <h3>we cam plan & arrange your dream...</h3>
                    <h2>Having trouble to plan  <br> a program?</h2>

                    <div class="contact-info">
                        <div class="get-btn"><a href="#" class="btn get-contact">Contact us</a></div>
                        <div class="contact-number">
                            Call: +99 0122 333 666
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--// Get-start-contact End -->



<!-- Most Resent Program  -->
<div class="most-resent-program-area section-pt section-pb-60">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>place of love</h3>
                    <h2>Most Popular Venues</h2>
                </div>
            </div>
        </div>

        <div class="row  popular-venues-active">

            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-venues mb-30">
                    <div class="venues-image">
                        <a href="vendor-details.html"><img src="/wed/assets/image/venues/01.jpg" alt=""></a>
                    </div>
                    <div class="venues-info-box">
                        <h5><a href="vendor-details.html">Open Wedding Program</a></h5>
                        <div class="location">
                            <i class="ti-location-pin"></i> <span>Lacosta USA</span>
                        </div>

                    </div>
                </div><!--// Single-programs -->
            </div>
            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-venues mb-30">
                    <div class="venues-image">
                        <a href="vendor-details.html"><img src="/wed/assets/image/venues/02.jpg" alt=""></a>
                    </div>
                    <div class="venues-info-box">
                        <h5><a href="#">Art Gallery</a></h5>
                        <div class="location">
                            <i class="ti-location-pin"></i> <span>Lacosta USA</span>
                        </div>

                    </div>
                </div><!--// Single-programs -->
            </div>
            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-venues mb-30">
                    <div class="venues-image">
                        <a href="vendor-details.html"><img src="/wed/assets/image/venues/03.jpg" alt=""></a>
                    </div>
                    <div class="venues-info-box">
                        <h5><a href="vendor-details.html">Resturent</a></h5>
                        <div class="location">
                            <i class="ti-location-pin"></i> <span>Lacosta USA</span>
                        </div>

                    </div>
                </div><!--// Single-programs -->
            </div>
            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-venues mb-30">
                    <div class="venues-image">
                        <a href="vendor-details.html"><img src="/wed/assets/image/venues/04.jpg" alt=""></a>
                    </div>
                    <div class="venues-info-box">
                        <h5><a href="vendor-details.html">Buffet</a></h5>
                        <div class="location">
                            <i class="ti-location-pin"></i> <span>Lacosta USA</span>
                        </div>

                    </div>
                </div><!--// Single-programs -->
            </div>
            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-venues mb-30">
                    <div class="venues-image">
                        <a href="vendor-details.html"><img src="/wed/assets/image/venues/05.jpg" alt=""></a>
                    </div>
                    <div class="venues-info-box">
                        <h5><a href="vendor-details.html">Party Gallery</a></h5>
                        <div class="location">
                            <i class="ti-location-pin"></i> <span>Lacosta USA</span>
                        </div>

                    </div>
                </div><!--// Single-programs -->
            </div>
            <div class="col-12">
                <!-- Single-programs -->
                <div class="single-venues mb-30">
                    <div class="venues-image">
                        <a href="vendor-details.html"><img src="/wed/assets/image/venues/02.jpg" alt=""></a>
                    </div>
                    <div class="venues-info-box">
                        <h5><a href="vendor-details.html">Party Gallery</a></h5>
                        <div class="location">
                            <i class="ti-location-pin"></i> <span>Lacosta USA</span>
                        </div>

                    </div>
                </div><!--// Single-programs -->
            </div>

        </div>

    </div>
</div>
<!--// Most Resent Program  -->


<!-- Populer Categories -->
<div class="populer-categories-area section-pb-60">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>What you want</h3>
                    <h2>Popular Categories</h2>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-categories -->
                <div class="single-categories mb-30">
                    <div class="image">
                        <a href="listing-categorie.html"><img src="/wed/assets/image/catagories/01.jpg" alt=""></a>
                    </div>
                    <div class="contents-info">
                        <h4><a href="listing-categorie.html">Parties</a></h4>
                        <p>Lorem ipsum dolor sit amet,</p>
                    </div>
                </div> <!--// single-categories -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-categories -->
                <div class="single-categories mb-30">
                    <div class="image">
                        <a href="listing-categorie.html"><img src="/wed/assets/image/catagories/02.jpg" alt=""></a>
                    </div>
                    <div class="contents-info">
                        <h4><a href="#">Restaurant</a></h4>
                        <p>Lorem ipsum dolor sit amet,</p>
                    </div>
                </div> <!--// single-categories -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-categories -->
                <div class="single-categories mb-30">
                    <div class="image">
                        <a href="listing-categorie.html"><img src="/wed/assets/image/catagories/03.jpg" alt=""></a>
                    </div>
                    <div class="contents-info">
                        <h4><a href="#">Music</a></h4>
                        <p>Lorem ipsum dolor sit amet,</p>
                    </div>
                </div> <!--// single-categories -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-categories -->
                <div class="single-categories mb-30">
                    <div class="image">
                        <a href="listing-categorie.html"><img src="/wed/assets/image/catagories/04.jpg" alt=""></a>
                    </div>
                    <div class="contents-info">
                        <h4><a href="#">Catering</a></h4>
                        <p>Lorem ipsum dolor sit amet,</p>
                    </div>
                </div> <!--// single-categories -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-categories -->
                <div class="single-categories mb-30">
                    <div class="image">
                        <a href="#"><img src="/wed/assets/image/catagories/05.jpg" alt=""></a>
                    </div>
                    <div class="contents-info">
                        <h4><a href="listing-categorie.html">Interior</a></h4>
                        <p>Lorem ipsum dolor sit amet,</p>
                    </div>
                </div> <!--// single-categories -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-categories -->
                <div class="single-categories mb-30">
                    <div class="image">
                        <a href="listing-categorie.html"><img src="/wed/assets/image/catagories/06.jpg" alt=""></a>
                    </div>
                    <div class="contents-info">
                        <h4><a href="listing-categorie.html">Restaurant</a></h4>
                        <p>Lorem ipsum dolor sit amet,</p>
                    </div>
                </div> <!--// single-categories -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-categories -->
                <div class="single-categories mb-30">
                    <div class="image">
                        <a href="listing-categorie.html"><img src="/wed/assets/image/catagories/07.jpg" alt=""></a>
                    </div>
                    <div class="contents-info">
                        <h4><a href="#">Gallery</a></h4>
                        <p>Lorem ipsum dolor sit amet,</p>
                    </div>
                </div> <!--// single-categories -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-categories -->
                <div class="single-categories mb-30">
                    <div class="image">
                        <a href="listing-categorie.html"><img src="/wed/assets/image/catagories/08.jpg" alt=""></a>
                    </div>
                    <div class="contents-info">
                        <h4><a href="listing-categorie.html">Travel</a></h4>
                        <p>Lorem ipsum dolor sit amet,</p>
                    </div>
                </div> <!--// single-categories -->
            </div>
        </div>

    </div>
</div>
<!--// Populer Categories -->



<!-- Testimonial Area -->
<div class="testimonial-area bg-gray section-pt section-pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>they love us</h3>
                    <h2>Testimonial</h2>
                </div>
            </div>
        </div>

        <div class="row testimonial-active">
            <div class="col-lg-4">
                <!-- Single Proces -->
                <div class="single-testimonial mb-30">
                    <div class="content-testimonial">
                        <p>Lorem Ipsum is simply dummy text of the printin typesetting industry. Lorem Ipsum has been the standard dummy text. opposed to using 'Content here, content tex here making. Content here, content here making</p>
                    </div>
                    <div class="testimonial-info">
                        <h5><a href="#">Jonathan Castro</a></h5>
                        <div class="programs-details d-flex justify-content-between">
                            <div class="location">
                                <span>Around Florida</span>
                            </div>
                            <div class="reting d-flex">
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--// Single Proces -->
            </div>
            <div class="col-lg-4">
                <!-- Single Proces -->
                <div class="single-testimonial  mb-30">
                    <div class="content-testimonial">
                        <p>Lorem Ipsum is simply dummy text of the printin typesetting industry. Lorem Ipsum has been the standard dummy text. opposed to using 'Content here, content tex here making. Content here, content here making</p>
                    </div>
                    <div class="testimonial-info">
                        <h5><a href="#">Douglas Jones</a></h5>
                        <div class="programs-details d-flex justify-content-between">
                            <div class="location">
                                <span>Around Florida</span>
                            </div>
                            <div class="reting d-flex">
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--// Single Proces -->
            </div>
            <div class="col-lg-4">
                <!-- Single Proces -->
                <div class="single-testimonial  mb-30">
                    <div class="content-testimonial">
                        <p>Lorem Ipsum is simply dummy text of the printin typesetting industry. Lorem Ipsum has been the standard dummy text. opposed to using 'Content here, content tex here making. Content here, content here making</p>
                    </div>
                    <div class="testimonial-info">
                        <h5><a href="#">Olivia Palmer</a></h5>
                        <div class="programs-details d-flex justify-content-between">
                            <div class="location">
                                <span>Around Florida</span>
                            </div>
                            <div class="reting d-flex">
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--// Single Proces -->
            </div>
            <div class="col-lg-4">
                <!-- Single Proces -->
                <div class="single-testimonial  mb-30">
                    <div class="content-testimonial">
                        <p>Lorem Ipsum is simply dummy text of the printin typesetting industry. Lorem Ipsum has been the standard dummy text. opposed to using 'Content here, content tex here making. Content here, content here making</p>
                    </div>
                    <div class="testimonial-info">
                        <h5><a href="#">Mark Jones</a></h5>
                        <div class="programs-details d-flex justify-content-between">
                            <div class="location">
                                <span>Around Florida</span>
                            </div>
                            <div class="reting d-flex">
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--// Single Proces -->
            </div>
        </div>

    </div>
</div>
<!--// Testimonial Area -->


<!-- latest-blog-area -->
<div class="latest-blog-area section-pt section-pb-60">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>get al updates</h3>
                    <h2>Latest News & Blog</h2>
                </div>
            </div>
        </div>

        <div class="row latest-blog-active">
            <div class="col-lg-4">
                <!-- single-lest-blog -->
                <div class="single-lest-blog mb-30">
                    <div class="blog-image">
                        <a href="blog-details.html"><img src="/wed/assets/image/blog/01.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><a href="#">Event</a></span> <span><a href="#">11 hours ago</a></span>
                        </div>
                        <h4><a href="blog-details.html">Making a full wedding plan for james.</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum has been the standard dummy text. </p>
                    </div>
                </div><!--// single-lest-blog -->
            </div>
            <div class="col-lg-4">
                <!-- single-lest-blog -->
                <div class="single-lest-blog mb-30">
                    <div class="blog-image">
                        <a href="blog-details.html"><img src="/wed/assets/image/blog/02.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><a href="#">Event</a></span> <span><a href="#">21 hours ago</a></span>
                        </div>
                        <h4><a href="blog-details.html">The best wedding place, Wonderful.</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum has been the standard dummy text. </p>
                    </div>
                </div><!--// single-lest-blog -->
            </div>
            <div class="col-lg-4">
                <!-- single-lest-blog -->
                <div class="single-lest-blog mb-30">
                    <div class="blog-image">
                        <a href="blog-details.html"><img src="/wed/assets/image/blog/03.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><a href="#">Event</a></span> <span><a href="#">03 hours ago</a></span>
                        </div>
                        <h4><a href="blog-details.html">We see the best sunset together.</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum has been the standard dummy text. </p>
                    </div>
                </div><!--// single-lest-blog -->
            </div>
            <div class="col-lg-4">
                <!-- single-lest-blog -->
                <div class="single-lest-blog mb-30">
                    <div class="blog-image">
                        <a href="blog-details.html"><img src="/wed/assets/image/blog/04.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><a href="#">Event</a></span> <span><a href="#">13 hours ago</a></span>
                        </div>
                        <h4><a href="blog-details.html">How Do You Plan A Wedding Party for couple.</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum has been the standard dummy text. </p>
                    </div>
                </div><!--// single-lest-blog -->
            </div>
        </div>
    </div>
</div>

<!--// latest-blog-area -->

<!-- Footer Area  -->
<div class="footer-area bg-footer">
    <div class="footer-top section-pt-60 section-pb text-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget-footer mt-30">
                        <div class="footer-logo pb-10">
                            <a href="index.html"><img src="/wed/assets/image/logo/logo.png" alt=""></a>
                        </div>
                        <div class="footer-contents">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>

                            <ul>
                                <li><span>Phone: </span> <a href="#"> +125 2225 66</a></li>
                                <li><span>E-mail: </span> <a href="mailto:domain@mail.com">domain@mail.com</a></li>
                                <li><span>Address: </span> Bijoysoroni Southhall USA-125</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget-footer mt-30">
                        <div class="footer-title">
                            <h4>Related Links</h4>
                        </div>
                        <div class="footer-contents">
                            <ul>
                                <li><a href="vendor-grid.html">Vendor List</a></li>
                                <li><a href="listing-categorie.html">Wedding List</a></li>
                                <li><a href="#">Wedding Venue</a></li>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="RSVP.html">RSVP</a></li>
                                <li><a href="#">Event MAP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget-footer mt-30">
                        <div class="footer-title">
                            <h4>Account Info</h4>
                        </div>
                        <div class="footer-contents">
                            <ul>
                                <li><a href="#">Vendor Form</a></li>
                                <li><a href="#">Couple Form</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Profiles</a></li>
                                <li><a href="#">Vendor Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget-footer mt-30">
                        <div class="footer-title">
                            <h4>Related Links</h4>
                        </div>
                        <div class="footer-contents">
                            <div class="newsletter-box">
                                <input type="text" placeholder="Enter your mail address">
                                <button><i class="ti-arrow-right"></i></button>
                            </div>
                            <p class="mt-15">Get all updates, Don’t miss any update. Lorem Ipsum is simply dummy text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center text-white">&copy; 2019 All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Footer Area  -->


<!-- Map js code here -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>
<script src="/wed/assets/js/plugins.min.js"></script>
<script src="/wed/assets/js/maplace-active.js"></script>
<script src="/wed/assets/js/custom.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>


<!-- Mirrored from demo.hasthemes.com/wedding-v1.1/weddist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2019 13:49:27 GMT -->
</html>
