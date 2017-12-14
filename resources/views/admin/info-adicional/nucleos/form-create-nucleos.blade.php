<div class="form-group">
    <label for="grupos_de_oracao_id">Seleccione o Grupo de Oracao:</label>
    <select class="form-control" id="grupos_de_oracao_id" name="grupos_de_oracao_id">
        <option disabled selected>Seleccione uma opcao</option>
        @foreach($grupos_de_oracao as $grupo_de_oracao)
            <option value="{{ $grupo_de_oracao->id }}">{{ $grupo_de_oracao->descricao }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="descricao">Descricao:</label>
    <input type="descricao" class="form-control" name="descricao" id="descricao" required>
</div>