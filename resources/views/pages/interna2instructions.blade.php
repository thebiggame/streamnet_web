@extends('templates.master')
@section('title', 'InternaStream | Instructions')

@section('content')
    <div class="container text-white" style="padding-top: 60px; padding-bottom: 60px;">
        <div>
                <h1 class="display-1 interna-font">internastream<sup>2</sup></h1>
        </div>
        <hr>
        <p class="lead">
            internastream<sup>2</sup> is the latest incarnation of internastream technology, allowing you to send us your gameplay in real time.<br>
            <small class="text-muted">Streams are reviewed regularly by the crew, and <b>may be chosen for the main tBG stream!</b> We encourage you to stream BIG GAMES to internastream to give us some material to work with - the more the better!</small>
        </p>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div id="guide_vmix">
                        <h2>The Guide</h2>
                        <hr>
                        <ol>
                            <li>Download (and extract) vMix Desktop Capture.
                                <ul>
                                    <li>For Windows: <a href="http://cdn.vmix.com/download/vMixDesktopCaptureNDI.zip">http://cdn.vmix.com/download/vMixDesktopCaptureNDI.zip</a></li>
                                    <li>For MacOS: <a href="http://cdn.vmix.com/download/vMixDesktopCaptureMacNDI.zip">http://cdn.vmix.com/download/vMixDesktopCaptureMacNDI.zip</a></li>
                                </ul>
                            </li>
                            <li>Run the .exe (or .app) inside the zip file.</li>
                            <li>Minimize the application, or leave it running to the side.</li>
                            <li><b>You're done! Play some games!</b></li>
                        </ol>
                    </div>
                </div>
                <hr>
                <div class="row">

                    <div class="panel panel-warning" id="faq">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-question-sign"></span> Frequently Asked Questions</h3>
                        </div>
                        <div class="panel-body">
                            <dl>
                                <dt>Does vMix Desktop Capture slow down my PC?</dt>
                                <dd>internastream<sup>2</sup> uses the magic of a combination of <a href="https://www.newtek.com/ndi/">NDI</a> and your modern GPU's built in encoding, such that the performance hit from streaming is next to nothing (technology!). When we are not pulling your stream from your PC, there is absolutely no performance penalty.</dd>
                            </dl><dl>
                                <dt>How will I know if you're using my stream?</dt>
                                <dd>The indicator in the Desktop Capture window which normally shows <kbd>0 FPS</kbd> will show a framerate like <kbd>60 FPS</kbd>.</dd>
                            </dl><dl>
                                <dt>Why vMix Desktop Capture in internastream<sup>2</sup>? Why not the old RTMP / OBS solution?</dt>
                                <dd>The old solution was a lot more resource intensive for end user machines, and introduced a 10s+ delay. This new solution has a sub-50ms delay, virtually no quality loss, and is basically black magic.</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@stop