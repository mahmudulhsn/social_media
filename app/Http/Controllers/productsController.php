<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Product;

class productsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function manage()
    {
    	return view('backend.products.manage_products');
    } 

    public function sold()
    {
    	return view('backend.products.sold_products');
    } 

    public function unsold()
    {
    	return view('backend.products.unsold_products');
    } 

    public function store(Request $request)
    {

        $this->validate($request,[
            'pro_name'=>'required',
            'purchase_price'=>'required',
            'price'=>'required',
            'sell_price'=>'required',
            'q_type'=>'required',
            'quantity'=>'required',
            'sup_name'=>'required',
            'email'=>'required',
            'payment'=>'required',
        ]);

        $products = Product::create($request->all());
        return redirect()->back();
    }

}
