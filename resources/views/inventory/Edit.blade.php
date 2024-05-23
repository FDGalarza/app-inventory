@extends('layouts.app')

@section('content')

      <div class="col-8 module__header">
        <section class="">
          <div>
            <h1>Items</h1>
          
          </div>
          
          <hr>
          <h4>Modificar Items</h4>
          
          <form action="{{ route('inventory.update', $produc)}}" class="form-horizontal" method="POST">
            <!--token-->
            @csrf
            @method('put')
            <div class="form-container">
              <div class="mb-5 input">
                <label class="form-label">Nombre Item<strong class="campo-obligatorio"> *</strong></label>
                <input type="text" class="form-control" name="name" placeholder="Nombre Item" value="{{old('name', $produc->name)}}">
                @error('name')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              
              <div class="mb-5 input">
                <label class="form-label">Codigo Item<strong class="campo-obligatorio"> *</strong></label>
                <input type="text" class="form-control" name="codigo" placeholder="Codigo Item" value="{{old('codigo', $produc->codigo)}}" disabled>
                @error('codigo')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-5 input">
                <label class="form-label">Codigo de Barras<strong class="campo-obligatorio"> *</strong></label>
                <input type="text" class="form-control" name="CodBarras" placeholder="Codigo de barras" value="{{old('CodBarras', $produc->CodBarras)}}" disabled>
                @error('CodBarras')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
            </div>
            
            <div class="form-container">
              <div class="mb-5 input">
                <label class="form-label">Detalle</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Detalle de Item" value="{{old('descripcion', $produc->descripcion)}}">
              </div>
              <div class="mb-5 select"> 
                <label class="form-label">Unidad de Medida<strong class="campo-obligatorio"> *</strong></label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="unid_medida" >
                  <option value="" selected>Seleccione una Opción</option>
                  @foreach ($unidades as $unidad)
                    <option value="{{ $unidad->id }}" @if($produc->unidad_medida->id == $unidad->id)selected @endif>{{ $unidad->descUnidMedida }}</option>
                  @endforeach
                </select>
                @error('unid_medida')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>

              <div class="mb-5 input">
                <label class="form-label">Cantidad<strong class="campo-obligatorio" > *</strong></label>
                <input type="text" class="form-control" name="cantidad" placeholder="Cantidad" value="{{old('cantidad', $produc->cantidad)}}" disabled>
                @error('cantidad')
                  <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              
            </div>

            <div class="form-container">
              <div class="mb-5" style="margin-right: 65px"> 
                <label class="form-label">Porcentaje Iva<strong class="campo-obligatorio"> *</strong></label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="ivaPorcentaje">
                  <option value="" selected>Seleccione una Opción</option>
                  @foreach ($ivas as $iva)
                    <option value="{{ $iva->id }}" @if($produc->iva->id == $iva->id)selected @endif>{{ $iva->descIva }}</option>
                  @endforeach
                </select>
                @error('ivaPorcentaje')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-5 input">
                <label class="form-label">Valor<strong class="campo-obligatorio"> *</strong></label>
                <input type="text" class="form-control" name="valor" placeholder="Valor de Item" value="{{old('valor', $produc->valor)}}">
                @error('valor')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="form-container">
              
            </div>
            
            <div class="mb-5 input">
              <button type="submit" class="btn btn-primary">Guardad</button>
              <a class="btn btn-success" href="{{route('inventory.show')}}" role="button">Cancelar</a>
            </div>
            
          </form>
        </section>
      </div>

@endsection

