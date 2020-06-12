<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingsController extends Controller
{
   public function account_settings()
    {
    	return view('all.settings.account');
    }

    public function contact_us()
    {
    	return view('all.settings.contact');
    }

    public function profile_settings()
    {
    	return view('all.settings.profile_settings');
    }

    public function security()
    {
    	return view('all.settings.security');
    }
}
