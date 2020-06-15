<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    /**
     * upload profile settings
     */
    public function updateSettings(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $validator = Validator::make(request()->all(), [
            // 'body' => 'required',
            'image' => 'required|image|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            // uploading image
            $profilePicture = $request->file('image');
            $imageName = $profilePicture->getClientOriginalName();
            $directory = 'back/images/user/';
            $imgUrl = $directory.$imageName;
            $profilePicture->move($directory, $imageName);
            // data sent to database
            $user->image = $imgUrl;
            $user->save();
            return redirect()->back()->with('Success', 'user is successfully added');
        }
        return redirect()->back()->with('Success', 'Please check your Credential');
    }

    public function security()
    {
    	return view('all.settings.security');
    }
}
