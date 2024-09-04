<div class="input-field">
  <input type="text" name="de_setor" value="{{isset($registro->de_setor) ? $registro->de_setor : ''}}">
  <label>Descrição</label>
</div>

<div class="input-field">
       <p>
      <label>
        <input type="checkbox" class="filled-in" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true" />
        <span>Publicar?</span>
      </label>
    </p>
    <br>
</div>
