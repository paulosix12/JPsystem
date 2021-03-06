@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                                <h1 class="page-header">Dashboard</h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-comments fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{{ $pedidos }}</div>
                                                <div>Pedidos</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/Pedidos/Visualizar">
                                        <div class="panel-footer">
                                            <span class="pull-left">Ver Detalhes</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-tasks fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{{ $fornecedores  }}</div>
                                                <div>Fornecedores</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/Fornecedores/Visualizar">
                                        <div class="panel-footer">
                                            <span class="pull-left">Ver Detalhes</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
        
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-shopping-cart fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{{ $produtos }}</div>
                                                <div>Produtos</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/Produtos/Visualizar">
                                        <div class="panel-footer">
                                            <span class="pull-left">Ver Detalhes</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
        
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-support fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{{ $clientes }}</div>
                                                <div>Clientes Cadastrados</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/Clientes/Visualizar">
                                        <div class="panel-footer">
                                            <span class="pull-left">Ver Detalhes</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
        
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">Correções</div>
                        <div class="panel-body">
                            <li>Versão 1.3 (Beta)</li>
                            <li>Correção no sistema de cálculo [FINALIZADO]</li>
                            <li>Tradução do sistema de login [FINALIZADO]</li>
                            <li>Correção dos link Ver Detalhes [FINALIZADO]</li>
                            <li>Edição dos pedido [ANDAMENTO]</li>
                            <li>Enviar PDF via email [ANDAMENTO]</li>
                            <li>Condição de compra, forma de pagamento e fornecedor adicionados no pdf [FINALIZADO]</li>
                            <li>Adicionado a condição de pagamento [FINALIZADO]</li> 
                            <li>Visualização de relatorios por data</li>
                            <li>Adicionado a condição de pagamento [FINALIZADO]</li> 
                            <li>Adição da aba Maquinas</li>
                            <li>Adição da lista de produtos vendidos no relatorio </li> 
                            <li>Adição do Botão de impressão</li> 
                            <li>Alteração no aba relatorios</li> 
                            <li>Carregamento das maquinas de acordo com o cliente</li> 
                        </div>
                        </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection