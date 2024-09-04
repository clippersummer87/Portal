<div class="input-field">
  <input type="text" name="id_user" value="{{isset($registro->id_user) ? $registro->id_user : ''}}" Readonly>
  <label>Usuário</label>
</div>

<div class="input-field">
  <input type="text" name="id_tipo" value="{{isset($registro->id_tipo) ? $registro->id_tipo : ''}}" Readonly>
  <label>Tipo</label>
</div>

<div class="input-field">
  <input type="text" name="id_cat" value="{{isset($registro->id_cat) ? $registro->id_cat : ''}}" Readonly>
  <label>Categoria</label>
</div>

<div class="input-field">
  <input type="text" name="id_setor" value="{{isset($registro->id_setor) ? $registro->id_setor : ''}}" Readonly>
  <label>Setor</label>
</div>

<div class="input-field">
  <input type="text" name="de_problema" value="{{isset($registro->de_problema) ? $registro->de_problema : ''}}" Readonly>
  <label>Descreva o Problema</label>
</div>

<div class="input-field">
  <input type="text" name="de_solucao" value="{{isset($registro->de_solucao) ? $registro->de_solucao : ''}}">
  <label>Descreva a Solução</label>
</div>

<div class="input-field">
  <label>Tempo</label>
  <input type="hidden" name="tempo">
  <?php $entrada = new Datetime($registro->created_at);
        $saida = new Datetime(now());
        $tempo = $entrada->diff($saida);
        echo $tempo->y . " anos," . $tempo->m . " meses," . $tempo->d . " dias";
        $_POST["tempo"]=$tempo->y . " " . $tempo->m . " " . $tempo->d;

  ?>
</div>
