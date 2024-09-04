@extends('layouts.site')

@section('titulo','Setores')

@section('conteudo')
    <div class="container">
      <h4 class="center">Adicionar Setor</h4>
      <div class="row">
        <form class="" action="{{route('admin.setors.salvar')}}" method="post">
          {{csrf_field()}}
          @include('admin.setors._form')

          <button class='btn deep-orange'>Salvar</button>
        </form>
      </div>
    </div>


@endsection
