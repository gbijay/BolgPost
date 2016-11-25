@extends('blog.layout')

@section('content')
@if(Session::has('success'))
	<div class="alert alert-success">
		{{Session::get('success')}}

	</div>

@endif
@foreach($posts as $post)
<div class="container">
	<div class="row">
		<div class="col-lg-8">


	<h1>{{$post->title}}</h1>
	<p>by &nbsp;{{$post->author}}</p>
	<p>{{$post->post}}</p>

	<a href="{{ route('getupdate',$post->id)}}">Edit</a> &nbsp;
	<a href="{{ route('delete',$post->id)}}">Delete</a>


		</div>
	</div>
</div>


@endforeach
<div style="text-align:center">
{{$posts->links()}}
</div>


@endsection