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
				<p style="text-align: center; width:200px; float:right;  border-style: solid;"><b>Orçamento Nº {{ $numero }}</b></p>
			</div>

			<h3>Pedido De Compras</h3>
			<h2 style="display:inline; font-size: 18px;">Cliente: {{ $cliente->cliente }}</h2>
			<hr>
			<div class="empresa">
				<p><strong>Endereço: </strong>{{ $cliente->endereco }} </p>
				<p><strong>Projeto: </strong>{{ $projeto }}</p>
			</div>
			<div>
				<p><strong>Contato: </strong> {{ $cliente->nome_responsavel_cliente }}</p>
				<p><strong>Email: </strong> {{ $cliente->email_respon_cliente }}</p>
				<p><strong>Telefone: </strong> {{ $cliente->telefone_cliente }}</p>
			</div>
			
			<h2 style="display:inline; font-size: 18px;">Fornecedor: {{ $fornecedor->fornecedor}}</h2>
			<hr>
			<div class="empresa">
				<p><strong>Endereço: </strong>{{ $fornecedor->endereco}}</p>
				<p><strong>Cidade: </strong>{{ $fornecedor->cidade_for}}</p>
				</div>
			<div>
				<p><strong>Contato: </strong> {{ $fornecedor->nome_responsavel_for}} </p>
				<p><strong>Email: </strong>  {{ $fornecedor->email_respons_for}} </p>
				<p><strong>Telefone: </strong> {{$fornecedor->telefone_for }} <p>
			</div>
				<table>
						<tr>
							<th>Item</th>
							<th>Produto</th>
							<th>Quantidade</th>
							<th>Valor(Un)</th>
							<th>Total(R$)</th>
							<th>IPI(%)</th>
							<th>Entrega (Dias)</th>
						</tr>
						
							@for ($i = 0; $i < $loop; $i++) 
							<tr>
							<td>{{  $i+1  }}</td>
							<td style="width: 250px;">{{  $produtolimpo[$i]  }}</td>
							<td>{{  $precolimpo[$i]  }}</td>
							<td>{{  $quantlimpo[$i]  }}</td>
							<td>R$ {{ number_format((float)$totallimpo[$i], 2, ',', '.') }}</td>
							<td>{{  $ipilimpo[$i]  }}%</td>
							<td>{{ $entregalimpo[$i] }}</td>
						</tr>
							@endfor
				</table>
		<div style="width:100%; height:20px; float:left;">
				<p><b>Forma de Pagamento: {{ $pagamento }}</p>
				<p>Condicão de Pagamento:{{ $condicao }}</p>
		</div>
		<div style="width:100%; height:20px;">
				<h4 style="text-align: center; width:200px; float:right;  border-style: solid;"><b>Valor Total:</b> {{ number_format((float)array_sum($totallimpo), 2, ',', '.') }} R$</h4>
		</div>

			<div>
				<p class="info" style="width:100%;">Horário de Recebimento das 8:00 ás 16:00 horas (Exceto Feriado).<b> Enviar notas fiscais e boletos em XML para financeiro@jpsolucoeseletricas.com.br antes da efetivação da entrega.</b></p>
				<p style="color: red;">Por gentileza informar em todas as notas fiscais o número do pedido de compra, caso contrário o mesmo será recusado.</p>
			</div>
		
			<div style="float: left; width: 23%; padding-top:25px; margin-left:0px text-align: left;">
				<hr style="align:center; width:190px; size:1">
				<p>Comprador</p>
			</div>
			<div style="float: left; width: 23%; padding-top:25px; margin-left:120px; text-align: left;">
				<hr style="align:center; width:190px; size:1">
				<p>Coordenador</p>
			</div>
			<div style="float: left; width: 23%; padding-top:25px; margin-left:120px; text-align: left;">
				<hr style="align:center; width:190px; size:1">
				<p>Diretor de Vendas</p>
			</div>
			</div>
			<div style="width: 100%; font-size: 10px; text-align: justify;">
				<b>Condições de Compra</b> - Artigo 1º - Da Aceitação das Condições de Compra
Estas Condições Gerais de Compra devem se aplicar a todos os PEDIDOS (de fornecimento de
produtos ou prestação de serviço) feitos à CONTRATADA (fornecedor ou prestador de serviço)
pela JPsolutions.
A aceitação, por parte da CONTRATADA, de qualquer pedido feito pela JPsolutions acarreta, a
automática e direta aceitação das Condições Gerais de Compra existentes no presente
instrumento, que será, então, aplicada a qualquer daqueles pedidos.
Nenhuma adição, alteração ou substituição a estas Condições Gerais de Compra vinculará a
JPsolutions, a menos que esta tenha, expressamente, por escrito, aceitado aquelas adições,
alterações ou substituições.
Assim, estas Condições Gerais de Compra devem aplicar-se de modo incondicionado e absoluto,
a não ser que as partes tenham expressamente ,por escrito, acordado de modo diverso do aqui
pactuado.
Artigo 2º - Da Formalização do Pedido
PEDIDOS realizados verbalmente, por e-mail, ou por ligação telefônica apenas deverão ser
considerados válidos após a formalização, por escrito, do mesmo, pela JPsolutions.
O início da execução do PEDIDO pela CONTRATADA acarreta a aceitação, plena e geral, de
todas as condições expressas no PEDIDO, incluindo, mas não se limitando, estas Condições
Gerais de Compra.
Qualquer adição, alteração ou substituição a alguma condição ou outro elemento do PEDIDO,
que venha ser proposta pela CONTRATADA, apenas vinculará a JPsolutions, após esta manifestar,
por escrito, a sua concordância. Desta forma, caso a JPsolutions mantenha-se silente em relação a
qualquer adição, alteração ou substituição proposta, entender - se -á que ela não concordou com
a mesma, não estando, portanto, a ela vinculada.
Artigo 3º - Da Determinação Do Objeto
O objeto do PEDIDO é determinado principalmente pelo próprio PEDIDO enviado pela JPsolutions,
além dos apêndices, documentos técnicos, projetos, planos, especificações funcionais, que
porventura a ele estejam anexos, bem como por quaisquer outros documentos que dele façam
parte.
A CONTRATADA se compromete a disponibilizar para JPsolutions todos os documentos
necessários para o bom, correto e adequado uso dos produtos e serviços.
Artigo 4º - Do Sigilo e da Confidencialidade
A CONTRATADA compromete-se a manter e a fazer com que seus empregados mantenham o
mais completo sigilo sobre quaisquer dados, informações, conhecimentos técnicos, documentos
de propriedade da JPsolutions, a que tenham conhecimento e acesso em razão da prestação de
serviços ou fornecimento de produto, sendo vedadas divulgações não autorizadas, totais ou
parciais, a terceiros, durante e após 5 ( cinco ) anos de vigência deste acordo.
A CONTRATADA concorda em não revelar e/ou usar aquelas informações em nenhuma
hipótese, seja ela qual for. Toda informação fornecida pela JPsolutions permanecerá como sua
propriedade, devendo a ela retornar após a conclusão do PEDIDO.
O PEDIDO estará automática e imediatamente rescindido, de pleno direito ,independentemente
de qualquer notificação ou interpelação judicial ou extrajudicial, na hipótese de violação ao sigilo
e confidencialidade, sem prejuízo de ressarcimento de danos então causados, além de lucros
cessantes, e indenização.
Artigo 5º - Da Subcontratação
Toda e qualquer subcontratação pretendida pela parte CONTRATADA deverá ser prévia e
expressamente autorizada pela JPsolutions.
Em sendo autorizada a subcontratação, a CONTRATADA deverá manter a subcontratada ciente
de todas as obrigações previstas no presente instrumento, e a CONTRATADA
responsabilizar-se-á pelo cumprimento dos encargos trabalhistas e previdenciários da
subcontratada, bem como pelo cumprimento por parte desta de todos os regulamentos internos e
normas de segurança da JPsolutions, respondendo, ainda, por toda e qualquer eventual infração.
Artigo 6º - Da Entrega Do Produto e Da Prestação Do Serviço
A CONTRATADA deverá entregar os produtos ou realizar os serviços, dentroda data, e no local
estabelecido pelo PEDIDO. Nenhum atraso na entrega do produto ou na execução do serviço
pela CONTRATADA será suportado e aceito pela JPsolutions, a não ser que esse atraso seja
motivado por força maior ou caso fortuito, como definido no artigo 9º.
No caso de se configurar o atraso, fica estipulado a multa, a ser paga pela CONTRATADA à
JPsolutions, correspondente a 2% do valor total do pedido, e juros de 1% ao mês, ou fração.
Estas condições aplicar-se-ão automática e imediatamente quando do advento do atraso, não
sendo necessário qualquer aviso ou comunicação formal à CONTRATADA.
Verificando-se, ou prevendo-se, o advento de qualquer circunstância ou situação que possa
ocasionar atraso na entrega ou execução do serviço por parte da CONTRATADA, deverá esta
imediatamente notificar a JPsolutions.
A CONTRATADA dará garantia de no mínimo 12 (doze) meses sobre os produtos fornecidos ou
período que for maior, na hipótese de garantia do fabricante. E garantia de no mínimo 05 (cinco)
anos, na forma da legislação, para serviços prestados.
Artigo 7º - Das Condições De Pagamento
A JPsolutions deverá efetuar o pagamento na data especificada no PEDIDO, mediante a
apresentação dos documentos contábeis (Notas Fiscais / Faturas), que deverão ser entregues no
local da entrega do produto ou da prestação dos serviços em até 48 horas da data de sua
emissão.
Todos os impostos incidentes sobre a prestação do serviço, ou fornecimento de produto, deverão
estar inclusos no preço contratado. Qualquer alteração, criação ou supressão de quaisquer
tributos que venham a incidir direta ou indiretamente sobre o serviço ou fornecimento serão de
exclusiva responsabilidade da CONTRATADA.
A CONTRATADA não poderá penhorar, caucionar ou ceder direitos creditórios resultantes deste
acordo, sem o prévio e expresso consentimento, por escrito, da JPsolutions, sob pena de rescisão
automática do contrato.
Artigo 8º - Do Risco
Correm por conta da CONTRATADA quaisquer coberturas de riscos por acidentes pessoais ou
de terceiros, não cabendo à JPsolutions qualquer responsabilidade em decorrência de eventual
acontecimento no trajeto de ida ou retorno da CONTRATADA do local da entrega dos produtos
ou prestação dos serviços.
Artigo 9º - Do Caso Fortuito Ou Força Maior
Qualquer atraso ou falha no cumprimento das obrigações ora estabelecidas, por qualquer das
partes, desde que motivado por força maior ou caso fortuito, definida no art. 393 do NCC, não
incorrerá nas imposições das penalidades aqui estipuladas, porém facultará a qualquer das
partes rescindir este contrato caso o acontecimento se perdure por mais de 1 ( um ) meses.
A parte afetada por uma situação causada por caso fortuito deverá prontamente informar a outra
acerca desta circunstância, bem como indicar a estimativa de quanto tempo essa condição
persistirá.
Artigo 10º - Da Transferência De Propriedade
A transferência de propriedade do produto solicitado para a JPsolutions se verificará após a entrega
do mesmo no local e data acordados no PEDIDO, e desde que todas as condições presentes no
PEDIDO e neste instrumento, em especial as que constam no art. 11º, da Conformidade,
estejam cumpridas .
A menos que expressamente aceito pela JPsolutions qualquer cláusula de retenção de propriedade
será considerada inválida.
Artigo 11º - Da Conformidade
A CONTRATADA garante em todas as circunstâncias, incluindo o caso de subcontratação
autorizada, que o produto entregue ou o serviço executadoestarão em conformidade com as
exigências legais, e com o pactuado e requerido no PEDIDO, especialmente, embora não se
limitando, no que se relaciona com qualidade, higiene, segurança e meio-ambiente.
No caso de não conformidade ou defeito, a JPsolutions resguarda o direito de ,às custas e riscos da
CONTRATADA, devolver o produto ou, na hipótese de prestação de serviço, corrigi-lo ou
refazê-lo.
A CONTRATADA se compromete ainda a entregar os produto e a executar os serviços dentro
dos melhores padrões de qualidade, utilizando-se da mais moderna tecnologia, empregando
material de primeira qualidade.
A CONTRATADA se compromete a providenciar para que seus empregados, e demais
trabalhadores por ela alocados para a presente prestação de serviço, ou entrega de produto,
somente ingressem nas dependências da JPsolutions após sua habilitação na localidade, mediante
a apresentação de sua identificação funcional expedida por ela, CONTRATADA, bem como
deverá fornecer-lhes uniformes com o seu logotipo.
Artigo 12º - Da Responsabilidade
A CONTRATADA assume integral responsabilidade pelos materiais que eventualmente lhe forem
entregues pela JPsolutions, bem como responderá, independentemente de culpa, por todo e
qualquer dano que seus empregados, prepostos, e demais trabalhadores por ela contratados
para aprestação dos serviços ou entrega de produto sofrerem ou, ainda, causarem, voluntária ou
involuntariamente, nas dependências da JPsolutions, sejam aos empregados desta ou a quaisquer
terceiros, cabendo-lhe indenizar tanto a JPsolutions como a terceiros lesados, incontinenti, até o
integral ressarcimento dos danos causados.
Desta forma, a CONTRATADA, seja ele prestador de serviço ou fornecedor produto, restará
responsável por qualquer dano ou prejuízo causado a JPsolutions ou a terceiros. Está obrigada
também a ressarcir a JPsolutions de todae qualquer importância que esta última venha a ser
compelida a desembolsar em virtude de procedimentos judiciais e extrajudiciais que envolvam as
obrigações apontadas no presente instrumento.
Não se estabelece nenhum vínculo empregatício entre a JPsolutions e os empregados e/ou
contratados da CONTRATADA decorrente da execução de qualquer fornecimento, ficando a
CONTRATADA obrigada a defender a JPsolutions de qualquer reclamação trabalhista, devendo
requerer a exclusão da lide desta, e indenizando imediatamente qualquer valor que a JPsolutions
venha eventualmente ser compelida a pagar em juízo.
Artigo 13º - Do Seguro
Cabe a CONTRATADA providenciar e manter, à suas custas e expensas, todosos seguros
necessários durante o fornecimento do produto ou execução do serviço, garantindo a JPsolutions de
todos os riscos que possam recair sobre a mesma tais como, mas não exclusivamente, danos
aos seus equipamentos e materiais, pagamento de indenização requerida por seus funcionários
ou seus familiares referente a acidentes ocorridos durante a obra, dentre outros.
Artigo 14º - Da Rescisão
Considerar-se-á o pedido automática e imediatamente rescindido, de pleno direito,
independentemente de qualquer notificação ou interpelação judicial ou extrajudicial, nas seguintes
hipóteses:
( i ) se qualquer das partes descumprir ou inadimplir, total ou parcialmente, direta ou
indiretamente, qualquer uma das obrigações acordadas;
( ii ) se qualquer das partes impetrar concordata preventiva, requerer autofalência ou tiver falência
requerida.
( iii ) se a parte contratante transferir a terceiros, por qualquer forma, direitos e obrigações que
tiver assumido através deste contrato, sem a prévia e expressa autorização da JPsolutions.
A JPsolutions poderá, ainda, rescindir o presente contrato mediante prévio aviso, por escrito, com 30
dias de antecedência, sem que assista a partecontratante direito a indenização e multa
contratual, seja a que título for
A Partes elegem o foro da comarca da cidade de São Paulo, com exclusão de qualquer outro por
mais privilegiado. Estas Condições Gerais de Compra são regidas exclusivamente pelas Leis brasileiras.</p>
			</div>

			

	</body>
	<style>
		.page-footer{
			footer: page-footer;
			height: 100%;
		}
		
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
			
		}
		

		table {
			font-family: arial, sans-serif;
			text-align: center;
			border-collapse: collapse;
			width: 100%;
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

		.teste {
			background:#333;
			width:450px;
			margin: auto;
			padding:10px;
			text-align:center;
		}

		.empresa {
			float: left;	
			height: 100px;
			width: 50%;
			font-family: arial, sans-serif;			
			text-align: left;
		}


		

	</style>