<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;
    
    protected $table = "dispositivos";
    protected $filleable = ["nombre", "id_modelo"];

    public function bodega()
    {
        return $this->belongsTo(Bodega::class,'id_bodega');
    }
    
    public function modelo()
    {
        return $this->belongsTo(Modelo::class,'id_modelo');
    }
}
