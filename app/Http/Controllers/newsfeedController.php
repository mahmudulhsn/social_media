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
      $ids = [];
      $friends = auth()->user()->getFriends();
      if ($friends->isNotEmpty()) {
         foreach ($friends as $key => $friend) {
             $ids[] = $friend->id;
            
          }
        }else {
          $ids = [0];
        }
      array_push($ids, auth()->user()->id);
      $posts = Post::whereIn('user_id', $ids)->latest()->get();
    	return view('all.main.newsfeed',compact('posts'));
    }

}
