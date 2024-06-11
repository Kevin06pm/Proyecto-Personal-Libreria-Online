// document.getElementById('icono-busqueda').addEventListener('click', function() {

//                 var buscadorInput = document.getElementById('buscador');
//                 var iconoBusqueda = document.getElementById('icono-busqueda');
                
//                 if (buscadorInput.style.display === 'none') {
//                     buscadorInput.style.display = 'block';
//                     buscadorInput.classList.add('animated'); // Agregar clase para animar el input
//                     buscadorInput.focus();
//                     iconoBusqueda.classList.add('rounded-input'); // Cambiar la forma del botón
//                 } else {
//                     buscadorInput.classList.remove('animated'); // Remover clase para detener animación
//                     buscadorInput.style.display = 'none';
//                     iconoBusqueda.classList.remove('rounded-input'); // Restaurar la forma original del botón
//                 }
//             });

            
//             $(document).ready(function(){

//               $('#buscador').autocomplete({
//                 source: function(request, response){
//                   $.ajax({
//                     url: "{{route('buscador.libros')}}",
//                     dataType: 'json',
//                     data: {
//                       term: request.term
//                     },
//                     success: function(data){
//                       response(data)
//                     }
//                   })
//                 },

//                 select: function(event, ui){
//                   window.location.href = ui.item.url;
//                 },
//                 focus: function(event, ui){
//                   $('#buscador').val(ui.item.label);
//                   return false;
//                 }

//               }).autocomplete('instance')._renderItem = function(ul, item){
//                 return $('<li style="background-color:black; color:gold; border" >')
//                   .append("<div class='lang-wrapper'><img src='" + item.imagen + "' width='50' height='auto'>" + item.label + "</div>")
//                   .appendTo(ul);
//               };   
              
//             });