@extends('layout')
@section('content')
	<div class="form-style-6">
		{{Form::open(['url' => 'posts', 'method' => 'post'])}}
			{{Form::label('title', 'Título')}}
			{{Form::text('title', null, ['placeholder' => 'Titulo do post'])}}
			
			<fieldset>
				{{Form::label('content', 'Texto do post')}}
				{{Form::textarea('content', null, ['placeholder' => 'Texto do post'])}}
			</fieldset>
			
			{{Form::submit('salvar')}}
		{{Form::close()}}
	</div>
@endsection