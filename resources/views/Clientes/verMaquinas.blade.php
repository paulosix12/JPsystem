@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-header">Adicionar Maquinas</h1>
            <form action="/Clientes/Adicionar/Maquinas/Novo/{{$cliente->id}}" method="POST">
                <div class="row">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
              
                  <div class="col-md-6 mb-3">
                    <label>Cliente<b class="text-danger">*</b></label>
                    <input type="text " id="cliente" value="{{$cliente->cliente}}" name="cliente" class="form-control" disabled>
                    <input type="hidden" id="cliente" value="{{$cliente->cliente}}" name="cliente" class="form-control" >

                  </div>

                  <div class="col-md-6 mb-3">
                      <label >Nome da Maquina<b class="text-danger">*</b></label>
                      <input type="text" id="nomedamaquina" name="nomedamaquina" class="form-control">
                    </div>

                  </div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <label>Descrição da Maquina</label>
                          <textarea type="text" id="descricao" name="descricao" class="form-control"></textarea>
                        </div>
                      </div>
                    </br>
                    <button class="btn btn-primary" type="submit">Salvar</button>   <a href="/"><button class="btn btn-default" type="submit">Cancelar</a></button>

                  </div>
                  
                  
            <div class="col-lg-6">
            <h1 class="page-header">Maquinas Existentes</h1>
              <table class="table table-striped ">
                <thead>
                  <tr>  
                    <th class="text-center">ID</th>
                    <th class="text-center">Cliente</th>
                    <th class="text-center">Maquina</th>
                    <th class="text-center">Descrição</th>
                  </tr>
                </thead>
                  @foreach ($maquinas as $m)
                  <tbody>
                    <tr>
                      <td class="text-center">{{ $m->id }}</td>
                      <td class="text-center">{{ str_limit($m->cliente, 30) }}</td>
                      <td class="text-center">{{ str_limit($m->nomedamaquina, 30) }}</td> 
                      <td class="text-center">{{ str_limit($m->descricao, 30) }}</td> 
                    </tr>
                    @endforeach
                    {{$maquinas->links()}}
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection