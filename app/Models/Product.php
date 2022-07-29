<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    protected $guarded = [];
    
    public function user()
    {
    return $this->belongsTo(User::class);
    }
    
    public function categories()
    {
        return $this->hasMany(Category::class);
    }


}
