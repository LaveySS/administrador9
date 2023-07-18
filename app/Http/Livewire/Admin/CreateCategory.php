<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class CreateCategory extends Component
{
    public $name;
    public $slug;

    public function generarSlug() {
        $this->slug = Str::slug($this->name);
    }

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:categories',
    ];

    public function createCategory() {
        $datos = $this->validate();

        Category::create([
            'name' => $datos['name'],
            'slug' => $datos['slug'],
        ]);

        session()->flash('message', 'La categoria se creo correctamente');

        return redirect()->route('admin.categories.index');

    }

    public function render()
    {
        return view('livewire.admin.create-category');
    }
}
