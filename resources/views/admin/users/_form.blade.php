<div class="row">

  <div class="form-group col-md-6">
      <label for="nome"><strong>Nome</strong></label>
      <input id="nome" type="text" name="name" class="form-control" placeholder="Digite o Nome" value="{{old('name') ?? $registro->name ?? ''}}"><br>
  </div>

  <div class="form-group col-md-6">
      <label for="email"><strong>E-mail</strong></label>
      <input id="email" type="text" name="email" class="form-control" placeholder="Digite o Email" value="{{old('email') ?? $registro->email ?? ''}}"><br>
  </div>

  <div class="form-group col-md-6">
      <label for="senha"><strong>Senha</strong></label>
      <input id="senha" type="password" name="password" class="form-control" placeholder="Digite o senha" value="{{old('password') ?? $registro->password ?? ''}}"><br>
  </div>

  <div class="form-group col-md-6">
             <p>
            <label>
              <input type="checkbox" class="filled-in" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true" />
              <span>Administrador?</span>
            </label>
          </p>
          <br>
  </div>

  <div class="form-group col-md-6">
               <p>
              <label>
                <input type="checkbox" class="filled-in" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true" />
                <span>Pessoas?</span>
              </label>
            </p>
            <br>
  </div>

</div>
