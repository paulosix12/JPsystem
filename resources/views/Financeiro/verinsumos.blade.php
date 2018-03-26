@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            </div>
                </br>
                <h1 class="page-header">Visualizar Insumos</h1>
              <div class="row">
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
                                <th class="text-center">Deletar</th>
                              </tr>
                            </thead>
                            <tbody>                     
                                @for ($i = 0; $i < $rodar; $i++)                                  
                                <tr>
                                  <td class="text-center">{{ $array_id[$i] }}</td>
                                  <td class="text-center">{{ $array_data[$i] }}</td>
                                  <td class="text-center">{{ $array_colaborador[$i] }}</td>
                                  <td class="text-center">{{ $array_combustivel[$i] }}</td>
                                  <td class="text-center">{{ $array_pedagio[$i] }}</td>
                                  <td class="text-center">{{ $array_alimentacao[$i] }}</td>
                                  <td class="text-center">{{ $array_hospedagem[$i] }}</td>
                                  <td class="text-center">{{ $array_outros[$i] }}</td>
                                  <td class="text-center"><a button class="btn btn-danger" href="/Financeiro/Deletar/{{ $array_id[$i] }}"><i class="fa fa-trash-o" aria-hidden="true"></button></td>
                                </tr>
                                @endfor
                                <tr>
                                    <td class="text-center"><b>Total</b></td>
                                    <td class="text-center"><b> --- </b></td>
                                    <td class="text-center"><b> --- </b></td>
                                    <td class="text-center"><b>{{ number_format((float)array_sum($array_combustivel), 2, '.', '') }}</b></td>
                                    <td class="text-center"><b>{{ number_format((float)array_sum($array_pedagio), 2, '.', '') }} </b></td>
                                    <td class="text-center"><b>{{ number_format((float)array_sum($array_alimentacao), 2, '.', '' ) }}</b></td>
                                    <td class="text-center"><b>{{ number_format((float)array_sum($array_hospedagem), 2, '.', '') }}</b></td>
                                    <td class="text-center"><b>{{ number_format((float)array_sum($array_outros), 2, '.', '') }}</b></td>
                                  </tr>
                              </tr>
                            <tbody>
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