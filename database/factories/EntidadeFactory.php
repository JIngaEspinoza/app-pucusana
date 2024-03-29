<?php

namespace Database\Factories;

use App\Models\Entidade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EntidadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Entidade::class;
    public function definition()
    {
        return [
            'apellidos' => strtoupper($this->faker->lastName()),
            'nombres' => strtoupper($this->faker->name()),
            'edad' => $this->faker->numberBetween(18,65),
            'sexo' => $this->faker->randomElement(['Masculino','Femenino']),
            'dni' => $this->faker->unique()->randomNumber(8),
            'tipo_documento' => $this->faker->randomElement(['DNI','RUC']),
            'numero_documento' => $this->faker->unique()->randomNumber(8),
            'direccion' => $this->faker->address(),
            'celular' => $this->faker->phoneNumber(),
            'numero_licencia' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->email,
        ];
    }
}
