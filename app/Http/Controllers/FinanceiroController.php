<?php

namespace App\Http\Controllers;

use Request;
use App\ClientesModel;
use App\maquinas;
use App\insumos;
use App\colaboradores;

class FinanceiroController extends Controller
{
    function Adicionar(){
      $maquinas = maquinas::all();
      $clientes = ClientesModel::all();
      $colaboradores = colaboradores::all();  
		return view('Financeiro/addinsumos', compact('maquinas','clientes','colaboradores'));
    }
    
    function Selecionar(){
      $maquinas = maquinas::all();
      $clientes = ClientesModel::all();  
		return view('Financeiro/insumos', compact('maquinas','clientes'));
    }

    function Deletar(){
      $id = Request::route('id');
      $insumos = insumos::find($id);
      $insumos->delete();
      return redirect ('Financeiro/Selecionar');
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
      foreach($insumos as $in){
         $array_id[] = $in->id;
         $array_data[] = $in->data;
         $array_colaborador[] = $in->colaborador;
         $array_combustivel[] = $in->combustivel; 
         $array_pedagio[] = $in->pedagio;
         $array_alimentacao[] = $in->alimentacao; 
         $array_hospedagem[] = $in->hospedagem; 
         $array_outros[] = $in->outros;
      }
      $validacao = isset($array_id);
      //dd($validacao);
      if($validacao == False){
        return view ('Financeiro/seminsumos', compact('maquinas'));  
      }
      $rodar = count($array_id);
      return view ('Financeiro/verinsumos', compact('i','maquinas' ,'array_id', 'rodar', 'array_data','array_colaborador','array_combustivel','array_pedagio','array_alimentacao','array_hospedagem','array_outros'));
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
