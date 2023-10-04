<div class="row">
  <div class="col-4">
    <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
      <nav class="nav nav-pills flex-column">
        <a class="nav-link" href="/">Inicio</a>
        <a class="nav-link" href="vista1">Vista 1</a>
        <a class="nav-link" href="vista2">Vista 2</a>
        <a class="nav-link" href="vista3">Vista 3</a>
      </nav>
    </nav>
  </div>

  <div class="col-8">
    <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
      <div id="item-1">
        <h4>Inicio</h4>
        @yield('contenido1')
      </div>
      <div id="item-2">
        <h4>Vista 1</h4>
        @yield('contenido2')
      </div>
      <div id="item-3">
        <h4>Vista 2</h4>
        @yield('contenido3')
      </div>
      <div id="item-4">
        <h4>Vista 3</h4>
        @yield('contenido4')
      </div>
    </div>
  </div>
</div>