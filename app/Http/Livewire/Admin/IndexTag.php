<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;

class IndexTag extends Component
{
    public function render()
    {
        $tags = Tag::all();

        return view('livewire.admin.index-tag', compact('tags'));
    }
}
