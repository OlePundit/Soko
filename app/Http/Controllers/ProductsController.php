<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\Facades\Image;
use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;


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
    
    #hacktoberfest
    public function store()
    {
        $data = request()->validate([
        'product_name' => '',
        'selectedCategory' => '',
        'selectedSubcategory' => '',
        'volume' => 'nullable',
        'type'=> 'nullable',
        'brand' => 'nullable',
        'transmission' => 'nullable',
        'consumption' => 'nullable',
        'numberplate'=> 'nullable',
        'yom' => 'nullable',
        'processor' => 'nullable',
        'operatingSystem' => 'nullable',
        'storageType' => 'nullable',
        'storageCapacity'=> 'nullable',
        'memory' => 'nullable',
        'display' => 'nullable',
        'ad_status' => 'nullable', 
        'condition'=> 'nullable',
        'price' => '',
        'attachments' => 'nullable',
        'description' => '',
        'image' => '',
        ]);

        $imagePath = request()->file('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();
    

        auth()->user()->products()->create([
            'product_name' => $data['product_name'],
            'selectedCategory' => $data['selectedCategory'],
            'selectedSubcategory' => $data['selectedSubcategory'],
            'volume' => $data['volume'],
            'type'=> $data['type'],
            'brand' => $data['brand'],
            'transmission' => $data['transmission'],
            'consumption' => $data['consumption'],
            'numberplate'=> $data['numberplate'],
            'yom' => $data['yom'],
            'processor' => $data['processor'],
            'operatingSystem' => 'operatingSystem',
            'storageType' => $data['storageType'],
            'storageCapacity'=> $data['storageCapacity'],
            'memory' => $data['memory'],
            'display' => $data['display'],
            'ad_status' => $data['ad_status'], 
            'condition'=> $data['condition'],
            'price' => $data['price'],
            'attachments' => $data['attachments'],
            'description' => $data['description'],
            'image' => $imagePath,
            'liquorData' => $data['liquorData'],
            'token' => $token,
        ]);

        return redirect('/shop/' . auth()->user()->id);


      
    }

    public function show(\App\Models\Product $product)
    {
        return view('Products.show', compact('product'));
    }

}
