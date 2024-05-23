@extends('layouts.app')

@section('content')

      <div class="col-8 module__header">
        <section class="">
          <div>
            <h1>Items</h1>  
          </div>
          <hr>
          <h4>Registrar Movimientos</h4>
          <form action="{{ route('inventory.storeMove', $produc)}}" class="form-horizontal" method="POST">
            <!--token-->
            @csrf
            <div class="form-container">
                <input type="hidden" class="form-control" name="producto_id" placeholder="Codigo Item" value="{{$produc->id}}" >
              <div class="mb-5 input">
                <label class="form-label">Nombre Items</label>
                <input type="text" class="form-control" name="name" placeholder="Nombre Item" value="{{$produc->name}}" disabled>
                @error('name')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-5 input">
                <label class="form-label">Detalle</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Detalle de Item" value="{{$produc->descripcion}}" disabled>
              </div>
              <div class="mb-5 input">
                <label class="form-label">Cantidad Existente.</label>
                <input type="text" class="form-control" name="cantidad" placeholder="Cantidad" value="{{$produc->cantidad}}" disabled>
                @error('cantidad')
                  <span class="message">*{{ $message }}</span>
                @enderror
              </div>
            </div>
            
            <div class="form-container">
              
              <div class="mb-5 select"> 
                <label class="form-label">Tipo Movimiento<strong class="campo-obligatorio"> *</strong></label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="movimiento" >
                  <option value="" selected>Seleccione una Opción</option>
                
                    <option value="1">Entrada</option>
                    <option value="2">Salida</option>
                
                </select>
                @error('movimiento')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-5 input">
                <label class="form-label">Cantidad<strong class="campo-obligatorio" > *</strong></label>
                <input type="text" class="form-control" name="cantidadMov" placeholder="Cantidad Movimiento" value="">
                @error('cantidadMov')
                  <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              
              
            </div>
            <div class="mb-5 input">
              <button type="submit" class="btn btn-primary">Guardad</button>
              <a class="btn btn-success" href="{{route('inventory.show')}}" role="button">Cancelar</a>
            </div>
          </form>
        </section>
      </div>

@endsection

