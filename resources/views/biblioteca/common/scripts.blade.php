<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRUEBAS</title>

    <!-- Incluye los scripts de Bootstrap/ necesario para submenu del usuario -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

</head>

<body>
  

  
  <script>

  /*---------------------- SCRIPT PARA menu movil, tablet--------------------------*/
    const navOpenBtn = document.querySelector("[data-menu-open-btn]");
    const navCloseBtn = document.querySelector("[data-menu-close-btn]");
    const navbar = document.querySelector("[data-navbar]");
    const overlay = document.querySelector("[data-overlay]");

    const navElemArr = [navOpenBtn, navCloseBtn, overlay];

    for (let i = 0; i < navElemArr.length; i++) {

      navElemArr[i].addEventListener("click", function () {

        navbar.classList.toggle("active");
        overlay.classList.toggle("active");
        document.body.classList.toggle("active");

      });

    }



    //------------------ SCRIPT DEL BUSCADOR ---------------------------------------//
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


    //------------------ SCRIPT DE CHECKOUT ---------------------------------------//

    var trashIcon = document.getElementById('trash-icon');
    var mensaje = document.getElementById('mensaje');

    trashIcon.addEventListener('mouseover', function() {
        mensaje.style.display = 'block';
        mensaje.style.left = trashIcon.offsetLeft + 'px';
        mensaje.style.top = (trashIcon.offsetTop + trashIcon.offsetHeight) + 'px';
    });

    trashIcon.addEventListener('mouseout', function() {
        mensaje.style.display = 'none';
    });

    <!-- ------------------------------- -->
    
  </script>

</body>

</html>
