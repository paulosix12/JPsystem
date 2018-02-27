<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\fornecedores;
use App\ClientesModel;
use App\produtos;
use App\maquinas;
use App\vendas;
use Request;

class RelatoriosController extends Controller
{
    Public function VisualizarFornecedores (){
        $fornecedores = fornecedores::all();      
        return view('/Relatorios/verFornecedor', compact('fornecedores'));
    }

    Public function VisualizarClientes (){
        $clientes = ClientesModel::all();        
        return view('/Relatorios/verClientes', compact('clientes'));
    }

    Public function VisualizarMaquinas (){
        $maquinas = maquinas::all();        
        return view('/Relatorios/verMaquinas', compact('maquinas'));
    }

    Public function Clientes (){
        $params = Request::all();
        // Separação da Variaveis 
        $collection = collect($params); 
        $collection->forget('_token');
        $id = $collection['clientes'];
        $from = $collection['from'];
        $to = $collection['to'];
        if($from == null ){
            $from = "2000-01-01";
        }
        if($to == null ){
            $to = "2099-01-01";
        } 
        $clientesVendas = vendas::where('clientes', $id)->whereBetween('created_at',[$from." 00:00:00", $to." 23:59:59"])->get();
        $loop = count($clientesVendas);
        $tipoEletrico = 0;
        $tipoMecanico = 0;
        $tipoPneumatico = 0;
        $tipoOutros = 0;
        
        for ($i = 0; $i < $loop; $i++){
            $tipo = $clientesVendas[$i]->tipoProduto;  
            if($tipo == "Elétrico"){
                $eletrico[] = $clientesVendas[$i]->total;
                $tipoEletrico = array_sum($eletrico);           
            }
            if($tipo == "Mecanico"){
                $mecanico[] = $clientesVendas[$i]->total;
                $tipoMecanico = array_sum($mecanico);
            }
            if($tipo == "Pneumatico"){
                $pneumatico[] = $clientesVendas[$i]->total;
                $tipoPneumatico = array_sum($pneumatico);
            }
            if($tipo == "Outros"){
                $outros[] = $clientesVendas[$i]->total;
                $tipoOutros = array_sum($outros);
            }
        }
        

        $total = $tipoEletrico + $tipoMecanico + $tipoPneumatico + $tipoOutros; 
        return view('/Relatorios/clienteVendas', compact('id','total','tipoEletrico','tipoMecanico','tipoPneumatico','tipoOutros'));
    }

    Public function Maquinas (){
        $params = Request::all();
        // Separação da Variaveis 
        $collection = collect($params); 
        $collection->forget('_token');
        $id = $collection['maquinas'];
        $from = $collection['from'];
        $to = $collection['to'];
        if($from == null ){
            $from = "2000-01-01";
        }
        if($to == null ){
            $to = "2099-01-01";
        } 
        $clientesVendas = vendas::where('projeto', $id)->whereBetween('created_at',[$from." 00:00:00", $to." 23:59:59"])->get();
        $loop = count($clientesVendas);
        $tipoEletrico = 0;
        $tipoMecanico = 0;
        $tipoPneumatico = 0;
        $tipoOutros = 0;
        
        for ($i = 0; $i < $loop; $i++){
            $tipo = $clientesVendas[$i]->tipoProduto;  
            if($tipo == "Elétrico"){
                $eletrico[] = $clientesVendas[$i]->total;
                $tipoEletrico = array_sum($eletrico);           
            }
            if($tipo == "Mecanico"){
                $mecanico[] = $clientesVendas[$i]->total;
                $tipoMecanico = array_sum($mecanico);
            }
            if($tipo == "Pneumatico"){
                $pneumatico[] = $clientesVendas[$i]->total;
                $tipoPneumatico = array_sum($pneumatico);
            }
            if($tipo == "Outros"){
                $outros[] = $clientesVendas[$i]->total;
                $tipoOutros = array_sum($outros);
            }
        }
        

        $total = $tipoEletrico + $tipoMecanico + $tipoPneumatico + $tipoOutros; 
        return view('/Relatorios/maquinasVendas', compact('id','total','tipoEletrico','tipoMecanico','tipoPneumatico','tipoOutros'));
    }

    Public function Fornecedor (){
        $params = Request::all();
        $collection = collect($params); 
        $collection->forget('_token');
        $id = $collection['fornecedores'];
        $from = $collection['from'];
        $to = $collection['to'];
        if($from == null ){
            $from = "2000-01-01";
        }
        if($to == null ){
            $to = "2099-01-01";
        }         
        $clientesVendas = vendas::where('fornecedor', $id)->whereBetween('created_at',[$from." 00:00:00", $to." 23:59:59"])->get();
        $loop = count($clientesVendas);
        $tipoEletrico = 0;
        $tipoMecanico = 0;
        $tipoPneumatico = 0;
        $tipoOutros = 0;
        
        for ($i = 0; $i < $loop; $i++){
            $tipo = $clientesVendas[$i]->tipoProduto;  
            if($tipo == "Elétrico"){
                $eletrico[] = $clientesVendas[$i]->total;
                $tipoEletrico = array_sum($eletrico);           
            }
            if($tipo == "Mecanico"){
                $mecanico[] = $clientesVendas[$i]->total;
                $tipoMecanico = array_sum($mecanico);
            }
            if($tipo == "Pneumatico"){
                $pneumatico[] = $clientesVendas[$i]->total;
                $tipoPneumatico = array_sum($pneumatico);
            }
            if($tipo == "Outros"){
                $outros[] = $clientesVendas[$i]->total;
                $tipoOutros = array_sum($outros);
            }
        }
        

        $total = $tipoEletrico + $tipoMecanico + $tipoPneumatico + $tipoOutros;
        return view('/Relatorios/fornecedorVendas', compact('id','total','tipoEletrico','tipoMecanico','tipoPneumatico','tipoOutros'));
         
         
       // return view('/Relatorios/clienteVendas', compact('id','total','tipoEletrico','tipoMecanico','tipoPneumatico','tipoOutros'));
    }

}
