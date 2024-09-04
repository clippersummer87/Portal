<div class="input-field">
  <input type="text" name="de_tipo" value="{{isset($registro->de_tipo) ? $registro->de_tipo : ''}}">
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
