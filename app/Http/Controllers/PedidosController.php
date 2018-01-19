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
    $produtolimpo = implode(',', $produto);

    $preco = $collection['preco'];
    $precolimpo = implode(',', $preco);

    $quant = $collection['quant'];
    $quantlimpo = implode(',', $quant);

    $ipi = $collection['ipi'];
    $ipilimpo = implode(',', $ipi);
    
    $entrega = $collection['entrega'];
    $entregalimpo = implode(',', $entrega);
    
    $total = $collection['total'];
    $totallimpo = implode(',', $total);
    
    $pedido = array('clientes' => "$clientes", 'projeto' => "$projeto", 'produto' => "$produtolimpo", 'preco' => "$precolimpo", 'quant' => "$quantlimpo", 'ipi' => "$ipilimpo", 'total' => "$totallimpo" );
  
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
      $pedido = Pedidos::where("id_pedido", $id)->firstOrFail();

      $projeto = $pedido->projeto;

      $produto = $pedido->produto;
      $produtolimpo = explode(',', $produto);
      
      $preco = $pedido->preco;
      $precolimpo = explode(',', $preco);
      
      $quant = $pedido->quant;
      $quantlimpo = explode(',', $quant);

      $ipi = $pedido->ipi;
      $ipilimpo = explode(',', $ipi);
      
      $total = $pedido->total;
      $totallimpo = explode(',', $total);

      $cliente = ClientesModel::where("cliente", $pedido->clientes)->first();

      $pdf = PDF::loadView('Documentos/pedidos', compact('cliente','projeto', 'produtolimpo', 'precolimpo', 'quantlimpo', 'ipilimpo', 'totallimpo'));
      return $pdf->stream('document2.pdf');
      
  }

}
