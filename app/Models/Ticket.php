<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $table = 'tickets';

    protected $fillable = [
        'id',
        'id_offender',
        'direccion',
        'placa',
        'id_infraction',
        'nro_papeleta',
        'img_papeleta',
        'ord_liberacion_vehicular',
        'img_liberacion_vehicular',
        'id_user',
        'created_at',
        'updated_at'
    ];

    // Relación con el modelo Offender (un Ticket pertenece a un Offender)
    public function offender()
    {
        return $this->belongsTo(Entidade::class, 'id_offender', 'id');
    }

    // Relación con el modelo Infraction (un Ticket pertenece a una Infraction)
    public function infraction()
    {
        return $this->belongsTo(Infraction::class, 'id_infraction', 'id');
    }
}
