<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Post;
use Livewire\Component;
use App\Models\Category;

class IndexPost extends Component
{
    public function render()
    {
        $firstPosts = Post::where('status', 2)->latest('id')->take(1)->get();
        $secondPosts = Post::where('status', 2)->latest('id')->skip(1)->take(1)->get();
        $thirdPosts = Post::where('status', 2)->latest('id')->skip(2)->take(2)->get();
        $cardPosts = Post::where('status', 2)->latest('id')->skip(4)->take(4)->get();
        $scrollPosts = Post::where('status', 2)->latest('id')->skip(8)->take(4)->get();
        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.index-post', [
            'firstPosts' => $firstPosts,
            'secondPosts' => $secondPosts,
            'thirdPosts' => $thirdPosts,
            'cardPosts' => $cardPosts,
            'scrollPosts' => $scrollPosts,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }
}
