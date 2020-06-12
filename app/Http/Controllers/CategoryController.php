<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(5);
  
        return view('backend.categories.add_cat',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.add_cat');
    }


  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cat_name' => 'required',
            'cat_status' => 'required',
            'cat_image'=>'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
  
      
        $formInput=$request->all();

        if($request->file('cat_image')){
            $image=$request->file('cat_image');
            if($image->isValid()){
                $fileName=time().'-'.str_slug($formInput['cat_name'],"-").'.'.$image->getClientOriginalExtension();
                $img_path=public_path('category/large/'.$fileName);
                //Resize Image
                Image::make($image)->save($img_path);
                $formInput['cat_image']=$fileName;
            }
        }
          Category::create($formInput);
   
        return redirect()->route('categories.create')
                        ->with('success','Product created successfully.');
    }
   

    public function edit(Category $category)
    {
        
        return view('admin.categories.edit',compact('category'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $id=$request->cat_id;
        
        $update_category=Category::findOrFail($id);
        $request->validate([
           'name' => 'required',
            'level' => 'required',
            'status' => 'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:2048',
        ]);
  
        $formInput=$request->all();
        if($update_category['image']==''){
            if($request->file('image')){
                $image=$request->file('image');
                if($image->isValid()){
                    $fileName=time().'-'.str_slug($formInput['name'],"-").'.'.$image->getClientOriginalExtension();
                    $img_path=public_path('category/large/'.$fileName);
                    
                    //Resize Image
                    Image::make($image)->save($img_path);
                    $formInput['image']=$fileName;
                }
            }
        }else{
            $formInput['image']=$update_category['image'];
        }
        $update_category->update($formInput);
  
        return redirect()->route('categories.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
    
        // $delete=Category::findOrFail($id);
        $image_large=public_path().'/category/large/'.$category->image;
        if($category->delete()){
            unlink($image_large);
        
        }
  
        return redirect()->route('categories.index')
                        ->with('success','Product deleted successfully');
    }

    public function deleteImage($id){
        
        
        //Products_model::where(['id'=>$id])->update(['image'=>'']);
        $delete_image=Category::findOrFail($id);
        $image_large=public_path().'/category/large/'.$delete_image->image;
        if($delete_image){
            $delete_image->image='';
            $delete_image->save();
            ////// delete image ///
            unlink($image_large);
        }
        return back();
    }


}
