<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\ClientesModel;
use Request;

class ClientesController extends Controller
{
    function Adicionar(){
		return view('Clientes/addClientes');
    }

    function Novo(){      
      $params = Request::all();
      $clientes = new ClientesModel($params);
      $clientes->save();
      return redirect('Clientes/Visualizar');
    }

    function Visualizar(){
      $clientes = ClientesModel::simplePaginate(10);
      return view('Clientes/verClientes')->with('clientes', $clientes);
    }

    public function Deletar(){
      $id = Request::route('id');
      $clientes = ClientesModel::find($id);
      $clientes->delete();
      return redirect('Clientes/Visualizar');
    }

    public function Atualizar(){
      $id = Request::route('id');
      $clientes = ClientesModel::where('id',$id)->get();
      return view('Clientes/attClientes')->with('clientes', $clientes);
    }

    function salvaAtualizar(){
      $id = Request::route('id');
      $params = Request::all();
      $clientes = ClientesModel::where('id', $id)->first();
      $clientes->update($params);
      return redirect('Clientes/Visualizar');
  }


}
