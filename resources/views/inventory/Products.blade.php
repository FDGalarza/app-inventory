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
                <label class="form-label">Nombre Item</label>
                <input type="text" class="form-control" name="nameItem" placeholder="Nombre Item">
              </div>

              <div class="mb-5 input">
                <label class="form-label">Descripción Item</label>
                <input type="text" class="form-control" name="descItem" placeholder="Descripción">
              </div>
            </div>
            <div class="form-container">
              <div class="mb-5 input">
                <label class="form-label">Unidad de Medida</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="unid_medida">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="mb-5 input">
                <label class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidadItem" placeholder="Cantidad">
              </div>
            </div>

            <div class="mb-5 input">
              <button type="submit" class="btn btn-primary">Guardad</button>
              <button type="button" class="btn btn-success">Cancelar</button>
            </div>
          </form>
        </section>
      </div>

@endsection