<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");



?>



<html>

<head>

<title>TELA DE IMPRESS&Atilde;O DE PROPOSTAS</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
body,td,th {
	font-size: 10px;
}
.style2 {font-size: 10px}
</style>
</head>

<?



require '../../conect/conect.php';





$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg++;

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>

  

<? } ?>










<form name="form1" method="post" action="javascript:window.close()">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit3" value="Fechar">

</form>

<?

$num_proposta = $_POST['num_proposta'];

$num_propostaget = $_GET['num_proposta'];



if(empty($num_proposta)){

$num_proposta_retorno = $num_propostaget;

}

else{

$num_proposta_retorno = $num_proposta;

}




$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta_retorno'";
$res = mysql_query($sql);
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
		$valorrenda2 = $linha[315];
	$valorrenda3 = $linha[316];
	$valorrenda4 = $linha[317];
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

}

//Separação dos valores (dia, mês e ano)
$arr = explode("-", $prazo_final);
 
$dialimite = $arr[2];
$meslimite = $arr[1];
$anolimite = $arr[0];

$prazo_final_formatado = "$dialimite-$meslimite-$anolimite";
?>

<?

$sql = "SELECT * FROM clientes where cpf = '$cpf' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$matricula = $linha[0];
$naturalidade = $linha[115];


}





?>

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[1];

$cpf_op = $linha[4];

$cel_operador_alterou = $linha[19];

$email_operador_alterou = $linha[20];

$estabelecimento_alterou = $linha[24];

$cidade_estabelecimento_alterou = $linha[25];

$tel_estabelecimento_alterou = $linha[26];

$email_estabelecimento_alterou = $linha[27];



?>

<? } ?>

<form name="form1" method="post" action="">



<table width="100%" border="1" cellpadding="0" cellspacing="0">

    <tr>

      <td colspan="2"><div align="center"><strong><font color="#0000FF" size="2"> IMPRESS&Atilde;O DE PROPOSTA N&ordm; <? echo $num_proposta; ?></font></strong></div>        <div align="right"><strong></strong></div></td>

      <td colspan="2"><div align="center"><strong><font color="#0000FF" size="2"><? if(empty($num_bordero)){} else{ echo "Borderô Nº $num_bordero"; } ?></font></strong></div></td>
      <td colspan="2"><div align="center"><font size="5"><strong><font color="#0000FF" size="2">MATRICULA </font><font color="#0000FF"><? echo $matricula; ?></font></strong></font></div></td>
    </tr>

    <tr>
      <td>Status da proposta</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $status; ?></font></strong></td>
      <td>Status do fisico</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $status_fisico; ?></font></strong></td>
    </tr>
    <tr>

      <td>Tipo da proposta </td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $tipo_proposta; ?></font></strong></td>

      <td>Data Limite para entrega do f&iacute;sico</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $prazo_final_formatado; ?></font></strong></td>
    </tr>

    <tr>
      <td>Margem Cart&atilde;o</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $margemcartao; ?></font></strong></td>
      <td>Margem Empr&eacute;stimo</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $margememprestimo; ?></font></strong></td>
    </tr>
    <tr> 

      <td>Tabela</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $tabela; ?>

      </font></strong></td>

      <td>Data da Proposta </td>

      <td colspan="2">      <strong><font color="#0000FF"><? echo $dataproposta; ?></font></strong></td>
    </tr>

    <tr>

      <td>Operador</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $nome_operador; ?>

      </font></strong></td>

      <td> Hora proposta</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $horaproposta; ?></font></strong></td>
    </tr>

    <tr>

      <td>Estabelecimento</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $estabelecimento_proposta; ?> </font></strong> </td>

      <td>Perfil do cliente </td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $tipo; ?></font></strong></td>
    </tr>

    <tr>

      <td>Nome</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $nome; ?></font></strong></td>

      <td>CPF</td>

      <td colspan="2">      <strong><font color="#0000FF"><? echo $cpf; ?></font></strong></td>
    </tr>

    <tr>
      <td>Secretaria</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $secretaria; ?></font></strong></td>
      <td>Categoria</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $categoria; ?></font></strong></td>
    </tr>
    <tr> 

      <td>N&ordm; Benef&iacute;cio 1</td>

      <td>      <strong><? echo $num_beneficio; ?></strong></td>
      <td align="center"><strong>Valor Renda 1 <? echo $valorrenda; ?></strong></td>

      <td>N&ordm; Benef&iacute;cio 2 </td>

      <td width="15%"><strong><font color="#0000FF"><? echo $num_beneficio2; ?></font></strong></td>
      <td width="18%" align="center">Valor renda 2 <strong><? echo $valorrenda2; ?></strong></td>
    </tr>

    <tr>
      <td>N&ordm; Benef&iacute;cio 3 </td>
      <td><strong><? echo $num_beneficio3; ?></strong></td>
      <td align="center"><strong>Valor renda 3 <? echo $valorrenda3; ?></strong></td>
      <td>N&ordm; Benef&iacute;cio 4</td>
      <td><strong><font color="#0000FF"><? echo $num_beneficio4; ?></font></strong></td>
      <td align="center">Valor renda 4 <strong><font color="#0000FF"><? echo $valorrenda4; ?></font></strong></td>
    </tr>
    <tr>

      <td>Data Nasc</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo "$dia_niver/$mes_niver/$ano_niver"; ?></font></strong></td>

      <td>RG</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $rg; ?></font></strong></td>
    </tr>

    <tr> 

      <td width="14%">&Oacute;rg&atilde;o</td>

      <td colspan="2">      <strong><font color="#0000FF"><? echo $orgao; ?></font></strong></td>

      <td width="18%">Emiss&atilde;o</td>

      <td colspan="2">        </font><strong><font color="#0000FF"><? echo $emissao; ?></font></strong></td>
    </tr>

    <tr>

      <td>Pai</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $pai; ?></font></strong></td>

      <td>M&atilde;e</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $mae; ?></font></strong></td>
    </tr>

    <tr> 

      <td>Endere&ccedil;o</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $endereco; ?></font></strong></td>

      <td>N&uacute;mero</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $numero; ?></font></strong></td>
    </tr>

    <tr>

      <td>Bairro</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $bairro; ?></font></strong></td>

      <td>Complemento</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $complemento; ?></font></strong></td>
    </tr>

    <tr>

      <td>Cidade</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $cidade; ?></font></strong></td>

      <td>Estado</td>

      <td colspan="2">      <strong><font color="#0000FF"><? echo $estado; ?></font></strong></td>
    </tr>

    <tr>

      <td>Cep</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $cep; ?></font></strong></td>

      <td>Sexo</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $sexo; ?></font></strong></td>
    </tr>

    <tr>

      <td>Estado Civil </td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $estadocivil; ?></font></strong></td>

      <td>Telefone</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $telefone; ?></font></strong></td>
    </tr>

    <tr>
      <td>Como Conheceu a Empresa</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $resposta; ?></font></strong></td>
      <td>Naturalidade</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $naturalidade; ?></font></strong></td>
    </tr>
    <tr>

      <td>Celular</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $celular; ?></font></strong></td>

      <td>E-Mail</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $email; ?></font></strong></td>
    </tr>

    <tr>

      <td><strong>Valor bruto da opera&ccedil;&atilde;o </strong></td>

      <td colspan="2"><font color="#0000FF"><strong><font color="#0000FF"><? echo "R$ ".$valor_total; ?></font></strong></font></td>

      <td><strong>Valor Lid cliente </strong></td>

      <td colspan="2"><strong><font color="#0000FF"><? echo "R$ ". $valor_liquido_cliente; ?></font></strong></td>
    </tr>

    <tr>

      <td>Banco Opera&ccedil;&atilde;o </td>

      <td colspan="2"><strong><font color="#000000"><? echo $bco_operacao; ?></font></strong></td>

      <td>Banco a ser Portado</td>

      <td colspan="2"><strong><font color="#000000"><? echo $bco_quitacao; ?></font></strong></td>
    </tr>

    <tr>

      <td>Quant de parcelas </td>

      <td colspan="2"><strong><font color="#0000FF"><strong><font color="#0000FF"><? echo $quant_parc; ?></font></strong></font></strong></td>

      <td>Valor parcela </td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $parcela; ?></font></strong></td>
    </tr>

    <tr>

      <td>Banco Pgto </td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $banco_pagto; ?></font></strong></td>

      <td>N&ordm; Banco </td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $num_banco; ?></font></strong></td>
    </tr>

    <tr>

      <td>Ag&ecirc;ncia</td>

      <td width="16%"><strong><font color="#0000FF"><? echo $agencia; ?></font></strong></td>

      <td width="19%"><div align="left">N&ordm; Conta <strong><font color="#0000FF"><? echo $conta; ?></font></strong><strong><font color="#0000FF"><? echo " - $tipo_conta"; ?></font></strong></div></td>

      <td>Tipo de pagto do Benef&iacute;cio</td>

      <td colspan="2"><strong><font color="#0000FF"><? echo $pagto_beneficio; ?></font></strong></td>
    </tr>

    <tr>
      <td colspan="3"><strong>Refer&ecirc;ncias</strong></td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Nome</strong></td>
      <td colspan="5"><strong><font color="#000000"><? echo $nome_ref1; ?> Telefone <? echo $fone_ref1; ?> Grau de relacionamento <? echo $grau_relacionamento1; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Nome</strong></td>
      <td colspan="5"><strong><font color="#000000"><? echo $nome_ref2; ?> Telefone <? echo $fone_ref2; ?> Grau de relacionamento <? echo $grau_relacionamento2; ?></font></strong></td>
    </tr>
    <tr>
      <td colspan="6"><div align="center"><strong>Dados Profissionais</strong></div></td>
    </tr>
    <tr>
      <td colspan="6"><div align="center">
        <TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width="100%" 
x:str>
          <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            <TR height=17>
              <TD width=82 height=28 class=corpo><B><FONT 
            face=Verdana>Empresa:</FONT></B></TD>
              <TD width=154 class=corpo><strong><font color="#0000FF"><? echo $empresa; ?></font></strong></TD>
              <TD width=170 height=28><div align="left"><B><FONT 
            face=Verdana>Porte:</FONT></B></div></TD>
              <TD width=157><strong><font color="#0000FF"><? echo $porte_empresa; ?></font></strong></TD>
              <TD width=150 class=pocospazio><div align="left"><B><FONT 
            face=Verdana>Tempo de servi&ccedil;o:</FONT></B></div></TD>
              <TD width="309" height=28><DIV align=left class="style2"><b><font face="Verdana">anos</font></b><strong><font color="#0000FF"> <? echo $data_admissao; ?></font></strong><b><font face="Verdana">meses </font></b><strong><font color="#0000FF"><? echo $meses; ?></font></strong></DIV></TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo><B><FONT 
            face=Verdana>In&iacute;cio atividade:</FONT></B></TD>
              <TD class=corpo><strong><font color="#0000FF"><? echo $inicio_atividade; ?></font></strong></TD>
              <TD height=28><div align="left"><B><FONT 
            face=Verdana>Endere&ccedil;o:</FONT></B></div></TD>
              <TD height="28" colspan="3"><strong><font color="#0000FF"><? echo $end_empresa; ?></font></strong><span class="style2"><B><FONT 
            face=Verdana>N &ordm;:</FONT></B></span><strong><font color="#0000FF"><? echo $numero_empresa; ?></font></strong></TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo><B><FONT 
            face=Verdana>Complemento:</FONT></B></TD>
              <TD class=corpo><strong><font color="#0000FF"><? echo $complemento_empresa; ?></font></strong></TD>
              <TD height=28><B><FONT 
            face=Verdana>Bairro:</FONT></B></TD>
              <TD><strong><font color="#0000FF"><? echo $bairro_empresa; ?></font></strong></TD>
              <TD class=pocospazio><B><FONT face=Verdana>CEP: </FONT></B></TD>
              <TD height=28><strong><font color="#0000FF"><? echo $cep_empresa; ?></font></strong></TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo><B><FONT 
            face=Verdana>Cidade:</FONT></B></TD>
              <TD class=corpo><strong><font color="#0000FF"><? echo $cidade_empresa; ?></font></strong></TD>
              <TD height=28><B><FONT face=Verdana>UF: </FONT></B></TD>
              <TD><strong><font color="#0000FF"><? echo $estado_empresa; ?></font></strong></TD>
              <TD class=pocospazio><B><FONT face=Verdana>Telefone: </FONT></B></TD>
              <TD height=28>
                <strong><font color="#0000FF"><? echo $ddd_tel_empresa; ?></font></strong>
                -
                <strong><font color="#0000FF"><? echo $telefone_empresa; ?></font></strong> </TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo style2 style3>CPT:</TD>
              <TD class=corpo><strong><font color="#0000FF"><? echo $cpt; ?></font></strong></TD>
              <TD height=28 class="corpo"><strong>Serie:</strong></TD>
              <TD><strong><font color="#0000FF"><? echo $serie; ?></font></strong></TD>
              <TD><b><font face=Verdana>Natureza opera&ccedil;&atilde;o:</font></b></TD>
              <TD height=28><strong><font color="#0000FF"><? echo $natureza_operacao; ?></font></strong></TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo><b><font 
            face=Verdana>Cargo:</font></b></TD>
              <TD class=corpo><strong><font color="#0000FF"><? echo $cargo; ?></font></strong></TD>
              <TD height=28><b><font 
            face=Verdana>Sal&aacute;rio:</font></b></TD>
              <TD><strong><font color="#0000FF"><? echo $salario; ?></font></strong></TD>
              <TD class=pocospazio><b><font face=Verdana>Atividade principal: </font></b></TD>
              <TD height=28><strong><font color="#0000FF"><? echo $atividade_principal; ?></font></strong></TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo><B><FONT 
            face=Verdana>CNPJ:</FONT></B></TD>
              <TD class=corpo><strong><font color="#0000FF"><? echo $cnpj; ?></font></strong></TD>
              <TD height=28><B><FONT face=Verdana>Telefone contador: </FONT></B></TD>
              <TD colspan="2">
                <strong><font color="#0000FF"><? echo $ddd_tel_contador; ?></font></strong>
                -
                <strong><font color="#0000FF"><? echo $tel_contador; ?></font></strong> </TD>
              <TD height=28>&nbsp;</TD>
            </TR>
          </TBODY>
        </TABLE>
      </div></td>
    </tr>
    <tr>
      <td colspan="6"><div align="center"><STRONG><FONT 
      face="Verdana, Arial, Helvetica, sans-serif">Dados da opera&ccedil;&atilde;o (Ve&iacute;culo)</FONT></STRONG></div></td>
    </tr>
    <tr>
      <td colspan="6"><div align="center">
        <TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width=100% x:str>
          <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            <TR height=17>
              <TD width=132 height=19 class=corpo><B><FONT 
            face=Verdana>Tipo de  Ve&iacute;culo:</FONT></B></TD>
              <TD width=132 height=19><B><FONT 
            face=Verdana>Chassi:</FONT></B></TD>
              <TD width=145><B><FONT 
            face=Verdana>Marca e ve&iacute;culo:</FONT></B></TD>
              <TD width=145><B><FONT 
            face=Verdana>Ano/modelo:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD width=132 height=26 class=corpo><strong><? echo $bem; ?><strong>
                <input name="bem" type="hidden" id="bem" value="<? echo $bem; ?>">
              </strong></strong></TD>
              <TD width=132 height=26>                <input class="class02" name="chassi" type="text" id="chassi">              </TD>
              <TD width=145>                <input class="class02" name="veiculo" type="text" id="veiculo" value="Digitar igual no CRV">              </TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><P>
                  <input class="class02" name="ano_modelo" type="text" id="ano_modelo" size="6" maxlength="4">
                -
                <input class="class02" name="modelo" type="text" id="modelo" size="6" maxlength="4">
              </P></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><B><FONT 
            face=Verdana>Renavam:</FONT></B></TD>
              <TD height=26><B><FONT 
            face=Verdana>N&ordm; de portas:</FONT></B></TD>
              <TD><B><FONT 
            face=Verdana>Combust&iacute;vel:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><B><FONT 
            face=Verdana>Placas:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo>                <input class="class02" name="renavam" type="text" id="renavam">              </TD>
              <TD height=26>
                <select class="class02" name="num_portas" id="num_portas">
                  <option>2</option>
                  <option>4</option>
                </select>              </TD>
              <TD>
                <select class="class02" name="combustivel" id="combustivel">
                  <option>Alcool</option>
                  <option>Bi-Combustivel</option>
                  <option>Biodiesel</option>
                  <option>Diesel</option>
                  <option>Flex</option>
                  <option>G&aacute;s Natural</option>
                  <option>Gasolina</option>
                  <option>Querosene</option>
                </select>              </TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff>                <input class="class02" name="placa" type="text" id="placa">              </TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><B><FONT 
            face=Verdana>Valor venda:</FONT></B></TD>
              <TD height=26><B><FONT 
            face=Verdana>Valor de entrada:</FONT></B></TD>
              <TD><B><FONT 
            face=Verdana>Tarifa de cadastro:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><B><FONT 
            face=Verdana>Valor a financiar:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><strong><strong><? echo $valor_venda; ?></strong>
                  <input name="valor_venda" type="hidden" id="valor_venda" value="<? echo $valor_venda; ?>">
              </strong></TD>
              <TD height=26><strong><? echo $valor_entrada; ?>
                  <input name="valor_entrada" type="hidden" id="valor_entrada" value="<? echo $valor_entrada; ?>">
              </strong></TD>
              <TD><strong><? echo $tac; ?></strong>                  <input name="tarifa_cadastro" type="hidden" id="tarifa_cadastro2" value="<? echo $tac; ?>">              </TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><strong>
                  <? $financiar = bcadd($diferenca,$tac,2);

	  echo $financiar;

	   ?>
                
                  <input name="valor_financiar" type="hidden" id="valor_financiar2" value="<? $financiar = bcadd($diferenca,$tac,2);

	  echo $financiar;

	   ?>">
              </strong></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><B><FONT 
            face=Verdana>Codigo da tabela:</FONT></B></TD>
              <TD height=26><B><FONT 
            face=Verdana>Coeficiente:</FONT></B></TD>
              <TD><B><FONT 
            face=Verdana>Servi&ccedil;os de terceiros:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><B><FONT 
            face=Verdana>Valor liberado:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><strong><? echo $codigo_tabela; ?></strong>
                  <input name="codigo_tabela" type="hidden" id="codigo_tabela2" value="<? echo $codigo_tabela; ?>">
                  <b><font face="Verdana">Mista</font></b> <strong><? echo $mista; ?></strong>                  <input name="mista" type="hidden" id="codigo_tabela6" value="<? echo $mista; ?>">              </TD>
              <TD height=26><strong><? echo $coeficiente; ?>
                  <input name="coeficiente" type="hidden" id="coeficiente" value="<? echo $coeficiente; ?>">
              </strong></TD>
              <TD><strong><? echo $r_2; ?> </strong>                  <input name="r" type="hidden" id="r" value="<? echo $r_2; ?>">              </TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><strong>
                <input name="valor_liberado" type="text" id="valor_liberado" value="<? echo "0.00"; ?>">
              </strong></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><B><FONT 
            face=Verdana>N&ordm; de parcelas:</FONT></B></TD>
              <TD height=26><B><FONT 
            face=Verdana>Valor das parcelas:</FONT></B></TD>
              <TD><B><FONT 
            face=Verdana>Car&ecirc;ncia:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><B><FONT 
            face=Verdana>Pagto de servi&ccedil;os de terceiros:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><strong><? echo $num_parcelas; ?></strong>                  <input name="num_parcelas" type="hidden" id="num_parcelas" value="<? echo $num_parcelas; ?>">              </TD>
              <TD height=26><strong>
                <? $prestacao = bcmul($financiar,$coeficiente,2);

	  echo $prestacao;

	   ?>
                </strong>                <input name="valor_parcelas" type="hidden" id="valor_parcelas" value="<? $prestacao = bcmul($financiar,$coeficiente,2);

	   echo $prestacao; ?>">                </TD>
              <TD><b><font color=#008000 
            face=Verdana><strong><font color="#0000FF"><? echo $trinta; ?><? echo $quarenta_cinco; ?></font></strong></font></b></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><strong>
                <? $serv_terceiros = bcmul($diferenca,$r,2);  echo $serv_terceiros; ?>
                <input name="pagto_serv_terc" type="hidden" id="pagto_serv_terc" value="<? echo $serv_terceiros; ?>">
              </strong></TD>
            </TR>
          </TBODY>
        </TABLE>
      </div></td>
    </tr>

    <tr>

      <td>Obs</td>

      <td colspan="3"><strong><font color="#0000FF"><? echo $obs; ?></font></strong></td>

      <td colspan="2">&nbsp;</td>
    </tr>

    <tr>

      <td>Parecer de Cr&eacute;dito</td>

      <td colspan="3"><strong><font color="#0000FF">
        <?
	  
$sql = "SELECT * FROM observacoes_parecer_credito where num_proposta = '$num_proposta' order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$data_parecer = $linha[3];

$hora_parecer = $linha[4];

$parecer_de_credito = $linha[5];


}
	  
	  
	  
	  
	  
	  
	  
	  
	   echo "$data_parecer - $hora_parecer $parecer_de_credito "; ?>
      </font></strong></td>

      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Parecer Fisico</td>
      <td colspan="5"><?  
$sql = "SELECT * FROM historico_fisico where num_proposta = '$num_proposta' order by codigo desc limit 1";
$res = mysql_query($sql);
$reg = 0;
//echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$num_proposta = $linha[1];
$obs_fisico = $linha[2];
$data = $linha[3];
$hora = $linha[7];
$operador_informante = $linha[8];
$estabelecimento = $linha[9];


echo "$data - "." $hora - "." $obs_fisico ";


if($reg==1){
//echo "</tr>";
$reg=0;
}


}
	  
?></td>
    </tr>
  </table>

</form>

</body>

</html>

