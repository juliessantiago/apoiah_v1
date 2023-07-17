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

        $alunos = Aluno::all();
        $psicologos = Psicologo::all();
        foreach($alunos as $aluno){
            $psicologos->first();
            $aluno->orientadores()->attach($psicologos->id);
        }
    }
}
