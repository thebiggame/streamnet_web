<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InternaController extends Controller
{
    /**
     * Display all streams.
     *
     * @return Response
     */
    public function listStream()
    {
        $rtmp = new \App\Helpers\RTMP;
        $rtmp->fetchChannels();
        $streams = $rtmp->channels;
        return view('pages.internalist', compact('streams'));
    }
    /**
     * Display a single stream.
     *
     * @param string $streamname
     * @return Response
     */
    public function getStream($streamname)
    {
        return view('pages.internawatch', compact('streamname'));
    }
}
