<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Post;
use Livewire\Component;
use App\Models\Category;

class Navigation extends Component
{
    public $search;

    public function render()
    {
        $posts = Post::where('status', 2)
        ->where('name', 'LIKE','%' . $this->search . '%')
        ->latest('id')
        ->get();

        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.navigation', compact('categories', 'tags', 'posts'));
    }
}
