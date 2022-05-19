<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ConnectsController extends Controller
{
    public function store(User $user)
    {
        return auth()->user()->connect()->toggle($user->shop);
    }
}
