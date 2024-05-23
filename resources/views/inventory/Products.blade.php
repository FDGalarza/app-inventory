@extends('layouts.app')


@section('title', 'Registrar')

@section('content')

      <div class="col-8 module__header">
        <section class="">
          <div>
            <h1>Items</h1>
          </div>
          <hr>
          <h4>Registrar Items</h4>
          <form action="{{ route('inventory.store')}}" class="form-horizontal" method="POST">
            <!--token-->
            @csrf
            <div class="form-container">
              <div class="mb-5 input">
                <label class="form-label">Nombre Item<strong class="campo-obligatorio"> *</strong></label>
                <input type="text" class="form-control" name="name" placeholder="Nombre Item" value="{{old('name')}}">
                @error('name')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              
              <div class="mb-5 input">
                <label class="form-label">Codigo Item<strong class="campo-obligatorio"> *</strong></label>
                <input type="text" class="form-control" name="codigo" placeholder="Codigo Item" value="{{old('codigo')}}">
                @error('codigo')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-5 input">
                <label class="form-label">Codigo de Barras<strong class="campo-obligatorio"> *</strong></label>
                <input type="text" class="form-control" name="CodBarras" placeholder="Codigo de barras" value="{{old('CodBarras')}}">
                @error('CodBarras')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
            </div>
            
            <div class="form-container">
              <div class="mb-5 input">
                <label class="form-label">Detalle</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Detalle de Item" value="{{old('descripcion')}}">
              </div>
              <div class="mb-5 select"> 
                <label class="form-label">Unidad de Medida<strong class="campo-obligatorio"> *</strong></label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Unid_med_id" >
                  <option value="" selected>Seleccione una Opción</option>
                  @foreach ($unidades as $unidad)
                    <option value="{{ $unidad->id }}">{{ $unidad->descUnidMedida }}</option>
                  @endforeach
                </select>
                @error('unid_medida')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>

              <div class="mb-5 input">
                <label class="form-label">Cantidad<strong class="campo-obligatorio" > *</strong></label>
                <input type="text" class="form-control" name="cantidad" placeholder="Cantidad" value="{{old('cantidad')}}">
                @error('cantidad')
                  <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              
            </div>

            <div class="form-container">
              <div class="mb-5" style="margin-right: 65px"> 
                <label class="form-label">Porcentaje Iva<strong class="campo-obligatorio"> *</strong></label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="iva_id">
                  <option value="" selected>Seleccione una Opción</option>
                  @foreach ($ivas as $iva)
                    <option value="{{ $iva->id }}">{{ $iva->descIva }}</option>
                  @endforeach
                </select>
                @error('ivaPorcentaje')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-5 input">
                <label class="form-label">Valor<strong class="campo-obligatorio"> *</strong></label>
                <input type="text" class="form-control" name="valor" placeholder="Valor de Item" value="{{old('valor')}}">
                @error('valor')
                <span class="message">*{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="form-container">
              
            </div>

            <div class="mb-5 input">
              <button type="submit" class="btn btn-primary">Guardad</button>
              <button type="button" class="btn btn-success">Cancelar</button>
              
            </div>
          </form>
        </section>
      </div>

@endsection

