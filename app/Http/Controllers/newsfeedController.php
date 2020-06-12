<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use DB;


class newsfeedController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
    	return view('all.main.newsfeed',compact('posts'));
    }

}
