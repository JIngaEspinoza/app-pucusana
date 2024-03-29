<?php

namespace Database\Factories;

use App\Models\Incidence;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incidence>
 */

class IncidenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Incidence::class;
    public function definition(): array
    {
        static $incidenceId = 0;
        $id_user = $this->faker->randomElement([ 1,2 ]);
        $fecha = $this->faker->randomElement([ 
            '2023-01-01','2023-01-02','2023-01-03','2023-01-01','2023-01-05','2023-01-06','2023-01-07','2023-01-08','2023-01-09', 
            '2023-02-01','2023-02-02','2023-02-03','2023-02-02','2023-02-05','2023-02-06','2023-02-07','2023-02-08','2023-02-09', 
            '2023-03-01','2023-03-02','2023-03-03','2023-03-03','2023-03-05','2023-03-06','2023-03-07','2023-03-08','2023-03-09', 
            '2023-04-01','2023-04-02','2023-04-03','2023-04-04','2023-04-05','2023-04-06','2023-04-07','2023-04-08','2023-04-09', 
            '2023-05-01','2023-05-02','2023-05-03','2023-05-05','2023-05-05','2023-05-06','2023-05-07','2023-05-08','2023-05-09',
            '2023-06-01','2023-06-02','2023-06-03','2023-06-06','2023-06-05','2023-06-06','2023-06-07','2023-06-08','2023-06-09',
            '2023-07-01','2023-07-02','2023-07-03','2023-07-07','2023-07-05','2023-07-06','2023-07-07','2023-07-08','2023-07-09',
            '2023-08-01','2023-08-02','2023-08-03','2023-08-08','2023-08-05','2023-08-06','2023-08-07','2023-08-08','2023-08-09',
            '2023-09-01','2023-09-02','2023-09-03','2023-09-09','2023-09-05','2023-09-06','2023-09-07','2023-09-08','2023-09-09',
        ]);
        $tipo = $this->faker->randomElement([ 1,2,3,4 ]);
        $sub_tipo = $this->faker->randomElement([ 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17 ]);

        $incidenceId++;
        return [
            'id'=>$incidenceId,
            'fecha'=>$fecha,
            'id_user'=>$id_user,
            'lugar'=>'',
            'id_tipo'=>$tipo,
            'id_subtipo'=>$sub_tipo,
            'obs'=>'',
        ];
    }
}
