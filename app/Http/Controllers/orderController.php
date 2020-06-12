<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function confirm()
    {
    	return view('backend.orders.confirm_order');
    } 

    public function request()
    {
    	return view('backend.orders.order_req');
    } 
}
