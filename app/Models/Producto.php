<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UnidadMedida;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
                            'codigo', 
                            'CodBarras', 
                            'name',
                            'descripcion',
                            'unid_medida',
                            'cantidad',
                            'valor',
                            'ivaPorcentaje'
    ];

    
}
