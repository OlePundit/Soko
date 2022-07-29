<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;

class Assignment extends Component
{
    public $selectedCategory = null;
    public $selectedSubcategory = null;
    public $subcategories = null;

    public function render()
    {
        return view('livewire.assignment', [
            'categories' => Category::all()
        ]);
    }

    public function updatedSelectedCategory($categories_id)
    {
        $this->subcategories = Subcategory::where('categories_id', $categories_id)->get();
    }
}
