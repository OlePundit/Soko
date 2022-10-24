<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\Facades\Image;
use App\Models\User;


class ProductsController extends Controller
{

    public function index()
    {
       $marketplaces = Product::take(6)->get();

       $wines = Product::where('category','wine')->take(6)->get();

       $whiskys = Product::where('category','whisky')->take(6)->get();

       $vodkas = Product::where('category','vodka')->take(6)->get();

       $gins = Product::where('category','gin')->take(6)->get();

       $beers = Product::where('category','beer')->take(6)->get();

       $mixers = Product::where('category','mixers')->take(6)->get();

       $discounts = Product::where('discount','<',0)->orderByDesc('discount')->take(5)->get();

       return view('Products.index', compact('marketplaces', 'wines', 'gins','beers', 'whiskys','mixers','discounts'));
    }
    public function edit(\App\Models\Product $product)
    {
        $this->authorize('update', $product);

        return view('Products.edit', compact('product'));
    }
    
    public function update(Product $product)
    {
        $this->authorize('update', $product);
        $data =  request()->validate([
            'category'=>'nullable',
            'product_name'=>'nullable',
            'volume'=>'nullable',
            'stock'=>'nullable',
            'price'=>'nullable',
            'description'=>'nullable',
            'offer'=>'nullable',
            'discount'=>'nullable',

        ]);

        if (request('offer')){
            $price = $data['price'];
            $offer = $data['offer'];
            $computed =  $offer-$price;
            $newcomputed = $computed / $price;
            $finalcomputed = round($newcomputed * 100, 0);
            number_format((float)$finalcomputed,0);
            $finalcomputed = $data['discount'];
        }

    

        $product->update(array_merge(
            $data,
        ));

        return redirect("/p/{$product->id}");
    }
    public function create()
    {

        return view('Products.create');
    }
    
    public function store()
    {
        $data = request()->validate([
        'product_name' => 'required',
        'category' => 'required',
        'volume' => 'required',
        'stock' => 'required', 
        'price' => ['required', 'integer'],
        'description' => '',
        'offer' => 'nullable',
        'image' => ['required', 'image'],
        'discount' => 'nullable',
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        $price = $data['price'];
        $offer = $data['offer'];
        $computed =  $offer-$price;
        $newcomputed = $computed / $price;
        $finalcomputed = round($newcomputed * 100, 0);
        number_format((float)$finalcomputed,0);


        auth()->user()->products()->create([
            'product_name' => $data['product_name'],
            'category' => $data['category'],
            'volume' => $data['volume'],
            'stock' => $data['stock'], 
            'price' => $data['price'],
            'description' => $data['description'],
            'offer'=>$data['offer'],
            'image' => $imagePath,
            'discount' => $finalcomputed,
        ]);
        

        return redirect('/shop/' . auth()->user()->id);


      
    }

    public function show(\App\Models\Product $product)
    {
        return view('Products.show', compact('product'));
    }

}
