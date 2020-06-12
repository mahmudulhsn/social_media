<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class purchaseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function add()
    {
    	return view('backend.purchase.add_pur');
    } 
    
    public function due()
    {
    	return view('backend.purchase.due_pur');
    } 

    public function manage()
    {
    	return view('backend.purchase.manage_pur');
    } 


    

}
