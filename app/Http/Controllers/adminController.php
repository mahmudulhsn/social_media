<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$cat = DB::table('categories')->get();
        $sub = DB::table('sub_categories')->get();
    	return view('backend.backmain.back_main');
    } 
}
