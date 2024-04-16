<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class inventoryController extends Controller
{
    /**
     * function to create inventory items
     */
    //metodo para administrar la pagina create
    public function create(){
        
        return view('inventory.products');
    }

    /**
     * Function to show inentory list
     */
    public function show(){
        
        $producs = Producto::orderBy('id', 'asc')->paginate(5);
        return view('inventory.show', compact('producs'));
    }

    /**
     * Function to save inventoy items
     */
    public function store(Request $request){

        $product              = new Producto();

        $product->name        = $request->nameItem;
        $product->descripcion = $request->descItem;
        $product->unid_medida = $request->unid_medida;
        $product->cantidad    = $request->cantidadItem;

        $product->save();
        return $product;
    }
}
