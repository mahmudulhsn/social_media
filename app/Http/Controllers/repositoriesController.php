<?php

namespace App\Http\Controllers;

use App\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class repositoriesController extends Controller
{
    public function all_repositories()
    {
        $repositories = Repository::where('student_id', auth()->user()->user_id)->latest()->get();
    	return view('all.repositories.my_all_rep', compact('repositories'));
    }

    public function new_repositories()
    {
    	return view('all.repositories.new_rep');
    }
    public function store(Request $request)
    {
    	$validator = Validator::make(request()->all(), [
            'category'   => 'required',
            'title'      => 'required',
            'file'   => 'required| mimes:pdf',
            'student_name'  => 'required',
            'department'    => 'required',
            'supervisor_name' => 'required',
            'submission_date' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('file')) {
            // uploading image
            $fileName = $request->file('file');
            $imageName = $fileName->getClientOriginalName();
            $directory = 'back/file/repositories/';
            $fileUrl = $directory.$imageName;
            $fileName->move($directory, $imageName);
            // data sent to database
            $repository = new Repository();
            $repository->category = $request->category;
            $repository->title = $request->title;
            $repository->student_id = auth()->user()->user_id;
            $repository->file = $fileUrl;
            $repository->student_name = $request->student_name;
            $repository->department = $request->department;
            $repository->supervisor_name = $request->supervisor_name;
            $repository->submission_date = $request->submission_date;
            $repository->save();

            session()->flash('type', 'success');
            session()->flash('message', 'Repository Added Successfully.');
            return redirect()->back();
        }
        session()->flash('type', 'warning');
        session()->flash('message', 'Credentials does not match.');
        return redirect()->back();
    }

    public function repositories_settings()
    {
    	return view('all.repositories.rep_settings');
    }

    /*
     @ Download the Repositories
    */
    public function downloadRepo($id)
    {   
        $repo = Repository::find($id);
        // dd();

        $pathToFile = public_path('../' . $repo->file);
        $name = time().'-'.'Repo.pdf';
        $headers = ['Content-Type: application/pdf'];
        return response()->download($pathToFile, $name, $headers);
    }

    public function manage()
    {
        $repositories = Repository::latest()->get();
        return view('backend.repositories.index', compact('repositories'));
    }
}
