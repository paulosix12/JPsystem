@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Todas as vendas para o Cliente: {{ $id }}</h1>
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

@endsection