<div class="input-field">
  <input type="text" name="id_tipo" value="{{isset($registro->id_tipo) ? $registro->id_tipo : ''}}">
  <label>Tipo</label>
</div>

<div class="input-field">
  <input type="text" name="de_categoria" value="{{isset($registro->de_categoria) ? $registro->de_categoria : ''}}">
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
