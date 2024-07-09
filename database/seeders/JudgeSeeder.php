<?php

namespace Database\Seeders;

use App\Models\Judge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JudgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Judge::create([
            'name'=>'Juan Carlos Mariátegui',
            'category'=>Judge::TAOLU,
            'style' => Judge::MODERNO,
            'type'=> Judge::A
        ]);
        Judge::create([
            'name'=>'José Gomez Velasquez',
            'category'=>Judge::TAOLU,
            'style' => Judge::MODERNO,
            'type'=> Judge::B
        ]);
        Judge::create([
            'name'=>'Carlos Audante Rodriguez',
            'category'=>Judge::SANDA,
            'style' => Judge::MODERNO,
            'type'=> Judge::A
        ]);
        Judge::create([
            'name'=>'Emilio Galvez Solis',
            'category'=>Judge::TAOLU,
            'style' => Judge::TRADICIONAL,
            'type'=> Judge::B
        ]);
        Judge::create([
            'name'=>'Mario Cabrejos Sol',
            'category'=>Judge::SANDA,
            'style' => Judge::MODERNO,
            'type'=> Judge::A
        ]);
        Judge::create([
            'name'=>'Tadeo Ortiz Salas',
            'category'=>Judge::SANDA,
            'style' => Judge::MODERNO,
            'type'=> Judge::A
        ]);
        Judge::create([
            'name'=>'Tadeo Ortiz Salas222',
            'category'=>Judge::TAOLU,
            'style' => Judge::MODERNO,
            'type'=> Judge::A
        ]);
    }
}
