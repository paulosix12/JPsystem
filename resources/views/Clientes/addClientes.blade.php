@extends('app')
@section('conteudo')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
              <ul>
                <li>{{ $error }}</li>
              </ul>
              </div>
            @endforeach
            <div>
                <h1 class="page-header">Adicionar Clientes</h1>
              <form action="/Clientes/Adicionar/Novo" method="POST">
              <div class="row">
              <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            
                <div class="col-md-12 mb-3">
                  <label for="Cliente">Cliente <b class="text-danger">*</b></label>
                  <input type="text" id="cliente" name="cliente" class="form-control"  >
                </div>
              </div>
              
              <div class="row">
                  <div class="col-md-12">
                      <label for="endereco">Endereco <b class="text-danger">*</b></label>
                      <input type="text" id="endereco" name="endereco" class="form-control" >
                    </div>
                  </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cidade">Cidade</label>
                  <input type="text" id="cidade_cliente" name="cidade_cliente" class="form-control"  >
                </div>
            
                <div class="col-md-3 mb-3">
                  <label for="estado">Estado</label>
                  <input type="text" id="estado_cliente" name="estado_cliente" class="form-control" >    
                </div>
            
                <div class="col-md-3 mb-3">
                  <label for="cep">CEP</label>
                  <input type="text" id="cep_cliente" name="cep_cliente" class="form-control" >
                </div>
            
                 <div class="col-md-3 mb-3">
                  <label for="insc_municipal">Insc. Municipal</label>
                  <input type="text" id="insc_municipal_cliente" name="insc_municipal_cliente" class="form-control">
                </div>
            
                <div class="col-md-3 mb-3">
                  <label for="insc_estadual">Insc Estadual</label>
                  <input type="text" id="insc_estadual_cliente" name="insc_estadual_cliente" class="form-control">
                </div>
            
                <div class="col-md-6 mb-3">
                  <label for="cnpj">CNPJ</label>
                  <input type="text" id="cnpj_cliente" name="cnpj_cliente" class="form-control">
                </div>
              </div>
              

              <br>  

              <h3>Contato Responsavel</h3>
              <hr>
            
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nome_responsavel"> Nome<b class="text-danger">*</b></label>
                  <input type="text" id="nome_responsavel_cliente" name="nome_responsavel_cliente" class="form-control">
                </div>
            
                <div class="col-md-3 mb-3">
                  <label for="telefone">Telefone <b class="text-danger">*</b></label>
                  <input type="text" id="telefone_cliente" name="telefone_cliente" class="form-control" >
                  
                </div>
            
                <div class="col-md-3 mb-3">
                  <label for="email_respon">Email <b class="text-danger">*</b></label>
                  <input type="text" id="email_respon_cliente" name="email_respon_cliente" class="form-control">
                </div>
              </div>
              <hr>
              <button class="btn btn-primary" type="submit">Salvar</button>   <a href="/"><button class="btn btn-default" type="submit">Cancelar</a></button>
            </form>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection