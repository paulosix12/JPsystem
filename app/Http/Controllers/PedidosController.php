<?php

namespace App\Http\Controllers;
use App\ClientesModel;
use App\produtos;
use App\maquinas;
use App\fornecedores;
use App\Pedidos;
use App\vendas;
use App\ddl;
use Request;
use PDF;

class PedidosController extends Controller{   
  function Novo(){       
    $params = Request::all();

    $collection = collect($params); 

    $collection->forget('_token'); // Limpa o _token do CSFR    
    
    $clientes = $collection['cliente'];

    $condicao = $collection['condicao'];

    $pagamento = $collection['pagamento'];

    $projeto = $collection['projeto'];

    $fornecedor = $collection['fornecedor'];

    $produto = $collection['produto'];
    $produtolimpo = implode(' | ', $produto);

    $preco = $collection['preco'];
    $precolimpo = implode(' | ', $preco);

    $entrega = $collection['entrega'];
    $entregalimpo = implode(' | ', $entrega);

    $quant = $collection['quant'];
    $quantlimpo = implode(' | ', $quant);

    $ipi = $collection['ipi'];
    $ipilimpo = implode(' | ', $ipi);
    
    $entrega = $collection['entrega'];
    $entregalimpo = implode(' | ', $entrega);
    
    $total = $collection['total'];
    $totalajs = str_replace(",","",$total);
    $totallimpo = implode(' | ', $totalajs);
        
    $pedido = array('clientes' => "$clientes", 'pagamento' =>"$pagamento", 'fornecedor' =>"$fornecedor", 'projeto' => "$projeto", 'produto' => "$produtolimpo", 'preco' => "$precolimpo", 'entrega' => "$entregalimpo", 'quant' => "$quantlimpo", 'ipi' => "$ipilimpo", 'total' => "$totallimpo", 'condicao' => "$condicao");
    $pedidoFinal = new Pedidos($pedido);
    $pedidoFinal->save();

    $loop = count($total);
    
    $numero = $pedidoFinal->id + 2000;

    for ($i = 0; $i < $loop; $i++){
      $produtoTipo = produtos::where('nome_do_produto', $produto[$i])->first();
      $tipo = $produtoTipo->tipo;
      $fornecedor = $produtoTipo->fornecedor;
      $vendas = array('numero' => "$numero", 'projeto' => "$projeto", 'fornecedor' => "$fornecedor", 'clientes' => "$clientes",  'produto' => "$produto[$i]", 'tipoProduto' => "$tipo", 'preco' => "$preco[$i]", 'entrega' => "$entrega[$i]", 'quant' => "$quant[$i]", 'ipi' => "$ipi[$i]", 'total' => "$total[$i]" );    
      $vendas = new vendas($vendas);
      $vendas->save();
    } 

    return redirect('/Pedidos/Visualizar');

  }

  public function Deletar(){
    $id = Request::route('id');
    $produtos = Pedidos::find($id);
    $produtos->delete();

    //Deleta da tabela vendas o pedido já existente
    $id = $id + 2000;
    $vendas = vendas::where('numero', $id)->delete();


    return redirect('/Pedidos/Visualizar');
  }

    function Adicionar(){
      $clientes = ClientesModel::all();
      $fornecedores = fornecedores::all();
      $produtos = produtos::all();
      $maquinas = maquinas::all();
      $condicao = ddl::all();
      return view('Pedidos/addPedidos', array('clientes'=>$clientes, 'produtos'=>$produtos, 'fornecedores'=>$fornecedores, 'condicao'=>$condicao, 'maquinas'=>$maquinas));
    }

    function Visualizar(){
      $pedidos = Pedidos::paginate(10);
      return view('Pedidos/verPedidos')->with('pedidos', $pedidos);
    }

    public function pdfdl(){        
      $id = Request::route('id');
      $tipo = Request::route('tipo');
      $pedido = Pedidos::where("id", $id)->firstOrFail();
      
      $numero = $pedido->id + 2000;
      
      $projeto = $pedido->projeto;

      $data = $pedido->created_at;

      $pagamento = $pedido->pagamento;

      $condicao = $pedido->condicao;

      $produto = $pedido->produto;
      $produtolimpo = explode(' | ', $produto);
      
      $preco = $pedido->preco;
      $precolimpo = explode(' | ', $preco);
      
      $quant = $pedido->quant;
      $quantlimpo = explode(' | ', $quant);

      $ipi = $pedido->ipi;
      $ipilimpo = explode(' | ', $ipi);
      
      $entrega = $pedido->entrega;
      $entregalimpo = explode(' | ', $entrega);
      
      $total = $pedido->total;
      $totallimpo = explode(' | ', $total);
      
      $loop = count($totallimpo);       

      $cliente = ClientesModel::where("cliente", $pedido->clientes)->first();
      $fornecedor = fornecedores::where("fornecedor", $pedido->fornecedor)->first();

      $pdf = PDF::loadView('Documentos/pedidos', compact('cliente', 'pagamento', 'condicao', 'projeto','data', 'fornecedor', 'produtolimpo','numero', 'precolimpo', 'quantlimpo', 'ipilimpo','entregalimpo' , 'totallimpo', 'loop'));
      //$pdf->save(storage_path('pedidos/' . $projeto . $numero . '.pdf'));

      if($tipo == 1){
        return $pdf->download($projeto . $numero . '.pdf');
      }

      if($tipo == 2){
        return view('Documentos/pedidos', compact('cliente', 'pagamento', 'condicao', 'projeto','data', 'fornecedor', 'produtolimpo','numero', 'precolimpo', 'quantlimpo', 'ipilimpo','entregalimpo' , 'totallimpo', 'loop'));
      }

      if($tipo == 3){
        return $pdf->stream('document2.pdf');
      }
    
  }

}
