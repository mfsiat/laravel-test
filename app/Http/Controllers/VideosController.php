<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index() 
    {
        $videos = Video::all();
        return view('landing')->with('videos', $videos);
    }

    public function show($videoId)
    {
        return view('videos.show')->with('videos', Video::find($videoId));
    }

    public function create()
    {
        return view('videos.create');
    }

}
