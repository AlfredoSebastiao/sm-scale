@include('admin.info-adicional.grupo-de-oracao.modal-registo-de-grupo-de-oracao')
<div class="card mb-3">
    <div class="card-header clearfix">
        <div class="pull-left">
            <i class="fa fa-table"></i>
            Lista de Grupos de Oracao Registados
        </div>
        <div>
            <a class="btn btn-success pull-right text-white" data-toggle="modal" data-target="#registoGrupoDeOracaoModal">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Novo
            </a>

        </div>

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Descricao</th>
                    <th>Nr de Nucleos</th>
                    <th></th>
                </tr>
                </thead>
                <tfoot>

                <tr>
                    <th>#</th>
                    <th>Descricao</th>
                    <th>Nr de Nucleos</th>
                    <th></th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($grupos_de_oracao as $grupo_de_oracao)
                    <tr>
                        <td>{{ $grupo_de_oracao->id }}</td>
                        <td>{{ $grupo_de_oracao->designacao }}</td>
                        <td>0</td>
                        <td>
                            <a href="#" style="margin-right: 15px">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>

                        </td>



                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>