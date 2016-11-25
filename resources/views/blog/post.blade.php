@extends('blog.layout')

@section('content')
@foreach($posts as $post)
<h1>{{$post->title}}</h1>
<p>{{$post->author}}</p>
<p>{{$post->post}}</p>


@endforeach


@endsection