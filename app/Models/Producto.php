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
                            'Unid_med_id',
                            'cantidad',
                            'valor',
                            'iva_id'
    ];

    /**
     * metodo para hacer el join con la tabla unidad_medidas y 
     * consultar la descripción
     */
    public function unidad_medida(){
        return $this->belongsTo(UnidadMedida::class, 'Unid_med_id');
    }

    /**
     * Metodo para hacer join con la tabla ivas y consultar
     * la descripción
     */
    public function iva(){
        return $this->belongsTo(Iva::class, 'iva_id');
    }

    
}
