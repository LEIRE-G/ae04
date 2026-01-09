<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingrediente;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ingrediente::create(['nombre' => 'Tomate']);
        Ingrediente::create(['nombre' => 'Mozzarella']);
        Ingrediente::create(['nombre' => 'Jamón serrano']);
        Ingrediente::create(['nombre' => 'Gorgonzola']);
        Ingrediente::create([ 'nombre' => 'Parmesano']);
        Ingrediente::create(['nombre' => 'Queso de cabra']);
        Ingrediente::create(['nombre' => 'Albahaca']);   
    }
}
