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

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|min:6|max:12',
            'brief' => 'required',
            'body' => 'required'
        ]);

        $data = request()->all();

        $video = new Video(); // creates a new instance of the model and assigned a name property
        $video->title = $data['title'];
        $video->brief = $data['brief'];
        $video->body = $data['body'];
        $video->vid_url = $data['vid_url'];     
       
        $video->save();

        return redirect('/');

    }
    

}
