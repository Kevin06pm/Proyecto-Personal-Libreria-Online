<header class="header" data-header>
    <div class="contenedor">

      <div class="overlay" data-overlay></div>

      <a href="{{ url('/biblioteca') }}" class="logo">
        <img src="{{ asset("./assets/images/logos.png") }}" alt="logo" style="width: 150px; height: auto;">
      </a>

      <div class="header-actions">

        <form action="">
            <div class="input-group">
                <input type="text" class="form-control" id="buscador" placeholder="Buscar libros..." style="display: none; background-color:gold"> <!-- input donde escribir -->
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary rounded-circle" type="button" id="icono-busqueda" style="padding: 0.3rem;">
                        <ion-icon name="search-outline" style="font-size: 20px;"></ion-icon> <!-- Icono -->
                    </button>
                </div>
            </div>
        </form>

        <!-- Verifica si el usuario está autenticado antes de mostrar su nombre -->

        @auth
        <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link">
          <ion-icon name="person-circle-outline" style="font-size: 50px; color: gold;"></ion-icon> <!-- Icono -->
          <!-- Aquí se muestra el nombre del usuario -->
          <div class="d-sm-none d-lg-inline-block" style="color: gold; font-family: 'Arial', sans-serif; font-weight: bold;">
            {{ Auth::user()->name }}
          </div>
        </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('perfil.misdatos') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Perfil
                </a>
                <a href="{{ route('misCompras') }}" class="dropdown-item has-icon">
                    <i class="fas fa-shopping-bag"></i> Mis compras
                </a>
                <div class="dropdown-divider"></div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="dropdown-item">
                    @csrf
                    <button type="submit" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                    </button>
                </form>
            </div>
        </li>


        @endauth

        <!-- Si el usuario no está autenticado, muestra el enlace para iniciar sesión -->
        @guest
            <li>
                <a class="btn btn-primary" href="{{ route('login') }}">Sign In</a>
            </li>
        @endguest

        <!-- --------------------------------------------------------------------------------------- -->

      </div>

      <button class="menu-open-btn" data-menu-open-btn> <!--Lineas para el menu de movil-->
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <button class="menu-close-btn" data-menu-close-btn> <!--icono X para el menu de movil-->
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>
        

        <ul class="navbar-list">

          <li>
            <a href="{{ url('/biblioteca') }}" class="navbar-link">Inicio</a>
          </li>

          <li>
            <a href="{{ route('categorias.index') }}" class="navbar-link">Categorias</a> <!-- Cuando le de click me llevara a resources/views/biblioteca/categorias/index.blade.php -->
          </li>
          

          <li>
            <a href="{{ route('checkout') }}" class="navbar-link" style="position: relative; display: inline-block;">
                <ion-icon name="cart-outline" style="font-size: 2.3em;"></ion-icon>
                <span class="badge bg-danger" style="position: absolute; top: 51%; right: 0;">{{ \Cart::count() }}</span>
            </a>
          </li>

        </ul>

        <ul class="navbar-social-list">

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>