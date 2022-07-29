<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $guarded = [];

    public function shopImage()
    {
        $imagePath = ($this->image) ? $this ->image : 'shop/shop-window.svg';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function connects()
    {
        return $this->belongsToMany(User::class);
    }
}
