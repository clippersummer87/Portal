
  <div class="file-field input-field">
      <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="image">
      </div>
      <div class="file-path-wrapper">
       <input class="file-path validate" type="text">
     </div>
  </div>

  <div class="form-group col-md-6">
      <label for="nome"><strong>Nome</strong></label>
      <input id="nome" type="text" name="nome" class="form-control" placeholder="Digite o Nome" value="{{old('nome') ?? $registro->nome ?? ''}}"><br>
  </div>

  <div class="form-group col-md-6">
      <label for="mat"><strong>Matrícula</strong></label>
      <input id="mat" type="text" name="matricula" class="form-control" placeholder="Digite o Nr.da Matricula" value="{{old('matricula') ?? $registro->matricula ?? ''}}"><br>
  </div>

  <div class="form-group col-md-4">
      <label for="dtnas"><strong>Data de Nascimento</strong></label>
      <input id="dtnas" type="date" name="dt_nasc" class="datepicker" value="{{old('dt_nasc') ?? $registro->dt_nasc ?? ''}}">
  </div>
  <div class="form-group col-md-4">
      <label for="grad"><strong>Graduação</strong></label>
      <input id="grad" type="text" name="graduacao" class="form-control" placeholder="Digite a Graduação(exemplo: 3ª Classe)" value="{{old('graduacao') ?? $registro->graduacao ?? ''}}">
  </div>
  <div class="form-group col-md-4">
      <label for="dtemi"><strong>Data de Emissão</strong></label>
      <input id="dtemi" type="date" name="dt_emissao" class="datepicker" class="form-control" value="{{old('dt_emissao') ?? $registro->dt_emissao ?? ''}}"><br>
  </div>

  <div class="form-group col-md-6">
      <label for="porte"><strong>Nr.do Porte</strong></label>
      <input id="porte" type="text" name="nr_porte" placeholder="Digite o Nr.do Porte" class="form-control" value="{{old('nr_porte') ?? $registro->nr_porte ?? ''}}">
  </div>
  <div class="form-group col-md-6">
      <label for="valida"><strong>Data de validade do Porte</strong></label>
      <input id="valida" type="date" name="dt_validade" class="datepicker" value="{{old('dt_validade') ?? $registro->dt_validade ?? ''}}"><br>
  </div>

  <div class="form-group col-md-4">
      <label for="rg"><strong>RG</strong></label>
      <input id="rg" type="text" name="rg" placeholder="Digite o RG(REGISTRO GERAL)" class="form-control" value="{{old('rg') ?? $registro->rg ?? ''}}">
  </div>
  <div class="form-group col-md-4">
      <label for="cpf"><strong>CPF</strong></label>
      <input id="cpf" type="text" name="cpf" placeholder="Digite o CPF(CADASTRO DE PESSOA FÍSICA)" class="form-control" value="{{old('cpf') ?? $registro->cpf ?? ''}}">
  </div>
  <div class="form-group col-md-4">
      <label for="nat"><strong>Naturalidade</strong></label>
      <input id="nat" type="text" name="natura" placeholder="Digite a Naturalidade(ex: Joao Pessoa, Roraima...)" class="form-control" value="{{old('natura') ?? $registro->natura ?? ''}}"><br>
  </div>

  <div class="form-group col-md-6">
      <label for="cnh"><strong>Nr.da CNH</strong></label>
      <input id="cnh" type="text" name="nr_cnh" placeholder="Digite o Nr.da CNH" class="form-control" value="{{old('nr_cnh') ?? $registro->nr_cnh ?? ''}}">
  </div>
  <div class="form-group col-md-6">
      <label for="cat"><strong>Categoria da CNH</strong></label>
      <input id="cat" type="text" name="categ_cnh" placeholder="Digite a Categoria da CNH" class="form-control" value="{{old('categ_cnh') ?? $registro->categ_cnh ?? ''}}"><br>
  </div>
  <div class="form-group col-md-12">
      <label for="tpsan"><strong>Tipo sanguíneo</strong></label>
      <input id="tpsan" type="text" name="tp_sanguineo" placeholder="Digite o Tipo sanguíneo e fator RH" class="form-control" value="{{old('tp_sanguineo') ?? $registro->tp_sanguineo ?? ''}}"><br>
  </div>
  <div class="form-group col-md-6">
      <label for="pai"><strong>Nome do Pai</strong></label>
      <input id="pai" type="text" name="pai" placeholder="Digite o Nome do Pai" class="form-control" value="{{old('pai') ?? $registro->pai ?? ''}}">
  </div>
  <div class="form-group col-md-6">
      <label for="mae"><strong>Nome da Mãe</strong></label>
      <input id="mae" type="text" name="mae" placeholder="Digite o Nome da Mãe" class="form-control" value="{{old('mae') ?? $registro->mae ?? ''}}"><br>
  </div>
  <div class="form-group col-md-12">
      <label for="ctrlint"><strong>Controle Interno</strong></label>
      <input id="ctrlint" type="text" name="controle_interno" placeholder="Digite o Nr.do Controle Interno" class="form-control" value="{{old('controle_interno') ?? $registro->controle_interno ?? ''}}"><br>
  </div>
  <div class="form-group col-md-4">
      <label for="org"><strong>Orgão Emissor</strong></label>
      <input id="org" type="text" name="orgao_emissor" class="form-control" value="Prefeitura Municipal de Boa Vista" Readonly>
  </div>
  <div class="form-group col-md-4">
      <label for="mun"><strong>Municipio</strong></label>
      <input id="mun" type="text" name="municipio"  class="form-control" value="Boa Vista" Readonly>
  </div>
  <div class="form-group col-md-4">
      <label for="est"><strong>Estado</strong></label>
      <input id="est" type="text" name="estado"  class="form-control" value="Roraima" Readonly><br>
  </div>
