<header class="header" data-header>
    <div class="contenedor">

      <div class="overlay" data-overlay></div>

        <a href="{{ url('/biblioteca') }}" class="logo">
          <img src="{{ asset("./assets/images/logo.png") }}" alt="Filmlane logo" style="width: 350px; height: 85px;">
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

        <style>
            #buscador {
                transition: width 0.5s ease-in-out; /* Agregar una transición de animación */
            }

            .animated {
                width: 150px !important; /* Ancho deseado del input */
            }

            .rounded-input {
                border-radius: 50px; /* Hacer el input más redondeado */
            }
        </style>

        <script>
            document.getElementById('icono-busqueda').addEventListener('click', function() {
                var buscadorInput = document.getElementById('buscador');
                var iconoBusqueda = document.getElementById('icono-busqueda');
                
                if (buscadorInput.style.display === 'none') {
                    buscadorInput.style.display = 'block';
                    buscadorInput.classList.add('animated'); // Agregar clase para animar el input
                    buscadorInput.focus();
                    iconoBusqueda.classList.add('rounded-input'); // Cambiar la forma del botón
                } else {
                    buscadorInput.classList.remove('animated'); // Remover clase para detener animación
                    buscadorInput.style.display = 'none';
                    iconoBusqueda.classList.remove('rounded-input'); // Restaurar la forma original del botón
                }
            });


            
            $(document).ready(function(){

              $('#buscador').autocomplete({
                source: function(request, response){
                  $.ajax({
                    url: "{{route('buscador.libros')}}",
                    dataType: 'json',
                    data: {
                      term: request.term
                    },
                    success: function(data){
                      response(data)
                    }
                  })
                },

                select: function(event, ui){
                  window.location.href = ui.item.url;
                },
                focus: function(event, ui){
                  $('#buscador').val(ui.item.label);
                  return false;
                }

              }).autocomplete('instance')._renderItem = function(ul, item){
                return $('<li style="background-color:black; color:gold; border" >')
                  .append("<div class='lang-wrapper'><img src='" + item.imagen + "' width='50' height='auto'>" + item.label + "</div>")
                  .appendTo(ul);
              };   
              
            });
          
           

        </script>

        <div class="lang-wrapper">
          <label for="language">
            <ion-icon name="globe-outline"></ion-icon>
          </label>
          
          <select name="language" id="language">
            <option value="en">EN</option>
            <option value="en">ES</option>

          </select>
        </div>

        <a class="btn btn-primary" href="{{ route('login') }}">Sign in</a>
        

      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="./index.html" class="logo">
            <img src="./assets/images/logo.svg" alt="Filmlane logo">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="{{ url('/biblioteca') }}" class="navbar-link">Inicio</a>
          </li>

          <li>
            <a href="{{ url('/biblioteca') }}" class="navbar-link">Libros</a>
          </li>

          <li>
            <a href="{{ route('categorias.index') }}" class="navbar-link">Categorias</a> <!-- Cuando le de click me llevara a resources/views/biblioteca/categorias/index.blade.php -->
          </li>
          

          <li>
            <a href="{{ route('checkout') }}" class="navbar-link">
              <ion-icon name="cart-outline" style="font-size: 2.3em; position: relative;"></ion-icon>
              <span class="badge bg-danger" style="position: absolute; top: 50%; right: 44%;">{{\Cart::count()}}</span>
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