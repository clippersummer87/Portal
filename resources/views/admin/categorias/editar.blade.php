@extends('layouts.site')

@section('titulo','Categorias')

@section('conteudo')

    <div class="container">
      <h4 class="center">Editando Categorias</h4>
      <div class="row">
        <form class="" action="{{route('admin.categorias.atualizar',$registro->id)}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="put">
          @include('admin.categorias._form')
          <button class='btn deep-orange'>Atualizar</button>
        </form>
      </div>
    </div>


@endsection
