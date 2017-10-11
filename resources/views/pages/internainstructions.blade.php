@extends('templates.master')
@section('title', 'InternaStream | Instructions')

@section('content')
    <div class="container" style="padding-top: 60px; padding-bottom: 60px;">
        <div style="text-align: center;">
                <h1 class="interna-font">internastream</h1>
        </div>
        <hr>
        <p class="lead">
            Send your gameplay to a friend for him to recombine into a picture-in-picture stream. Stream hentai to your enemies to distract them. Or just allow your fellow gamers to get a feel of what's going on without even leaving their chair.<br>
            <small class="text-muted">Streams are reviewed regularly by the crew, and <b>may be chosen for the main tBG stream!</b> We encourage you to stream BIG GAMES to InternaStream to give us some material to work with - the more the better!</small>
        </p>

        <div class="row">
            <div class="col-md-3 sidenav">
                <h4><span class="fa fa-list"></span> <a href="/interna/directory">Interna Directory</a></h4>
                <p>The directory shows everyone streaming on InternaStream.</p>
                <hr>
                <ul class="nav" role="tablist">
                    <li><a href="#guide_obs">&raquo; OBS Instructions</a></li>
                    <li><a href="#faq">&raquo; Frequently Asked Questions</a></li>
                </ul>
                <hr>
                <div class="card">
                    <div class="card-header">
                        <span class="glyphicon glyphicon-cog"></span> Custom Client Details
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Server:</li>
                        <li class="list-group-item"><kbd><small>rtmp://stream.biggame/interna</small></kbd></li>
                        <li class="list-group-item">Stream Key:</li>
                        <li class="list-group-item"><kbd><small>Your Nickname</small></kbd></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">

                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <span class="glyphicon glyphicon-info-sign"></span> Software choices
                        </div>
                        <div class="card-block">
                            Feel free to use any solution that can send H264 RTMP feeds, and that supports manually setting an RTMP endpoint address (sadly, this means no ShadowPlay at the moment). This includes, but is not limited to:
                            <ul>
                                <li><a href="https://obsproject.com/">Open Broadcaster Software</a> - recommended by tBG crew</li>
                                <li><a href="http://mishira.com/">Mishira</a></li>
                                <li><a href="https://xsplit.com/">Xsplit</a></li>
                                <li><a href="http://ffsplit.com/">ffsplit</a></li>
                            </ul><b>We've included a guide for Open Broadcaster Software (classic) below. Generic configuration details are provided to the left.</b>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div id="guide_obs">
                        <h2>OBS Classic Guide</h2>
                        <hr>
                        <ol>
                            <li><b>Install OBS and make sure it works properly.</b> If you need help with this, ask a member of the crew who will be more than happy to help.</li>
                            <li><b>Open <kbd>Settings</kbd></b> - We're going to be changing core settings so if you have Twitch already setup we suggest creating a new profile at this point</li>
                            <li><b>Complete the <a href="https://obsproject.com/estimator">OBS Estimator</a>, setting Upload Speed to 100000 or some equally silly amount.</b> Apply any reccomendations that it spits out - you'll find Framerate and Resolution / downscaling in the <kbd>Video</kbd> section.</li>
                            <li><b><kbd>&raquo; Encoding</kbd></b></li>
                            <li><b>Set <code>Max Bitrate</code> to <kbd>4500</kbd> or similar, and ensure <code>Use CBR</code> and <code>Enable CBR Padding</code> are enabled</b></li>
                            <li><b><kbd>&raquo; Broadcast Settings</kbd></b></li>
                            <li><b><code>Mode</code> &raquo; <kbd>Live Stream</kbd>, <code>Streaming Service</code> &raquo; <kbd>Custom</kbd>, and <code>Server</code> &raquo; <kbd>rtmp://stream.biggame/interna</kbd></b></li>
                            <li><b>Set your <code>Stream Key</code> to a meaningful value</b> - OBS will censor this like a password field, but you're OK to share this with anyone you want connecting to your stream.</li>
                            <li><b><kbd>&raquo; Advanced</kbd></b></li>
                            <li><b>Ensure these options look like <a href="http://s.duck.me.uk/Settings..._2014-02-12_21-48-43.png">this</a></b> - if you've been streaming to Twitch in the past, it should already be identical</li>
                            <li><b>Click <kbd>Apply</kbd>, then <kbd>OK</kbd> to save out</b></li>
                            <li>Ensure your scenes are set up as preferred (capturing games / windows is out of scope for this guide) using <code>Preview Stream</code>, and then <b>click <code>Start Streaming</code> to begin.</b> If OBS kicks back an error, see Troubleshooting below.</li>
                        </ol>
                    </div>
                </div>
                <hr>
                <div class="row">

                    <div class="panel panel-warning" id="faq">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-question-sign"></span> Troubleshooting / Server Errors</h3>
                        </div>
                        <div class="panel-body">
                            <dl>
                                <dt>OBS Error: <code>RTMPSockBuf_Fill, remote host closed connection</code> or similar in other clients</dt>
                                <dd>The server could be killing your connection for a few reasons - either your Server entry is wrong (stream.biggame will kill your connection if you try to stream anywhere other than /interna), you're sending invalid data (check your OBS settings), or you're trying to stream to a Stream Key that someone else is already using (change it or politely ask them to move)</dd>
                            </dl><dl>
                                <dt>I'm streaming and my computer is practically unusable / on fire, what do</dt>
                                <dd>Streaming is pretty intensive (mainly on CPU), but try enabling a resolution downscale in <br/><kbd>Settings &raquo; Video &raquo; Resolution Downscale</kbd> or lowering your framerate (same area). You can also try changing your encoder from <code>x264</code> to <code>Quick Sync</code> (for Intel processors) or <code>Nvidia NVENC</code> (for Nvidia 6-series GPUs and higher, can cause higher GPU stress), but that's outside of the scope of this guide so you'll need to google it. <b>If your rig should catch fire for any reason, please follow the detailed fire procedure given in putty_thing's introductory speech</b>.</dd>
                            </dl><dl>
                                <dt>I'm dropping frames, please fix your server</dt>
                                <dd><b>There should be no network reason why you're dropping frames.</b> Ensure your system isn't under extreme CPU or network load. If problems persist, please report it to a member of tBG crew.</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@stop