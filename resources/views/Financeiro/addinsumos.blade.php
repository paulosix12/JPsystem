
@extends('app')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Insumo por Maquinas</h1>
            </div>
            <div class="row">                
                <div class="col-lg-12">
                    <form class="form" action="/Financeiro/Adicionar/Novo" method="post">
                    <div class="form-group">
                    <label for="sel1">Selecione o Cliente:</label>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <select class="form-control" name="cliente" id="cliente">
                            <option>--- Selecione um cliente ---</option>
                            @foreach($clientes as $c)<option value="{{ $c->cliente }}">{{ $c->cliente }}</option> @endforeach</select>
                </div>
                </div>
            </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-lg-12">
                        <label for="sel1">Gastos com a Maquina:</label>
                            <select class="form-control" name="maquinas" id="maquinas">
                                <option value="">--- Selecione a Maquina ---</option>
                            </select>
                        </div>
                    </div>
                    </hr>
                        
                    <div class="row">
                        <div class="col-md-2">
                            <label for="Data">Data</label>
                            <input type="text" id="data" name="data" class="form-control"  >
                        </div>
                    
                        <div class="col-md-5">
                            <label>Colaborador</label>
                            <select id="colaborador" name="colaborador" class="form-control" >
                            @foreach($colaboradores as $colab)<option>{{ $colab->colaboradores }}</option>@endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label>Combustivel</label>
                            <input type="text" value="0,00" id="combustivel" name="combustivel" class="form-control" >
                        </div>

                        <div class="col-md-3">
                            <label>Pedagio</label>
                            <input type="text" value="0,00" id="pedagio" name="pedagio" class="form-control" >
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label>Alimentação</label>
                            <input type="text" value="0,00" id="alimentacao" name="alimentacao" class="form-control" >
                        </div>
                        
                        <div class="col-md-2">
                            <label>Hospedagem</label>
                            <input type="text" value="0,00" id="hospedagem" name="hospedagem" class="form-control" >
                        </div>

                        <div class="col-md-2">
                            <label>Outros</label>
                            <input type="text" value="0,00"  id="outros" name="outros" class="form-control" >
                        </div>
                    </div>
                        <div class="col-lg-12">
                            </br><hr>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>  
                    
              </form>

              

                <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                <script type="text/javascript" src="{{ URL::asset('js/jquery.maskMoney.js') }}"></script>                
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
                        j( "#data" ).datepicker({
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
                </script>

                <script>
                    j (function() {
                      j("#combustivel").maskMoney({prefix:'R$ ', allowZero:true ,allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
                      j("#pedagio").maskMoney({prefix:'R$ ', allowZero:true, allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
                      j("#alimentacao").maskMoney({prefix:'R$ ', allowZero:true, allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
                      j("#hospedagem").maskMoney({prefix:'R$ ', allowZero:true, allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
                      j("#outros").maskMoney({prefix:'R$ ',allowZero:true, allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
                    })
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