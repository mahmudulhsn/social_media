<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\User;

class loginController extends Controller
{
   public function index()
    {
    	return view('login.login');
    }

    public function register()
    {
    	return view('registration.register');
    }

    public function contact()
    {
    	return view('contact.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('profile/images'), $new_name);
        $form_data = array(
        
            'image'            =>   $new_name
        );

        User::create($form_data);

        return redirect()->back();

        
    }

}
