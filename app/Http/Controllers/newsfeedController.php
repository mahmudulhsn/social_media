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
       $friends = auth()->user()->getAcceptedFriendships();
       if ($friends->isNotEmpty()) {
         foreach ($friends as $key => $friend) {
           if ($friend->recipient_id != auth()->user()->id) {
             $ids[] = $friend->recipient_id;
             
            } else {
              $ids[] = $friend->sender_id;
            }
          }
        }else {
          // dump('kicchu nei');
        }
        $logedIn = auth()->user()->id;
        // $friend = App\User::whereIn('id', $ids)->get();
        // $ids = array_push();



        $posts = Post::whereIn('user_id', [$ids, auth()->user()->id])->latest()->get();
    	return view('all.main.newsfeed',compact('posts'));
    }

}
