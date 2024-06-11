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




var buscadorInput = document.getElementById('buscador');

buscadorInput.addEventListener('input', function () {
var term = buscadorInput.value;

fetch("{{route('buscador.libros')}}?term=" + encodeURIComponent(term))
.then(response => response.json())
.then(data => {
    var ul = document.createElement('ul');
    ul.style.position = 'absolute';
    ul.style.backgroundColor = 'white';
    ul.style.border = '1px solid #ccc';
    ul.style.listStyle = 'none';
    ul.style.padding = '0';
    ul.style.margin = '0';

    data.forEach(item => {
        var li = document.createElement('li');
        li.style.backgroundColor = 'black';
        li.style.color = 'gold';
        li.style.border = '1px solid gold';

        var div = document.createElement('div');
        div.className = 'lang-wrapper';

        var img = document.createElement('img');
        img.src = item.imagen;
        img.width = 50;

        var text = document.createTextNode(item.label);

        div.appendChild(img);
        div.appendChild(text);
        li.appendChild(div);

        li.addEventListener('click', function () {
            window.location.href = item.url;
        });

        li.addEventListener('mouseenter', function () {
            buscadorInput.value = item.label;
        });

        ul.appendChild(li);
    });

    var oldUl = buscadorInput.nextElementSibling;
    if (oldUl) {
        oldUl.parentNode.removeChild(oldUl);
    }

    buscadorInput.parentNode.appendChild(ul);
});
});
