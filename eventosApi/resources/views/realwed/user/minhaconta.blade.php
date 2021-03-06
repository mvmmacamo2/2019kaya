<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kaya | minha conta</title>
    <!-- Bootstrap -->
    <link href="/realwed/css/bootstrap.min.css" rel="stylesheet">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="/realwed/fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="/realwed/fontello/css/fontello.css" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Style CSS -->
    <link href="/realwed/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/realwed/css/offcanvas.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-bg">
<div class="dashboard-header">
    <div class="container-fluid" id="app">
        <div class="row">
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-6 col-6">
                <div class="header-logo">
                    <a href="index.html"><img src="/realwed/images/logo.png" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                <nav class="navbar navbar-expand-lg float-right db-nav-list">
                    <div>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown dropleft notification ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="notification-icon"> <i class="fas fa-bell"></i></span><span class="user-vendor-name"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                    <li>
                                        <div class="notification-title"> Notification</div>
                                        <div class="notification-list">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action active">
                                                    <div class="notification-info">
                                                        <div class="notification-list-user-img"><img src="{{Auth::user()->foto}}" alt="" class="user-avatar-md rounded-circle"></div>
                                                        <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                            <div class="notification-date">2 min ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="notification-info">
                                                        <div class="notification-list-user-img"><img src="/realwed/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                        <div class="notification-list-user-block"><span class="notification-list-user-name">John Deo</span>is now following you
                                                            <div class="notification-date">2 days ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="notification-info">
                                                        <div class="notification-list-user-img"><img src="/realwed/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                        <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                            <div class="notification-date">2 min ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="notification-info">
                                                        <div class="notification-list-user-img"><img src="/realwed/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                        <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                            <div class="notification-date">2 min ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-footer"> <a href="#">View all notifications</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropleft user-vendor ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="user-icon"> <img src="{{Auth::user()->foto}}" alt="" class="rounded-circle mb10"  style="width: 45px; height: 35px;"></span><span class="user-vendor-name">John Deo</span></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="vendor-dashboard-overview.html">Dashboard</a>
                                    <a class="dropdown-item" href="vendor-dashboard-listing.html"> My Listed Item </a>
                                    <a class="dropdown-item" href="vendor-dashboard-pricing.html">Pricing Plan</a>
                                    <a class="dropdown-item" href="vendor-dashboard-request-quote.html">Request Quotes</a>
                                    <a class="dropdown-item" href="vendor-dashboard-reviews.html">Reviews </a>
                                    <a class="dropdown-item" href="vendor-dashboard-profile.html">My Profile </a>
                                    <a class="dropdown-item" href="index.html">Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="offcanvas">
        <span id="icon-toggle" class="fa fa-bars"></span>
    </button>
</div>
<div class="dashboard-wrapper">
    <div class="dashboard-sidebar offcanvas-collapse">
        <div class="vendor-user-profile">
            <div class="vendor-profile-img">
                <img src="{{Auth::user()->foto}}" alt="" class="rounded-circle" style="width: 75px; height: 75px;"></div>
            <h3 class="vendor-profile-name">John Deo</h3>
            <a href="#" class="edit-link">edit profile</a>
        </div>
        <div class="dashboard-nav">
            <ul class="list-unstyled">
                <li><a href="vendor-dashboard-overview.html"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                <li class="active"><a href="vendor-dashboard-listing.html"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a></li>
                <li><a href="vendor-dashboard-pricing.html"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>
                <li><a href="vendor-dashboard-request-quote.html"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                <li><a href="vendor-dashboard-reviews.html"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                <li><a href="vendor-dashboard-profile.html"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                <li><a href="index.html"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
            </ul>
        </div>
    </div>
    <div class="dashboard-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="dashboard-page-header">
                        <h3 class="dashboard-page-title">My Listing</h3>
                        <p>Lists present multiple line items vertically as a single continuous element.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                    <a href="vendor-dashboard-add-listing.html" class="btn btn-default btn-sm">add new Listing</a>
                </div>
            </div>
            <div class="dashboard-vendor-list">
                <ul class="list-unstyled">
                    <li>
                        <div class="dashboard-list-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-img"><a href="#"><img src="/realwed/images/dashboard-list-img-1.jpg" alt="" class="img-fluid"></a></div>
                                </div>
                                <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12 ">
                                    <div class="dashboard-list-content">
                                        <h3 class="mb0"><a href="#" class="title">Wedding Venue Heading Title</a></h3>
                                        <p>1006 Fantages Way Norway, ME 04268</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-btn"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dashboard-list-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-img"><a href="#"><img src="/realwed/images/dashboard-list-img-2.jpg" alt="" class="img-fluid"></a></div>
                                </div>
                                <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12">
                                    <div class="dashboard-list-content">
                                        <h3 class="mb0"><a href="#" class="title">Wedding Venue Heading Title</a></h3>
                                        <p>4098 Robinson Court Lachine, MI 49753</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 ">
                                    <div class="dashboard-list-btn"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dashboard-list-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-img"><a href="#"><img src="/realwed/images/dashboard-list-img-3.jpg" alt="" class="img-fluid"></a></div>
                                </div>
                                <div class="col-xl-7 col-lg-5 col-md-7 col-sm-12 col-12">
                                    <div class="dashboard-list-content">
                                        <h3 class="mb0"><a href="#" class="title">Wedding Venue Heading Title</a></h3>
                                        <p>3316 Java Lane Orangeburg, SC 29115</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-btn"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dashboard-list-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-img"><a href="#"><img src="/realwed/images/dashboard-list-img-4.jpg" alt="" class="img-fluid"></a></div>
                                </div>
                                <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12">
                                    <div class="dashboard-list-content">
                                        <h3 class="mb0"><a href="#" class="title">Wedding Venue Heading Title</a></h3>
                                        <p>1006 Fantages Way Norway, ME 04268</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-btn"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dashboard-list-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-img"><a href="#"><img src="/realwed/images/dashboard-list-img-5.jpg" alt="" class="img-fluid"></a></div>
                                </div>
                                <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12">
                                    <div class="dashboard-list-content">
                                        <h3 class="mb0"><a href="#" class="title">Wedding Venue Heading Title</a></h3>
                                        <p>4098 Robinson Court Lachine, MI 49753</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-btn"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dashboard-list-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-img"><a href="#"><img src="/realwed/images/dashboard-list-img-6.jpg" alt="" class="img-fluid"></a></div>
                                </div>
                                <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12">
                                    <div class="dashboard-list-content">
                                        <h3 class="mb0"><a href="#" class="title">Wedding Venue Heading Title</a></h3>
                                        <p>3316 Java Lane Orangeburg, SC 29115</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-btn"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dashboard-list-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-img"><a href="#"><img src="/realwed/images/dashboard-list-img-4.jpg" alt="" class="img-fluid"></a></div>
                                </div>
                                <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12">
                                    <div class="dashboard-list-content">
                                        <h3 class="mb0"><a href="#" class="title">Wedding Venue Heading Title</a></h3>
                                        <p>3316 Java Lane Orangeburg, SC 29115</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="dashboard-list-btn"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/realwed/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/realwed/js/menumaker.min.js"></script>
<script src="/realwed/js/custom-script.js"></script>
<script src="/realwed/js/jquery.slimscroll.js"></script>
<script src="/realwed/js/bootstrap.bundle.min.js"></script>
<script src="/realwed/js/offcanvas.js"></script>

</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-dashboard-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2019 14:22:24 GMT -->
</html>
