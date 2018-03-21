@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Relatorio de Insumo por Máquina</h1>
            </div>
                <div class="col-lg-12">
                    <form class="form" action="/Relatorios/Maquinas" method="post">
                    <div class="form-group">
                    <label for="sel1">Selecione o Cliente:</label>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <select class="form-control" name="cliente" id="cliente">
                            <option>--- Selecione um cliente ---</option>
                            @foreach($clientes as $c)<option value="{{ $c->cliente }}">{{ $c->cliente }}</option> @endforeach</select>
                </div>
                </div>
            </form>
                <form class="form" action="/Financeiro/Relatorios" method="post">
                    <div class="form-group">
                        <div class="col-lg-12">
                        <label for="sel1">Gastos com a Maquina:</label>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>                        
                            <select class="form-control" name="maquinas" id="maquinas">
                                <option value="">--- Select State ---</option>
                            </select>
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
              </form>

                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

                <script>
                        $('#cliente').on('change', function(e){
                            console.log(e);
                            var cliente = e.target.value;
                    
                            $.get('{{ url('information') }}/create/ajax-state?cliente=' + cliente, function(data) {
                                console.log(data);
                                $('#maquinas').empty();
                                $.each(data, function(index,subCatObj){
                                    $('#maquinas').append('<option>'+subCatObj.nomedamaquina+'</option>');
                                });
                            });
                        });
                    </script>
                  

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