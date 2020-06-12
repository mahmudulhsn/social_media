<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\SubCategory;
use App\Category;

class subCategoryController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function manage()
    {
        // $category=DB::table('categories')->where('id',$id)->get();
        // $subcategory=DB::table('sub_categories')->where('under_cat',$id)->first();
        // $cat_name=DB::table('categories')->where('id',$id)->select('categories.cat_name');

        $sub = DB::table('sub_categories')->get();
        $cat = DB::table('categories')->get();
        return view('backend.categories.manage_cat',compact('cat', 'sub'));
    } 

    public function store(Request $request)
    {

        $data=array();
        $data['sub_name']=$request->sub_name;
        $data['under_cat']=$request->under_cat;
        $data['sub_image']=$request->sub_image;
        $data['sub_status']=$request->sub_status;
        $data['slug']=$request->slug;
        DB::table('sub_categories')->insert($data);
        
        return redirect()->back();
    }


    public function destroy($id)

    {
         $subcategory =SubCategory::where('id',$id)->first();
            $subcategory->delete();
            return redirect()->back();
    }

    public function update(Request $request , $id)
    {   

        $subcategories=SubCategory::find($request->id);
        $subcategories->sub_name=$request->sub_name;
        $subcategories->under_cat=$request->under_cat;
        $subcategories->sub_image=$request->sub_image;
        $subcategories->sub_status=$request->sub_status;
        $subcategories->slug=$request->slug;

        $subcategories->save();
        
         return redirect()->back();

    

}

}
