<?php

namespace Database\Factories;

use App\Models\Adicional;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adicional>
 */
class AdicionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Adicional::class;
    public function definition(): array
    {
        static $vehiculoId = 0;

        // if ($vehiculoId > 20) {
        //     $vehiculoId = 1;
        // }
        $tipo = $this->faker->randomElement([
            'Inspeccion Vehicular',
            'Credencial vehicular',
            'Curso Seguridad Vial',
            'SOAT'
        ]);

        $numero = str_pad($this->faker->unique()->numberBetween(1, 99999), 5, '0', STR_PAD_LEFT);

        $estado = $this->faker->randomElement([
            'Vigente',
            'Vencido'
        ]);

        $flag = $this->faker->randomElement([
            'INSPECCION',
            'SOAT'
        ]);
        $vehiculoId++;

        return [
            'id_vehiculo' => $vehiculoId,
            'tipo' => $tipo,
            'numero' => $numero,
            'estado' => $estado,
            'fecha_emision' => $this->faker->date(),
            'fecha_caducidad' => $this->faker->date(),
            'flag' => $flag
        ];
    }
}
