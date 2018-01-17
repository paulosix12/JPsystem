@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @foreach ($fornecedores as $f)
                <p>{{ ($f->fornecedor) }}</p>
                @endforeach                
                <h1 class="page-header">Atualizar Fornecedor</h1>
                <form action="/Fornecedores/Adicionar/Novo" method="POST">
              <div class="row">
              <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
              
                <div class="col-md-12 mb-3">
                  <label for="fornecedor">Fornecedor</label>
                  <input type="text" value="{{ $f->fornecedor }}" id="fornecedor" name="fornecedor" class="form-control" id="validationDefault01"  required="">
                </div>
              </div>
              
              
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Cidade</label>
                  <input type="text" id="cidade_for" name="cidade_for" class="form-control" id="validationDefault03" required="">
                </div>
            
                <div class="col-md-3 mb-3">
                  <label for="validationDefault04">Estado</label>
                  <input type="text" id="estado_for" name="estado_for" class="form-control" id="validationDefault04" required="">    
                </div>
            
                <div class="col-md-3 mb-3">
                  <label for="validationDefault05">CEP</label>
                  <input type="text" id="cep_for" name="cep_for" class="form-control" id="validationDefault05" required="">
                </div>
            
                 <div class="col-md-3 mb-3">
                  <label for="validationDefault04">Insc. Municipal</label>
                  <input type="text" id="insc_municipal_for" name="insc_municipal_for" class="form-control" id="validationDefault04" require="">
                </div>
            
                <div class="col-md-3 mb-3">
                  <label for="validationDefault05">Insc Estadual</label>
                  <input type="text" id="insc_estadual_for" name="insc_estadual_for" class="form-control" require="">
                </div>
            
                <div class="col-md-6 mb-3">
                  <label for="validationDefault02">CNPJ</label>
                  <input type="text" id="cnpj_for" name="cnpj_for" class="form-control" id="validationDefault02" required="">
                </div>
              </div>
              <br>  

              <h3>Contato Responsavel</h3>
              <hr>
            
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Nome</label>
                  <input type="text" id="nome_responsavel_for" name="nome_responsavel_for" class="form-control" id="validationDefault03" required="">
                </div>
            
                <div class="col-md-3 mb-3">
                  <label for="validationDefault04">Telefone</label>
                  <input type="text" id="telefone_for" name="telefone_for" class="form-control" id="validationDefault04" required="">
                  
                </div>
            
                <div class="col-md-3 mb-3">
                  <label for="validationDefault05">Email</label>
                  <input type="text" id="email_respon_for" name="email_respon_for" class="form-control" id="validationDefault05" required="">
                </div>
              </div>
              <hr>
              <a><button class="btn btn-primary" type="submit">Salvar</a></button>   <a href="/"><button class="btn btn-default" type="submit">Cancelar</a></button>
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