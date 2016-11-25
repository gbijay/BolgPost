@extends('blog.layout')

@section('content')
<div class="container">
	<div class="col-lg-10">
		<h1>Simple Blog</h1>
	     <form class="form-horizontal col-lg-4">
   <div class="form-group">
     <label for="title" class="col-sm-2 control-label">Title</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" id="title" placeholder="title">
     </div>
   </div>
  <div class="form-group">
     <label for="author" class="col-sm-2 control-label">Author</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" id="title" placeholder="title">
     </div>
   </div>
   <div class="form-group">
     <label for="post" class="col-sm-2 control-label">Post</label>
     <div class="col-sm-10">
       <textarea class="form-control" id="post" placeholder="post" rows="4"></textarea>
     </div>
   </div>
    
   
  
   <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
       <button type="submit" class="btn btn-default">Post</button>
     </div>
    </div>
  </form>




	</div>
</div>
@endsection