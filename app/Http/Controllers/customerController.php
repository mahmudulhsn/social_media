<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function customer()
    {
    	return view('backend.customer.customer');
    } 
}
