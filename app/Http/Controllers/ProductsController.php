<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\Facades\Image;
use App\Models\User;
use Illuminate\Support\Str;

class ProductsController extends Controller
{

    public function index()
    {
       $marketplaces = Product::take(6)->get();

       $wines = Product::where('category','wine')->latest()->take(6)->get();

       $whiskys = Product::where('category','whisky')->latest()->take(6)->get();

       $vodkas = Product::where('category','vodka')->latest()->take(6)->get();

       $gins = Product::where('category','gin')->latest()->take(6)->get();

       $beers = Product::where('category','beer')->latest()->take(6)->get();

       $mixers = Product::where('category','mixers')->latest()->take(6)->get();

       $discounts = Product::where('discount','<',0)->orderByDesc('discount')->take(5)->get();

       return view('Products.index', compact('marketplaces', 'wines', 'gins','beers','vodkas', 'whiskys','mixers','discounts'));
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
        'slug' => 'nullable'
        ]);

        $filextension = request('image')->getClientOriginalExtension();
        $extension = Str::lower($filextension);
        $name = $data['product_name'];
        $name = str_replace(' ', '-', $name);

        $filename = $name.time().'.'.$extension;

        $imagePath = request('image')->storeAs('uploads', $filename, 'public');

        $image = Image::make(public_path("storage/". $imagePath))->fit(1200, 1200);
        $image->save();

        $price = $data['price'];
        $offer = $data['offer'];
        if (request('offer')) {
            $computed =  $offer-$price;
            $newcomputed = $computed / $price;
            $finalcomputed = round($newcomputed * 100, 0);
            number_format((float)$finalcomputed,0);
        }else{
            $finalcomputed=0;
        }

        $slug = $data['product_name'];
        $str = Str::lower($slug);
        $slug = Str::slug($str, "-");
        $slug = $this->checkSlug($slug);


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
            'slug' => $slug
        ]);

        return redirect('/shop/' . auth()->user()->id);     
    }
    

    public function show(\App\Models\Product $product)
    {
        return view('Products.show', compact('product'));
    }


    protected function checkSlug($slug) {

    if(Product::where('slug',$slug)->count() > 0){
        $numInUN = $this->countEndingDigits($slug);
        if ($numInUN > 0) {
                $base_portion = substr($slug, 0, -$numInUN);
                $digits_portion = abs(substr($slug, -$numInUN));
        } else {
                $base_portion = $slug . "-";
                $digits_portion = 0;
        }
    
        $slug = $base_portion . intval($digits_portion + 1);
        $slug = $this->checkSlug($slug);
    }
    
    return $slug;
    }

    protected function countEndingDigits($string)
    {
        $tailing_number_digits =  0;
        $i = 0;
        $from_end = -1;
        while ($i < strlen($string)) :
        if (is_numeric(substr($string, $from_end - $i, 1))) :
            $tailing_number_digits++;
        else :
            // End our while if we don't find a number anymore
            break;
        endif;
        $i++;
        endwhile;
        return $tailing_number_digits;
    }

    

    

}
