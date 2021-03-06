@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Relatorio por Cliente</h1>
                <form class="form" action="/Relatorios/Clientes" method="post">
                            <div class="form-group">
                            <div class="col-lg-12">
                                <label>Buscar por Cliente:</label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <select class="form-control" name="clientes" id="clientes">@foreach($clientes as $c)<option value="{{ $c->cliente }}">{{ $c->cliente }}</option> @endforeach</select>
                            </div>
                            <div class="col-lg-5">
                                <label>Iniciando em: </label>
                                <input class="form-control"  id="from" name="from">
                            </div>
                            <div class="col-lg-5">
                                    <label for="sel1">Até:</label>
                                    <input class="form-control"  id="to" name="to">
                            </div>
                            <div class="col-lg-12">
                                </br><hr>
                                <button type="submit" class="btn btn-success">Buscar</button>
                            </div>
                        </div>
                    </div>
                </form>
                

                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


                <script>
                    var j = jQuery.noConflict();
                    j( function() {
                        j( "#from" ).datepicker({
                          changeMonth: true,
                          changeYear: true,
                          dateFormat: "yy-mm-dd",
                          dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                          dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                          dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                          monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                          monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
                        }); 

                    } );

                     var j = jQuery.noConflict();
                     j( "#to" ).datepicker({
                          changeMonth: true,
                          changeYear: true,
                          dateFormat: "yy-mm-dd",
                          dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                          dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                          dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                          monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                          monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
                        }); 
                </script>
</script>
                  
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection