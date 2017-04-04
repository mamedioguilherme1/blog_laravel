<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request  $request)
    {
        Comment::create($request->all());
        return redirect('posts/' . $request->post_id);
    }

    public function destroy(Request $request, $id)
    {
        Comment::find($id)->delete();
        return redirect('posts/' . $request->post_id);
    }

}
