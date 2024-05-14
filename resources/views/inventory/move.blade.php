@extends('layouts.app')

@section('content')

      <div class="col-8 module__header">
        <section class="">
          <div>
            <h1>Items</h1>
          </div>
          <hr>
          <h4>Registrar Movimientos</h4>
          <form action="{{ route('inventory.update', $produc)}}" class="form-horizontal" method="POST">
            <!--token-->
            @csrf
            @method('put')
            <div class="form-container">
                <input type="text" class="form-control" name="codigo" placeholder="Codigo Item" value="{{$produc->id}}" disabled>
                <input type="text" class="form-control" name="codigo" placeholder="Codigo Item" value="{{$produc->codigo}}" disabled>
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
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="unid_medida" >
                  <option value="" selected>Seleccione una Opción</option>
                
                    <option value="1">Entrada</option>
                    <option value="2">Salida</option>
                
                </select>
                @error('unid_medida')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-5 input">
                <label class="form-label">Cantidad<strong class="campo-obligatorio" > *</strong></label>
                <input type="text" class="form-control" name="cantidadMov" placeholder="Cantidad Movimiento" value="">
                @error('cantidad')
                  <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              
              
            </div>
            <div class="mb-5 input">
              <button type="submit" class="btn btn-primary">Guardad</button>
              <button type="button" class="btn btn-success">Cancelar</button>
              <a href="{{route('inventory.show')}}" class="{{request()->routeIs('inventory.show')}}" 
                style="text-decoration:none">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Atras
                </a>
            </div>
          </form>
        </section>
      </div>

@endsection

