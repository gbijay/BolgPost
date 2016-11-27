@extends('blog.layout')

@section('content')
@if(Session::has('success'))
	<div class="alert alert-success">
		{{Session::get('success')}}

	</div>

@endif
@foreach($posts as $post)
<div class="container">
	<div class="row border">
		<div class="col-lg-8">


	<h1>{{$post->title}}</h1>
	<p>by: &nbsp;{{$post->author}}</p>
	<p>{{$post->post}}</p>

	<button type="button" class="btn btn-success"><a href="{{ route('getupdate',$post->id)}}">Edit</a></button>&nbsp;
	<button type-"button" class="btn btn-danger"><a href="{{ route('delete',$post->id)}}">Delete</a></button>


		</div>
	</div>
</div>


@endforeach
<div style="text-align:center">
{{$posts->links()}}
</div>


@endsection