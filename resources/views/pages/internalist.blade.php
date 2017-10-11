@extends('templates.master')
@section('title', 'InternaStream | Instructions')

@section('content')
    <div class="container" style="padding-top: 60px; padding-bottom: 60px;">
        <div class="panel panel-default" style="text-align: center;">
            <div class="panel-body">
                <h1 class="internatext">internastream.</h1>
                <hr>
                <h3>Directory</h3>
            </div>
        </div>
        <div class="container">
            <br>
            <div class="row">
                @if($streams)
                    @foreach($streams as $stream)
                    <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" style="width: 100%" src="/img/channel_{{$stream['name']}}.jpg" alt="Stream screenshot!">
                                <div class="card-block text-xs-center">
                                    <h4 class="card-title">{{$stream['name']}}</h4>
                                    <p class="card-text"><small class="text-muted">Uptime: {{gmdate("H:i:s", ($stream["time"]/1000))}}</small></p>
                                    <a class="btn btn-success" href="/interna/watch/{{$stream['name']}}"> <span class="fa fa-play"></span> Watch</a>
                                </div>
                            </div>
                    </div>
                    @endforeach
                @else
                    <div class="col-md-12">
                        <p class="text-xs-center">No InternaStreams currently available.</p>
                        <br>
                        <p class="text-xs-center"><a class="btn btn-lg btn-primary" href="/interna/directory"><i class="fa fa-refresh fa-spin"></i> Refresh</a></p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop