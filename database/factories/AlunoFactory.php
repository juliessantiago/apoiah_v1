<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                 'num_protoc' =>$this->faker->numerify(),
                'nome'=> $this->faker->name(), 
                'cpf'=>$this->faker->numerify(), //alterar depois para formato válido de cpf 
                'matricula'=>$this->faker->numerify(),
                'idade'=>$this->faker->numberBetween(7,20),
                'turma'=>$this->faker->boolean(),
                'vulner_social'=>$this->faker->boolean(),
                'data_nasc'=>$this->faker->date('Y_m_d'),
                'turno'=>$this->faker->randomElements('manha', 'tarde', 'noite'),
                'motivo_enc'=>$this->faker->paragraphs()[0],
                'responsavel'=>$this->faker->name(), 
                'orientador_id'=>$this->faker->numberBetween(1, 5),
        ];
    }
}
