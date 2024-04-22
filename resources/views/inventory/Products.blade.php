@extends('layouts.app')

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
                <input type="text" class="form-control" name="nameItem" placeholder="Nombre Item" required>
              </div>
              <div class="mb-5 input">
                <label class="form-label">Codigo Item<strong class="campo-obligatorio"> *</strong></label>
                <input type="text" class="form-control" name="codigoItem" placeholder="Codigo Item" required>
              </div>
              <div class="mb-5 input">
                <label class="form-label">Codigo de Barras<strong class="campo-obligatorio"> *</strong></label>
                <input type="text" class="form-control" name="codigoBarras" placeholder="Codigo de barras" required>
              </div>
            </div>
            
            <div class="form-container">
              <div class="mb-5 input">
                <label class="form-label">Detalle</label>
                <input type="text" class="form-control" name="descItem" placeholder="Detalle de Item" required>
              </div>
              <div class="mb-5 select"> 
                <label class="form-label">Unidad de Medida<strong class="campo-obligatorio"> *</strong></label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="unid_medida" required>
                  <option selected>Seleccione una Opción</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="mb-5 input">
                <label class="form-label">Cantidad<strong class="campo-obligatorio" > *</strong></label>
                <input type="text" class="form-control" name="cantidadItem" placeholder="Cantidad" required>
              </div>
            </div>

            <div class="form-container">
              <div class="mb-5" style="margin-right: 65px"> 
                <label class="form-label">Porcentaje Iva<strong class="campo-obligatorio"> *</strong></label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="iva" required>
                  <option selected>Seleccione una Opción</option>
                  <option value="1">Excento (0.00%)</option>
                  <option value="2">Bienes/Servicios al 5 (5.00%)</option>
                  <option value="3">Contratos Firmados con el estado antes de Ley 1819 (16%)</option>
                  <option value="3">Tarifa General (19%)</option>
                </select>
              </div>
              <div class="mb-5 input">
                <label class="form-label">Valor<strong class="campo-obligatorio"> *</strong></label>
                <input type="text" class="form-control" name="valor" placeholder="Valor de Item" required>
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

