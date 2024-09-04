@extends('layouts.site2')

@section('titulo','Pessoas')

@section('conteudo2')
  <div class="container">
    <h3 class="center">Editando Pessoas</h3>
    <div class="row">
      <form class="" action="{{route('pessoa.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.pessoas.formulario')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>




@endsection
