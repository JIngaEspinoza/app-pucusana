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
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password123'), // Contraseña encriptada
            'rol' => $this->faker->randomElement(['Usuario estandar', 'Administrador', 'Super administrador']),
            'cargo' => $this->faker->randomElement(['Inspector Municipal', 'Jefe de Inspectores Municipal', 'Secretaria Transporte', 'Técnico en Tránsito', 'Sub Gerencia de Transporte', 'Asistente', 'Administrativo', 'Apoyo Administrativo', 'Coordinador', 'Fizcalizador']),
            'area' => $this->faker->randomElement(['TRANSPORTE', 'SEGURIDAD CIUDADANA', 'GESTIÓN Y RIESGOS DE DESASTRES', 'FISCALIZACIÓN Y CONTROL', 'DESARROLLO ECONÓMICO Y TURISMO', 'SANIDAD Y SALUD', 'DESARROLLO SOCIAL, DEMUNA, OMAPED, CIAM', 'CONTABILIDAD', 'TEC. DE LA INFORMACIÓN Y SISTEMAS', 'ADMINISTRACIÓN TRIBUTARIA', 'TESORERIA', 'FIZCALIZACIÓN', 'TRIBUTARIA', 'USUARIOS']),
            'estado' => $this->faker->randomElement(['activo', 'inactivo']),
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
