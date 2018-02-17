@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">   
            @foreach ($fornecedores as $f)
            <h1 class="page-header">Atualizar Fornecedor</h1>
            <form action="/Fornecedores/Atualizar/{{ $f->id }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="fornecedor">Fornecedor</label>
                <input type="text" id="fornecedor" value="{{ $f->fornecedor }}" name="fornecedor" class="form-control">
              </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="endereco">Endereco <b class="text-danger">*</b></label>
                    <input type="text" id="endereco"  value="{{ $f->endereco }}" name="endereco" class="form-control" >
                  </div>
                </div>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Cidade</label>
                <input type="text" value="{{ $f->cidade_for }}" id="cidade_for" name="cidade_for" class="form-control">
              </div>
            
              <div class="col-md-3 mb-3">
                <label for="validationDefault04">Estado</label>
                <input type="text" value="{{ $f->estado_for }}" id="estado_for" name="estado_for" class="form-control">    
              </div>
          
              <div class="col-md-3 mb-3">
                <label for="validationDefault05">CEP</label>
                <input type="text" value="{{ $f->cep_for }}" id="cep_for" name="cep_for" class="form-control">
              </div>
          
               <div class="col-md-3 mb-3">
                <label for="validationDefault04">Insc. Municipal</label>
                <input type="text" value="{{ $f->insc_municipal_for }}" id="insc_municipal_for" name="insc_municipal_for" class="form-control">
              </div>
          
              <div class="col-md-3 mb-3">
                <label for="validationDefault05">Insc Estadual</label>
                <input type="text" value="{{ $f->insc_estadual_for }}" id="insc_estadual_for" name="insc_estadual_for" class="form-control">
              </div>
          
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">CNPJ</label>
                <input type="text" value="{{ $f->cnpj_for }}" id="cnpj_for" name="cnpj_for" class="form-control">
              </div>
            </div>
            <br>  

            <h3>Contato Responsavel</h3>
            <hr>
          
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Nome</label>
                <input type="text" value="{{ $f->nome_responsavel_for }}" id="nome_responsavel_for" name="nome_responsavel_for" class="form-control" >
              </div>
          
              <div class="col-md-3 mb-3">
                <label for="validationDefault04">Telefone</label>
                <input type="text" value="{{ $f->telefone_for }}" id="telefone_for" name="telefone_for" class="form-control">
              </div>
          
              <div class="col-md-3 mb-3">
                <label for="validationDefault05">Email</label>
                <input type="text" value="{{ $f->email_respon_for }}" id="email_respon_for" name="email_respon_for" class="form-control">
              </div>
            </div>
            <hr>
            <button class="btn btn-primary" type="submit">Salvar</button>   <a href="/"><button class="btn btn-default" type="submit">Cancelar</a></button>
            @endforeach
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
