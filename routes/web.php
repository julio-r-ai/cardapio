<?php

use Illuminate\Support\Facades\Route; 

use App\Http\Controllers\EventController;
 
Route::get('/', [EventController::class, 'cerveja']);
Route::get('/coquetel', [EventController::class, 'coquetel']);
Route::get('/diverso', [EventController::class, 'diverso']);
Route::get('/drinks', [EventController::class, 'drinks']);
Route::get('/energetico', [EventController::class, 'energetico']);
Route::get('/petisco', [EventController::class, 'petisco']);
Route::get('/refrigerante', [EventController::class, 'refrigerante']);
Route::get('/sobremesa', [EventController::class, 'sobremesa']);
Route::get('/suco', [EventController::class, 'suco']);
Route::get('/sushi', [EventController::class, 'sushi']);
Route::get('/vinho', [EventController::class, 'vinho']);
Route::get('/login', [EventController::class, 'login']);
Route::get('/admin', [EventController::class, 'admin']);