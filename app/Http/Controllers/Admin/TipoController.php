<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Tipo;

class TipoController extends Controller
{
  public function index()
  {
      $registros = Tipo::all();
      return view('admin.tipos.index',compact('registros'));
  }

  public function adicionar()
  {
      return view('admin.tipos.adicionar');
  }

  public function salvar(Request $req)
  {
      $dados = $req->all();

      if(isset($dados['publicado']))
      {
        $dados['publicado'] = 'sim';
      }
      else
      {
        $dados['publicado'] = 'nao';
      }
      Tipo::create($dados);
      return redirect()->route('admin.tipos');
  }


  public function editar($id)
  {
    $registro = Tipo::find($id);
    return view('admin.tipos.editar',compact('registro'));

  }

  public function atualizar(Request $req, $id)
  {
        $dados = $req->all();
        if(isset($dados['publicado']))
        {
          $dados['publicado'] = 'sim';
        }
        else
        {
          $dados['publicado'] = 'nao';
        }

        Tipo::find($id)->update($dados);

        return redirect()->route('admin.tipos');
    }


  /*public function deletar($id)
  {
      Tipo::find($id)->delete();
      return redirect()->route('admin.tipos');

  }*/
  public function deletar(Request $req, $id)
  {
    $dados = $req->all();
    $dados['publicado'] = 'nao';
    Tipo::find($id)->update($dados);
    //  Setor::find($id)->delete();
    return redirect()->route('admin.tipos');

  }
}
