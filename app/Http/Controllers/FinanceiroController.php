<?php

namespace App\Http\Controllers;

use Request;
use App\ClientesModel;
use App\maquinas;
use App\insumos;

class FinanceiroController extends Controller
{
    function Adicionar(){
      $maquinas = maquinas::all();
      $clientes = ClientesModel::all();  
		return view('Financeiro/addinsumos', compact('maquinas','clientes'));
    }
    
    function Selecionar(){
      $maquinas = maquinas::all();
      $clientes = ClientesModel::all();  
		return view('Financeiro/insumos', compact('maquinas','clientes'));
    }

    function Relatorios(){
      $params = Request::all();
      // Separação da Variaveis 
      $collection = collect($params); 
      $collection->forget('_token');
      $from = $collection['from'];
      $to = $collection['to'];
      $maquinas = $collection['maquinas'];
      if($from == null ){
          $from = "2000-01-01";
      }
      if($to == null ){
          $to = "2099-01-01";
      } 
      $insumos = insumos::where('maquinas', $maquinas)->whereBetween('created_at',[$from." 00:00:00", $to." 23:59:59"])->get();
      return view ('Financeiro/verinsumos', compact('insumos','maquinas'));
    }

    function Visualizar(){
      $params = Request::all();
      $insumos = insumos::paginate(30);
    return view('Financeiro/verinsumos', compact('insumos'));
    }

    function Novo(){
      $params = Request::all();
      $insumo = new insumos($params);
      $insumo->save();
    return redirect ('Financeiro/Adicionar');
    }
}
