<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $guarded = [];

    public function shopImage()
    {
        $imagePath = ($this->image) ? $this ->image : 'shop/286wsFlzBByiwEoqw3iD94lrCfs1yfvojUImLLfD.jpg';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
