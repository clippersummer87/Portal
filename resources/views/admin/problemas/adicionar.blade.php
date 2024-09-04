@extends('layouts.site')

@section('titulo','Problemas')

@section('conteudo')

    <div class="container">
      <h4 class="center">Adicionar Problemas</h4>
      <div class="row">
        <form class="" action="{{route('admin.problemas.salvar')}}" method="post">
          {{csrf_field()}}
          @include('admin.problemas._form')

          <button class='btn deep-orange'>Salvar</button>
        </form>
      </div>
    </div>


@endsection
