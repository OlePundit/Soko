<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Connect;
use App\Models\Product;

class ConnectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        return auth()->user()->connecting()->toggle($user->shop);
    }
    public function index()
    {
    $users = auth()->user()->connecting()->pluck('shops.user_id');

    $products = Product::whereIn('user_id', $users)->with('user')->latest()->get();

    return view('explore.index', compact('products'));
    
    }
    
}
