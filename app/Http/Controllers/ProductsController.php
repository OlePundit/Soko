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
        'volume' => '',
        'type'=> '',
        'brand' => '',
        'transmission' => '',
        'consumption' => '',
        'numberplate'=> '',
        'yom' => '',
        'processor' => '',
        'operatingSystem' => '',
        'storageType' => '',
        'storageCapacity'=> '',
        'memory' => '',
        'display' => '',
        'ad_status' => '',
        'condition'=> '',
        'price' => '',
        'attachments' => '',
        'description' => '',
        'image' => '',
        ]);

        // Image
        $image = request()->file('image');

        // Image name
        $img_name = time() . '.' . $image->getClientOriginalExtension();

        // Upload folder
        $upload_path = public_path('uploads/images');

        // Make sure upload folder exists
        if (!file_exists($upload_path)) {
            mkdir($upload_path, 666, true);
        }

        // Modify the image and save
        $img = Image::make($image->getRealPath())->fit(1200, 1200);
        $img->save($upload_path . '/' . $img_name);

        auth()->user()->products()->create([
            'product_name' => $data['product_name'],
            'selectedCategory' => $data['selectedCategory'],
            'selectedSubcategory' => $data['selectedSubcategory'],
            'category' => $data['category'],
            'subcategory' => $data['subcategory'],
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
            #'image' => $imagePath,
            'liquorData' => $data['liquorData']
        ]);

        return redirect('/shop/' . auth()->user()->id);



    }

    public function show(\App\Models\Product $product)
    {
        return view('Products.show', compact('product'));
    }

}
