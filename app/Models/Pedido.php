<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ubicacion_Origen;
use App\Models\Ubicacion_Destino;
use App\Models\TipoServicio;
use App\Models\User;

class Pedido extends Model
{

    use HasFactory;

    protected $fillable = [
        'user',
        'ubicacion_origen',
        'ubicacion_destino',
        'tipo_servicio',
        'user_chofer',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user', 'id'); 
    }
    public function tiposervicio()
    {
        return $this->belongsTo(TipoServicio::class, 'tipo servicio'); 
    }
    
    public function ubicacion_destino()
    {
        return $this->belongsTo(UbicacionDestino::class, 'ubicacion origen'); 
    }
    public function ubicacion_origen()
    {
        return $this->belongsTo(UbicacionOrigen::class, 'ubicacion destino'); 
    }
    
    
    
    
}
