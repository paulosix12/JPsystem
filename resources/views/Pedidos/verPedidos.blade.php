@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                
                <h1 class="page-header">Pedidos Cadastrados</h1>
              
<br>
<table class="table table-striped ">
  <thead>
    <tr>
      <th class="text-center">ID do Pedido</th>
      <th class="text-center">Nome do Cliente</th>
      <th class="text-center">Projeto</th>
    </tr>
  </thead>
  @foreach ($pedidos as $p)
  <tbody>
    <tr>
      <td class="text-center">{{ $p->id + 2000 }}</td>
      <td class="text-center">{{ $p->clientes }}</td>
      <td class="text-center">{{ $p->projeto }}</td>
      <td class="text-center"><a href="/Pedidos/Download/{{ $p->id }}/1"><button class="btn btn-success" type="submit"><i class="fa fa-download" aria-hidden="true"></i> PDF</button></a></td>
      <td class="text-center"><a href="/Pedidos/Download/{{ $p->id }}/2"><button class="btn btn-success" type="submit"><i class="fa fa-download" aria-hidden="true"></i> Visualizar</button></a></td>
      <td class="text-center"><a href="/Pedidos/Download/{{ $p->id }}/3"><button class="btn btn-success" type="submit"><i class="fa fa-download" aria-hidden="true"></i> Visualizar PDF</button></a></td>
      <td class="text-center"><a href="/Pedidos/Deletar/{{ $p->id }}" ><button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i> Remover       
    </tr>
  </tbody> 
  @endforeach
  <div class="row">
      <div class="col-lg-12">
              <div class="col-lg-12">
                {{$pedidos->links()}}
              
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
<script type="text/javascript" charset="utf-8" src="{{ asset('js/dataTables/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript" charset="utf-8" src="{{ asset('js/dataTables/jquery.dataTables.min.js') }}"></script>
@endsection