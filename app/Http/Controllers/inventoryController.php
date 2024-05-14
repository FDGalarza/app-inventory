<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProducto;
use App\Http\Requests\UpdateProducto;
use App\Http\Requests\UpdateStore;
use App\Models\Iva;
use App\Models\Producto;
use App\Models\UnidadMedida;
use Illuminate\Http\Request;

class inventoryController extends Controller
{
    /**
     * function to create inventory items
     */
    //metodo para administrar la pagina create
    public function create(){
        $unidades = UnidadMedida::all();
        $ivas     = Iva::all();
        return view('inventory.products', compact('unidades', 'ivas'));
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
    public function store(StoreProducto $request){
        
        $product = Producto::create($request->all());
        notify()->success('Item guardado');
        return redirect()->route('inventory.create');
        
    }
    /**
     * Function to show edit form
     */
    public function edit(Producto $produc){
       
        //consulta unidades de medida
        $unidades = UnidadMedida::all();
        //consulta porecentajes iva
        $ivas     = Iva::all();
        
        return view('inventory.edit', compact('unidades', 'ivas', 'produc'));
    }

    /**
     * Functions to update product
     */
    public function update(UpdateProducto $request, Producto $produc){
        $produc->update($request->all());
        //$producs = Producto::orderBy('id', 'asc')->paginate(5);
        return redirect()->route('inventory.show');
    
    }

    /**
     * function to show view make gestion to inventory
     */
    public function movements(Producto $produc){
        return view('inventory.move', compact('produc'));
    }

}
