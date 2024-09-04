<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Problema;

class ProblemaController extends Controller
{
  public function index()
  {
      $registros = Problema::all();
      return view('admin.problemas.index',compact('registros'));
  }

  public function adicionar()
  {
      return view('admin.problemas.adicionar');
  }

  public function salvar(Request $req)
  {
      $dados = $req->all();
      if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }
/*
      if($req->hasfile('imagem')){
        $imagem = $req->file('imagem');
        $num = rand(1111,9999);
        $dir = "img/problemas/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
      }
*/
      Problema::create($dados);
      return redirect()->route('admin.problemas');
  }

  public function editar($id)
  {
    $registro = Problema::find($id);
    return view('admin.problemas.editar',compact('registro'));
  }

  public function atualizar(Request $req, $id)
  {
        $dados = $req->all();
      /*  $inicio = microtime(true);
        $fim = microtime(true);
        $tempo = $fim - $inicio;
        $dados['tempo'] = $tempo; */
        $dados['publicado'] = 'nao';
        //$dados['tempo'] = $tempo->y . " anos," . $tempo->m . " meses," . $tempo->d . " dias";
        Problema::find($id)->update($dados);
        return redirect()->route('admin.problemas');
    }

  public function deletar(Request $req, $id)
  {
    $dados = $req->all();
    $dados['publicado'] = 'nao';
    Problema::find($id)->update($dados);
    //  Demanda::find($id)->delete();
    return redirect()->route('admin.problemas');

  }


}
