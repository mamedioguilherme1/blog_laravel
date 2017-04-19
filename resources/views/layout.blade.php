<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        {{ Html::style('css/style.css') }}
</head>
<body>
	<div class="topnav navbar-fixed-top" id="myTopnav">
	  <a href="{{ url('/') }}">Home</a>
	  <a href="{{ url('/posts') }}">Posts</a>
	  <a href="{{ url('posts/create') }}">Criar</a>
	</div>
	<br><br><br>
	<div class="grid">
		@yield('content')
	</div>
</body>
</html>