<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Entidade;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Entidade::factory(10)->create();
        // User::factory(1)->create();

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

    }
}
