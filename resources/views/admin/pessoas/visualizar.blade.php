@extends('layouts.site2')

@section('titulo','Pessoas')

@section('conteudo2')

    <div class="container">
      <h4 class="center">Visualizar Pessoas</h4>
      <div class="row">
        <table class="table table table-hover">
          <tr>
            <th>Imagem:</th>
            <th><img class="img-thumbnail" src="{{asset($registro->image)}}" alt="imagem" width="150" height="150"></th>
          </tr>
          <tr>
            <th>Nome:</th>
            <th>{{$registro->nome}}</th>
          </tr>
          <th>Matricula:</th>
            <th>{{$registro->matricula}}</th>
          </tr>
          <th>Data Nascimento:</th>
            <th>{{$registro->dt_nasc}}</th>
          </tr>
          <th>Graduação:</th>
            <th>{{$registro->graduacao}}</th>
          </tr>
          <th>Data Emissão:</th>
            <th>{{$registro->dt_emissao}}</th>
          </tr>
          <th>Numero do Porte:</th>
            <th>{{$registro->nr_porte}}</th>
          </tr>
          <th>Data de Validade:</th>
            <th>{{$registro->dt_validade}}</th>
          </tr>
          <th>Orgão Emissor:</th>
            <th>{{$registro->orgao_emissor}}</th>
          </tr>
          <th>Município:</th>
            <th>{{$registro->municipio}}</th>
          </tr>
          <th>Estado:</th>
            <th>{{$registro->estado}}</th>
          </tr>
          <th>RG:</th>
            <th>{{$registro->rg}}</th>
          </tr>
          <th>CPF:</th>
            <th>{{$registro->cpf}}</th>
          </tr>
          <th>Naturalidade:</th>
            <th>{{$registro->natura}}</th>
          </tr>
          <th>Numero da CNH:</th>
            <th>{{$registro->nr_cnh}}</th>
          </tr>
          <th>Categoria da CNH:</th>
            <th>{{$registro->categ_cnh}}</th>
          </tr>
          <th>Tipo Sanguineo:</th>
            <th>{{$registro->tp_sanguineo}}</th>
          </tr>
          <th>Nome do Pai:</th>
            <th>{{$registro->pai}}</th>
          </tr>
          <th>Nome do Mãe:</th>
            <th>{{$registro->mae}}</th>
          </tr>
          <th>Controle Interno:</th>
            <th>{{$registro->controle_interno}}</th>
          </tr>
        </table>
      </div>
    </div>
@endsection
