<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
    public function store(Request $request){

        /**$product              = new Producto();

        $product->name        = $request->nameItem;
        $product->descripcion = $request->descItem;
        $product->unid_medida = $request->unid_medida;
        $product->cantidad    = $request->cantidadItem;

        $product->save();**/
        $request->validate([
            'codigo'        => 'required|min:3|max:13',
            'CodBarras'     => 'required|min:13|max:13',
            'name'          => 'required',
            'unid_medida'   => 'required',
            'cantidad'      => 'required',
            'valor'         => 'required',
            'ivaPorcentaje' => 'required'
        ]);

        $product = Producto::create($request->all());
        notify()->success('Item guardado');
        return redirect()->route('inventory.create');
        
    }
}
