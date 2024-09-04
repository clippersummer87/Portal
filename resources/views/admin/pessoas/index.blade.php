@extends('layouts.site2')

@section('titulo','Pessoas')

@section('conteudo2')
<div class="container">
  <h4 class="center">Lista de Pessoas</h4>
  <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Imagem</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $regitro)
                <tr>
                  <td>{{ $regitro->id }}</td>
                  <td>{{ $regitro->nome }}</td>

                  <td><img height="60" src="{{asset($regitro->image)}}" alt="{{ $regitro->image }}" /></td>
                  @if (Auth::user()->admin == "sim")
                      <td>
                        <a class="btn-floating btn-large waves-effect waves-light green"  href="{{ route('pessoa.editar',$regitro->id)}}"><i class="material-icons">edit</i></a>
                        <a class="btn-floating btn-large waves-effect waves-light red"  href="{{ route('pessoa.deletar',$regitro->id)}}"><i class="material-icons">delete</i></a>
                      </td>
                  @else
                      <td>
                        <a class="btn-floating btn-large waves-effect waves-light gray"  href="{{ route('pessoa.visualizar',$regitro->id)}}"><i class="material-icons">visibility</i></a>
                      </td>
                  @endif
                </tr>
          @endforeach
        </tbody>
      </table>
  </div>

    <div class="row">
      <a class="btn blue" href="{{ route('pessoa.criar')}}">Adicionar</a>
    </div>

  </div>
</div>

@endsection
