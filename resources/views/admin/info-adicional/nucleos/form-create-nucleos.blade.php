<div class="form-group">
    <label for="grupos_de_oracao_id">Seleccione o Grupo de Oracao:</label>
    <select class="form-control" id="grupos_de_oracao_id" name="grupos_de_oracao_id">
        <option disabled selected>Seleccione uma opcao</option>
        @foreach($grupos_de_oracao as $grupo_de_oracao)
            <option value="{{ $grupo_de_oracao->id }}">{{ $grupo_de_oracao->designacao }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="descricao">Descricao:</label>
<<<<<<< HEAD
    <input type="descricao" class="form-control" name="designacao" id="descricao" required>
=======
    <input type="descricao" class="form-control" name="designacao" id="designacao" required>
>>>>>>> a0e60828a73a49aeea35483e2440461e51ef69d5
</div>