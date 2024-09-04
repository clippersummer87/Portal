@extends('layouts.site')

@section('titulo','Setores')

@section('conteudo')

    <div class="container">
      <h4 class="center">Editando Setor</h4>
      <div class="row">
        <form class="" action="{{route('admin.setors.atualizar',$registro->id)}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="put">
          @include('admin.setors._form')
          <button class='btn deep-orange'>Atualizar</button>
        </form>
      </div>
    </div>


@endsection
