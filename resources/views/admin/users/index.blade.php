@extends('layouts.site3')

@section('titulo','Usuarios')

@section('conteudo3')
    <div class="container">
      <h4 class="center">Lista de Usuários</h4>
      <div class="row">
          <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>E-mail</th>
                  <th>Administrador</th>
                  <th>Pessoa</th>
              <!--    <th>Ação</th> -->
                </tr>
              </thead>
              <tbody>
                @foreach ($registros as $registro)
                  @if ($registro->publicado =='sim')
                      <tr>
                        <th scope="row">{{$registro->id}}</th>
                        <td>{{$registro->email}}</td>
                        <td>{{$registro->admin}}</td>
                        <td>{{$registro->pessoa}}</td>

                        @if (Auth::user()->admin == "sim")
                          <td>
                            <a class="btn-floating btn-large waves-effect waves-light green"  href="{{ route('admin.users.editar',$registro->id)}}"><i class="material-icons">edit</i></a>
                            <a class="btn-floating btn-large waves-effect waves-light red"  href="{{ route('admin.users.deletar',$registro->id)}}"><i class="material-icons">delete</i></a>
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
              <a class="btn blue" href="{{ route('admin.users.adicionar')}}">Adicionar</a>
          </div>
      @endif
    </div>
@endsection
