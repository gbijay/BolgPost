<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use DB;

class PostController extends Controller
{
    public function index(){
    	return view('blog.view');
    }
    public function create(Request $request){
    	$post=$request->all();
    	Post::create($post);
    	return redirect('blog');
    	
    }
}
