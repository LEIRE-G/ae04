<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function create()
    {
        $ingredientes = Ingrediente::all();
        return view('pizzas.create',compact('ingredientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'ingredientes' => 'array',
        ],
        [
            'nombre.required' => 'El nombre es obligatorio',
            'descripcion.required' => 'La descripcion es requerida',
            'precio.required' => 'El precio es requerido',
            'precio.numeric' => 'El precio debe ser un numero',
            'ingredientes.array' => 'Los ingredientes son requeridos',
        ]);

        $pizza = Pizza::create($request->only(['nombre', 'descripcion', 'precio']));

        if ($request->has('ingredientes')) {
            $pizza->ingredientes()->attach($request->input('ingredientes'));
        }
        return redirect()->route('pizzas.index');
    }


    public function showAllPizzas()
    {
        $pizzas = Pizza::all();
        //$pizza = Pizza::with('ingredientes')->get();
        return view('pizzas.showAllPizzas', compact('pizzas'));
    }
    
    public function showOnePizza($id)
    {
        $pizza = Pizza::with('ingredientes')->findOrFail($id);
        return view('pizzas.showOnePizza', compact('pizza'));
    }


}
