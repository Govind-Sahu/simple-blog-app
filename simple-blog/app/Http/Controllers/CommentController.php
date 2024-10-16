<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|min:5',
            'commenter_name' => 'required',
        ]);

        $post->comments()->create($request->all());

        return redirect()->route('posts.show', $post);
    }
}
