@extends('layouts.site3')

@section('titulo','Usuarios')

@section('conteudo3')

    <div class="container">
      <h4 class="center">Adicionar Usuário</h4>
      <div class="row">
        <form class="" action="{{route('admin.users.salvar')}}" method="post">
          {{csrf_field()}}
          @include('admin.users._form')

          <button class='btn deep-orange'>Salvar</button>
        </form>
      </div>
    </div>


@endsection
