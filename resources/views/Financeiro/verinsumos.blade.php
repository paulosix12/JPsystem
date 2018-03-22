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
                                </tr>
                                @endfor
                                <tr>
                                    <td class="text-center"><b>Total</b></td>
                                    <td class="text-center"><b> --- </b></td>
                                    <td class="text-center"><b> --- </b></td>
                                    <td class="text-center"><b>{{ number_format((float)array_sum($array_combustivel)) }}</b></td>
                                    <td class="text-center"><b>{{ number_format((float)array_sum($array_pedagio)) }} </b></td>
                                    <td class="text-center"><b>{{ number_format((float)array_sum($array_alimentacao)) }}</b></td>
                                    <td class="text-center"><b>{{ number_format((float)array_sum($array_hospedagem)) }}</b></td>
                                    <td class="text-center"><b>{{ number_format((float)array_sum($array_outros)) }}</b></td>
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