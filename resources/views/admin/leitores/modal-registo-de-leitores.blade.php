<div class="modal fade" id="registoLeitorModal" tabindex="-1" role="dialog" aria-labelledby="registoLeitorModal" aria-hidden="true" >
    <div class="modal-dialog" role="document" style="width: 900px">
        <div class="modal-content"  style="width: 900px;margin-left: -180px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario para Registo de Leitores</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="/grupos">
                {{ csrf_field() }}
                <div class="modal-body">
                    @include('admin.leitores.form-create-leitor')
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>