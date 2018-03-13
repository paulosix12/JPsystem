<?php

namespace App\Http\Controllers;
use App\ClientesModel;
use App\produtos;
use App\maquinas;
use App\fornecedores;
use App\Pedidos;
use App\vendas;
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
      $condicao = array("À vista", "7/14/21 ddl", "7/21 ddl","8 ddl","9 ddl","10 ddl" ,"10/20 ddl","10/20/30 ddl","10/30/60/90 ddl","10/30/60/90/120/150 ddl","10/40 ddl","12 ddl","14 ddl","14/28 ddl","14/28/42 ddl","15 ddl","15/30 ddl","15/30/45 ddl","15/40 ddl","15/45/75 ddl","18 ddl","20/25/30/35/40/45 ddl","20/50 ddl","21 ddl","21/28/42/56 ddl","21/35/42 ddl","21/35/45 ddl","21/42/56 ddl","21/45 ddl","21/45/60 ddl","25/45 ddl","28/32 ddl","28/42 ddl", "28/35/42 ddl","28/35/42/56 ddl","28/35/45 ddl","28/42/56/72 ddl","28/45/60 ddl","28/54 ddl","28/56 ddl","28/56/70/84 ddl","28/56/72 ddl","28/56/84/112 ddl","28ddl ","29 ddl","30 ddl ","30/34/50 ddl","30/37/44 ddl","30/40 ddl","30/40/50/60 ddl","30/40/60 ddl","30/40/60/75 ddl","30/42 ddl","30/45/50 ddl","30/45/60/75/90 ddl","30/45/60/90 ddl","30/50 ddl","30/50/70 ddl","30/60 ddl","30/60/75 ddl","30/60/90 ddl","30/60/90/111ddl","30/60/90/120/150 ddl","30/60/90/120/150/180/210 ddl","30/60/120 ddl", "30/50/70/90 ddl", "32 ddl","33 ddl","34 ddl","35/42/49/56/63/70 ddl","35/45 ddl","35/45/55 ddl","35/45/60 ddl","35/49 ddl","35/49/56 ddl","35ddl ","40 ddl ","40/50 ddl","40/50/60/70/80 ddl","40/56 ddl","40/60 ddl","45 ddl ","45 ddl ","45/56 ddl","45/60 ddl","45/60/75/90/105 ddl","45/60/90/120 ddl","45/60/100 ddl","45/65/90 ddl","45/75 ddl","45/90 ddl","49 ddl","50 ddl","50/60 ddl","50/60/75 ddl","50/70 ddl","56 ddl","60 ddl","60/75 ddl","60/75/90 ddl","60/75/90/105/120 ddl","60/75/100 ddl","60/90/120/150 ddl","60/100 ddl","60/100 ddl","70/80/90 ddl","75 ddl","75/85/105ddl","80 ddl","84 ddl ","84 ddl","85 ddl","90 ddl","105 ddl","120 ddl ","120/150 ddl","120/150/180 ddl","130 ddl","150 ddl","160 ddl","165 ddl","170 ddl","180 ddl");
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
