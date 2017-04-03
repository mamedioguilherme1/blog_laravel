<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Titulo X</title>
</head>
<body>
	
	@foreach($posts as $post)
		<h1> {{$post->title}} </h1>
		<p> {{$post->content}} </p>
		<hr>
	@endforeach
</body>
</html>