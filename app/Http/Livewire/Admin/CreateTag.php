<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateTag extends Component
{
    public $name;
    public $slug;
    public $color;

    public function generarSlug() {
        $this->slug = Str::slug($this->name);
    }

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:tags',
        'color' => 'required|unique:tags',
    ];

    public function createTag() {
        $datos = $this->validate();

        Tag::create([
            'name' => $datos['name'],
            'slug' => $datos['slug'],
            'color' => $datos['color'],
        ]);

        session()->flash('message', 'La etiqueta se creo correctamente');

        return redirect()->route('admin.tags.index');

    }

    public function render()
    {
        return view('livewire.admin.create-tag');
    }
}
