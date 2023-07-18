<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index');
    }

    public function category(Category $category)
    {
        $posts = Post::where('category_id', $category->id)
                     ->where('status', 2)
                     ->latest('id')
                     ->paginate('6');

        return view('posts.category', compact('posts', 'category'));
    }

    public function tag(Tag $tag)
    {
        $posts =  $tag->posts()->where('status', 2)->latest('id')->paginate(4);

        return view('posts.tag', compact('posts', 'tag'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $similares = Post::where('category_id', $post->category_id)
        ->where('status', 2)
        ->where('id', '!=', $post->id)
        ->latest('id')
        ->take(4)
        ->get();

        return view('posts.show', compact('post', 'similares'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
