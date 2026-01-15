<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', [pizzaController::class, 'showAllPizzas'])->name('pizzas.showAllPizzas');
Route::get('/pizza/{id}', [pizzaController::class, 'showOnePizzas'])->name('pizzas.showOnePizza');

Route::post('/pizzas', [PizzaController::class, 'store'])-> name ('pizzas.store');
Route::get('/pizzas/create', [PizzaController::class, 'create'])-> name ('pizzas.create');

Route::get('/pizzas/{id}/edit', [PizzaController::class, 'edit'])-> name ('pizzas.edit');
Route::put('/pizzas/{id}', [PizzaController::class, 'update'])-> name ('pizzas.update');

Route::get('/pizzas/confirmDelete/{pizza}', [PizzaController::class, 'confirmDelete'])-> name ('pizzas.confirmDelete');
Route::delete('/pizzas/destroy/{pizza}', [PizzaController::class, 'destroy'])-> name ('pizzas.destroy');
