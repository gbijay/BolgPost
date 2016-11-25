<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Session;
use DB;


class PostController extends Controller
{
    public function index(){
    	return view('blog.view');
    }
    public function create(Request $request){
    	$post=$request->all();
    	Post::create($post);
    	Session::flash('success','post created');
    	return redirect('blog');
    	
    }
    public function view(){
    	$posts=Post::paginate(2);
    	return view('blog.post', compact('posts'));
    }
    public function getUpdate($id){
    	$post=Post::findOrFail($id);
    	return view('blog.update',compact('post'));

    }
    public function setUpdate(Request $request, $id){
    	$post=Post::find($id);
    	$post->title=$request->title;
    	$post->author=$request->author;
    	$post->post=$request->post;

    	$post->save();
    	
    	return redirect()->route('view');


    }
}
