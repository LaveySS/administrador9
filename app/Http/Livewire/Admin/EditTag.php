<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;

class EditTag extends Component
{
    public $tag_id;
    public $name;
    public $slug;
    public $color;

    public function generarSlug() {
        $this->slug = Str::slug($this->name);
    }

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:tags',
        'color' => 'required|unique:tags'
    ];

    public function mount(Tag $tag) {
        $this->tag_id = $tag->id;
        $this->name = $tag->name;
        $this->slug = $tag->slug;
        $this->color = $tag->color;
    }

    public function editTag() {
        $datos = $this->validate();

        $tag = Tag::find($this->tag_id);

        $tag->name = $datos['name'];
        $tag->slug = $datos['slug'];
        $tag->color = $datos['color'];

        $tag->save();

        session()->flash('message', 'La etiqueta se actualizo correctamente');

        return redirect()->route('admin.tags.index');
    }

    public function render()
    {
        return view('livewire.admin.edit-tag');
    }
}
