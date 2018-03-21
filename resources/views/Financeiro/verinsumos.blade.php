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
            </div>
                </br>
                <h1 class="page-header">Visualizar Insumos</h1>
              <div class="row">
              <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <p><b>Maquina:</b>{{ $maquinas }} </p>
              <div class="col-md-12 mb-3">
                    <table class="table table-striped ">
                            <thead>
                              <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Data</th>
                                <th class="text-center">Colaborador</th>
                                <th class="text-center">Combustivel</th>
                                <th class="text-center">Pedagio</th>
                                <th class="text-center">Alimentação</th>
                                <th class="text-center">Hospedagem</th>
                                <th class="text-center">Outros</th>
                              </tr>
                            </thead>
                            <tr>
                                @foreach($insumos as $in)
                                <td class="text-center"> {{ $in->id }}</td>
                                <td class="text-center"> {{ $in->data }}</td>
                                <td class="text-center"> {{ $in->colaborador }}</td>
                                <td class="text-center"> {{ $in->combustivel }}</td>
                                <td class="text-center"> {{ $in->pedagio }}</td>
                                <td class="text-center"> {{ $in->alimentacao }}</td>
                                <td class="text-center"> {{ $in->hospedagem }}</td>
                                <td class="text-center"> {{ $in->outros }}</td>
                            </tr>   
                            <tr>
                                    <td class="text-center"> Total</td>
                                    <td class="text-center"> -----</td>
                                    <td class="text-center"> -----</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                            </tr>   
                                @endforeach
                        </table>
              </div> 
             
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