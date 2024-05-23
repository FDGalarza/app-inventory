<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    /**
     * metodo para hacer el join con la tabla productos y 
     * consultar la descripción
     */
    public function producto(){
        
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    /**
     * join table usurs
     */
    public function usuario(){
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
