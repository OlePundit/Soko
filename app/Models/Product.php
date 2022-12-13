<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Product extends Model
{

    protected $guarded = [];

    //protected static function boot()
    //{
    //    parent::boot();
    //    static::created(function ($product) {
    //        $product->slug = $product->generateSlug($product->product_name);
    //        $product->save();
    //    });
    //}

    //private function generateSlug($product_name)
    //{
    //    if (static::whereSlug($slug = Str::slug($product_name))->exists()) {
    //        $max = static::whereName($product_name)->latest('id')->skip(1)->value('slug');
    //        if (isset($max[-1]) && is_numeric($max[-1])) {
    //            return preg_replace_callback('/(\d+)$/', function($mathces) {
    //                return $mathces[1] + 1;
    //            }, $max);
    //        }
    //        return "{$slug}-2";
    //    }
    //    return $slug;
    //}  
    
    public function user()
    {
    return $this->belongsTo(User::class);
    }
    
    public function categories()
    {
        return $this->hasMany(Category::class);
    }


}
