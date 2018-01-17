<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\fornecedores;
use Request;

class FornecedoresController extends Controller
{
    function Adicionar(){
		return view('Fornecedores/addForn');
    }

    function Novo(){      
      $params = Request::all();
      $fornecedores = new fornecedores($params);
      $fornecedores->save();
      return redirect('/Fornecedores/Visualizar');
         
    }

    function Visualizar(){
      $fornecedores = fornecedores::simplePaginate(10);
      return view('Fornecedores/verForn')->with('fornecedores', $fornecedores);
    }

    public function Deletar(){
      $id = Request::route('id');
      $fornecedores = fornecedores::where("id_for", $id);
      $fornecedores->delete();
      return redirect('/Fornecedores/Visualizar');     
    }

    public function Atualizar(){
      $id = Request::route('id');
      $fornecedores = fornecedores::where('id_for', $id)->firstOrFail();
      return view('Fornecedores/attForn')->with('fornecedores', $fornecedores);     
    }

}
