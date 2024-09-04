<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Setor;

class SetorController extends Controller
{
  public function index()
  {
      $registros = Setor::all();
      return view('admin.setors.index',compact('registros'));
  }

  public function adicionar()
  {
      return view('admin.setors.adicionar');
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
      Setor::create($dados);
      return redirect()->route('admin.setors');
  }


  public function editar($id)
  {
    $registro = Setor::find($id);
    return view('admin.setors.editar',compact('registro'));

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

        Setor::find($id)->update($dados);

        return redirect()->route('admin.setors');
    }


  /*public function deletar($id)
  {
      Setor::find($id)->delete();
      return redirect()->route('admin.setors');

  }*/

  public function deletar(Request $req, $id)
  {
    $dados = $req->all();
    $dados['publicado'] = 'nao';
    Setor::find($id)->update($dados);
    //  Setor::find($id)->delete();
    return redirect()->route('admin.setors');

  }

}
