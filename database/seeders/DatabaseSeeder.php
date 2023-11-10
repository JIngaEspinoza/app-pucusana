<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Adicional;
use App\Models\Entidade;
use App\Models\User;
use App\Models\Vehiculo;
use App\Models\Type;
use App\Models\Sub_type;
use App\Models\Incidence;
use App\Models\Infraction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {        
        Entidade::factory(20)->create();
        Vehiculo::factory(20)->create();
        Adicional::factory(20)->create();
        User::create([
            'imagen' => 'uploads/usuarios/perfil_2.svg',
            'apellidos' => 'const',
            'nombres' => 'const',
            'dni' => '12345678',
            'edad' => '100',
            'cumple' => '1990-01-01',
            'sexo' => 'No definido',
            'celular' => '999999999',
            'direccion' => 'Pucusana',
            'distrito' => 'Pucusana',
            'username' => 'Sigao Developer',
            'email' => 'sigao.developer@gmail.com',
            'password' => 'password123', // Contraseña encriptada
            'rol' => 'Super administrador',
            'cargo' => 'Developer',
            'area' => 'TRANSPORTE|SEGURIDAD CIUDADANA|GESTIÓN Y RIESGOS DE DESASTRES|FISCALIZACIÓN Y CONTROL|DESARROLLO ECONÓMICO Y TURISMO|SANIDAD Y SALUD|DESARROLLO SOCIAL, DEMUNA, OMAPED Y CIAM|CONTABILIDAD|TEC. DE LA INFORMACIÓN Y SISTEMAS|ADMINISTRACIÓN TRIBUTARIA|TESORERIA|FIZCALIZACIÓN|TRIBUTARIA|USUARIOS',
            'estado' => true,
            'soporte' => false,
            'email_verified_at' => null,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'imagen' => 'uploads/usuarios/perfil_2.svg',
            'apellidos' => 'const',
            'nombres' => 'const',
            'dni' => '12345678',
            'edad' => '100',
            'cumple' => '1990-01-01',
            'sexo' => 'No definido',
            'celular' => '999999999',
            'direccion' => 'Pucusana',
            'distrito' => 'Pucusana',
            'username' => 'Sigao Soporte',
            'email' => 'sigao.soporte@gmail.com',
            'password' => '#soportecodigomorse01', // Contraseña encriptada
            'rol' => 'Super administrador',
            'cargo' => 'Developer',
            'area' => 'TRANSPORTE|SEGURIDAD CIUDADANA|GESTIÓN Y RIESGOS DE DESASTRES|FISCALIZACIÓN Y CONTROL|DESARROLLO ECONÓMICO Y TURISMO|SANIDAD Y SALUD|DESARROLLO SOCIAL, DEMUNA, OMAPED Y CIAM|CONTABILIDAD|TEC. DE LA INFORMACIÓN Y SISTEMAS|ADMINISTRACIÓN TRIBUTARIA|TESORERIA|FIZCALIZACIÓN|TRIBUTARIA|USUARIOS',
            'estado' => true,
            'soporte' => true,
            'email_verified_at' => null,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Type::create([
            'tipo_nombre' => 'CIERRE DE VIA TEMPORALES'
        ]);
        Type::create([
            'tipo_nombre' => 'CONTROL VEHICULAR'
        ]);
        Type::create([
            'tipo_nombre' => 'OPERATIVOS INOPINADOS/ INTERVENCION DE RUTINA'
        ]);
        Type::create([
            'tipo_nombre' => 'SEGURIDAD VIAL'
        ]);

        //1
        Sub_type::create([
            'id_tipo' => '1',
            'subtipo_nombre' => 'ACTIVIDADES ORGANIZADAS POR LA MUNICIPALIDAD'
        ]);
        Sub_type::create([
            'id_tipo' => '1',
            'subtipo_nombre' => 'APOYO A UNIDAD ORGANICA'
        ]);

        //2
        Sub_type::create([
            'id_tipo' => '2',
            'subtipo_nombre' => 'CONTROL TRANQUERA'
        ]);
        Sub_type::create([
            'id_tipo' => '2',
            'subtipo_nombre' => 'DESVIO DE VEHICULOS'
        ]);
        Sub_type::create([
            'id_tipo' => '2',
            'subtipo_nombre' => 'INGRESO DE CAMARAS FRIGORIFICAS'
        ]);
        Sub_type::create([
            'id_tipo' => '2',
            'subtipo_nombre' => 'INGRESO DE EMBARCACIONES PESQUERAS ARTESANALES O DE RECREO'
        ]);
        Sub_type::create([
            'id_tipo' => '2',
            'subtipo_nombre' => 'CONTROL VEHICULAR PARQUEO DE PLAYAS O PUCUSANA PUEBLO'
        ]); 

        //3
        Sub_type::create([
            'id_tipo' => '3',
            'subtipo_nombre' => 'PARADERO INFORMAL'
        ]);
        Sub_type::create([
            'id_tipo' => '3',
            'subtipo_nombre' => 'TRANSPORTE PUBLICO INFORMAL'
        ]);
        Sub_type::create([
            'id_tipo' => '3',
            'subtipo_nombre' => 'ATU'
        ]);
        Sub_type::create([
            'id_tipo' => '3',
            'subtipo_nombre' => 'CONDUCTOR SIN SOAT O SOAT VENCIDO'
        ]);
        Sub_type::create([
            'id_tipo' => '3',
            'subtipo_nombre' => 'SENSIBILIZACION'
        ]);
        Sub_type::create([
            'id_tipo' => '3',
            'subtipo_nombre' => 'CONDUCTOR SIN LICENCIA'
        ]);
        Sub_type::create([
            'id_tipo' => '3',
            'subtipo_nombre' => 'ETC'
        ]);
        
        //4
        Sub_type::create([
            'id_tipo' => '4',
            'subtipo_nombre' => 'ATROPELLO'
        ]);
        Sub_type::create([
            'id_tipo' => '4',
            'subtipo_nombre' => 'CAMPAÑAS'
        ]);
        Sub_type::create([
            'id_tipo' => '4',
            'subtipo_nombre' => 'CHOQUE'
        ]);

        Incidence::factory(1000)->create();

        $this->createInfraction('IC-01', 99.00);
        $this->createInfraction('IC-02', 99.00);
        $this->createInfraction('IC-03', 99.00);
        $this->createInfraction('IC-04', 247.50);
        $this->createInfraction('IC-05', 148.50);
        $this->createInfraction('IC-06', 148.50);
        $this->createInfraction('IC-07', 148.50);
        $this->createInfraction('IC-08', 148.50);
        $this->createInfraction('IC-09', 99.00);
        $this->createInfraction('IC-10', 99.00);
        $this->createInfraction('IC-11', 247.50);
        $this->createInfraction('IC-12', 99.00);
        $this->createInfraction('IC-13', 99.00);
        $this->createInfraction('IC-14', 99.00);
        $this->createInfraction('IC-15', 99.00);
        $this->createInfraction('IC-16', 247.50);
        $this->createInfraction('IC-17', 148.50);
        $this->createInfraction('IC-18', 148.50);
        $this->createInfraction('IC-19', 148.50);
        $this->createInfraction('IC-20', 148.50);
        $this->createInfraction('IC-21', 247.50);
        $this->createInfraction('IC-22', 247.50);
        $this->createInfraction('IC-23', 247.50);
        $this->createInfraction('IC-24', 148.50);
        $this->createInfraction('IC-25', 247.50);
        $this->createInfraction('IC-26', 247.50);
        $this->createInfraction('IC-27', 247.50);
        $this->createInfraction('IC-28', 247.50);

        $services = [
            ['descripcion' => 'INSPECCIÓN DE CARACTERÍSTICAS', 'precio' => 50.00],
            ['descripcion' => 'CREDENCIAL DEL CONDUCTOR', 'precio' => 75.00],
            ['descripcion' => 'PAPELETA', 'precio' => 100.00],
            ['descripcion' => 'DEPÓSITO', 'precio' => 125.00],
        ];

        foreach ($services as $service) {
            DB::table('services')->insert($service);
        }

    }

    private function createInfraction($cod, $monto)
    {
        Infraction::create([
            'cod' => $cod,
            'monto' => $monto,
            'monto_desc_50' => $monto / 2,
        ]);
    }
}
