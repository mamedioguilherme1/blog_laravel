@extends('layout')
@section('content')
	<h1> novo post </h1>
	{{Form::open(['url' => 'posts/'.$post->id, 'method' => 'put'])}}
		{{Form::label('title', 'Título')}}
		{{Form::text('title', $post->title, ['placeholder' => 'Titulo do post'])}}

		{{Form::label('content', 'Texto do post')}}
		{{Form::textarea('content', $post->content, ['placeholder' => 'Texto do post'])}}

		{{Form::submit('editar')}}

	{{Form::close()}}
@endsection