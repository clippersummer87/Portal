@extends('layouts.site')

@section('titulo','Categorias')

@section('conteudo')

    <div class="container">
      <h4 class="center">Adicionar Categorias</h4>
      <div class="row">
        <form class="" action="{{route('admin.categorias.salvar')}}" method="post">
          {{csrf_field()}}
          @include('admin.categorias._form')

          <button class='btn deep-orange'>Salvar</button>
        </form>
      </div>
    </div>


@endsection
