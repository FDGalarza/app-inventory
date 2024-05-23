@extends('layouts.app')

@section('title', 'Hisotial')

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
                            <th scope="col">Codigo</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Tipo Movimiento</th>
                            <th scope="col">Cantiidad Movimiento</th>
                            <th scope="col">Saldo Despues Movimiento</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Usuario</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($movimientos as $movimiento)
                        <tr class="">
                            
                            
                            

                            
                            <td>{{$movimiento->producto->codigo}}</td>
                            <td>{{$movimiento->producto->name}}</td>
                            @if ($movimiento->movimiento == 1)
                              <td scope="row">Entrada</td>
                            @endif
                            @if ($movimiento->movimiento == 2)
                              <td scope="row">Salida</td>
                            @endif
                            @if ($movimiento->movimiento == 3)
                              <td scope="row">Registro</td>
                            @endif
                            <td>{{$movimiento->cantidadMovimiento}}-{{$movimiento->producto->unidad_medida->descUnidMedida}}</td>
                            <td>{{$movimiento->saldo}}-{{$movimiento->producto->unidad_medida->descUnidMedida}}</td>
                            <td>{{$movimiento->created_at->format('j F Y')}}</td>
                            <td>{{$movimiento->usuario->name}}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
                
            </div>
        </section>
        {{ $movimientos->links()}}
      </div>

@endsection


