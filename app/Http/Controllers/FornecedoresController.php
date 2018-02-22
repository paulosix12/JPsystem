<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Requests\FornecedoresRequest;
use App\fornecedores;
use Request;

class FornecedoresController extends Controller
{
    function Adicionar(){
		return view('Fornecedores/addForn');
    }

    function Novo(FornecedoresRequest $request){      
      $params = $request->all();
      $fornecedores = new fornecedores($params);
      $fornecedores->save();
      return redirect('/Fornecedores/Visualizar');
    }

    function Visualizar(){
      $fornecedores = fornecedores::paginate(10);
      return view('Fornecedores/verForn')->with('fornecedores', $fornecedores);
    }
  
    public function Deletar(){
      $id = Request::route('id');
      $fornecedores = fornecedores::find($id);
      $fornecedores->delete();
      return redirect('/Fornecedores/Visualizar');     
    }

    public function Atualizar(){
      $id = Request::route('id');
      $fornecedores = fornecedores::where('id', $id)->get();
      return view('Fornecedores/attForn', compact('fornecedores'));     
    }

    function salvaAtualizar(){
      $id = Request::route('id');
      $params = Request::all();
      $fornecedores = fornecedores::where('id', $id)->first();
      $fornecedores->update($params);
      return redirect('/Fornecedores/Visualizar');
  }

}
