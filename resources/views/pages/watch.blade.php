@extends('templates.master')
@section('title', 'Watch tBGLIVE')
@section('head')
    @parent
    {{-- <script src="http://vjs.zencdn.net/5.16.0/video.js"></script> --}}
    {{-- <script src="/resources/js/videojsplugins/videojs.ads.js"></script> --}}
    {{-- <script src="/resources/js/videojsplugins/videojs-preroll.min.js"></script>--}}
    {{-- <link href="/vendor/videojs/video-js.min.css" rel="stylesheet" type="text/css"> --}}
    {{-- <link href="/resources/css/videojsplugins/videojs.ads.css" rel="stylesheet" type="text/css"> --}}
    {{-- <link href="/resources/css/videojsplugins/videojs-preroll.css" rel="stylesheet" type="text/css"> --}}
    <style>
        body{background-color: rgb(10,10,10);}
        .site-wrapper-content {  margin: 0px; height: 100%;}
        .video-container{ padding: 0px; height: 100%;}
    </style>
@endsection

@push('navbar-elements')
    <span class="navbar-text"><small><kbd>rtmp://stream.biggame/ingest/tbgtv</kbd> <kbd>http://stream.biggame/hls/tbgtv.m3u8</kbd></small></span>
    <span class="navbar-text"><span class="fa fa-twitch"></span> <a href="http://www.twitch.tv/tbglan">tbglan</a></span>
    <span class="navbar-text"><a href="javascript:window.open('https://www.twitch.tv/tbglan/chat?popout=','tBG Twitch Chat (kappa)','width=340,height=600')"><span class="fa fa-commenting-o"></span> Chat</a></span>
    <span class="navbar-text"><span class="fa fa-twitter"></span> <a href="http://twitter.com/tbglan">tbglan</a></span>
@endpush

@section('content')
    <div class="container-fluid video-container">
                <div class="videoWrapper">
                    <video id="tbglive" class="video-js vjs-live vjs-default-skin vjs-big-play-centered" controls autoplay width="1000px" data-setup='{"autoplay": true}'>
                        <source src="http://stream.biggame/dash/tbgtv.mpd" type="application/dash+xml"/>
                        <source src="http://stream.biggame/hls/tbgtv.m3u8" type="application/x-mpegURL"/>
                    </video>
                </div>
    </div>
@stop
@push('scripts')
    <script>
        videojs.log.level('error');
        var player = videojs('tbglive');
        player.controlBar.liveDisplay.show()
    </script>
@endpush
