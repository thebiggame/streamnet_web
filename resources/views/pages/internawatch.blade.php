@extends('templates.master')
@section('title', 'Watch '.$streamname.' on internastream')
@section('head')
    @parent
    <script src="/vendor/videojs/video.min.js"></script>
    <script src="/resources/js/videojsplugins/videojs.ads.js"></script>
    <script src="/resources/js/videojsplugins/videojs-preroll.min.js"></script>
    <link href="/vendor/videojs/video-js.min.css" rel="stylesheet" type="text/css">
    <link href="/resources/css/videojsplugins/videojs.ads.css" rel="stylesheet" type="text/css">
    <link href="/resources/css/videojsplugins/videojs-preroll.css" rel="stylesheet" type="text/css">
    <style>body{background-color: rgb(33,33,33)}</style>
@endsection

@section('content')
    <div class="container">
        <div class="videoWrapper">
            <video id="interna" class="video-js vjs-default-skin vjs-16-9" controls autoplay width="1000px">
                <source src="rtmp://stream.biggame/interna/{{$streamname}}" type='rtmp/flv'/>
            </video>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-inverse" style="background-color: #333; border-color: #333;">
                    <div class="card-block">
                        <h3 class="card-title"><span class="fa fa-exchange"></span> Manual Connection</h3>
                        <p class="card-text">
                            <kbd>rtmp://stream.biggame/interna/{{$streamname}}</kbd>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-inverse" style="background-color: #333; border-color: #333;">
                    <div class="card-block">
                        <h3 class="card-title"><span class="fa fa-warning"></span> internastream notice</h3>
                        <p class="card-text">
                            If the stream is squashed into a little box in the top left, fullscreening and then returning should fix it.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        videojs.options.flash.swf = "http://localhost:8000/vendor/videojs/video-js.swf"
        videojs('interna', {}, function(){

            var player = this;
            // player.preroll({
            //     src:"/resources/video/interna.mp4",
            //     skipTime:0
            // });
        });
    </script>
@stop