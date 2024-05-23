<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovimiento;
use App\Http\Requests\StoreProducto;
use App\Http\Requests\UpdateProducto;
use App\Http\Requests\UpdateStore;
use App\Models\Iva;
use App\Models\Movimiento;
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
     * Function to looking up a register
     */
    public function showProduc(Request $request){
        
        $producs = Producto::select("*")->where('name','LIKE','%'.$request->search.'%')
        ->orWhere('codigo', 'like', '%'.$request->search.'%')
        ->orWhere('codBarras', 'like', '%'.$request->search.'%')
        ->orWhere('descripcion', 'like', '%'.$request->search.'%')->paginate(5);

        $active = 'active';
        return view('inventory.show', compact('producs', 'active'));
    }

    /**
     * Function to save inventoy items
     */
    public function store(StoreProducto $request){
        
        $product = Producto::create($request->all());

        //Se deja registro de la entrada del producto
        $moviminto = new Movimiento();
        $moviminto->movimiento         = 3;
        $moviminto->cantidadMovimiento = $request->cantidad;
        $moviminto->saldo              = $request->cantidad;
        $moviminto->producto_id        = $product->id;
        $moviminto->usuario_id         = Auth()->user()->id;
        $moviminto->save();
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

    /**
     * Function to register items move
     */
    public function storeMove(StoreMovimiento $request, Producto $produc){
        
        /**
         * Valida que la cantidad del movimiento sea menor que 
         * el saldo del producto
         */
        if($produc->cantidad <= $request->cantidadMov && $request->movimiento == 2){
            notify()->success('La cantidad del movimiento supera el saldo del producto');
            return redirect()->route('inventory.move', compact('produc'));
        }
        $moviminto = new Movimiento();
        $moviminto->movimiento             = $request->movimiento;
        $moviminto->cantidadMovimiento     = $request->cantidadMov;
        if($request->movimiento == 2){
            $moviminto->saldo              = $produc->cantidad - $request->cantidadMov;
        }else{
            $moviminto->saldo              = $produc->cantidad + $request->cantidadMov;
        }
        $moviminto->producto_id        = $produc->id;
        $moviminto->usuario_id         = Auth()->user()->id;
        $moviminto->save();
        
        //to update cant product
        $produc->update([
            'cantidad' => $moviminto->saldo
        ]);
        notify()->success('Movimiento registrado');
        return redirect()->route('inventory.show');

    }

    /**
     * Method to show view record
     */
    public function record(){
        $movimientos = Movimiento::orderBy('created_at', 'Asc')->paginate(5);
        return view('inventory.record', compact('movimientos'));
    }

}
