@extends('layouts.app')

@section('content')
      

      <div class="col-8 module__header">
        <section class="">
          <div>
            <h1>Bienvenido {{ Auth::user()->name }}</h1>
          </div>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
             abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
             nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
             velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
             sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </section>
      </div>

@endsection
