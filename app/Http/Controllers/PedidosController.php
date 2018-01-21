<?php

namespace App\Http\Controllers;
use App\ClientesModel;
use App\produtos;
use App\Pedidos;
use Request;
use PDF;

class PedidosController extends Controller{   
  function Novo(){      
    $params = Request::all();

    $collection = collect($params); 

    $collection->forget('_token'); // Limpa o _token do CSFR    
    
    $clientes = $collection['cliente'];
    
    $projeto = $collection['projeto'];

    $produto = $collection['produto'];
    $produtolimpo = implode('-', $produto);

    $preco = $collection['preco'];
    $precolimpo = implode('-', $preco);

    $entrega = $collection['entrega'];
    $entregalimpo = implode('-', $entrega);

    $quant = $collection['quant'];
    $quantlimpo = implode('-', $quant);

    $ipi = $collection['ipi'];
    $ipilimpo = implode('-', $ipi);
    
    $entrega = $collection['entrega'];
    $entregalimpo = implode('-', $entrega);
    
    $total = $collection['total'];
    $totallimpo = implode('-', $total);
       
    
    $pedido = array('clientes' => "$clientes", 'projeto' => "$projeto", 'produto' => "$produtolimpo", 'preco' => "$precolimpo", 'entrega' => "$entregalimpo", 'quant' => "$quantlimpo", 'ipi' => "$ipilimpo", 'total' => "$totallimpo" );
  
    $pedidoFinal = new Pedidos($pedido);
    $pedidoFinal->save();
    return redirect('/Pedidos/Visualizar');

  }

    function Adicionar(){
      $clientes = ClientesModel::all();
      $produtos = produtos::all();
      return view('Pedidos/addPedidos', array('clientes'=>$clientes, 'produtos'=>$produtos));
    }

    function Visualizar(){
      $pedidos = Pedidos::simplePaginate(10);
      return view('Pedidos/verPedidos')->with('pedidos', $pedidos);
    }

    public function pdfdl(){        
      $id = Request::route('id');
      $tipo = Request::route('tipo');
      $pedido = Pedidos::where("id_pedido", $id)->firstOrFail();
      
      $numero = $pedido->id_pedido + 2000;
      
      $projeto = $pedido->projeto;

      $produto = $pedido->produto;
      $produtolimpo = explode('-', $produto);
      
      $preco = $pedido->preco;
      $precolimpo = explode('-', $preco);
      
      $quant = $pedido->quant;
      $quantlimpo = explode('-', $quant);

      $ipi = $pedido->ipi;
      $ipilimpo = explode('-', $ipi);
      
      $entrega = $pedido->entrega;
      $entregalimpo = explode('-', $entrega);
      
      $total = $pedido->total;
      $totallimpo = explode('-', $total);
      
      $loop = count($totallimpo);       
      
      $cliente = ClientesModel::where("cliente", $pedido->clientes)->first();

      if($tipo == 1){
        $pdf = PDF::loadView('Documentos/pedidos', compact('cliente', 'projeto', 'produtolimpo','numero', 'precolimpo', 'quantlimpo', 'ipilimpo','entregalimpo' , 'totallimpo', 'loop'));
        return $pdf->download($projeto . $numero . '.pdf');
      }

      if($tipo == 2){
        return view('Documentos/pedidos', compact('cliente', 'projeto', 'produtolimpo','numero', 'precolimpo', 'quantlimpo', 'ipilimpo','entregalimpo' , 'totallimpo', 'loop'));
      }

      if($tipo == 3){
        $pdf = PDF::loadView('Documentos/pedidos', compact('cliente', 'projeto', 'produtolimpo','numero', 'precolimpo', 'quantlimpo', 'ipilimpo','entregalimpo' , 'totallimpo', 'loop'));
        return $pdf->stream('document2.pdf');
      }
    
  }

}
