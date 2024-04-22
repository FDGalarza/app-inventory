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
                <table  class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Codígo</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Detalle</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($producs as $produc)
                        <tr class="">
                            <td scope="row">{{$produc->id}}</td>
                            <td>{{$produc->name}}</td>
                            <td>{{$produc->descripcion}}</td>
                            <td>{{$produc->cantidad}} - {{$produc->unid_medida}}</td>
                            <td>
                                <a href="#">Editar</a>
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


