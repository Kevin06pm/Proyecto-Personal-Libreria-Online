@section('enlaceBootstrap')
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection


@if(\Session::get("error"))
    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel"><INput>INFORME</INput></h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                </div>
                <div class="modal-body">
                    <h3>{{ \Session::get('error') }}</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="cerrar-carrito">Iniciar Sesion</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scripy -->
    <script type="text/javascript">
        var successModal = document.getElementById('successModal');

            if (successModal) {
                successModal.classList.add('show');
                successModal.setAttribute('aria-hidden', 'false');
                successModal.style.display = 'block';
            }

            document.getElementById('cerrar-carrito').addEventListener('click', function() {
            var successModal = document.getElementById('successModal');
            if (successModal) {
                successModal.classList.remove('show');
                successModal.setAttribute('aria-hidden', 'true');
                successModal.style.display = 'none';

                var body = document.getElementsByTagName('body')[0];
                body.classList.remove('modal-open');

                var modalBackdrop = document.getElementsByClassName('modal-backdrop')[0];
                if (modalBackdrop) {
                    modalBackdrop.parentNode.removeChild(modalBackdrop);
                }
            }
        });
    </script>
    
@endif