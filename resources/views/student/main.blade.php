<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="sERP is an advanced Resource Planner">
    <meta name="author" content="Nick">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom stylesheet for few components -->
    <link rel="stylesheet" href="{{ asset('css/serp-custom.css') }}">
    @yield('head-scripts')
</head>
<body class="fix-header fix-sidebar card-no-border">
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
</div>
<div id="main-wrapper">
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <b>
                        <img src="{{ asset('images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                    </b>

                    <span>
                         <img src="{{ asset('images/logo-light-text.png') }}" class="light-logo" alt="homepage" /></span> </a>
            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto mt-md-0">
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                </ul>
                <ul class="navbar-nav my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="starter-kit.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="starter-kit.html#">
                                            <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="starter-kit.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/users/1.jpg') }}" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="{{ asset('images/users/1.jpg') }}" alt="user"></div>
                                        <div class="u-text">
                                            <h4>Steave Jobs</h4>
                                            <p class="text-muted">varun@gmail.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="starter-kit.html#"><i class="ti-user"></i> My Profile</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="starter-kit.html#"><i class="ti-settings"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('do_logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar">
        <div class="scroll-sidebar">
            <div class="user-profile" style="background: url({{ asset('images/background/user-info.jpg') }}) no-repeat;">
                <div class="profile-img"> <img src="{{ asset('images/users/1.jpg') }}" alt="user" /> </div>
            </div>
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">GENERAL INFO</li>
                    <li class="{{ (Request::url() == route('student.dashboard')) ? 'active' : '' }}">
                        <a href="{{ route('student.dashboard') }}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li class="{{ (Request::url() == route('student.numbers')) ? 'active' : '' }}">
                        <a href="{{ route('student.numbers') }}" aria-expanded="false"><i class="mdi mdi-tie"></i><span class="hide-menu">Faculty Details</span></a>
                    </li>
                    <li class="{{ (Request::url() == route('student.timetable')) ? 'active' : '' }}">
                        <a href="{{ route('student.timetable') }}" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Time Table</span></a>
                    </li>
                    <li class="{{ (Request::url() == route('student.financials')) ? 'active' : '' }}">
                        <a href="{{ route('student.financials') }}" aria-expanded="false"><i class="fa fa-dollar-sign"></i><span class="hide-menu">Financial Details</span></a>
                    </li>
                    <li class="{{ (Request::url() == route('student.academics')) ? 'active' : '' }}">
                        <a href="{{ route('student.academics') }}" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Academic Details</span></a>
                    </li>
                    <li class="{{ (Request::url() == route('student.profile')) ? 'active' : '' }}">
                        <a href="{{ route('student.profile') }}" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">My Profile</span></a>
                    </li>

                    {{-- Drop down menu --}}
                    {{--<li class="">--}}
                        {{--<a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">With Dropdown</span></a>--}}
                        {{--<ul aria-expanded="false" class="collapse">--}}
                            {{--<li><a href="#" class="">Google Maps</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
            </nav>
        </div>
    </aside>
    <div class="page-wrapper">
        <div class="container-fluid">

            @yield('breadcrumbs')

            @yield('page-content')

            {{-- Scroll to top --}}
            <div id="scroll-top">
                <button type="button" class="btn btn-circle btn-primary waves-effect waves-light"><i class="fa fa-chevron-up text-white"></i></button>
            </div>

        </div>
        <footer class="footer">
            <p>Crafted with <i class="fa fa-heart text-danger" data-toggle="tooltip" title="Nick"></i> and lot's of <i class="fa fa-coffee" data-toggle="tooltip" title="Pranjal"></i></p>
        </footer>
    </div>
</div>
<!-- Lovely jQuery (Must be the first one to load) -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('plugins/popper/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Slim scrollbar JavaScript -->
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>

<!--Wave Effects Javascript -->
<script src="{{ asset('js/waves.js') }}"></script>

<!--Menu sidebar -->
<script src="{{ asset('js/sidebarmenu.js') }}"></script>

<!--stickey kit -->
<script src="{{ asset('plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!--Custom JavaScript -->
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
<script src="{{ asset('js/serp.js') }}"></script>

<!-- Injected(per-page) JavaScript(s) -->
@yield('bottom-scripts')
</body>
</html>