<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\Product;

class EventController extends Controller
{
    public function cerveja(){

       /*  $products = Product::all(); */ 
  
        return view('cerveja'/* , ['products' => $products] */);  
    }

    public function coquetel(){
        return view('coquetel');
    }

    public function diverso(){
        return view('diverso');
    }

    public function drinks(){
        return view('drinks');
    }

    public function energetico(){
        return view('energetico');
    }

    public function petisco(){
        return view('petisco');
    }

    public function refrigerante(){
        return view('refrigerante');
    }

    public function sobremesa(){
        return view('sobremesa');
    }

    public function suco(){
        return view('suco');
    }

    public function sushi(){
        return view('sushi');
    }

    public function vinho(){
        return view('vinho');
    }

    public function login(){
        return view('login');
    }

    public function admin(){
        return view('admin');
    }
}
