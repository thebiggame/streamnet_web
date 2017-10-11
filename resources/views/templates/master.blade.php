<!DOCTYPE html>
<html lang="en">
<head>
    @section('head')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="theBIGGAME's streamy paradise..">
        <meta name="author" content="luaduck for theBIGGAME">
        <link rel="manifest" href="manifest.json">
        <title>@yield('title') | theBIGGAME</title>

        <!-- Bootstrap core CSS -->
        <link href="/assets/css/app.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,400' rel='stylesheet' type='text/css'>


    @show
</head>

<body>
<div class="site-wrapper">
    <nav class="navbar fixed-bottom navbar-expand-md navbar-inverse bg-dark">

        <a class="navbar-brand" href="/"><span class="badge badge-primary badge-pill">tBG{{config('app.eventid', '0')}}</span> <span class="streamnet-font">stream></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-auto mt-2 mt-lg-0" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-secondary btn-sm interna-font" href="/interna">
                        internastream
                    </a>
                </li>
            </ul>
            @stack('navbar-elements')
        </div>
    </nav>
    <div class="site-wrapper-content">
        @yield('content')
    </div>
    @section('footer')
        <div class="footer text-center">
            &copy; theBIGGAME {{date('Y')}} &centerdot; streamnet by <a href="http://twitter.com/luaduck">@luaduck</a>
        </div>
    @show
</div>
</body>
<!-- Scripts -->
<script src="/assets/js/core.js"></script>
@stack('scripts')
</html>
