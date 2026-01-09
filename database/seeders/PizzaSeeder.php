<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pizza;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Pizza::create([
        'nombre' => 'Margarita', 
        'descripcion' => 'Tomate, mozzarella y albahaca', 
        'precio' => 10.50
       ]);

       Pizza::create([
        'nombre' => 'Prosciutto', 
        'descripcion' => 'Tomate, mozzarella y jamón serrano', 
        'precio' => 11.50
       ]);

       Pizza::create([
        'nombre' => 'Cuatro Quesos', 
        'descripcion' => 'Mozzarella, gorgonzola, parmesano y queso de cabra', 
        'precio' => 12.50
       ]);
    }
}
