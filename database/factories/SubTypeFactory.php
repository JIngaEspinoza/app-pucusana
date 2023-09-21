<?php

namespace Database\Factories;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sub_type>
 */
class SubTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Type::class;
    public function definition(): array
    {
        return [
            'id_tipo' => '',
            'subtipo_nombre' => '';
        ];
    }
}
