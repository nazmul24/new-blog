<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
	public function index()
	{
		return view('front.home.home-content');
	}

	public function blogDetailsInfo(){
		return view('front.blog.blog-details-content');
	}




}
