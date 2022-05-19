<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\Facades\Image;


class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->products()->pluck('products.user_id');

        $products = Product::whereIn('user_id', $users)->with('user')->latest()->get();

       return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
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
        return view('products.show', compact('product'));
    }

}
