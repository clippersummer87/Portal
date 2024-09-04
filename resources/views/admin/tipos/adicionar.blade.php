@extends('layouts.site')

@section('titulo','Tipos')

@section('conteudo')

    <div class="container">
      <h4 class="center">Adicionar Tipos</h4>
      <div class="row">
        <form class="" action="{{route('admin.tipos.salvar')}}" method="post">
          {{csrf_field()}}
          @include('admin.tipos._form')

          <button class='btn deep-orange'>Salvar</button>
        </form>
      </div>
    </div>


@endsection
