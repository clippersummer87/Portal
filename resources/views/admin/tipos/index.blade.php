@extends('layouts.site')

@section('titulo','Tipos')

@section('conteudo')

    <div class="container">
      <h4 class="center">Lista de Tipos</h4>
      <div class="row">
          <table>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Descrição</th>
                  @if (Auth::user()->admin == "sim")
                      <th>Ação</th>
                  @endif
                </tr>
              </thead>
              <tbody>
                @foreach ($registros as $registro)
                @if ($registro->publicado =='sim')
                <tr>
                  <td>{{$registro->id}}</td>
                  <td>{{$registro->de_tipo}}</td>
                  @if (Auth::user()->admin == "sim")
                      <td>
                          <a class="btn-floating btn-large waves-effect waves-light green"  href="{{ route('admin.tipos.editar',$registro->id)}}"><i class="material-icons">edit</i></a>
                          <a class="btn-floating btn-large waves-effect waves-light red"  href="{{ route('admin.tipos.deletar',$registro->id)}}"><i class="material-icons">delete</i></a>
                      </td>
                  @endif
                </tr>
                @endif
                @endforeach
              </tbody>
          </table>
      </div>
      @if (Auth::user()->admin == "sim")
          <div class="row">
              <a class="btn blue" href="{{ route('admin.tipos.adicionar')}}">Adicionar</a>
          </div>
      @endif
    </div>




@endsection
