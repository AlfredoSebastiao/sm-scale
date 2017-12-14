<div class="modal fade" id="registoNucleoModal" tabindex="-1" role="dialog" aria-labelledby="registoNucleoModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario para Registo de Nucleos</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="/nucleos">
                {{ csrf_field() }}
                <div class="modal-body">
                    @include('admin.info-adicional.nucleos.form-create-nucleos')
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>