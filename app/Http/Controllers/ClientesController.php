<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\ClientesModel;
use App\maquinas;
use Request;
use Validator;
use App\Http\Requests\ClienteRequest;

class ClientesController extends Controller
{
    function Adicionar(){
		return view('Clientes/addClientes');
    }

    function visualizarMaquinas(){
      $id = Request::route('id');
      $cliente = ClientesModel::find($id);
      $Nomecliente = $cliente->cliente;    
      $maquinas = maquinas::where('id', $id)->get();
      //$maquinas = maquinas::all();
      return view('Clientes/verMaquinas', compact('cliente','maquinas'));  
    }


    function adicionarMaquinas(){
      $params = Request::all();
      $maquina = new maquinas($params);
      $maquina->save();
      return redirect ('Clientes/Visualizar');  
    }

    function Novo(ClienteRequest $request){      
      $params = $request->all();
      $clientes = new ClientesModel($params);
      $clientes->save();
      return redirect('Clientes/Visualizar');
    }

    function Visualizar(){
      $clientes = ClientesModel::paginate(10);
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
