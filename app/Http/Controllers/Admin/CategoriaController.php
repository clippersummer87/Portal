<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Categoria;

class CategoriaController extends Controller
{

    public function index()
    {
        $registros = Categoria::all();
        return view('admin.categorias.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.categorias.adicionar');
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
        Categoria::create($dados);
        return redirect()->route('admin.categorias');
    }


    public function editar($id)
    {
      $registro = Categoria::find($id);
      return view('admin.categorias.editar',compact('registro'));
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
          Categoria::find($id)->update($dados);
          return redirect()->route('admin.categorias');
      }


    public function deletar(Request $req, $id)
    {
      $dados = $req->all();
      $dados['publicado'] = 'nao';
      Categoria::find($id)->update($dados);
      //  Categoria::find($id)->delete();
      return redirect()->route('admin.categorias');
    }
}
