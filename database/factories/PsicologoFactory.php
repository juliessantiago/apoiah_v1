<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Psicologo>
 */
class PsicologoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' =>$this->faker->name(),
            'instituicao'=> $this->faker->company(), 
            'email'=>$this->faker->email(), 
            'senha'=>$this->faker->lexify(),
            'cpf'=>$this->faker->numerify('###########')
        ];
    }
}
