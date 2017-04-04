@extends('layout')
@section('content')
	@foreach($posts as $post)
		<h1> {{$post->title}} </h1>
		<p> {{$post->content}} </p>
		<p> {{$post->comments}} </p>
		<a href="{{ url('/posts/'.$post->id.'/edit')}}">Editar</a>
		{{Form::open(['url' => '/posts/' . $post->id, 'method' => 'DELETE'])}}
			{{Form::submit('Deletar')}}
		{{Form::close()}}
		<a href="{{ url('/posts/create')}}">criar</a><br>
	@endforeach
@endsection
