@extends('layouts.site')

@section('titulo','Problemas')

@section('conteudo')

    <div class="container">
      <h4 class="center">Abertura de Chamados</h4>
      <div class="row">
            <table>
                  <thead>
                      <tr>
                        <th>Usuário</th>
                        <th>Setor</th>
                        <th>Problema</th>
                        <th>Solução</th>
                      </tr>
                  </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        @if ($registro->publicado =='sim')
                            <tr>

                                <td>{{$registro->id_user}}</td>

                                <td>{{$registro->id_setor}}</td>
                                <td>{{$registro->de_problema}}</td>
                                <td>

                                  <a class="btn-floating btn-large waves-effect waves-light green"  href="{{ route('admin.problemas.editar',$registro->id)}}"  ><i class="material-icons right">pan_tool</i>Solucionar</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach

                </tbody>
            </table>
      </div>
      <div class="row">
          <a class="btn blue" href="{{ route('admin.problemas.adicionar')}}">Adicionar</a>
      </div>
    </div>
@endsection
