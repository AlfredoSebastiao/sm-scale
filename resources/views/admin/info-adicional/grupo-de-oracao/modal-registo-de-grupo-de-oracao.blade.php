<div class="modal fade" id="registoGrupoDeOracaoModal" tabindex="-1" role="dialog" aria-labelledby="registoGrupoDeOracaoModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario para Registo de Grupo de Oracao</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="/grupos-de-oracao">
                {{ csrf_field() }}
                <div class="modal-body">
                    @include('admin.info-adicional.grupo-de-oracao.form-create-grupo-de-oracao')
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>