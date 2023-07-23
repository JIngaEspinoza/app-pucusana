<?php

namespace Database\Factories;

use App\Models\Entidade;
use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehiculo>
 */
class VehiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Vehiculo::class;
    public function definition(): array
    {
        return [
            'numero_licencia' =>  $this->faker->regexify('[A-Z]{1,2}-[0-9]{5,8}'),
            'numero_municipal' =>  $this->faker->numberBetween(1, 999), // Números de 1 a 999 (máximo 3 dígitos).
            'empresa' =>  $this->faker->company,
            'placa' =>  $this->faker->regexify('[A-Z]{3}-[0-9]{3}'), // Formato "ABC-123".
            'id_propietario' => function () {
                return Entidade::inRandomOrder()->first()->id;
            },
            'id_chofer' => function () {
                return Entidade::inRandomOrder()->first()->id;
            },
        ];
    }
}
