<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
  public function index()
  {
      $registros = User::all();
      return view('admin.users.index',compact('registros'));
  }

  public function adicionar()
  {
      return view('admin.users.adicionar');
  }

  public function salvar(Request $req)
  {
      $dados = $req->all();
// campo st_tecnico
  /*    if(isset($dados['st_tecnico']))
      {
        $dados['st_tecnico'] = 'sim';
      }
      else
      {
        $dados['st_tecnico'] = 'nao';
      }*/
// campo publicado
    /*  if(isset($dados['publicado']))
      {
        $dados['publicado'] = 'sim';
      }
      else
      {
        $dados['publicado'] = 'nao';
      } */
      User::create($dados);
      return redirect()->route('admin.users');
  }


  public function editar($id)
  {
    $registro = User::find($id);
    return view('admin.users.editar',compact('registro'));

  }

  public function atualizar(Request $req, $id)
  {
        $dados = $req->all();
        // campo st_tecnico
          /*    if(isset($dados['st_tecnico']))
              {
                $dados['st_tecnico'] = 'sim';
              }
              else
              {
                $dados['st_tecnico'] = 'nao';
              }
        // campo publicado

        if(isset($dados['publicado']))
        {
          $dados['publicado'] = 'sim';
        }
        else
        {
          $dados['publicado'] = 'nao';
        } */

        User::find($id)->update($dados);

        return redirect()->route('admin.users');
    }


/*  public function deletar($id)
  {
      User::find($id)->delete();
      return redirect()->route('admin.users');

  }*/
  public function deletar(Request $req, $id)
  {
    $dados = $req->all();
    $dados['publicado'] = 'nao';
    //User::find($id)->update($dados);
    User::find($id)->delete();
    return redirect()->route('admin.users');

  }

}
