<?php

namespace App\Http\Controllers;
use App\fornecedores;
use App\ClientesModel;
use App\produtos;
use App\vendas;
use Request;

class RelatoriosController extends Controller
{
    Public function Visualizar (){
        $fornecedores = fornecedores::all();
        $clientes = ClientesModel::all();        
        return view('/Relatorios/index', compact('fornecedores', 'clientes'));
    }

    Public function Clientes (){
        $params = Request::all();
        $collection = collect($params); 
        $collection->forget('_token');
        $id = $collection['clientes'];        
        $clientesVendas = vendas::where('clientes', $id)->get();
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

    Public function Fornecedor (){
        $params = Request::all();
        $collection = collect($params); 
        $collection->forget('_token');
        $id = $collection['fornecedores'];        
        $clientesVendas = vendas::where('fornecedor', $id)->get();
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
