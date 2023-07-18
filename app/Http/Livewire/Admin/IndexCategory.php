<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class IndexCategory extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('livewire.admin.index-category', compact('categories'));
    }
}
