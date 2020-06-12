<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class repositoriesController extends Controller
{
    public function all_repositories()
    {
    	return view('all.repositories.my_all_rep');
    }

    public function new_repositories()
    {
    	return view('all.repositories.new_rep');
    }

    public function repositories_settings()
    {
    	return view('all.repositories.rep_settings');
    }
}
