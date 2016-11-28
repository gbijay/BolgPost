@extends('layouts.app')

@section('content')
@if(Session::has('success'))
	<div class="alert alert-success">
		{{Session::get('success')}}

	</div>

@endif
@foreach($posts as $post)
<div class="container padding">
	<div class="row">
		<div class="col-lg-8 border">


	<h1>{{$post->title}}</h1>
	<p>by: &nbsp;<span class="text">{{$post->author}}</span> &nbsp;on: &nbsp;{{$post->created_at}}</p>
	<p>{{$post->post}}</p>
	@if(Auth::guest())
	@else

	<button type="button" class="btn btn-success"><a href="{{ route('getupdate',$post->id)}}">Edit</a></button>&nbsp;
	<button type-"button" class="btn btn-danger" onClick="return ConfirmDelete();"><a href="{{ route('delete',$post->id)}}">Delete</a></button>

	@endif
	<script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
  </script> 

		</div>
	</div>
</div>


@endforeach
<div style="text-align:center">
{{$posts->links()}}
</div>


@endsection