@extends('blog.layout')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8">
{!! Form::model($post, [
    'method' => 'POST',
    'route' => ['setupdate', $post->id]
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('author', 'Author:', ['class' => 'control-label']) !!}
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('post', 'Post:', ['class' => 'control-label']) !!}
    {!! Form::textarea('post', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('POST', ['class' => 'btn btn-default']) !!}

{!! Form::close() !!}
</div>
</div>
</div>




@endsection