<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/ubold/layouts/material/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2019 14:42:15 GMT -->
<head>
    <meta charset="utf-8" />
    <title>UBold - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/uboldAdmin/images/favicon.ico">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Plugins css -->
    <link href="/uboldAdmin/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="/uboldAdmin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/uboldAdmin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/uboldAdmin/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                        </h5>
                    </div>

                    <div class="slimscroll noti-scroll">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon">
                                <img src="/uboldAdmin/assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                            <p class="notify-details">Cristina Pride</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Hi, How are you? What about our next meeting</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon">
                                <img src="/uboldAdmin/assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                            <p class="notify-details">Karen Robinson</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Wow ! this admin looks good and awesome design</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="text-muted">5 hours ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-secondary">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <b>Admin</b>
                                <small class="text-muted">13 days ago</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fi-arrow-right"></i>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="/uboldAdmin/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                                Geneva <i class="mdi mdi-chevron-down"></i>
                            </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Lock Screen</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>


        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="/uboldAdmin/assets/images/logo-light.png" alt="" height="18">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="/uboldAdmin/assets/images/logo-sm.png" alt="" height="24">
                        </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li class="dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Create New
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-briefcase mr-1"></i>
                        <span>New Projects</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-user mr-1"></i>
                        <span>Create Users</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-bar-chart-line- mr-1"></i>
                        <span>Revenue Report</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-headphones mr-1"></i>
                        <span>Help & Support</span>
                    </a>

                </div>
            </li>

            <li class="dropdown dropdown-mega d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Mega Menu
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Widgets</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Nestable List</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Sliders</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Masonry Items</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sweet Alerts</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Treeview Page</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tour Page</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">Applications</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">eCommerce Pages</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">CRM Pages</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Email</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Team Contacts</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Task Board</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Email Templates</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">Extra Pages</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Left Sidebar with User</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Menu Collapsed</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Small Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">New Header Style</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Search Result</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Gallery Pages</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Maintenance & Coming Soon</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center mt-3">
                                <h3 class="text-dark">Special Discount Sale!</h3>
                                <h4>Save up to 70% off.</h4>
                                <button class="btn btn-primary btn-rounded mt-3">Download Now</button>
                            </div>
                        </div>
                    </div>

                </div>
            </li>
        </ul>
    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-airplay"></i>
                            <span class="badge badge-success badge-pill float-right">4</span>
                            <span> Dashboards </span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="dashboard-2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="dashboard-3.html">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="dashboard-4.html">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-pocket"></i>
                            <span> Apps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="apps-kanbanboard.html">Kanban Board</a>
                            </li>
                            <li>
                                <a href="apps-calendar.html">Calendar</a>
                            </li>
                            <li>
                                <a href="apps-contacts.html">Contacts</a>
                            </li>
                            <li>
                                <a href="apps-projects.html">Projects</a>
                            </li>
                            <li>
                                <a href="apps-tickets.html">Tickets</a>
                            </li>
                            <li>
                                <a href="apps-companies.html">Companies</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-users"></i>
                            <span> CRM </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="crm-dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="crm-contacts.html">Contacts</a>
                            </li>
                            <li>
                                <a href="crm-opportunities.html">Opportunities</a>
                            </li>
                            <li>
                                <a href="crm-leads.html">Leads</a>
                            </li>
                            <li>
                                <a href="crm-customers.html">Customers</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-shopping-cart"></i>
                            <span> eCommerce </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="ecommerce-dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="ecommerce-products.html">Products</a>
                            </li>
                            <li>
                                <a href="ecommerce-prduct-detail.html">Product Detail</a>
                            </li>
                            <li>
                                <a href="ecommerce-product-edit.html">Product Edit</a>
                            </li>
                            <li>
                                <a href="ecommerce-orders.html">Orders</a>
                            </li>
                            <li>
                                <a href="ecommerce-sellers.html">Sellers</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-sidebar"></i>
                            <span class="badge badge-pink float-right">New</span>
                            <span> Layouts </span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="layouts-sidebar-user.html">Sidebar with User</a>
                            </li>
                            <li>
                                <a href="layouts-sidebar-sm.html">Small Sidebar</a>
                            </li>
                            <li>
                                <a href="layouts-dark-sidebar.html">Dark Sidebar</a>
                            </li>
                            <li>
                                <a href="layouts-light-topbar.html">Light Topbar</a>
                            </li>
                            <li>
                                <a href="layouts-preloader.html">Preloader</a>
                            </li>
                            <li>
                                <a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a>
                            </li>
                            <li>
                                <a href="layouts-boxed.html">Boxed</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-mail"></i>
                            <span> Email </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="email-inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="email-read.html">Read Email</a>
                            </li>
                            <li>
                                <a href="email-compose.html">Compose Email</a>
                            </li>
                            <li>
                                <a href="email-templates.html">Email Templates</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-file-text"></i>
                            <span> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="pages-starter.html">Starter</a>
                            </li>
                            <li>
                                <a href="pages-login.html">Log In</a>
                            </li>
                            <li>
                                <a href="pages-register.html">Register</a>
                            </li>
                            <li>
                                <a href="pages-signin-signup.html">Signin - Signup</a>
                            </li>
                            <li>
                                <a href="pages-recoverpw.html">Recover Password</a>
                            </li>
                            <li>
                                <a href="pages-lock-screen.html">Lock Screen</a>
                            </li>
                            <li>
                                <a href="pages-logout.html">Logout</a>
                            </li>
                            <li>
                                <a href="pages-confirm-mail.html">Confirm Mail</a>
                            </li>
                            <li>
                                <a href="pages-404.html">Error 404</a>
                            </li>
                            <li>
                                <a href="pages-404-alt.html">Error 404-alt</a>
                            </li>
                            <li>
                                <a href="pages-500.html">Error 500</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-package"></i>
                            <span> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="extras-profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="extras-timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="extras-sitemap.html">Sitemap</a>
                            </li>
                            <li>
                                <a href="extras-invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="extras-faqs.html">FAQs</a>
                            </li>
                            <li>
                                <a href="extras-search-results.html">Search Results</a>
                            </li>
                            <li>
                                <a href="extras-pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="extras-maintenance.html">Maintenance</a>
                            </li>
                            <li>
                                <a href="extras-coming-soon.html">Coming Soon</a>
                            </li>
                            <li>
                                <a href="extras-gallery.html">Gallery</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-title mt-2">Components</li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-briefcase"></i>
                            <span> UI Elements </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="ui-buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="ui-portlets.html">Portlets</a>
                            </li>
                            <li>
                                <a href="ui-tabs-accordions.html">Tabs & Accordions</a>
                            </li>
                            <li>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui-progress.html">Progress</a>
                            </li>
                            <li>
                                <a href="ui-notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="ui-spinners.html">Spinners</a>
                            </li>
                            <li>
                                <a href="ui-images.html">Images</a>
                            </li>
                            <li>
                                <a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="ui-video.html">Embed Video</a>
                            </li>
                            <li>
                                <a href="ui-dropdowns.html">Dropdowns</a>
                            </li>
                            <li>
                                <a href="ui-ribbons.html">Ribbons</a>
                            </li>
                            <li>
                                <a href="ui-tooltips-popovers.html">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="ui-general.html">General UI</a>
                            </li>
                            <li>
                                <a href="ui-typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="ui-grid.html">Grid</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-layers"></i>
                            <span class="badge badge-info float-right">Hot</span>
                            <span> Admin UI </span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="admin-widgets.html">Widgets</a>
                            </li>
                            <li>
                                <a href="admin-nestable.html">Nestable List</a>
                            </li>
                            <li>
                                <a href="admin-range-slider.html">Range Slider</a>
                            </li>
                            <li>
                                <a href="admin-animation.html">Animation</a>
                            </li>
                            <li>
                                <a href="admin-sweet-alert.html">Sweet Alert</a>
                            </li>
                            <li>
                                <a href="admin-tour.html">Tour Page</a>
                            </li>
                            <li>
                                <a href="admin-loading-buttons.html">Loading Buttons</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-cpu"></i>
                            <span> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="icons-feather.html">Feather Icons</a>
                            </li>
                            <li>
                                <a href="icons-mdi.html">Material Design Icons</a>
                            </li>
                            <li>
                                <a href="icons-dripicons.html">Dripicons</a>
                            </li>
                            <li>
                                <a href="icons-font-awesome.html">Font Awesome</a>
                            </li>
                            <li>
                                <a href="icons-themify.html">Themify</a>
                            </li>
                            <li>
                                <a href="icons-simple-line.html">Simple Line</a>
                            </li>
                            <li>
                                <a href="icons-weather.html">Weather</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-bookmark"></i>
                            <span> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="forms-elements.html">General Elements</a>
                            </li>
                            <li>
                                <a href="forms-advanced.html">Advanced</a>
                            </li>
                            <li>
                                <a href="forms-validation.html">Validation</a>
                            </li>
                            <li>
                                <a href="forms-pickers.html">Pickers</a>
                            </li>
                            <li>
                                <a href="forms-wizard.html">Wizard</a>
                            </li>
                            <li>
                                <a href="forms-masks.html">Masks</a>
                            </li>
                            <li>
                                <a href="forms-summernote.html">Summernote</a>
                            </li>
                            <li>
                                <a href="forms-quilljs.html">Quilljs Editor</a>
                            </li>
                            <li>
                                <a href="forms-file-uploads.html">File Uploads</a>
                            </li>
                            <li>
                                <a href="forms-x-editable.html">X Editable</a>
                            </li>
                            <li>
                                <a href="forms-image-crop.html">Image Crop</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-grid"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="tables-basic.html">Basic Tables</a>
                            </li>
                            <li>
                                <a href="tables-datatables.html">Data Tables</a>
                            </li>
                            <li>
                                <a href="tables-editable.html">Editable Tables</a>
                            </li>
                            <li>
                                <a href="tables-responsive.html">Responsive Tables</a>
                            </li>
                            <li>
                                <a href="tables-footables.html">FooTable</a>
                            </li>
                            <li>
                                <a href="tables-bootstrap.html">Bootstrap Tables</a>
                            </li>
                            <li>
                                <a href="tables-tablesaw.html">Tablesaw Tables</a>
                            </li>
                            <li>
                                <a href="tables-jsgrid.html">JsGrid Tables</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-bar-chart-2"></i>
                            <span> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="charts-flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="charts-morris.html">Morris Charts</a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html">Chartjs Charts</a>
                            </li>
                            <li>
                                <a href="charts-peity.html">Peity Charts</a>
                            </li>
                            <li>
                                <a href="charts-chartist.html">Chartist Charts</a>
                            </li>
                            <li>
                                <a href="charts-c3.html">C3 Charts</a>
                            </li>
                            <li>
                                <a href="charts-sparklines.html">Sparklines Charts</a>
                            </li>
                            <li>
                                <a href="charts-knob.html">Jquery Knob Charts</a>
                            </li>
                            <li>
                                <a href="charts-ricksaw.html">Ricksaw Charts</a>
                            </li>
                            <li>
                                <a href="charts-just-gage.html">JustGage Charts</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-map"></i>
                            <span> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="maps-google.html">Google Maps</a>
                            </li>
                            <li>
                                <a href="maps-vector.html">Vector Maps</a>
                            </li>
                            <li>
                                <a href="maps-mapael.html">Mapael Maps</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-folder-plus"></i>
                            <span> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);">Level 1.1</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-third-level nav" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Level 2.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Level 2.2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page" id="app">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control border-white" id="dash-daterange">
                                            <div class="input-group-append">
                                                        <span class="input-group-text bg-blue border-blue text-white">
                                                            <i class="mdi mdi-calendar-range font-13"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                                        <i class="mdi mdi-autorenew"></i>
                                    </a>
                                    <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                                        <i class="mdi mdi-filter-variant"></i>
                                    </a>
                                </form>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle shadow-lg bg-primary border-primary border">
                                        <i class="fe-heart font-22 avatar-title text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1">$<span data-plugin="counterup">58,947</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle shadow-lg bg-success border-success border">
                                        <i class="fe-shopping-cart font-22 avatar-title text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Today's Sales</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle shadow-lg bg-info border-info border">
                                        <i class="fe-bar-chart-line- font-22 avatar-title text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                                        <p class="text-muted mb-1 text-truncate">Conversion</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle shadow-lg bg-warning border-warning border">
                                        <i class="fe-eye font-22 avatar-title text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">78.41</span>k</h3>
                                        <p class="text-muted mb-1 text-truncate">Today's Visits</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Total Revenue</h4>

                            <div class="widget-chart text-center" dir="ltr">
                                <input data-plugin="knob" data-width="160" data-height="160" data-linecap=round data-fgColor="#f1556c" value="60" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".12"/>
                                <h5 class="text-muted mt-3">Total sales made today</h5>
                                <h2>$178</h2>

                                <p class="text-muted w-75 mx-auto sp-line-2">Traditional heading elements are designed to work best in the meat of your page content.</p>

                                <div class="row mt-3">
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                        <h4><i class="fe-arrow-down text-danger mr-1"></i>$7.8k</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                        <h4><i class="fe-arrow-up text-success mr-1"></i>$1.4k</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                        <h4><i class="fe-arrow-down text-danger mr-1"></i>$15k</h4>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end col-->

                    <div class="col-xl-8">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Sales Analytics</h4>

                            <div id="sales-analytics" class="flot-chart mt-4 pt-1" style="height: 375px;"></div>
                        </div> <!-- end card-box -->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Top 5 Users Balances</h4>

                            <div class="table-responsive">
                                <table class="table table-borderless table-hover table-centered m-0">

                                    <thead class="thead-light">
                                    <tr>
                                        <th colspan="2">Profile</th>
                                        <th>Currency</th>
                                        <th>Balance</th>
                                        <th>Reserved in orders</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="/uboldAdmin/assets/images/users/user-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal">Tomaslau</h5>
                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                        </td>

                                        <td>
                                            <i class="mdi mdi-currency-btc text-primary"></i> BTC
                                        </td>

                                        <td>
                                            0.00816117 BTC
                                        </td>

                                        <td>
                                            0.00097036 BTC
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="/uboldAdmin/assets/images/users/user-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal">Erwin E. Brown</h5>
                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                        </td>

                                        <td>
                                            <i class="mdi mdi-currency-eth text-primary"></i> ETH
                                        </td>

                                        <td>
                                            3.16117008 ETH
                                        </td>

                                        <td>
                                            1.70360009 ETH
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="/uboldAdmin/assets/images/users/user-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal">Margeret V. Ligon</h5>
                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                        </td>

                                        <td>
                                            <i class="mdi mdi-currency-eur text-primary"></i> EUR
                                        </td>

                                        <td>
                                            25.08 EUR
                                        </td>

                                        <td>
                                            12.58 EUR
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="/uboldAdmin/assets/images/users/user-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal">Jose D. Delacruz</h5>
                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                        </td>

                                        <td>
                                            <i class="mdi mdi-currency-cny text-primary"></i> CNY
                                        </td>

                                        <td>
                                            82.00 CNY
                                        </td>

                                        <td>
                                            30.83 CNY
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="/uboldAdmin/assets/images/users/user-6.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal">Luke J. Sain</h5>
                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                        </td>

                                        <td>
                                            <i class="mdi mdi-currency-btc text-primary"></i> BTC
                                        </td>

                                        <td>
                                            2.00816117 BTC
                                        </td>

                                        <td>
                                            1.00097036 BTC
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Revenue History</h4>

                            <div class="table-responsive">
                                <table class="table table-borderless table-hover table-centered m-0">

                                    <thead class="thead-light">
                                    <tr>
                                        <th>Marketplaces</th>
                                        <th>Date</th>
                                        <th>Payouts</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="m-0 font-weight-normal">Themes Market</h5>
                                        </td>

                                        <td>
                                            Oct 15, 2018
                                        </td>

                                        <td>
                                            $5848.68
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-warning text-warning shadow-none">Upcoming</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 font-weight-normal">Freelance</h5>
                                        </td>

                                        <td>
                                            Oct 12, 2018
                                        </td>

                                        <td>
                                            $1247.25
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-success text-success shadow-none">Paid</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 font-weight-normal">Share Holding</h5>
                                        </td>

                                        <td>
                                            Oct 10, 2018
                                        </td>

                                        <td>
                                            $815.89
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-success text-success shadow-none">Paid</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 font-weight-normal">Envato's Affiliates</h5>
                                        </td>

                                        <td>
                                            Oct 03, 2018
                                        </td>

                                        <td>
                                            $248.75
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-danger text-danger shadow-none">Overdue</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 font-weight-normal">Marketing Revenue</h5>
                                        </td>

                                        <td>
                                            Sep 21, 2018
                                        </td>

                                        <td>
                                            $978.21
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-warning text-warning shadow-none">Upcoming</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 font-weight-normal">Advertise Revenue</h5>
                                        </td>

                                        <td>
                                            Sep 15, 2018
                                        </td>

                                        <td>
                                            $358.10
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-success text-success shadow-none">Paid</span>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div> <!-- end .table-responsive-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2015 - 2019 &copy; UBold theme by <a href="#">Coderthemes</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0 text-white">Settings</h5>
    </div>
    <div class="slimscroll-menu">
        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="/uboldAdmin/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
            </div>

            <h5><a href="javascript: void(0);">Geneva Kennedy</a> </h5>
            <p class="text-muted mb-0"><small>Admin Head</small></p>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h5 class="pl-3">Basic Settings</h5>
        <hr class="mb-0" />

        <div class="p-3">
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox1" type="checkbox" checked>
                <label for="Rcheckbox1">
                    Notifications
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox2" type="checkbox" checked>
                <label for="Rcheckbox2">
                    API Access
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox3" type="checkbox">
                <label for="Rcheckbox3">
                    Auto Updates
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox4" type="checkbox" checked>
                <label for="Rcheckbox4">
                    Online Status
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-0">
                <input id="Rcheckbox5" type="checkbox" checked>
                <label for="Rcheckbox5">
                    Auto Payout
                </label>
            </div>
        </div>

        <!-- Timeline -->
        <hr class="mt-0" />
        <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
        <hr class="mb-0" />
        <div class="p-3">
            <div class="inbox-widget">
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="/uboldAdmin/assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                    <p class="inbox-item-text">I've finished it! See you so...</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="/uboldAdmin/assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                    <p class="inbox-item-text">This theme is awesome!</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="/uboldAdmin/assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                    <p class="inbox-item-text">Nice to meet you</p>
                </div>

                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="/uboldAdmin/assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                    <p class="inbox-item-text">Hey! there I'm available...</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="/uboldAdmin/assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                    <p class="inbox-item-text">This theme is awesome!</p>
                </div>
            </div> <!-- end inbox-widget -->
        </div> <!-- end .p-3-->

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="/uboldAdmin/assets/js/vendor.min.js"></script>

<!-- Plugins js-->
<script src="/uboldAdmin/libs/flatpickr/flatpickr.min.js"></script>
<script src="/uboldAdmin/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="/uboldAdmin/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="/uboldAdmin/libs/flot-charts/jquery.flot.js"></script>
<script src="/uboldAdmin/libs/flot-charts/jquery.flot.time.js"></script>
<script src="/uboldAdmin/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
<script src="/uboldAdmin/libs/flot-charts/jquery.flot.selection.js"></script>
<script src="/uboldAdmin//libs/flot-charts/jquery.flot.crosshair.js"></script>

<!-- Dashboar 1 init js-->
<script src="/uboldAdmin/js/pages/dashboard-1.init.js"></script>

<!-- App js-->
<script src="/uboldAdmin/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/ubold/layouts/material/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2019 14:42:32 GMT -->
</html>
