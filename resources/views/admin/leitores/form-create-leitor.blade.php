<div class="row">
    <input type="hidden" name="funcao" value="1">
    <div class="form-group col-lg-4">
        <label for="apelido">Apelido</label>
        <input type="text" class="form-control" name="apelido" id="apelido" required>
    </div>

    <div class="form-group col-lg-4">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome" required>
    </div>


    <div class="form-group col-lg-4">
        <label for="nucleo_id">Seleccione Nucleo:</label>
        <select class="form-control" id="nucleo_id" name="nucleo_id">
            <option disabled selected>Seleccione uma opcao</option>
            @foreach($nucleos as $nucleo)
                <option value="{{ $nucleo->id }}">{{ $nucleo->descricao }}</option>
            @endforeach
        </select>
    </div>

</div>
<div class="row">
    <div class="form-group col-lg-4">
        <label for="data_de_nascimento">Data de Nascimento:</label>
        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" required>
    </div>

    <div class="form-group col-lg-4">
        <label for="telefone">Nr de Telefone:</label>
        <div class="input-group ">
            <span class="input-group-addon" id="basic-addon1">+258-8</span>
            <input name="nr_telefone" id="nr_telefone" type="number" maxlength="8" minlength="8" class="form-control" placeholder="" aria-describedby="basic-addon1">
        </div>
    </div>



    <div class="form-group col-lg-4">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" >
    </div>


</div>

<div class="row">
    <div class="form-group col-lg-4">
        <label>Sexo:</label>
        <br>
        <label class="custom-control custom-radio">
            <input id="radio1" name="is_masculino" type="radio" class="custom-control-input" value="1">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Masculino</span>
        </label>
        <br>
        <label class="custom-control custom-radio">
            <input id="radio2" name="is_masculino" type="radio" class="custom-control-input" value="0">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Feminino</span>
        </label>
        <br>

    </div>

    <div class="form-group col-lg-4">
        <label for="telefone">Sacramentos:</label>
        <br>
        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="is_baptizado" value="1">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Baptizado</span>
        </label>
        <br>

        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="is_crismado" value="1">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Crismado</span>
        </label>
        <br>

        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="is_casado" value="1">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Casado</span>
        </label>

    </div>



    <div class="form-group col-lg-4">
        <label for="telefone">Grupos aos quais pertence:</label>
        @foreach($grupos as $grupo)
            <br>
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"  name="{{ $grupo->descricao }}" value="{{ $grupo->descricao }}">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">{{ $grupo->descricao }}</span>
            </label>
        @endforeach
    </div>


</div>
