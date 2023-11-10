<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'entidades';

    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'edad',
        'sexo',
        'dni',
        'tipo_documento',
        'numero_documento',
        'direccion',
        'celular',
        'numero_licencia',
        'email',
        'created_at',
        'updated_at'
    ];
}
