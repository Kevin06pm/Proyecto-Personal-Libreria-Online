 <!-- Modal para usuario autenticado -->
 @auth
    <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabel">Detalles del Carrito</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach($cartItems as $item)
                        <p><strong>Nombre del libro:</strong> {{ $item->name }}</p>
                        <p><strong>ID del libro:</strong> {{ $item->id }}</p>
                        <hr style="border: 1px solid black;">
                    @endforeach
                    @foreach($buyRecords as $buy)
                        
                        <p><strong>ID de la compra:</strong> {{ $buy->idCompra }}</p>
                        <p><strong>Fecha de la compra:</strong> {{ $buy->fechaCompra }}</p>
                        @break
                    @endforeach
                    <p><strong>ID del usuario:</strong> {{ $userId }}</p>
                    <hr style="border: 1px solid black;">
                    <p><strong>Total:</strong> {{ $total }} €</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('misCompras') }}'">Confirmar Pago</button>
                </div>
            </div>
        </div>
    </div>
    @endauth

    <!-- Modal para usuario no autenticado -->
    @guest
    <div class="modal fade" id="checkoutModalGuest" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabelGuest" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabelGuest">Atención</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Necesitas estar registrado para realizar una compra.</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    @endguest

    <script>
        // Obtener el botón de pagar
        const btnPagar = document.getElementById('btn-pagar');

        // Agregar un event listener para el clic en el botón
        btnPagar.addEventListener('click', function() {
            // Verificar si el usuario está autenticado
            const userId = "{{ Auth::id() }}"; // Obtener el ID del usuario autenticado

            // Si el usuario está autenticado, mostrar el modal de checkout
            if (userId) {
                $('#checkoutModal').modal('show');
            } else {
                // Si el usuario no está autenticado, mostrar el modal para usuarios no autenticados
                $('#checkoutModalGuest').modal('show');
            }
        });

        
    </script>