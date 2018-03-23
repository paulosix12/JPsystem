@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Configurações</h1>
            </div>
                <div class="col-lg-5">
                    <label>Adicionar Colaborabores</label>
                    <form action="/Configuracoes/Adicionar/NovoColab" method="post">                        
                        <div class="input-group">
                            <input type="text" class="form-control" name="colaboradores" placeholder="Nome do Colaborador">                                
                            <span class="input-group-btn">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                    <button class="btn btn-primary" type="submit">Adicionar</button>
                                </form>
                            </span>
                        </div>
                        <div class="form-group">
                            <br>
                                <label for="sel1">Colaboradores Cadastrados:</label>
                                <select multiple class="form-control" id="sel1">
                                  @foreach($colaboradores as $colab)<option>{{$colab->colaboradores}}</option>@endforeach
                                </select>
                              </div>
                </div>
                <div class="col-lg-5">
                        <label>Dias DDL</label>
                        <form action="/Configuracoes/Adicionar/Novoddl" method="post">                                 
                            <div class="input-group">
                                <input type="text" name="ddl" class="form-control" placeholder=""> 
                                <span class="input-group-btn">                                                                               
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>                                        
                                    <button class="btn btn-primary" type="submit">Adicionar</button>
                                </form>
                            </div>
                            <div class="form-group">
                                <br>
                                    <label for="sel1">Dias da data líquida:</label>
                                    <select multiple class="form-control" id="sel1">
                                            @foreach($ddl_colab as $dc)<option>{{$dc->ddl}}</option>@endforeach                                            
                                    </select>
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