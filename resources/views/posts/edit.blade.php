@extends('layout')
@section('content')

	<div class="form-style-6">
		<h1> Editar Post </h1>
		{{Form::open(['url' => 'posts/'.$post->id, 'method' => 'put'])}}
			{{Form::label('title', 'Título')}}
			{{Form::text('title', $post->title, ['placeholder' => 'Titulo do post'])}}

			{{Form::label('content', 'Texto do post')}}
			{{Form::textarea('content', $post->content, ['placeholder' => 'Texto do post'])}}

			{{Form::submit('editar')}}
		{{Form::close()}}
	</div>
	
@endsection