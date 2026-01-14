<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::post('/pizzas', [PizzaController::class, 'store'])-> name ('pizzas.store');
Route::get('/pizzas/create', [PizzaController::class, 'create'])-> name ('pizzas.create');

Route::get('/pizzas/{id}/edit', [PizzaController::class, 'edit'])-> name ('pizzas.edit');
Route::put('/pizzas/{id}', [PizzaController::class, 'update'])-> name ('pizzas.update');


