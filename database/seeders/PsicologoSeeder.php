<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Psicologo;
use App\Models\Aluno;
use Carbon\Carbon;

class PsicologoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Psicologo::factory(5)->create();

        $now = Carbon::now()->toDateTimeString();

        $alunos = Aluno::all();
        $psicologos = Psicologo::all();
        $dados = [
            'created_at' => $now, 
            'updated_at' => $now,
            'parecer' =>fake()->paragraph(), 
            'data_entrada' => $now
        ];
        $alunos->each( function ($aluno)
        use($psicologos, $dados){
            $psi = $psicologos->random()->id;
            $aluno->psicologos()->attach([
                $psi => $dados
            ]);
        });
}
}