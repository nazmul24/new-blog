<?php

namespace App\Http\Controllers;

use App\Model\user\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(Post $post){
		return view('front.blog.post', ['post' => $post]);
	}
}
