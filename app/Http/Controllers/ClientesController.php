<?php

namespace App\Http\Controllers;
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
      $clientes = ClientesModel::where("id_cliente", $id);
      $clientes->delete();
      return redirect('Clientes/Visualizar');
    }

    public function Atualizar(){
      $id = Request::route('id');
      $clientes = ClientesModel::where("id_cliente", $id)->firstOrFail();
      return view('Clientes/attClientes')->with('clientes', $clientes);
    }

}
