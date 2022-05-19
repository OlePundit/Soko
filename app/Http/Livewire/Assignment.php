<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Assignment extends Component
{
    public function render()
    {
        return view('livewire.assignment', [
            'Category' => Category::all()
        ]);
    }
}
