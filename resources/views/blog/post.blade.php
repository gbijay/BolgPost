@extends('blog.layout')

@section('content')
@foreach($posts as $post)
<div class="container">
	<div class="row">
		<div class="col-lg-8">


	<h1>{{$post->title}}</h1>
	<p>by &nbsp;{{$post->author}}</p>
	<p>{{$post->post}}</p>

	<a href="{{ route('getupdate',$post->id)}}">Edit</a>

		</div>
	</div>
</div>


@endforeach
<div style="text-align:center">
{{$posts->links()}}
</div>


@endsection