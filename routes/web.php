<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::post('/submit', [TodoController::class, 'submit']);
Route::get('/delete/{id}', [TodoController::class, 'delete']);
