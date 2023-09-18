<?php

use Illuminate\Support\Facades\Route; 

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController; 
 
Route::get('/', [ProductController::class, 'cerveja']);
Route::get('/coquetel', [ProductController::class, 'coquetel']);
Route::get('/diverso', [ProductController::class, 'diverso']);
Route::get('/drinks', [ProductController::class, 'drinks']);
Route::get('/energetico', [ProductController::class, 'energetico']);
Route::get('/petisco', [ProductController::class, 'petisco']);
Route::get('/refrigerante', [ProductController::class, 'refrigerante']);
Route::get('/sobremesa', [ProductController::class, 'sobremesa']);
Route::get('/suco', [ProductController::class, 'suco']);
Route::get('/sushi', [ProductController::class, 'sushi']);
Route::get('/vinho', [ProductController::class, 'vinho']);
Route::get('/showProduto/{id}', [ProductController::class, 'showProduto']);

Route::get('/login', [AdminController::class, 'login']);
Route::get('/admin', [AdminController::class, 'admin']);

Route::post('/admin', [AdminController::class, 'store']);
Route::post('/loginValidation', [AdminController::class, 'loginValidation']);

Route::delete('/productDelete/{id}', [AdminController::class, 'destroy']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
