<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request  $request)
    {
        Comment::create($request->all());
        return redirect('posts/' . $request->post_id. '/detalhes');
    }

    public function destroy(Request $request, $id)
    {
        Comment::destroy($id);
        return redirect('posts/' . $request->post_id);
    }

}
