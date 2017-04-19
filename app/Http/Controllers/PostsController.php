<?php

namespace App\Http\Controllers; //teste

use Illuminate\Http\Request;
use \App\Post;
use \App\Comment;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::paginate(9);
    	return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
    	$post = Post::find($id);
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        return redirect('posts');
    }

    public function edit($id)
    {
       $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        Post::find($id)->update($request->all());
         return redirect('posts');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();
         return redirect('posts');
    }

}

