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
            'nome'=>$this->faker->name, 
            'cpf'=>$this->faker->numerify('###########'), //alterar depois para formato válido de cpf 
            'matricula'=>$this->faker->bothify(),
            'idade'=>$this->faker->numberBetween(7,20),//idade depois será calculada de acordo com data_nasc
            'turma'=>$this->faker->randomElement(['5a', '5b', '6a', '6b', '7a','7b', '8a', '8b', '9a', '9b']),
            'vulner_social'=>$this->faker->randomElement(['0', '1']),
            'data_nasc'=>$this->faker->date('Y_m_d'),
            'turno'=>$this->faker->randomElement(['manha', 'tarde', 'noite']),
            'motivo_enc'=>$this->faker->paragraphs(),
            'responsavel'=>$this->faker->name, 
        ];
    }
}
