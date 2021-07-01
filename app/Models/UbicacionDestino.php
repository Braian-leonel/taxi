<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UbicacionDestino extends Model
{
    protected $fillable = [
        'calle',
        'barrio',
        'numero_casa',
        'altura_casa',
    ];
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ubicacion_destinos'; /* que tabla esta relacionado a este modelo */
}
