<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(Request $request)
    {
        
        $posts = Post::when($request->search, function ($query, $search) {
            $query->where('title', 'like', "%{$search}%");
        })->paginate(10);
        
        
        
        // Filtering by author if provided
        $posts = Post::when($request->author, function ($query, $author) {
            $query->where('author_name', $author);
        })->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
            'author_name' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        $comments = $post->comments()->get();
        return view('posts.show', compact('post', 'comments'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|unique:posts,title,' . $post->id,
            'content' => 'required|min:10',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
    public function PostsList(Request $request)
    {
        // Start with the query for posts
        $posts = Post::query();
        
        // Filtering by search term (title)
        if ($request->has('search')) {
            $posts->where('title', 'like', "%{$request->search}%");
        }
        
        // Filtering by author
        if ($request->has('author')) {
            $posts->where('author_name', $request->author);
        }
        
        // Finally, paginate after applying all filters
        $posts = $posts->paginate(10);
    
        // Return the view with posts
        return view('posts.PostsList', compact('posts'));
    }
    
    public function welcome(Request $request)
    {
        // Fetch posts from the database with optional search functionality
        $posts = Post::when($request->search, function ($query, $search) {
            $query->where('title', 'like', "%{$search}%");
        })->paginate(10);

        // Return the welcome view with the posts data
        return view('welcome', compact('posts'));
    }
}

