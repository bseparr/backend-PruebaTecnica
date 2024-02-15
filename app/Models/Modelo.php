<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marca;

class Modelo extends Model
{
    use HasFactory;

    protected $table = "modelos";
    protected $filleable = ["nombre", "id_marca"];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
}
