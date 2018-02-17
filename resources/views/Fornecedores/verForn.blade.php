@extends('app')
@section('conteudo')

<div id="page-wrapper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Fornecedores Cadastrados</h1>
<table class="table table-striped ">
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">Fornecedor</th>
      <th class="text-center">Cidade</th>
      <th class="text-center">Visualizar</th>
      <th class="text-center">Editar</th>
      <th class="text-center">Remover</th>
    </tr>
  </thead>
  @foreach ($fornecedores as $c)
  <tbody>
    <tr></button>
      <td class="text-center">{{ str_limit($c->id, 3) }}</td>
      <td class="text-center">{{ str_limit($c->fornecedor, 15) }}</td>
      <td class="text-center">{{ str_limit($c->cidade_for, 15) }}</td>
      <td class="text-center"><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal{{ $c->id }}" data-whatever="@mdo"><i class="fa fa-search-plus" aria-hidden="true"></i>
Visualizar</button></td>		
        <div class="modal fade" id="Modal{{ $c->id }}"  role="dialog" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Dados do Fornecedor:</strong> {{ $c->fornecedor }}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                  </div>
              <div class="modal-body">
                <p><strong>ID: </strong>{{ $c->id }}</p>
                <p><strong>Nome da Empresa:</strong> {{ $c->fornecedor }}</p>
                <p><strong>Cidade:</strong> {{ $c->endereco }}</p>
                <p><strong>Endereço:</strong> {{ $c->cidade_for }}</p>
                <p><strong>Estado:</strong> {{ $c->estado_for }}</p>
                <p><strong>CEP:</strong> {{ $c->cep_for }}</p>
                <p><strong>Insc Estadual:</strong> {{ $c->insc_municipal_for }}</p>
                <p><strong>Insc Municipal:</strong> {{ $c->insc_estadual_for }}</p>
                <p><strong>CNPJ:</strong>{{ $c->cnpj_for }}</p>									
                <p><strong>Nome do Responsavel: </strong>{{ $c->nome_responsavel_for }}</p>									
                <p><strong>Telefone: </strong>{{ $c->telefone_for }}</p>
                <p><strong>Email: </strong>{{ $c->email_respon_for }}</p>
              </div>
            </div>
          </div>
           </div>
        </div>
      <td class="text-center"><a href="/Fornecedores/Atualizar/{{ $c->id }}"><button class="btn btn-success" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button></a></td>
      <td class="text-center"><a href="/Fornecedores/Deletar/{{ $c->id }}" ><button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i>
Apagar</button></a></td>
    </tr>
  @endforeach
  <div class="row">
      <div class="col-lg-12">
      {{$fornecedores->links()}}
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