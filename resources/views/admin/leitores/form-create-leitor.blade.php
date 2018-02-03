<div class="row">
    <input type="hidden" name="funcao" value="Leitor">
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
        <select class="form-control" id="nucleos_id" name="nucleos_id">
            <option disabled selected>Seleccione uma opcao</option>
            @foreach($nucleos as $nucleo)
                <option value="{{ $nucleo->id }}">{{ $nucleo->designacao }}</option>
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

        <label for="">Linguas:</label>
        <br>
        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="portugues" value="1" checked>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Portugues</span>
        </label>
        <br>
        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="ronga" value="1">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Ronga</span>
        </label>
        <br>
        <label for="">Outros:</label>
        <br>
        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="is_salmista" value="Salmista">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Salmos</span>
        </label>
        <br>


    </div>

    <div class="form-group col-lg-4">
        <label for="">Sacramentos:</label>
        <br>
        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="is_baptizado" value="1" checked>
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
<<<<<<< HEAD
            <input type="checkbox" class="custom-control-input" name="">
=======
            <input type="checkbox" class="custom-control-input" name="is_casado" value="1">
>>>>>>> a0e60828a73a49aeea35483e2440461e51ef69d5
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Casado</span>
        </label>

    </div>



    <div class="form-group col-lg-4">
        <label for="telefone">Grupos aos quais pertence:</label>
        @foreach($grupos as $grupo)
            <br>
            <label class="custom-control custom-checkbox">
<<<<<<< HEAD
                <input type="checkbox" class="custom-control-input"  name="{{ $grupo->descricao }}" value="{{ $grupo->descricao }}">
=======
                <input type="checkbox" class="custom-control-input"  name="{{ $grupo->designacao }}" value="{{ $grupo->designacao }}">
>>>>>>> a0e60828a73a49aeea35483e2440461e51ef69d5
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">{{ $grupo->designacao }}</span>
            </label>
        @endforeach
    </div>


</div>
