@extends('layouts.site3')

@section('titulo','Usuarios')

@section('conteudo3')

    <div class="container">
      <h4 class="center">Editando Usuário</h4>
      <div class="row">
        <form class="" action="{{route('admin.users.atualizar',$registro->id)}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="put">
          @include('admin.users._form')
          <button class='btn deep-orange'>Atualizar</button>
        </form>
      </div>
    </div>


@endsection
