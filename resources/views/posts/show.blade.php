@extends('layout')
@section('content')
		<h1> {{$post->title}} </h1>
		<p> {{$post->content}} </p>
		
		<div class="form-style-7">
			{{Form::open(['url' => 'comments', 'method' => 'post'])}}
				<div>
					{{Form::hidden('post_id', $post->id)}}
					{{Form::label('name', 'Autor:')}}
					{{Form::text('name', null, ['placeholder' => 'autor do comentário'])}}
				</div>
				<div>
					{{Form::label('comment', 'Comentário:')}}
					{{Form::textarea('comment', null, ['placeholder' => 'digite seu comentário'])}}
				</div>

				{{Form::submit('comentar')}}
			{{Form::close()}}
		</div>

		<h3>Comentários: </h3><br>
		@foreach($post->comments as $comment)
			<p>{{$comment->name}}</p>
			<p>{{$comment->comment}}</p>
        	<a href="{{ url('/replies/'. $comment->id)}}" class="btn btn-success btn-reply" role="button">
        		Responder
        	</a>
			<div class="form-style-8">
				{{Form::open(['url' => 'comments/' . $comment->id, 'method' => 'DELETE'])}}
					{{Form::hidden('post_id', $post->id)}}
					{{Form::submit('Deletar')}}
				{{Form::close()}}
			</div>
			
			<hr>
		@endforeach
@endsection