<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Pedidos JP Solutions</title>

	<body>
			<div class="box1">
				<!-- Bootstrap Core CSS -->
				<img src="http://jpsolutions.com.br/images/LogoMarca_JP_Solucoes.png" width="250" height="100" alt="">
				<p>Sumaré - São Paulo {{ date('d/m/y') }}</p>
			</div>
			<div class="box2">
				<p>CNPJ: 21.733.083./0001-06</p>
				<p>Fone: (19) 3367-9328 / 19 9 8354-5333</p>
				<p>www.jpsolutions.com.br</p>
				<p style="text-align: center; width:200px; float:right;  border-style: solid;"><strong>Orçamento Nº {{ $numero }}</strong></p>
			</div>
		</br>
		<h3>Pedido De Compras</h3>
		<div class="empresa">
			<p><strong>Empresa: </strong>{{ $cliente->cliente }}</p>
			<p><strong>Endereço: </strong>{{ $cliente->endereco }} </p>
			<p><strong>Projeto: </strong>{{ $projeto }}</p>
		</div>
		<div>
			<p><strong>Contato: </strong> {{ $cliente->nome_responsavel_cliente }}</p>
			<p><strong>Email: </strong> {{ $cliente->email_respon_cliente }}</p>
			<p><strong>Telefone: </strong> {{ $cliente->telefone_cliente }}</p>
		</div>
			<table>
					<tr>
						<th>Item</th>
						<th>Produto</th>
						<th>Valor(Un)</th>
						<th>Quantidade</th>
						<th>Total(R$)</th>
						<th>IPI(%)</th>
						<th>Entrega</th>
					</tr>
					
						@for ($i = 0; $i < $loop; $i++) 
						<tr>
						<td>{{  $i+1  }}</td>
						<td style="width: 250px;">{{  $produtolimpo[$i]  }}</td>
						<td>{{  $precolimpo[$i]  }}</td>
						<td>{{  $quantlimpo[$i]  }}</td>
						<td>R$ {{  $totallimpo[$i]  }}</td>
						<td>{{  $ipilimpo[$i]  }}%</td>
						<td>{{ $entregalimpo[$i] }}</td>
					</tr>
						@endfor
			</table>
		<br>
		<div style="width:100%; height:20px;">
				<p style="text-align: center; width:200px; float:right;  border-style: solid;"><strong>Valor Total: {{ number_format((float)array_sum($totallimpo), 2, '.', '')  }}</strong></p>
		</div>

			<div>
				<p class="info" style="width:100%;">Horario de Recebimento das 8:00 as 16:00 (Exeto Feriado).<strong>Enviar nota fiscas e boletos em XML para financeiro@jpsolucoeseletricas.com.br</strong>				antes da efetivação da entrega, Por gentiza informar em toda as notas fiscais o número do pedido de compra, caso contrario
					o mesmo sera recusado</p>
			</div>
			<br>
			<br>
			<div style="float: left; width: 20%; margin-left:0px text-align: left;">
				<hr style="align:center; width:190px; size:1">
				<p>Comprador</p>
			</div>
			<div style="float: left; width: 20%; margin-left:120px; text-align: left;">
				<hr style="align:center; width:190px; size:1">
				<p>Coordenador</p>
			</div>
			<div style="float: left; width: 20%; margin-left:120px; text-align: left;">
				<hr style="align:center; width:190px; size:1">
				<p>Diretor de Vendas</p>
			</div>
	</body>
	<style>
		.box1 {
			float: left;
			height: 150px;
			width: 50%;
			text-align: center;
		}

		.box2 {
			float: right;
			width: 50%;
			height: 150px;
			text-align: right;
		}


		h3 {
			text-align: center;
		}

		.empresa {
			float: left;	
			height: 100px;
			width: 50%;
			font-family: arial, sans-serif;			
			text-align: left;
		}
		

		table {
			margin-top: 5px;
			font-family: arial, sans-serif;
			text-align: center;
			border-collapse: collapse;
			width: 100%;
			margin-top: 40px;
		}

		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
			text-align: center;
		}

		.valor{
			float: right;
			width: 100%;
			text-align: right;
			padding-top: 20px;
			border: 1px solid #dddddd;
			padding-right:20px;
		}

		info {
			font-family: arial, sans-serif;
			text-align: center;
			border-style: solid;
		}

	</style>