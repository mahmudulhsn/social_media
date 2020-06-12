<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Requests;
use App\Post;
use Illuminate\Http\Request;


class profileController extends Controller
{

    public function my_profile()
    {
        
        $post = DB::table('posts')->get()->sortByDesc('id');
        $user = DB::table('users')->get();
    	return view('all.profile.my_profile',compact('post', 'user'));
    }


    public function about_profile()
    {
    	return view('all.profile.about_profile');
    }

    public function album()
    {
    	return view('all.profile.album');
    }

    public function profile_friend()
    {
    	return view('all.profile.profile_friends');
    }

    public function my_repositories()
    {
    	return view('all.profile.my_repositories');
    }


    public function show($id)
    {
        $post = Post::where('user_id', $id)->latest()->get();
        $user = User::find($id);
        // $post = DB::table('posts')->get()->sortByDesc('id');
        // $user = DB::table('users')->get();
        return view('all.profile.my_profile',compact('post', 'user'));
    }
}
