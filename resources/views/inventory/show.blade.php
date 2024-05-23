@extends('layouts.app')

@section('title', 'Inventario')

@section('content')

      <div class="col-8 module__header">
        <section class="">
          <div>
            <h1>Items</h1>
          </div>
          <hr>
          <h4>Inventario </h4>
            <div class="table-responsive show__table">
              <form action="{{ route('inventory.showProduc')}}" method="POST">
                @csrf
                  <div class="mb-5">
                    <div class="input-group">
                      <input type="text" class="form-control" name="search" placeholder="Bsscar">
                      <div class="input-form_append">
                        <input
                          name=""
                          id=""
                          class="btn btn-primary"
                          type="submit"
                          value="Button"
                        />
                        
                      </div>
                    </div>
                  </div>
                  
              </form>
                <table  class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Codígo</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Detalle</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Codigo de Barras</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($producs as $produc)
                        <tr class="">
                            <td scope="row">{{$produc->codigo}}</td>
                            <td>{{$produc->name}}</td>
                            <td>{{$produc->descripcion}}</td>
                            <td>{{$produc->cantidad}} - {{$produc->unidad_medida->descUnidMedida}}</td>
                            <td>{{$produc->CodBarras}}</td>
                            <td>
                                <a href="{{ route('inventory.edit', $produc->id)}}">Editar</a>
                                <br>
                                <a href="{{ route('inventory.move', $produc->id)}}">Movimientos</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                
            </div>
            
          
          {{ $producs->links()}}
          
        </section>
      </div>

@endsection


