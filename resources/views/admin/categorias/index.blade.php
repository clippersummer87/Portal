@extends('layouts.site')

@section('titulo','Categorias')

@section('conteudo')

      <div class="container">
      <!--  {{var_dump(Auth::user()->admin == "nao")}} -->
        <h4 class="center">Lista de Categorias</h4>
        <div class="row">
            <table>
                <thead>
                  <tr>
                    <th>Tipo</th>
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
                      <td>{{$registro->id_tipo}}</td>
                      <td>{{$registro->de_categoria}}</td>

                      @if (Auth::user()->admin == "sim")
                              <td>
                                <a class="btn-floating btn-large waves-effect waves-light green"  href="{{ route('admin.categorias.editar',$registro->id)}}"><i class="material-icons">edit</i></a>
                                <a class="btn-floating btn-large waves-effect waves-light red"  href="{{ route('admin.categorias.deletar',$registro->id)}}"><i class="material-icons">delete</i></a>
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
                <a class="btn blue" href="{{ route('admin.categorias.adicionar')}}">Adicionar</a>
            </div>
        @endif
      </div>

@endsection
