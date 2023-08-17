<?php

use Illuminate\Support\Facades\Route;
  

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cerveja', function () {

    $nome = "Júlio";

    return view('cerveja', ['nome' => $nome]); 
});