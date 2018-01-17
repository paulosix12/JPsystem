<?php

namespace App\Http\Controllers;
use App\fornecedores;
use App\produtos;
use Request;

class ProdutosController extends Controller
{
    function Adicionar(){
      $fornecedores = fornecedores::all();
		  return view('Produtos/addProdutos')->with('fornecedores', $fornecedores);
    }

    function Novo(){
        $params = Request::all();
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
      $produtos = produtos::where("id_produto", $id);
      $produtos->delete();
      return redirect('Produtos/verProdutos');
    }

    public function Atualizar(){
      $id = Request::route('id');
      $produtos = produtos::where("id_cliente", $id); 
      return view('Clientes/attClientes')->with('clientes', $clientes);
    }

    public function nameMethod()
    {
        $products = produtos::all();
     
        return \PDF::loadView('verProdutos', compact('produtos'))
                    // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                    ->download('nome-arquivo-pdf-gerado.pdf');
    }

}
