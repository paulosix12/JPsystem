<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProdutoRequest;
use App\fornecedores;
use App\produtos;
use Request;
use Validator;

class ProdutosController extends Controller
{
    function Adicionar(){
      $fornecedores = fornecedores::all();
	    return view('Produtos/addProdutos')->with('fornecedores', $fornecedores);
    }

    function Novo(ProdutoRequest $request){
        $params = $request->all();
        $produtos = new produtos($params);
        $produtos->save();
        return redirect('Produtos/Visualizar');
    }

    function Visualizar(){
        $produtos = produtos::simplePaginate(10);
        return view('Produtos/verProdutos')->with('produtos', $produtos);
    }

    public function Deletar(){
      $id = Request::route('id');
      $produtos = produtos::find($id);
      $produtos->delete();
      return redirect('Produtos/verProdutos');
    }

    public function Atualizar(){
        $id = Request::route('id');
        $produtos = produtos::where('id', $id)->get();
        return view('Produtos/attProdutos', compact('produtos'));     
    }
  
    public function salvaAtualizar(){
        $id = Request::route('id');
        $params = Request::all();
        $produtos = produtos::where('id', $id)->first();
        $produtos->update($params);
        return redirect('Produtos/Visualizar');
    }

}
