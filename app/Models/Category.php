<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function product()
    {
    return $this->belongsTo(Product::class);
    }
    public function subcategories()
    {
    return $this->hasMany(Subcategory::class);
    }
    
}
