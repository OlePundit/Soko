<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cache;
use App\Models\Connect;


class ShopsController extends Controller
{
    public function index(User $user)
    {
        $connects = (auth()->user()) ? auth()->user()->connecting->contains($user->id) : false;

        $productCount = Cache::remember(
            'count.products.'. $user->id,
            now()->addSeconds(30), 
            function() use ($user){
                return $user->products->count();
        });
        $connectsCount = Cache::remember(
            'count.connects.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return $user->shop->connects->count();
            });


        return view('Shops.index', compact('user','connects','productCount','connectsCount'));
    }

    public function edit(User $user)
    {
       $this->authorize('update',$user->shop);

        return view('Shops.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update',$user->shop);
        $data = request()->validate([
            'description'=>'required',
            'url'=>'',
            'image'=>'',
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

        return redirect("/shop/{$user->id}");
    }
}

