@extends('layouts.site')

@section('titulo','Tipos')

@section('conteudo')

    <div class="container">
      <h4 class="center">Editando Tipos</h4>
      <div class="row">
        <form class="" action="{{route('admin.tipos.atualizar',$registro->id)}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="put">
          @include('admin.tipos._form')
          <button class='btn deep-orange'>Atualizar</button>
        </form>
      </div>
    </div>


@endsection
