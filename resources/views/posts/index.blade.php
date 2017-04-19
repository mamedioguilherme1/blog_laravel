@extends('layout')
@section('content')

<div class=" row">
	<div>{{$posts->links()}}</div>
	@foreach($posts as $post)
		<div class="blogs col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <div class="caption">
		        <h3>{{$post->title}}</h3>
		        <p>{{$post->content}}</p>
		        <p>
		        	<a href="{{ url('/posts/' . $post->id.'/detalhes')}}" class="btn btn-success" role="button">
		        		<i class="glyphicon glyphicon-menu-hamburger"></i>
		        	</a>
		        	<a href="{{ url('/posts/'. $post->id .'/edit')}}" class="btn btn-blog" role="button">
		        		<i class="glyphicon glyphicon-pencil"></i>
		        	</a>
		        	<a href="{{ url('/posts/' . $post->id.'/delete')}}" class="btn btn-blog" role="button">
		        		<i class="glyphicon glyphicon-minus"></i>
		        	</a>
		        </p>
		      </div>
		    </div>
		</div>
	@endforeach
	<div>{{$posts->links()}}</div>
</div>
@endsection
