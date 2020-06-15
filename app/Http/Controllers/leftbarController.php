<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repository;
use Illuminate\Http\Request;

class leftbarController extends Controller
{
    public function people_nearby()
    {
        // $friendList = auth()->user()->getAllFriendships();
    	return view('all.leftbar.people_nearby');
    }
    public function friendRequest()
    {
        // $friendList = auth()->user()->getAllFriendships();
    	return view('all.leftbar.friend-request');
    }

    public function all_images()
    {
        $posts = Post::where('user_id', auth()->user()->id)->latest()->get();
    	return view('all.leftbar.all_images', compact('posts'));
    }

    public function all_papers()
    {
        $repositories = Repository::latest()->get();
    	return view('all.leftbar.all_papers', compact('repositories'));
    }

    public function all_videos()
    {
    	return view('all.leftbar.all_videos');
    }

}
