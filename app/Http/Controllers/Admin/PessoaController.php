<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pessoa;

class PessoaController extends Controller
{

  public function index()
  {
      $registros = Pessoa::all();
      return view('admin.pessoas.index', compact('registros'));
  }

  public function criar()
  {
      return view('admin.pessoas.criar');
  }

  public function salvar(Request $req)
  {
    $dados = $req->all();
    if ($req->hasFile('image')) {
      $image = $req->file('image');
      $num = rand(1111,9999);
      $dir = "img/pessoas/";
      $ex = $image->guessClientExtension();
      $nomeImage = "image_".$num.".".$ex;
      $image->move($dir,$nomeImage);
      $dados['image'] = $dir."/".$nomeImage;
    }
    Pessoa::create($dados);
    return redirect()->route('pessoa.index');
  }

  public function editar($id)
    {
      $registro = Pessoa::find($id);
      return view('admin.pessoas.editar',compact('registro'));
    }

  public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      if($req->hasFile('image')){
        $imagem = $req->file('image');
        $num = rand(1111,9999);
        $dir = "img/pessoas/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "image_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['image'] = $dir."/".$nomeImagem;
      }

      Pessoa::find($id)->update($dados);

      return redirect()->route('pessoa.index');

    }

    public function deletar(Request $req, $id)
    {
      $dados = $req->all();
      $dados['publicado'] = 'nao';

      //Pessoa::find($id)->update($dados);
      Pessoa::find($id)->delete();
      return redirect()->route('pessoa.index');
    }

    public function visualizar($id)
    {
      $registro = Pessoa::find($id);
      if($registro){
          return view("admin.pessoas.visualizar", compact('registro'));
      }else{
          return redirect()->route('pessoa.index');
      }
    }

}
