<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;
use App\Models\Category;

class Footer extends Component
{
    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.footer', compact('categories', 'tags'));
    }
}
