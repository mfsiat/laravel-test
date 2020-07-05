<?php

namespace App\Http\Controllers;

use App\Post;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() 
    {
        $posts = Post::all();
        $videos = Video::all();
        return view('landing')->with(compact('posts', 'videos'));
    }

    public function show($postId)
    {
        return view('posts.show')->with('posts', Post::find($postId));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|min:6|max:12',
            'brief' => 'required',
            'body' => 'required'
        ]);

        $data = request()->all();

        $post = new Post(); // creates a new instance of the model and assigned a name property
        $post->title = $data['title'];
        $post->brief = $data['brief'];
        $post->body = $data['body'];
        $post->cover_image = $data['cover_image'];
        $post->user_id = auth()->user()->id;
        

        $post->save();

        return redirect('/');

    }
}
