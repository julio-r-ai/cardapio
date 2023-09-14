<?php

use Illuminate\Support\Facades\Route; 

use App\Http\Controllers\ProductController;
 
Route::get('/', [ProductController::class, 'cerveja']);
Route::get('/coquetel', [ProductController::class, 'coquetel']);
Route::get('/diverso', [ProductController::class, 'diverso']);
Route::get('/drinks', [ProductController::class, 'drinks']);
Route::get('/energetico', [ProductController::class, 'energetico']);
Route::get('/petisco', [EventController::class, 'petisco']);
Route::get('/refrigerante', [ProductController::class, 'refrigerante']);
Route::get('/sobremesa', [ProductController::class, 'sobremesa']);
Route::get('/suco', [ProductController::class, 'suco']);
Route::get('/sushi', [ProductController::class, 'sushi']);
Route::get('/vinho', [ProductController::class, 'vinho']);
Route::get('/login', [ProductController::class, 'login']);
Route::get('/admin', [ProductController::class, 'admin']);