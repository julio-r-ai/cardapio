<?php

use Illuminate\Support\Facades\Route; 

use App\Http\Controllers\EventController;
 
Route::get('/', [EventController::class, 'index']);

Route::get('/coquetel', function () {
    return view('coquetel'); 
});

Route::get('/diverso', function () {
    return view('diverso'); 
});

Route::get('/drinks', function () {
    return view('drinks'); 
});

Route::get('/energetico', function () {
    return view('energetico'); 
});

Route::get('/petisco', function(){return view('petisco');});

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

Route::get('/login', function () {
    return view('login'); 
});

Route::get('/admin', function () {
    return view('admin'); 
});