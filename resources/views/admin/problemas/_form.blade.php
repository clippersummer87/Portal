<div class="input-field">
    <select name="id_user" class="form-control" autofocus="autofocus">
        <option>Selecione...</option>
        @php
              $users = DB::table('users')
              ->orderby('name')
                      ->get();
        @endphp
        @foreach ($users as $value)
          <option value="{{$value->name}}">{{$value->name}}</option>
        @endforeach;
    </select>
  <label>Usuário</label>
</div>

<div class="input-field">
  <select name="id_tipo" class="form-control" autofocus="autofocus">
      <option>Selecione...</option>
      @php
            $tipos = DB::table('tipos')
                    ->get();
      @endphp
      @foreach ($tipos as $value)
        <option value="{{$value->de_tipo}}">{{$value->de_tipo}}</option>
      @endforeach;
  </select>
  <label>Tipo</label>
</div>

<div class="input-field">
  <select name="id_cat" class="form-control" autofocus="autofocus">
      <option>Selecione...</option>
      @php
            $cat = DB::table('categorias')
                              ->get();
      @endphp
      @foreach ($cat as $value)
        <option value="{{$value->de_categoria}}">{{$value->de_categoria}}</option>
      @endforeach;
  </select>
  <label>Categoria</label>
</div>

<div class="input-field">
  <select name="id_setor" class="form-control" autofocus="autofocus">
      <option>Selecione...</option>
      @php
            $setors = DB::table('setors')
                          ->get();
      @endphp
      @foreach ($setors as $value)
        <option value="{{$value->de_setor}}">{{$value->de_setor}}</option>
      @endforeach;
  </select>  <label>Setor</label>
</div>
<!--
<div class="file-field input field">
    <div class="btn blue">
      <span>imagem</span>
      <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($registro->imagem))
    <div class="input-field">
      <img width="150" src="{{asset($registro->imagem)}}" />
    </div>
@endif
-->
<div class="input-field">
  <input type="text" name="de_problema" value="{{isset($registro->de_problema) ? $registro->de_problema : ''}}">
  <label>Descreva o Problema</label>
</div>

<div class="input-field">
        <input type="hidden" name="publicado" value="true">
</div>
