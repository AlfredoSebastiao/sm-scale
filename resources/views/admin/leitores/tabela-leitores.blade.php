@include('admin.leitores.modal-registo-de-leitores')
<div class="card mb-3">
    <div class="card-header clearfix">
        <div class="pull-left">
            <i class="fa fa-table"></i>
            Lista de Leitores Registados
        </div>
        <div>
            <a class="btn btn-success pull-right text-white" data-toggle="modal" data-target="#registoLeitorModal">
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
                    <th>Apelido</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Sexo</th>
                    <th>Numero de Telefone</th>
                    <th>Email</th>
                    <th>Operacoes</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Apelido</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Sexo</th>
                    <th>Numero de Telefone</th>
                    <th>Email</th>
                    <th>Operacoes</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($membros as $membro)
                    <tr>
                        <td>{{ $membro->apelido }}</td>
                        <td>{{ $membro->nome }}</td>
                        <td>{{ $membro->data_nascimento }}</td>
                        <td>
                            @if($membro->is_masculino == 1)
                                MASCULINO
                            @else
                                FEMININO
                            @endif
                        </td>
                        <td> 8{{ $membro->nr_telefone }}</td>
                        <td>{{ $membro->email }}</td>
                        <td>
                            <a href="#">
                                <i class="fa fa-more" aria-hidden="true"></i>
                            </a>
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