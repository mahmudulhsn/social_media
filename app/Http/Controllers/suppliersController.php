<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Supplier;

class suppliersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
    	return view('backend.suppliers.add_supp');
    } 

    public function due()
    {
    	return view('backend.suppliers.due_supp');
    } 

    public function manage()

    {
        $supp = DB::table('suppliers')->get();

    	return view('backend.suppliers.manage_supp',compact('supp'));
    }

    public function store(Request $request)
    {
        $data=array();
        $data['sup_name']=$request->sup_name;
        $data['sup_phone']=$request->sup_phone;
        $data['sup_email']=$request->sup_email;
        $data['sup_address']=$request->sup_address;
        DB::table('suppliers')->insert($data);
        
        return redirect()->back();
    }


    public function destroy($id)

    {
    $supplier =Supplier::where('id',$id)->first();
            $supplier->delete();
            return redirect()->back();
       
                        
    }

    public function update(Request $request , $id)
    {  
        $subcategories=SubCategory::find($request->id);
        $subcategories->sup_name=$request->sup_name;
        $subcategories->sup_phone=$request->sup_phone;
        $subcategories->sup_email=$request->sup_email;
        $subcategories->sup_address=$request->sup_address;
        $subcategories->save();
        
         return redirect()->back();
    
    } 

}
