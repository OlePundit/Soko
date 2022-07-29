<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function subcategories()
    {
    return $this->belongsTo(Category::class);
    }
    
}
