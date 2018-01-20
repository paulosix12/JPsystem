@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @foreach ($produtos as $p)                
                <h1 class="page-header">Atualizar Produto: {{ $p->nome_do_produto }}</h1>
              <form action="/Produtos/Atualizar/{{ $p->id }}" method="POST">
              <div class="row">
              <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            
                <div class="col-md-6 mb-3">
                  <label >Nome do Produto</label>
                  <input type="text" value="{{ $p->nome_do_produto }}" id="nome_do_produto" name="nome_do_produto" class="form-control">
                </div>
          
              </div>
              <div class="row">
                <div class="col-md-12 mb-3">
                  <label>Descrição do Produto</label>
                  <textarea type="text" id="descricao" name="descricao" class="form-control">{{ $p->descricao }}</textarea>
                </div>
              </div>

            <button class="btn btn-primary" type="submit">Salvar</button>   <a href="/"><button class="btn btn-default" type="submit">Cancelar</a></button>
            </form>
            @endforeach
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection