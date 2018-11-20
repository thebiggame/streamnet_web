<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MusicController extends Controller
{
    /**
     * Display all streams.
     *
     * @return Response
     */
    public function getIndex()
    {
        return view('pages.music.index');
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
