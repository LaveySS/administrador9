<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class EditCategory extends Component
{
    public $category_id;
    public $name;
    public $slug;

    public function generarSlug() {
        $this->slug = Str::slug($this->name);
    }

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:categories'
    ];

    public function mount(Category $category) {
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
    }

    public function editCategory() {
        $datos = $this->validate();

        $category = Category::find($this->category_id);

        $category->name = $datos['name'];
        $category->slug = $datos['slug'];

        $category->save();

        session()->flash('message', 'La categoria se actualizo correctamente');

        return redirect()->route('admin.categories.index');
    }

    public function render()
    {
        return view('livewire.admin.edit-category');
    }
}
