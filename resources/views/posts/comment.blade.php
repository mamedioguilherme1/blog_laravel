@extends('layout')
@section('content')
	<h3>Comentário: </h3><br>
	<h4>{{$comment->name}}</h4>
	<p>{{$comment->comment}}</p>
		
		<div class="form-style-10">
			{{Form::open(['url' => 'replies', 'method' => 'POST'])}}
				<div>
					{{Form::hidden('comment_id', $comment->id)}}
					{{Form::label('name', 'Autor:')}}
					{{Form::text('name', null, ['placeholder' => 'autor da resposta'])}}
				</div>
				<div>
					{{Form::label('reply', 'Resposta:')}}
					{{Form::textarea('reply', null, ['placeholder' => 'digite sua resposta', 'rows' => 3])}}
				</div>
				{{Form::submit('Responder')}}
			{{Form::close()}}
		</div>

		<br><h4>Respostas: </h4><br>
		@foreach($comment->replies as $reply)
			<div class="col-md-9">
				<h5>{{$reply->name}}</h5>
				<p>{{$reply->reply}}</p>
				<div class="form-style-8">
					{{Form::open(['url' => 'reply/' . $reply->id, 'method' => 'DELETE'])}}
						{{Form::hidden('comment_id', $comment->id)}}
						{{Form::submit('Deletar')}}
					{{Form::close()}}
				</div>
				<hr>
			</div>
			
		@endforeach
@endsection