<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ubicacion_Origen;
use App\Models\Ubicacion_Destino;
use App\Models\TipoServicio;
use App\Models\User;

class TipoServicio extends Model
{
    use HasFactory;

    public function tiposervicio()
    {
        return $this->belongsTo(TipoServicio::class); 
    }
}
