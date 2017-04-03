@extends('layout')
@section('content')
	{{Form::open(['url' => 'posts', 'method' => 'post'])}}
		{{Form::label('title', 'Título')}}
		{{Form::text('title', null, ['placeholder' => 'Titulo do post'])}}
		
		{{Form::label('content', 'Texto do post')}}
		{{Form::textarea('content', null, ['placeholder' => 'Texto do post'])}}

		{{Form::submit('salvar')}}

	{{Form::close()}}
@endsection