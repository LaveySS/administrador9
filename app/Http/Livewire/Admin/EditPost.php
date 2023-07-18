<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditPost extends Component
{
    public $post_id;
    public $name;
    public $slug;
    public $category;
    public $tag;
    public $status;
    public $image;
    public $image_new;
    public $extract;
    public $body;
    public $user_id;

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
        'image_new' => 'nullable|image',
        'extract' => 'required',
        'body' => 'required',
    ];
    public function mount(Post $post) {

        $this->post_id = $post->id;
        $this->name = $post->name;
        $this->slug = $post->slug;
        $this->extract = $post->extract;
        $this->body = $post->body;
        $this->image = $post->image;
        $this->status = $post->status;
        $this->user_id = auth()->user()->id;
        $this->category = $post->category_id;
        $this->tag = $post->tags->pluck('id');
    }

    public function editPost() {
        $datos = $this->validate();

        if($this->image_new) {
            $image = $this->image_new->store('public/posts');
            $datos['image'] = str_replace('public/posts/', '', $image);
        }

        $post = Post::find($this->post_id);

        $post->name = $datos['name'];
        $post->slug = $datos['slug'];
        $post->extract = $datos['extract'];
        $post->body = $datos['body'];
        $post->image = $datos['image'] ?? $post->image;
        $post->status = $datos['status'];
        $post->user_id = auth()->user()->id;
        $post->category_id = $datos['category'];
        $post->tags()->sync($datos['tag']);

        $post->save();


        session()->flash('message', 'La publicacion se actualizo correctamente');

        return redirect()->route('admin.posts.index');
    }

    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.admin.edit-post', compact('categories', 'tags'));
    }
}
