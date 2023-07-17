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
                'cpf'=>$this->faker->cpf(),
                'matricula'=>$this->faker->numerify(),
                'idade'=>$this->faker->numberBetween(7,20),
                'turma'=>'7A',
                'vulner_social'=>true,
                'data_nasc'=>$this->faker->date('Y_m_d'),
                'turno'=>'tarde',
                'motivo_enc'=>$this->faker->paragraphs()[0],
                'responsavel'=>$this->faker->name(), 
                'orientador_id'=>$this->faker->numberBetween(1,5)
                //levando em consideração que incluo 5 registros de orientador no seeder 
        ];
        //alterar valores de turno para enum e vulner_social para boolean
        //tomar cuidado com o retorno do faker!
    }
}
