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
        $this->validate($request,[
            'title'=>'required|max:255',
            'author'=>'required|max:255',
            'post'=>'required',
            ]);

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

    	Session::flash('success', 'post updated');
    	
    	return redirect()->route('view');


    }
    public function delete($id){
    	Post::findOrFail($id)->delete();
    	Session::flash('success','post deleted');
    	return redirect()->back();
    }
}
