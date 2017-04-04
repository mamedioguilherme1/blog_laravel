<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Titulo X</title>
</head>
<body>
	
		<h1> {{$post->title}} </h1>
		<p> {{$post->content}} </p>
		
		{{Form::open(['url' => 'comments', 'method' => 'post'])}}
			<div>
				{{Form::hidden('post_id', $post->id)}}
				{{Form::label('name', 'Autor:')}}
				{{Form::text('name', null, ['placeholder' => 'Autor'])}}
			</div>
			
			
			<div>
				{{Form::label('comment', 'Comentário:')}}
				{{Form::textarea('comment', null, ['placeholder' => 'digite seu comentário'])}}
			</div>

			{{Form::submit('comentar')}}
		{{Form::close()}}

		<h1>Comentários: </h1>
		@foreach($post->comments as $comment)
			<p>{{$comment->name}}</p>
			<p>{{$comment->comment}}</p>
			{{Form::open(['url' => 'comments/' . $comment->id, 'method' => 'DELETE'])}}
			{{Form::hidden('post_id', $post->id)}}
				{{Form::submit('Deletar')}}
			{{Form::close()}}
			<hr>


		@endforeach
</body>
</html>