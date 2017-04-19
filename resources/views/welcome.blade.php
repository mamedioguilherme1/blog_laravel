@extends('layout')
@section('content')

    <div class="font"><h1>Blog Laravel</h1></div>
    <div class="btnf"><a href="{{url('/posts')}}" role="button" style="margin-left: 71%;">>>></a></div>

    <div>
        <div class="btnf2">
            <a href="{{ url('/posts') }}">Visualizar Posts</a>
            <a href="{{ url('posts/create') }}">Criar</a>
        </div>
    <div>
@endsection
