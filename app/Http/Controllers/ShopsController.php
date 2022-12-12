<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cache;
use App\Models\Connect;


class ShopsController extends Controller
{
    public function index(User $slug)
    {
        $connects = (auth()->user()) ? auth()->user()->connecting->contains($slug->slug) : false;

        $productCount = Cache::remember(
            'count.products.'. $slug->slug,
            now()->addSeconds(30), 
            function() use ($slug){
                return $slug->products->count();
        });
        $connectsCount = Cache::remember(
            'count.connects.' . $slug->id,
            now()->addSeconds(30),
            function () use ($slug) {
                return $slug->shop->connects->count();
            });


        return view('Shops.index', compact('slug','connects','productCount','connectsCount'));
    }

    public function edit(User $slug)
    {
       $this->authorize('update',$slug->shop);

        return view('Shops.edit', compact('slug'));
    }

    public function update(User $slug)
    {
        $this->authorize('update',$slug->shop);
        $data = request()->validate([
            'description'=>'nullable',
            'url'=>'nullable',
            'image'=>'nullable',
        ]);

        if (request('image')){
        $imagePath = request('image')->store('shop', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
        $image->save();

        $imageArray = ['image'=>$imagePath];
        }

        auth()->user()->shop->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/shop/{$slug->slug}");
    }
}

