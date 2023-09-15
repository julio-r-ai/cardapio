<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login(){
        $admins = admin::all();
        return view('login');
    }

    public function admin(){
        $products = Product::all();
        $admins = admin::all();
        return view('admin', ['products' => $products]);
    }
}
