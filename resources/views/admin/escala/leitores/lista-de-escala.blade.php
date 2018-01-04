@for($i = 0 ; $i < 5; $i++)
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">07 de Janeiro de 2018</h3>
    </div>
    <div class="panel-body">

        <div class="row">
            <div class="col-lg-4">
                <h5>1a Leitura</h5>
                <div class="col-lg-12">
                    <label for="leitura_1_portugues">Portugues</label>
                    <input type="text" class="form-control" name="leitura_1_portugues" id="leitura_1_portugues" value="Alfredo Sebastiao" disabled>
                </div>


                <div class=" col-lg-12">
                    <label for="leitura_1_ronga">Ronga</label>
                    <input type="text" class="form-control" name="leitura_1_ronga" id="leitura_1_ronga" value="Alfredo Sebastiao" disabled>
                </div>
            </div>

            <div class="col-lg-4">
                <h5>2a Leitura</h5>
                <div class=" col-lg-12">
                    <label for="leitura_2_portugues">Portugues</label>
                    <input type="text" class="form-control" name="leitura_2_portugues" id="leitura_2_portugues" value="Alfredo Sebastiao" disabled>
                </div>

                <div class=" col-lg-12">
                    <label for="leitura_2_ronga">Ronga</label>
                    <input type="text" class="form-control" name="leitura_2_ronga" id="leitura_2_ronga" value="Alfredo Sebastiao" disabled>
                </div>
            </div>


            <div class="col-lg-4">
                <h5>3a Leitura</h5>
                <div class=" col-lg-12">
                    <label for="envagelho">Evangelho</label>
                    <input type="text" class="form-control" name="envagelho" id="envagelho" value="Alfredo Sebastiao" disabled>
                </div>

                <div class=" col-lg-12">
                    <label for="salmos">Salmos</label>
                    <input type="text" class="form-control" name="salmos" id="salmos" value="Alfredo Sebastiao" disabled>
                </div>
            </div>
        </div>
    </div>


    <div class="panel-footer bg-white" style="border: none">
        <div class="row mr-2">

            <div class="col-lg-12">
                <a href="#" class="icon-lista-escala">
                    <i class="fa fa-print pull-right" aria-hidden="true"></i>
                </a>

                <a href="#" class="icon-lista-escala">
                    <i class="fa fa-pencil pull-right" aria-hidden="true"></i>
                </a>

                <a href="#" class="icon-lista-escala">
                    <i class="fa fa-refresh pull-right" aria-hidden="true"></i>
                </a>



            </div>
        </div>

    </div>


</div>
@endfor