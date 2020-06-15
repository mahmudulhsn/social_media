<?php

namespace App\Http\Controllers;

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
    	return view('all.leftbar.all_images');
    }

    public function all_papers()
    {
    	return view('all.leftbar.all_papers');
    }

    public function all_videos()
    {
    	return view('all.leftbar.all_videos');
    }

}
