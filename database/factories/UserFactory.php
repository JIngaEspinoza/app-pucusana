<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;
    public function definition()
    {
        return [
            'imagen' => 'uploads/usuarios/perfil_2.svg',
            'apellidos' => $this->faker->lastName,
            'nombres' => $this->faker->firstName,
            'dni' => $this->faker->randomNumber(8),
            'edad' => $this->faker->numberBetween(18, 60),
            'cumple' => $this->faker->date(),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'celular' => $this->faker->randomNumber(9),
            'direccion' => $this->faker->address,
            'distrito' => $this->faker->city,
            'username' => 'Sigao Developer',
            'email' => 'sigao.developer.@gmail.com',
            'password' => 'password123', // Contraseña encriptada
            'rol' => 'Super administrador',
            'cargo' => 'Developer',
            'area' => 'TRANSPORTE|SEGURIDAD CIUDADANA-GESTIÓN Y RIESGOS DE DESASTRES|FISCALIZACIÓN Y CONTROL|DESARROLLO ECONÓMICO Y TURISMO|SANIDAD Y SALUD|DESARROLLO SOCIAL, DEMUNA, OMAPED Y CIAM|CONTABILIDAD|TEC. DE LA INFORMACIÓN Y SISTEMAS|ADMINISTRACIÓN TRIBUTARIA|TESORERIA|FIZCALIZACIÓN|TRIBUTARIA|USUARIOS',
            'estado' => 'activo',
            'email_verified_at' => null,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
