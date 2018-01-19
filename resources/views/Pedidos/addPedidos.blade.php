@extends('app') @section('conteudo')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Adicionar Pedido</h1>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <form action="/Pedidos/Adicionar/Novo" method="POST">    
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="col-md-3 mb-3">
                    <label >Selecione o cliente</label>
                    <select class="form-control" name="cliente">
                        @foreach($clientes as $c)<option value="{{$c->cliente}}">{{$c->cliente}}</option>@endforeach
                    </select>                  
                </div>
                <div class="col-md-3 mb-3">
                    <label>Selecione o Projeto</label>
                    <input type="text" id="projeto" name="projeto" class="form-control" >                    
                </div>
                <div class="col-md-3 mb-3">
                        <label>Total</label>
                        <input type="text" id="totalFinal" name="totalFinal" class="form-control" disabled>                    
                    </div>
                <table class="table m-0" classe="order-list" id="products-table">
					<thead>
						<tr>
							<th>Item</th>
							<th>Produto/Serviço</th>
							<th>Quantidade</th>
                            <th>Valor Unitário</th>
                            <th>IPI(%)</th>
                            <th>Entrega</th>
                            <th>Valor Total</th>
						</tr>
					</thead>

					<tbody class="row">

					</tbody>

					<tfoot>
						<tr>
							<td colspan="4" style="text-align: left;">
								<button id="addLinha" class="btn btn-success" type="button">Adicionar Produto</button>
                            </td>
                            <td colspan="4" style="text-align: left;">
								<button class="btn btn-success" type="submit">Salvar Pedido</button>
							</td>
						</tr>
					</tfoot>
				</table>
            </form>

			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
    var contador = 0;
    //adiciona nova linha
    $("#addLinha").on("click", function () {
        contador++;
        
        var newRow = $("<tr>");
		var cols = "";
		cols += '<td><p class="text-center">'+ contador + '</p></td>';
        cols += '<td><select type="text" class="form-control"  style="width: 200px;" name="produto[]">@foreach ($produtos as $p)<option>{{ $p->nome_do_produto }}</option>@endforeach</select></td>';
        cols += '<td><input type="text" class="form-control" style="width: 120px;"   name="preco[]"/></td>';
        cols += '<td><input type="text" class="form-control" style="width: 120px;"   name="quant[]"/></td>';
        cols += '<td><input type="text" class="form-control" style="width: 120px;"   name="ipi[]" value="0"/></td>/></td>';
        cols += '<td><select type="text" class="form-control"  style="width: 80px;" name="entrega[]"><option>Imediato</option>@for ($i = 1; $i < 30; $i++)<option>{{$i}}</option>@endfor</select></td>';
        cols += '<td><input type="text" class="form-control total" style="width: 120px;" name="total[]"/></td>';
        cols += '<td><button class="btn btn-danger"><a class="deleteLinha"> Excluir </button></td>';
        newRow.append(cols);
        
        $("#products-table").append(newRow);
    });

    //chamada da função para calcular o total de cada linha
    $("#products-table").on("blur keyup", 'input[name^="preco"], input[name^="quant"] ', function (event) {
        calculateRow($(this).closest("tr"));
    });
    
    //remove linha
    $("#products-table").on("click", "a.deleteLinha", function (event) {
        $(this).closest("tr").remove();
    });
});
 
//função para calcular o total de cada linha   
function calculateRow(row) {
    var preco = +row.find('input[name^="preco"]').val();
    var quant = +row.find('input[name^="quant"]').val();
    //2 casas decimais
    var tot = (preco * quant).toFixed(2);
    //substitui ponto por virgula
    tot=tot.replace(".", ",");
    //a regex abaixo coloca um ponto a esquerda de cada grupo de 3 digitos desde que não seja no inicio do numero
    row.find('.total').val("R$ " + (tot).replace(/\B(?=(\d{3})+(?!\d))/g, "."));     
}

$( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    
    $("input:text[id^='produto' + 'contador' +]").live("focus.autocomplete", null, function () {
        $(this).autocomplete({
            source: availableTags,
            minLength: 0,
            delay: 0
        });
    });
  });
</script>
@endsection