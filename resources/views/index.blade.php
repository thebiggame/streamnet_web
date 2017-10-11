
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Streamnet | theBIGGAME</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/app.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/resources/css/fronthouse.css" rel="stylesheet">
    <?php $files = glob(public_path('resources/img/slideshow') . '/*.*');
    $file = array_rand($files);?>
    <style>body{ background-image: url({{url('/resources/img/slideshow/'.basename($files[$file]))}})}</style>
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">streamnet @ <span class="label label-info">tBG{{config('app.eventid', '0')}}</span></h3>
                    <nav class="nav nav-masthead">
                        <a class="nav-link" href="/watch">Watch</a>
                        |
                        <b style="font-family: 'Comfortaa', cursive; color: rgba(255,255,255,.90); background-color: transparent;" class="nav-item">internastream:</b>
                        <a class="nav-link" href="/interna/instructions">instructions</a>
                        ,
                        <a class="nav-link" href="/interna/directory">directory</a>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">Welcome to Streamnet.</h1>
                <p class="lead">theBIGGAME{{config('app.eventid', '0')}}'s destination for the ultimate in #productionquality</p>
                <p class="lead">
                    <a href="/watch" class="btn btn-lg btn-primary">Watch the stream &raquo;</a>
                    <div class="btn-group">
                        <a href="/interna/instructions" class="btn btn-lg btn-secondary btn-primary"><b style="font-family: 'Comfortaa', cursive;">internastream:</b></a>
                        <a href="/interna/instructions" class="btn btn-lg btn-info">Instructions&raquo;</a>
                        <a href="/interna/directory" class="btn btn-lg btn-info">Directory&raquo;</a>
                    </div>
                </p>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>&copy; theBIGGAME {{date('Y')}} &centerdot; streamnet by <a href="http://twitter.com/luaduck">@luaduck</a></p>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/assets/js/core.js"></script>
</body>
</html>
