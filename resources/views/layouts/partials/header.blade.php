
      <div class="col-4 sidebar">
        <section class="section">
          <header class="header">
            <p><span></span>&nbsp;&nbsp;&nbsp;Control de inventarios</p>
          </header>
          <div class="flex-column ">
            <img src="{{URL::asset('/img/inventory.png')}}" alt="" class="user__thumbnail"/>
            <p class="user__displayname"></p>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="user__logout btn btn-sm btn-success">Cerrar sesión</a>
            <br>
            <a href="">Cambiar Contraseña</a>
              
          </div>
          <nav class="nav row menu-container">
            <ul class="menu-links">
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">
                  <li class="nav-link bx bx-home-alt icon"></li>
                  <span class="text nav-text">Inicio</span>
                </a>
                <a href="{{route('inventory.create')}}" class="{{request()->routeIs('inventory.create') ? 'active' :
                          (request()->routeIs('inventory.edit') ? 'active' : '')}}">
                  <li class="nav-link"></li>
                  <span class="text nav-text">Registrar Items</span>
                </a>
                <a href="{{route('inventory.show')}}" class="{{ Route::is('inventory.show') 
                                                             || Route::is('inventory.move') 
                                                             || Route::is('inventory.showProduc')  ? 'active' : ''  }}">
                  <li class="nav-link"></li>
                  <span class="text nav-text">Inventarios</span>
                </a>
                <a href="{{route('inventory.record')}}" class="{{ Route::is('inventory.record') ? 'active' : ''  }}">
                  <li class="nav-link"></li>
                  <span class="text nav-text">Historico Movimientos</span>
                </a>
            </ul>
          </nav>
        </section>
      </div>
