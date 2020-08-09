<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- BEGIN LARAVEL STYLES -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- END LARAVEL STYLES -->

    <!-- BEGIN BOOTSTRAP STYLES -->
    <link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END BOOTSTRAP STYLES -->

    <!-- BEGIN INCLUSION OF FONT AWESOME -->
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('font-awesome-old/css/font-awesome.min.css') }}">
    <!-- END INCLUSION OF FONT AWESOME -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ URL::asset('css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ URL::asset('css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <!-- END THEME LAYOUT STYLES -->
    
    <!-- BEGIN CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin-styles.css') }}">
    <!-- END CUSTOM STYLES -->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <img src="{{ URL::asset('img/logo/logo.png') }}" alt="logo" class="logo-default" /> 
                    
                    <div class="menu-toggler sidebar-toggler" style="color:#FFFFFF; padding-top: 10px;"> <i class="fa fa-bars fa-lg"></i> </div>
                </div>
                <!-- END LOGO -->
                
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->

                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
        
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="{{ URL::asset('img/profile/team8.jpg') }}" />
                                <span class="username username-hide-on-mobile"> Ndolo </span>
                                <i class="fa fa-angle-down"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                
                                <li>
                                    <a href="page_user_login_1.html">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>

                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->

        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar navbar-collapse collapse">
                    
                    <!-- BEGIN SIDEBAR MENU -->                    
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">                        

                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>

                        <li class="nav-item @yield('dashboard-active') ">
                            <a href="" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>

                        <li class="heading">
                            <h3 class="uppercase">Feature Actions</h3>
                        </li>
                        
                        <!-- BEGIN CLIENT SIDE MENU -->
                        <li class="nav-item @yield('movies-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-film"></i>
                                <span class="title">Movies</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{ route('movies-create') }}" class="nav-link ">
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Add New</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ route('movies-all') }}" class="nav-link ">
                                        <i class="fa fa-eye"></i>
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <!-- END CLIENT SIDE MENU -->
                        
                        <!-- BEGIN EVENTS SIDE MENU -->
                        <li class="nav-item @yield('events-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-tv"></i>
                                <span class="title">Series</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <!-- END EVENTS SIDE MENU -->

                        <!-- BEGIN ACTIVITY SIDE MENU -->
                        <li class="nav-item @yield('activity-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-baby"></i>
                                <span class="title">Animation</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <!-- END ACTIVITY SIDE MENU -->

                        <!-- BEGIN SPONSOR SIDE MENU -->
                        <li class="nav-item @yield('sponsors-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-money"></i>
                                <span class="title">Income</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <!-- END SPONSOR SIDE MENU -->

                        <!-- BEGIN OUR SERVICES SIDE MENU -->
                        <li class="nav-item @yield('services-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-globe"></i>
                                <span class="title">African</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <!-- END OUR SERVICE SIDE MENU -->
                        
                        
                        <!-- BEGIN MESSAGE SIDE MENU -->
                        <li class="heading">
                            <h3 class="uppercase">Messages</h3>
                        </li>
                        
                        
                        <li class="nav-item @yield('messages-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Inbox</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <!--<li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li> -->
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <!-- END MESSAGE SIDE MENU -->                        
                                
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">

                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <span> Home </span>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span> @yield('page-title') </span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->

                    @yield('content')

                </div>

             </div>
            <!-- END CONTENT -->

        </div>
        <!-- END CONTAINER -->

        <!-- BEGIN FOOTER -->
        <div class="page-footer">            
            <div class="scroll-to-top"> <i class="icon-arrow-up"></i> </div>
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- BEGIN CORE PLUGINS -->
        <script src="{{ URL::asset('js/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/bootstrap/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ URL::asset('Js/morris/morris.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/morris/raphael-min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ URL::asset('js/app.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery.counterup.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{ URL::asset('js/layout.min.js') }}" type="text/javascript"></script> 
        <script src="{{ URL::asset('js/quick-sidebar.min.js') }}" type="text/javascript"></script> 
        <!-- END THEME LAYOUT SCRIPTS -->

</body>
</html>
