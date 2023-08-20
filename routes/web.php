<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cerveja'); 
});

Route::get('/coquetel', function () {
    return view('coquetel'); 
});

Route::get('/diverso', function () {
    return view('diverso'); 
});

Route::get('/drink', function () {
    return view('drinks'); 
});

Route::get('/energetico', function () {
    return view('energetico'); 
});

Route::get('/petisco', function () {
    return view('petisco'); 
});

Route::get('/refrigerante', function () {
    return view('refrigerante'); 
});

Route::get('/sobremesa', function () {
    return view('sobremesa'); 
});

Route::get('/suco', function () {
    return view('suco'); 
});

Route::get('/sushi', function () {
    return view('sushi'); 
});

Route::get('/vinho', function () {
    return view('vinho'); 
});