<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    public $name;
    public $slug;
    public $category;
    public $tag;
    public $status;
    public $image;
    public $extract;
    public $body;

    public function generarSlug() {
        $this->slug = Str::slug($this->name);
    }

    use WithFileUploads;

    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
        'category' => 'required',
        'tag' => 'required',
        'status' => 'required',
        'image' => 'required|image',
        'extract' => 'required',
        'body' => 'required',
    ];

    public function createPost() {
        $datos = $this->validate();

        $image = $this->image->store('public/posts');
        $datos['image'] = str_replace('public/posts/', '', $image);

        $post = Post::create([
            'name' => $datos['name'],
            'slug' => $datos['slug'],
            'extract' => $datos['extract'],
            'body' => $datos['body'],
            'image' => $datos['image'],
            'status' => $datos['status'],
            'user_id' => auth()->user()->id,
            'category_id' => $datos['category'],
        ]);

        $post->tags()->attach($datos['tag']);

        session()->flash('mensaje', 'El post se creo correctamente');

        return redirect()->route('admin.posts.index');

    }

    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.admin.create-post', compact('categories', 'tags'));
    }
}
