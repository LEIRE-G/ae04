<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pizza;
use App\Models\Ingrediente;

class PizzaIngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Margarita
        $margarita = Pizza::where('nombre', 'Margarita')->first();
        $margarita->ingredientes()->attach([
            Ingrediente::where('nombre', 'Tomate')->first()->id,
            Ingrediente::where('nombre', 'Mozzarella')->first()->id,
            Ingrediente::where('nombre', 'Albahaca')->first()->id,
        ]);

        // Prosciutto
        $prosciutto = Pizza::where('nombre', 'Prosciutto')->first();
        $prosciutto->ingredientes()->attach([
            Ingrediente::where('nombre', 'Tomate')->first()->id,
            Ingrediente::where('nombre', 'Mozzarella')->first()->id,
            Ingrediente::where('nombre', 'Jamón serrano')->first()->id,
        ]);

        // Cuatro Quesos
        $cuatroQuesos = Pizza::where('nombre', 'Cuatro Quesos')->first();
        $cuatroQuesos->ingredientes()->attach([
            Ingrediente::where('nombre', 'Mozzarella')->first()->id,
            Ingrediente::where('nombre', 'Gorgonzola')->first()->id,
            Ingrediente::where('nombre', 'Parmesano')->first()->id,
            Ingrediente::where('nombre', 'Queso de cabra')->first()->id,
        ]);

        
    }
}