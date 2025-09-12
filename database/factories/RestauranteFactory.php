<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurante>
 */
class RestauranteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_fantasia' => $this->faker->company(),
            'razao_social' => $this->faker->companySuffix(),
            'endereco' => $this->faker->address(),
            'telefone' => $this->faker->phoneNumber(),
            'gerente' => $this->faker->name(),
            'is_aberto' => false
        ];
    }
}
