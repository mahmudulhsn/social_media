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

    // public function userImage($id)
    // {
    //     $post = Post::where('user_id', $id)->latest()->get();
    //     $user = User::find($id);
    //     // $post = DB::table('posts')->get()->sortByDesc('id');
    //     // $user = DB::table('users')->get();
    //     return view('all.leftbar.all_images',compact('post', 'user'));
    // }

    public function sendFriendRequest($id)
    {
        $recipient = User::find($id);
        $user = auth()->user();
        $user->befriend($recipient);
        return redirect()->back();
    }
    public function acceptFrienRequest($id)
    {
        $recipient = User::find($id);
        $user = auth()->user();
        $user->acceptFriendRequest($recipient);
        return redirect()->back();
    }

    public function removeFriend($id)
    {
        $recipient = User::find($id);
        $user = auth()->user();
        $user->unfriend($recipient);
        return redirect()->back();
    }
    public function cancelFriendRequest($id)
    {
        $recipient = User::find($id);
        $user = auth()->user();
        $user->denyFriendRequest($recipient);
        return redirect()->back();
    }
    public function removeFriendRequest($id)
    {
        $recipient = User::find($id);
        $user = auth()->user();
        $user->unfriend($recipient);
        return redirect()->back();
    }
    
}
