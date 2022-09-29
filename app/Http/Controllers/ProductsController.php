<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\Facades\Image;
use App\Models\User;


class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $marketplaces = Product::take(6)->get();

       $wines = Product::where('category','wine')->take(6)->get();

       $whiskys = Product::where('category','whisky')->take(6)->get();

       $vodkas = Product::where('category','vodka')->take(6)->get();

       $gins = Product::where('category','gin')->take(6)->get();

       $beers = Product::where('category','beer')->take(6)->get();

       $mixers = Product::where('category','mixers')->take(6)->get();

       return view('Products.index', compact('marketplaces', 'wines', 'gins','vodkas','beers', 'whiskys','mixers'));
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
        'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        auth()->user()->products()->create([
            'product_name' => $data['product_name'],
            'category' => $data['category'],
            'volume' => $data['volume'],
            'stock' => $data['stock'], 
            'price' => $data['price'],
            'description' => $data['description'],
            'image' => $imagePath,
        ]);

        return redirect('/shop/' . auth()->user()->id);


      
    }

    public function show(\App\Models\Product $product)
    {
        return view('Products.show', compact('product'));
    }

}
