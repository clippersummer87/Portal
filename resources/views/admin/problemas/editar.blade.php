@extends('layouts.site')

@section('titulo','Problemas')

@section('conteudo')

    <div class="container">
      <h4 class="center">Editando Solução</h4>
      <div class="row">
        <form class="" action="{{route('admin.problemas.atualizar',$registro->id)}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="put">
          @include('admin.problemas._form_alt')
          <button class='btn deep-orange'>Atualizar</button>
        </form>
      </div>
    </div>


@endsection
