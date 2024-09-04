@extends('layouts.site2')

@section('titulo','Pessoas')

@section('conteudo2')
    <div class="container">
      <h4 class="center">Adicionar</h4>
      <div class="row">
        <form class="" action="{{route('pessoa.salvar')}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin.pessoas.formulario')
            <button class='btn deep-orange'>Salvar</button>
        </form>
      </div>
    </div>
@endsection
