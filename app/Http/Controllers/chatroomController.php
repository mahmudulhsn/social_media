<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chatroomController extends Controller
{
    public function chatroom()
    {
    	return view('all.messages.messages');
    }
}
