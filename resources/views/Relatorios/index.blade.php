@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Relatorios</h1>
                <form class="form-inline" action="/Relatorios/Clientes" method="post">
                    <div class="form-group">
                        <label>Buscar por Cliente:</label>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <select class="form-control" name="clientes" id="clientes">
                              @foreach($clientes as $c)<option value="{{ $c->cliente }}">{{ $c->cliente }}</option> @endforeach
                            </select>
                    </div>
                    <button type="submit" class="btn btn-success">Buscar</button>
                </form>
                <br>
                <form class="form-inline" action="/Relatorios/Fornecedor" method="post">
                    <div class="form-group">
                        <label for="sel1">Buscar por Fornecedor:</label>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>                        
                            <select class="form-control" name="fornecedores" id="fornecedores">
                              @foreach($fornecedores as $f)<option value="{{ $f->fornecedor }}">{{ $f->fornecedor }}</option> @endforeach
                            </select>
                          </div>
                    <button type="submit" class="btn btn-success">Buscar</button>
                </form>
                <br>
     
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection