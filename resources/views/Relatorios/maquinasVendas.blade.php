@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Relação de gastos com a maquina: {{ $id }}</h1>
                <form>
                    <button class="form-control" type="button" onClick="window.print()"/><i class="fa fa-print"></i>
                    Imprimir</button>
                  </form>
                  <br/>
                <div class="col-lg-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Componentes Eletricos</h3>
                    </div>
                    <div class="panel-body">
                    <h1 class="text-center">R$ {{ $tipoEletrico }}</h1>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Componentes Mecanicos</h3>
                    </div>
                    <div class="panel-body">
                    <h1 class="text-center">R$ {{ $tipoMecanico }}</h1>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Componentes Pneumatico</h3>
                    </div>
                    <div class="panel-body">
                    <h1 class="text-center">R$ {{ $tipoPneumatico }}</h1>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Outros</h3>
                    </div>
                    <div class="panel-body">
                    <h1 class="text-center">R$ {{ $tipoOutros}}</h1>
                    </div>
                  </div>
                </div>


                <div class="col-lg-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title text-center">Total</h3>
                    </div>
                    <div class="panel-body">
                    <h1 class="text-center">R$ {{ $total }}</h1>
                    </div>
                  </div>
                </div>

                <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th class="text-center">Pedido</th>
                        <th class="text-center">Produto</th>
                        <th class="text-center">Fornecedor</th>
                        <th class="text-center">Maquina</th>
                        <th class="text-center">Tipo do Produto</th>
                        <th class="text-center">Quantidade</th>
                        <th class="text-center">Preço</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Data</th>
                      </tr>
                    </thead>
                    @foreach ($clientesVendas as $cv)
                    <tbody>
                      <tr>
                        <td class="text-center">{{ $cv->numero }}</td>
                        <td class="text-center">{{ $cv->produto }}</td>
                        <td class="text-center">{{ $cv->fornecedor }}</td>
                        <td class="text-center">{{ $cv->projeto }}</td>
                        <td class="text-center">{{ $cv->tipoProduto }}</td>
                        <td class="text-center">{{ $cv->preco }}</td>
                        <td class="text-center">{{ $cv->quant }}</td>
                        <td class="text-center">{{ $cv->total }}</td>
                        <td class="text-center">{{ $cv->created_at }}</td>
                      </tr>
                    </tbody> 
                    @endforeach

@endsection