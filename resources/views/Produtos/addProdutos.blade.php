@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">


                <h1 class="page-header">Adicionar Produto</h1>
              <form action="/Produtos/Adicionar/Novo" method="POST">
              <div class="row">
              <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            
                <div class="col-md-6 mb-3">
                  <label for="validationDefault01">Nome do Produto</label>
                  <input type="text" id="nome_do_produto" name="nome_do_produto" class="form-control" id="validationDefault01"  required="">
                </div>
              
                <div class="col-md-6 mb-3">
                  <label for="validationDefault01">Quantidade</label>
                  <input type="text" id="quantidade" name="quantidade" class="form-control" id="validationDefault01"  required="">
                </div>

                <div class="col-md-3 mb-3">
                  <label for="validationDefault02">Valor do Produto</label>
                  <input type="text" id="valor_produto" name="valor_produto" class="form-control" id="validationDefault02"  required="">
                </div>
            

              <div class="col-md-6 mb-3">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" >
                <option value="">Selecione o Fornecedor</option>
                @foreach ($fornecedores as $f)
                <option value="{{ $f->id_for }}">{{ $f->fornecedor }}</option>
                @endforeach
              </select>                  
              </div>


            <div class="col-md-3 mb-3">
              <label >Tipo do Produto</label>
              <select class="form-control" name="tipo">
              <option  value="">Selecione um Tipo</option>
              <option  value="eletrico">Elétrico</option>
              <option  value="mecanico">Mecanico</option>
            </select>                  
            </div>

          </div>
              <div class="row">
                <div class="col-md-12 mb-3">
                  <label for="validationDefault03">Descrição do Produto</label>
                  <textarea type="text" id="descricao" name="descricao" class="form-control" id="validationDefault03" required=""></textarea>
                </div>
              </div>

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