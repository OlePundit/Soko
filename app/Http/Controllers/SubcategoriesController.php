<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Http\Resources\SubcategoriesResource;

class SubcategoriesController extends Controller
{
   public function index()
   {
    $categories_id = request('categories_id');
   // return $categories_id;

    $subcategories = Subcategory::where('categories_id',$categories_id)->get();
    return SubcategoriesResource::collection($subcategories);
   }
}


