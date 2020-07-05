<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PagesController extends Controller
{
    public function landing() 
    {
        $posts = Post::all();
        return view('landing')->with('posts', $posts);
    }
}
