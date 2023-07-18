<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPost extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::where('user_id', auth()->user()->id)
                    ->where('name', 'LIKE','%' . $this->search . '%')
                    ->latest('id')
                    ->paginate(20);
        $tags = Tag::all();

        return view('livewire.admin.index-post', compact('posts', 'tags'));
    }
}
