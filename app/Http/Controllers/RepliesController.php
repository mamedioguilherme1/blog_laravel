<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use App\Comment;

class RepliesController extends Controller
{
	public function index($id)
    {
    	$comment = Comment::find($id);
    	return view('posts.comment', compact('comment'));
    }
    public function store(Request  $request)
    {
        Reply::create($request->all());
        return redirect('replies/' . $request->comment_id);
    }

    public function destroy(Request $request, $id)
    {
        Reply::find($id)->delete();
        return redirect('replies/' . $request->comment_id);
    }

}
