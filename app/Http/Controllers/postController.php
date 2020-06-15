<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class postController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::latest()->get();
        return view('backend.posts.index', compact('posts'));
    }
    public function store(Request $request) {
        $validator = Validator::make(request()->all(), [
            'body' => 'required',
            // 'image' => 'required|image|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // $image = $request->file('image');

        // $new_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images'), $new_name);
        // $form_data = array(
        //     'body'       =>   $request->body,
        //     'user_id'        =>   $request->user_id,
        //     'videos'        =>   $request->videos,
        //     'image'            =>   $new_name
        // );

        // Post::create($form_data);
        



        if ($request->hasFile('image')) {
            // uploading image
            $postImage = $request->file('image');
            $imageName = $postImage->getClientOriginalName();
            $directory = 'back/images/post/';
            $imgUrl = $directory.$imageName;
            $postImage->move($directory, $imageName);
            // data sent to database
            $post = new Post();
            $post->body = $request->body;
            $post->user_id = $request->user_id;
            $post->videos = $request->videos;
            $post->image = $imgUrl;
            $post->save();
            return redirect()->back()->with('Success', 'Post is successfully added');
        }
        $post = new Post();
        $post->body = $request->body;
        $post->user_id = $request->user_id;
        $post->videos = $request->videos;
        $post->save();
        return redirect()->back()->with('Success', 'Post is successfully added');

      // $image = $request->file('image');

      //   $new_name = rand() . '.' . $image->getClientOriginalExtension();
      //   $image->move(public_path('images'), $new_name);

      //   $data=array();
      //   $data['body']=$request->body;
      //   $data['image']=$request->image;
      //   $data['videos']=$request->videos;
      //   $data['user_id']=$request->user_id;

       

      //   DB::table('posts')->insert($data);
        
      //   return redirect()->back();

        //  $this->validate($request, [
        //     'image' => 'image'
        // ]);
        // $post = new Post;
        // $post->body = $request->body;
        // $post->videos = $request->videos;
        // $post->user_id = $request->user_id;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('/images/' . $filename);
        //     Image::make($image)->resize(800, 600)->save($location);
        //     $post->image = $filename;
        // }
        // $post->save();

    }

    public function destroy($id) {
        $post =Post::where('id',$id)->first();
        $post->delete();
        return redirect()->back()->with('Success', 'Post is successfully Deleted');
       // Category::find($id)->delete();
       // return redirect()->back();
                        
    }
    

    public function update(Request $request , $id)
    {  
       $post=Post::find($request->id);
        $post->body=$request->body;
        $post->user_id=$request->user_id;
        $post->videos=$request->videos;
        $post->image=$request->image;
        $post->save();

         return redirect()->back();
    }

    public function delete($id) {
        $post =Post::find($id);
        $post->delete();

        session()->flash('type', 'success');
        session()->flash('message', 'Post Deleted Successfully.');
        return redirect()->back();              
    }

}
