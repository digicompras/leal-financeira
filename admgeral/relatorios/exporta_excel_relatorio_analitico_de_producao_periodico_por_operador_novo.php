<?

require '../../conect/conect.php';

?>


  <?

$nome_operador = $_POST['nome_operador'];

$status = "PAGO AO CLIENTE";

$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];

$data_inicial = "$ano_inicial-$mes_inicial-$dia_inicial";


$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];

$data_final = "$ano_final-$mes_final-$dia_final";
		



?>


<?

$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";
$res = mysql_query($sql);
$registros_encontrados = mysql_num_rows($res);


?>

<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site_empresa = $linha[15];

}
	

?>


<?



 
 
// Criamos uma tabela HTML com o formato da planilha
$html = '';
$html .= '<table>';
$html .= '<tr>';
$html .= '<td colspan="10"><div align="center">Total de clientes no cidade'." $cidade ". '--->>> '."$registros_encontrados".'</div></td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td><div align="center"><b>Proposta</b></div></td>';
$html .= '<td><div align="center"><b>Cliente</b></div></td>';
$html .= '<td><div align="center"><b>CPF</b></div></td>';
$html .= '<td><div align="center"><b>Telefone</b></div></td>';
$html .= '<td><div align="center"><b>Celular</b></div></td>';
$html .= '<td><div align="center"><b>E-Mail</b></div></td>';
$html .= '<td><div align="center"><b>Endereco</b></div></td>';
$html .= '<td><div align="center"><b>Tipo de Proposta</b></div></td>';
$html .= '<td><div align="center"><b>Bco Operacao</b></div></td>';
$html .= '<td><div align="center"><b>Status</b></div></td>';
$html .= '<td><div align="center"><b>Valor Solicitado</b></div></td>';
$html .= '<td><div align="center"><b>Valor Liq Cliente</b></div></td>';
$html .= '<td><div align="center"><b>Valor Total</b></div></td>';
$html .= '<td><div align="center"><b>Tabela</b></div></td>';
$html .= '<td><div align="center"><b>Prazo</b></div></td>';
$html .= '<td><div align="center"><b>Valor Parcelas</b></div></td>';
$html .= '<td><div align="center"><b>Meta</b></div></td>';
$html .= '<td><div align="center"><b>Premiacao</b></div></td>';

$html .= '</tr>';
	
$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {


$num_proposta = $linha[0];
$nome_operador = $linha[1];
$tipo = $linha[2];
$estabelecimento_proposta = $linha[3];
$nome = $linha[4];
$sexo = $linha[5];
$estadocivil = $linha[6];
$cpf = $linha[7];
$rg = $linha[8];
$orgao = $linha[9];
$emissao = $linha[10];
$data_nasc = $linha[11];
$pai = $linha[12];
$mae = $linha[13];
$endereco = $linha[14];
$numero = $linha[15];
$bairro = $linha[16];
$complemento = $linha[17];
$cidade = $linha[18];
$estado = $linha[19];
$cep = $linha[20];
$telefone = $linha[21];
$celular = $linha[22];
$email = $linha[23];
$num_beneficio = $linha[24];
$valor_credito = $linha[25];
$quant_parc = $linha[26];
$parcela = $linha[27];
$banco_pagto = $linha[28];
$num_banco = $linha[29];
$agencia = $linha[30];
$conta = $linha[31];
$operador = $linha[32];
$cel_operador = $linha[33];
$email_operador = $linha[34];
$estabelecimento = $linha[35];
$cidade_estabelecimento = $linha[36];
$tel_estabelecimento = $linha[37];
$email_estabelecimento = $linha[38];
$obs = $linha[39];
$dataproposta = $linha[40];
$horaproposta = $linha[41];
$dataalteracao = $linha[42];
$horaalteracao = $linha[43];
$operador_alterou = $linha[44];
$cel_operador_alterou = $linha[45];
$email_operador_alterou = $linha[46];
$estabelecimento_alterou = $linha[47];
$cidade_estabelecimento_alterou = $linha[48];
$tel_estabelecimento_alterou = $linha[49];
$email_estabelecimento_alterou = $linha[50];
$status = $linha[51];


$parc1 = $linha[52];
$banco1 = $linha[53];
$vencto1 = $linha[54];
$compra1 = $linha[55];

$parc2 = $linha[56];
$banco2 = $linha[57];
$vencto2 = $linha[58];
$compra2 = $linha[59];

$parc3 = $linha[60];
$banco3 = $linha[61];
$vencto3 = $linha[62];
$compra3 = $linha[63];

$parc4 = $linha[64];
$banco4 = $linha[65];
$vencto4 = $linha[66];
$compra4 = $linha[67];

$parc5 = $linha[68];
$banco5 = $linha[69];
$vencto5 = $linha[70];
$compra5 = $linha[71];

$parc6 = $linha[72];
$banco6 = $linha[73];
$vencto6 = $linha[74];
$compra6 = $linha[75];

$parc7 = $linha[76];
$banco7 = $linha[77];
$vencto7 = $linha[78];
$compra7 = $linha[79];

$num_beneficio2 = $linha[80];
$num_beneficio3 = $linha[81];
$num_beneficio4 = $linha[82];
$tipo_proposta = $linha[83];
$mes_ano = $linha[84];
$retorno = $linha[85];
$bco_operacao = $linha[86];
$valor_a_receber = $linha[87];

$recebido = $linha[88];

$data_recebimento = $linha[89];
$quoeficiente = $linha[90];
$hora_baixa = $linha[91];
$valor_comissao_corres = $linha[92];
$pago_comissao_corres = $linha[93];
$data_pagto_comissao_corres = $linha[94];
$quoeficiente_corres = $linha[95];
$hora_baixa_comissao_corres = $linha[96];
$valor_liberado = $linha[97];
$tipo_capital = $linha[98];
$mes_ano_status = $linha[99];
$percentual_op = $linha[100];
$comissao_op = $linha[101];
$obs2 = $linha[102];
$status_pagto_cliente = $linha[103];
$data_pagto_cliente = $linha[104];
$hora_pagto_cliente = $linha[105];
$dia = $linha[106];
$mes = $linha[107];
$ano = $linha[108];
$tabela = $linha[109];
$dia_alteracao_status = $linha[110];
$mes_alteracao_status = $linha[111];
$ano_alteracao_status = $linha[112];
$valor_total = $linha[113];
$campanha = $linha[114];
$valor_liquido_cliente = $linha[115];
$comissao_empresa = $linha[116];
$dia_pagto_cliente = $linha[117];
$mes_pagto_cliente = $linha[118];
$ano_pagto_cliente = $linha[119];
$status_fisico = $linha[120];
$num_bordero = $linha[121];
$obs_fisico = $linha[122];
$data_alteracao_status_fisico = $linha[123];
$hora_alteracao_status_fisico = $linha[124];
$mes_ano_status_fisico = $linha[125];
$dia_status_fisico = $linha[126];
$mes_status_fisico = $linha[127];
$ano_status_fisico = $linha[128];
$operador_alterou_status_fisico = $linha[129];
$cel_operador_alterou_status_fisico = $linha[130];
$email_operador_alterou_status_fisico = $linha[131];
$estabelecimento_alterou_status_fisico = $linha[132];
$cidade_estabelecimento_alterou_status_fisico = $linha[133];
$tel_estabelecimento_alterou_status_fisico = $linha[134];
$email_estabelecimento_alterou_status_fisico = $linha[135];
$tipo_contrato = $linha[136];
$diaalteracao_comissao = $linha[137];
$mesalteracao_comissao = $linha[138];
$anoalteracao_comissao = $linha[139];
$dataalteracao_comissao = $linha[140];
$horaalteracao_comissao = $linha[141];
$operador_alterou_comissao = $linha[142];
$cel_operador_alterou_comissao = $linha[143];
$email_operador_alterou_comissao = $linha[144];
$estabelecimento_alterou_comissao = $linha[145];
$cidade_estabelecimento_alterou_comissao = $linha[146];
$tel_estabelecimento_alterou_comissao = $linha[147];
$email_estabelecimento_alterou_comissao = $linha[148];
$termo_de_responsabilidade = $linha[149];
$termo = $linha[150];
$num_contrato_banco = $linha[151];
$data_proposta = $linha[152];
$prazo_final = $linha[153];
$digitacao = $linha[154];
$datadigitacao = $linha[155];
$horadigitacao = $linha[156];
$dias_diferenca = $linha[157];
$dias_atraso = $linha[158];
$tipo_conta = $linha[159];
$resposta = $linha[160];
$bco_quitacao = $linha[161];
$nome_ref1 = $linha[162];
$fone_ref1 = $linha[163];
$grau_relacionamento1 = $linha[164];
$nome_ref2 = $linha[165];
$fone_ref2 = $linha[166];
$grau_relacionamento2 = $linha[167];
$resposta1 = $linha[168];
$resposta2 = $linha[169];
$resposta3 = $linha[170];
$meta = $linha[171];
$data_alteracao = $linha[172];
$data_digitacao = $linha[173];
$data_da_possibilidade = $linha[174];
$devolucao_ao_cliente = $linha[175];
$pagto_beneficio = $linha[176];
$num_contrato_bco = $linha[177];
$proposal_page = $linha[178];
$proposal_product = $linha[179];
$proposal_option = $linha[180];
$proposal_date = $linha[181];
$proposal_time = $linha[182];
$valorrenda = $linha[183];
$url = $linha[184];
$receberemail = $linha[185];
$funcao = $linha[186];
$custo_operacao = $linha[187];
$dia_parc = $linha[188];
$mes_parc = $linha[189];
$ano_parc = $linha[190];
$percentual_entrada = $linha[191];
$iniciocontrato = $linha[192];
$venctocontrato = $linha[193];
$dia_vencto_contrato = $linha[194];
$mes_vencto_contrato = $linha[195];
$ano_vencto_contrato = $linha[196];
$percentual_comissao_avista = $linha[197];
$percentual_comissao_avista_decimal = $linha[198];
$diferido = $linha[199];
$percentual_comissao_diferido = $linha[200];
$percentual_comissao_diferido_decimal = $linha[201];
$valor_a_receber_diferido = $linha[202];
$vinculo = $linha[203];
$vinculo_anterior = $linha[204];
$percentual_op_decimal = $linha[205];
$unidadepagadora = $linha[206];
$cargosituacao = $linha[207];
$data_proposta_site = $linha[208];
$margemcartao = $linha[209];
$margememprestimo = $linha[210];
$dia_niver = $linha[211];
$mes_niver = $linha[212];
$ano_niver = $linha[213];
$secretaria = $linha[214];
$categoria = $linha[215];
$operador_atendente = $linha[216];
$tipo_pessoa = $linha[217];
$nacionalidade = $linha[218];
$quant_dependente = $linha[219];
$conjuge = $linha[220];
$data_nasc_conjuge = $linha[221];
$correspondencia = $linha[222];
$tipo_residencia = $linha[223];
$valor_aluguel = $linha[224];
$tempo_residencia = $linha[225];
$tipo_telefone = $linha[226];
$residencia_anterior = $linha[227];
$cidade_anterior = $linha[228];
$estado_anterior = $linha[229];
$tempo_residencia_anterior = $linha[230];
$empresa = $linha[231];
$porte_empresa = $linha[232];
$data_admissao = $linha[233];
$meses = $linha[234];
$inicio_atividade = $linha[235];
$end_empresa = $linha[236];
$numero_empresa = $linha[237];
$complemento_empresa = $linha[238];
$bairro_empresa = $linha[239];
$cep_empresa = $linha[240];
$cidade_empresa = $linha[241];
$estado_empresa = $linha[242];
$ddd_tel_empresa = $linha[243];
$telefone_empresa = $linha[244];
$cargo = $linha[245];
$natureza_operacao = $linha[246];
$salario = $linha[247];
$atividade_principal = $linha[248];
$cnpj = $linha[249];
$ddd_tel_contador = $linha[250];
$tel_contador = $linha[251];
$atividade_anterior = $linha[252];
$data_admissao_anterior = $linha[253];
$data_saida = $linha[254];
$cargo_anterior = $linha[255];
$ddd_tel_empresa_anterior = $linha[256];
$telefone_empresa_anterior = $linha[257];
$outras_rendas = $linha[258];
$ref_pessoal = $linha[259];
$ddd_ref_pessoal = $linha[260];
$tel_ref_pessoal = $linha[261];
$ref_pessoal2 = $linha[262];
$ddd_ref_pessoal2 = $linha[263];
$tel_ref_pessoal2 = $linha[264];
$ref_comercial = $linha[265];
$ddd_ref_comercial = $linha[266];
$tel_ref_comercial = $linha[267];
$ref_banco = $linha[268];
$ref_agencia = $linha[269];
$digito_agencia = $linha[270];
$ref_conta = $linha[271];
$digito_conta = $linha[272];
$ref_tipo_conta = $linha[273];
$ref_conta_desde = $linha[274];
$ano_ref_conta = $linha[275];
$cartao_credito = $linha[276];
$automovel = $linha[277];
$valor_automoveis = $linha[278];
$residencia = $linha[279];
$valor_residencia = $linha[280];
$outras_propriedades = $linha[281];
$valor_outras_propriedades = $linha[282];
$bem = $linha[283];
$chassi = $linha[284];
$veiculo = $linha[285];
$ano_modelo = $linha[286];
$modelo = $linha[287];
$renavam = $linha[288];
$num_portas = $linha[289];
$combustivel = $linha[290];
$placa = $linha[291];
$valor_venda = $linha[292];
$valor_entrada = $linha[293];
$tarifa_cadastro = $linha[294];
$valor_financiar = $linha[295];
$codigo_tabela = $linha[296];
$mista = $linha[297];
$coeficiente = $linha[298];
$r = $linha[299];
$num_parcelas = $linha[300];
$valor_parcelas = $linha[301];
$trinta = $linha[302];
$quarenta_cinco = $linha[303];
$pagto_serv_terc = $linha[304];
$cpt = $linha[305];
$serie = $linha[306];
$vencto_1_parcela = $linha[307];
$data_constituicao = $linha[308];
$inscr_est = $linha[309];

	
$html .= '<tr>';
$html .= '<td><div align="center">'."$num_proposta".'</div></td>';
$html .= '<td><div align="center">'."$nome".'</div></td>';
$html .= '<td><div align="center">'."$cpf".'</div></td>';
$html .= '<td><div align="center">'."$telefone".'</div></td>';
$html .= '<td><div align="center">'."$celular".'</div></td>';
$html .= '<td><div align="center">'."$email".'</div></td>';
$html .= '<td><div align="center">'."$endereco $numero, $complemento, $bairro, $cidade - $estado , $cep".'</div></td>';
$html .= '<td><div align="center">'."$tipo_proposta".'</div></td>';
$html .= '<td><div align="center">'."$bco_operacao".'</div></td>';
$html .= '<td><div align="center">'."$status".'</div></td>';
$html .= '<td><div align="center">'."$valor_credito".'</div></td>';
$html .= '<td><div align="center">'."$valor_liquido_cliente".'</div></td>';
$html .= '<td><div align="center">'."$valor_total".'</div></td>';
$html .= '<td><div align="center">'."$tabela".'</div></td>';
$html .= '<td><div align="center">'."$quant_parc".'</div></td>';
$html .= '<td><div align="center">'."$valor_parcelas".'</div></td>';
$html .= '<td><div align="center">'."$meta".'</div></td>';
$html .= '<td><div align="center">'."$comissao_op".'</div></td>';

$html .= '</tr>';

}

$html .= '<tr>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';
$html .= '<td><div align="center"><b></b></div></td>';


$sql = "select sum(comissao_op) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_liquido_cliente = bcadd($linha['total'],0);

$html .= '<td><div align="center">'."R$ $valor_liquido_cliente".'</div></td>';

$html .= '</tr>';

$html .= '</table>';


// Definimos o nome do arquivo que será exportado

$data = date('d-m-Y');
$hora_download = date('H:i:s');

$arquivo = "$nfantasia_empresa-$data-$hora_download.xls";

 
// Configurações header para forçar o download
header ("Expires: Mon, 16 Abril 2014 21:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );
 
// Envia o conteúdo do arquivo
echo $html;



exit;
 
?>
