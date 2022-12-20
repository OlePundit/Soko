<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected static function boot()
    {
        parent::boot();
        
        static::saving(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }

    
}
