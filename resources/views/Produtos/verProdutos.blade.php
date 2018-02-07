@extends('app')
@section('conteudo')
<div id="page-wrapper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">Produtos Cadastrados</h1>
<table class="table table-striped ">
  <thead>
    <tr>  
      <th class="text-center">ID</th>
      <th class="text-center">Nome do Produto</th>
      <th class="text-center">Fornecedor</th>
      <th class="text-center">Visualizar</th>
      <th class="text-center">Editar</th>
      <th class="text-center">Remover</th>
    </tr>
  </thead>
  @foreach ($produtos as $p)
  <tbody>
    <tr></button>
      <td class="text-center">{{ $p->id }}</td>
      <td class="text-center">{{ $p->nome_do_produto }}</td>
      <td class="text-center">{{ $p->fornecedor }}</td> 
      <td class="text-center"><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal{{ $p->id }}" data-whatever="@mdo"><i class="fa fa-search-plus" aria-hidden="true"></i>
Visualizar</button></td>		
        <div class="modal fade" id="Modal{{ $p->id }}"  role="dialog" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dados do Produto: {{ $p->nome_do_produto }}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                  </div>
              <div class="modal-body">
                <p><strong>ID: </strong>{{ $p->id }}</p>
                <p><strong>Nome do Produto:</strong> {{ $p->nome_do_produto }}</p>
                <p><strong>Fornecedor:</strong> {{ $p->fornecedor }}</p>
                <p><strong>Tipo:</strong> {{ $p->tipo }}</p>
                <p><strong>Descricao:</strong> {{ $p->descricao }}</p>
              </div>
            </div>
          </div>
           </div>
        </div>
      <td class="text-center"><a href="/Produtos/Atualizar/{{ $p->id }}"><button class="btn btn-success" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button></a></td>
      <td class="text-center"><a href="/Produtos/Deletar/{{ $p->id }}" ><button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i>
Apagar</button></a></td>
    </tr>
  @endforeach
  <div class="row">
      <div class="col-lg-12">
      {{$produtos->links()}}
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