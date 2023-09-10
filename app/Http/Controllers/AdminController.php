<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        $products = Product::all();
        $users = User::all();
        return view('admin.dashboard',compact('products','users'));

    }
}
