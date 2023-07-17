<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Psicologo;
use App\Models\Aluno;

class PsicologoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Psicologo::factory(5)->create();

        // $psicologos = Aluno::all();
   
        // Aluno::all()->each(function ($aluno) use ($psicologos) { 
        //     $aluno->psicologos()->attach(
        //         $psicologos->random(rand(1, 5))->pluck('id')->toArray(),
        //     ); 
        // });
    }
}
