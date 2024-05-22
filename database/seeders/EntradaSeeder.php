<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Entrada;
use Illuminate\Support\Str;

class EntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            Entrada::create([
                'nombre' => 'Entrada ' . Str::random(5), 
                'imagen' => 'imagen' . $i . '.jpg', 
                'activo' => rand(0, 1) == 1 ? true : false, 
            ]);
        }
    }
}
