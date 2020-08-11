<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width initial-scale=1.0" charset="UTF-8">
        <title>@yield('title')</title>
        

        <link rel="stylesheet" href="{{ asset('font-awesome/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.css') }}" type="text/css">
        <!-- BEGIN CUSTOM STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}">
        <!-- END CUSTOM STYLES -->

    </head>
    <body>
        
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="" class="navbar-brand">
                        <img src="{{ asset('img/logo/logo.png') }}" alt="Logo" class="img-responsive">
                    </a>
                
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsemenu" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="collapse navbar-collapse" id="collapsemenu">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('movies') }}"> <i class="fa fa-film"></i> Movies </a></li>
                        <!--<li><a href=""> <i class="fa fa-tv"></i> Series </a></li>
                        <li><a href=""> <i class="fa fa-baby"></i> Animation </a></li> -->
                    </ul>
                </div>

            </div>  
        </nav>

        @yield('content')
        
        <!-- BEGIN JAVASCRIPT LINKS -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
        <!-- END JAVASCRIPT LINKS -->   
    
    </body>
</html>
