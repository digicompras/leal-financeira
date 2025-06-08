<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");

ini_set('default_charset','UTF8_general_mysql500_ci');

?>



<html>

<head>

<title>TELA DE EDI&Ccedil;&Atilde;O DE PROPOSTAS</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
<!--
.style2 {font-size: 10px}
.style3 {	color: #008000;
	font-weight: bold;
}
-->
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



<?
$sql = "SELECT * FROM hora_certa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$acao = $linha[5];
$hora_ajuste = $linha[2];

}

$horacerta = date('H')+$hora_ajuste;
if($horacerta<=9){
$hora_atual = "0".$horacerta.date(':i:s');
}
else{
$hora_atual = $horacerta.date(':i:s');
}
?>






<?

$num_proposta = $_POST['num_proposta'];



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";
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
 ?>

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[1];

$cel_operador_alterou = $linha[19];

$email_operador_alterou = $linha[20];

$estabelecimento_alterou = $linha[24];

$cidade_estabelecimento_alterou = $linha[25];

$tel_estabelecimento_alterou = $linha[26];

$email_estabelecimento_alterou = $linha[27];

}
?>

<?

$diferenca = bcsub($valor_venda,$valor_entrada,2);

?>

<p>&nbsp;</p>

<table width="100%"  border="0">

  <tr>

    <td width="24%"><form name="form1" method="post" action="lista_de_propostas.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>">

        <input type="submit" name="Submit3" value="Voltar">

    </form></td>

    <td width="48%"><form name="form1" method="post" action="../principal.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit22" value="Voltar ao menu principal">

    </form></td>

    <td width="28%">&nbsp;</td>

  </tr>

</table>

<form name="form1" method="post" action="grava_editar_proposta.php">
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><strong><font color="#0000FF" size="4">EDI&Ccedil;&Atilde;O DA PROPOSTA N&ordm; </font></strong><strong><font color="#0000FF"><? echo $num_proposta; ?></font></strong><strong><font color="#0000FF">
        <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">
      </font></strong></div></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Perfil do cliente</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Tipo da proposta </strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Tabela</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Data da Proposta </strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $tipo; ?>
              <input name="tipo" type="hidden" id="tipo" value="<? echo $tipo; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $tipo_proposta; ?>
              <input name="tipo_proposta" type="hidden" id="tipo_proposta" value="<? echo $tipo_proposta; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $tabela; ?>
              <input name="tabela" type="hidden" id="tabela" value="<? echo $tabela; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo date('d-m-Y'); ?></font></strong>
          <input name="dataproposta" type="hidden" id="dataproposta3" value="<? echo date('d-m-Y'); ?>">
          <input name="data_proposta" type="hidden" id="dataproposta4" value="<? echo $date; ?>">
          <input name="horaproposta" type="hidden" id="horaproposta3" value="<? echo $hora_atual; ?>">
          <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo date('m-Y'); ?>">
          <input name="dia" type="hidden" id="dataproposta" value="<? echo date('d'); ?>">
          <input name="mes" type="hidden" id="dataproposta2" value="<? echo date('m'); ?>">
          <input name="ano" type="hidden" id="ano" value="<? echo date('Y'); ?>">
          <strong><font color="#0000FF"></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Operador</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Agencia</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Status</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Tipo de Contrato</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $nome_op; ?>
              <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_op; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $estabelecimento_proposta; ?>
              <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta" value="<? echo $estabelecimento_proposta; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $status; ?>
              <input name="status" type="hidden" id="status4" value="<? echo $status; ?>">
              <input name="status_pagto_cliente" type="hidden" id="status_pagto_cliente" value="<?  echo "Aguardando_Pagto"; ?>">
              <input name="status_fisico" type="hidden" id="status_fisico" value="<? echo "PENDENTE DE ENVIO"; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $tipo_contrato; ?>
              <input name="tipo_contrato" type="hidden" id="tipo_contrato" value="<? echo $tipo_contrato; ?>">
      </font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Cliente</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>CPF</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>RG/&Oacute;rg&atilde;o</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Emiss&atilde;o</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="nome" type="hidden" id="nome" value="<? echo $nome_cli; ?>">
          <strong><font color="#0000FF"><? echo $nome_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="cpf2" type="hidden" id="cpf2" value="<? echo $cpf; ?>">
          <strong><font color="#0000FF"><? echo $cpf; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="rg" type="hidden" id="rg" value="<? echo $rg_cli; ?>">
          <strong><font color="#0000FF"><? echo $rg_cli; ?> </font>/
            <input name="orgao" type="hidden" id="orgao" value="<? echo $orgao_cli; ?>">
          <strong><? echo $orgao_cli; ?></strong></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="emissao" type="hidden" id="emissao" value="<? echo $emissao_cli; ?>">
          <strong><font color="#0000FF"><? echo $emissao_cli; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Secretaria</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Categoria</strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="secretaria" type="hidden" id="secretaria" value="<? echo $secretaria; ?>">
          <strong><font color="#0000FF"><? echo $secretaria; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="categoria" type="hidden" id="categoria" value="<? echo $categoria; ?>">
          <strong><font color="#0000FF"><? echo $categoria; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Orienta&ccedil;&atilde;o Sexual</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Data Nasc</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Pai</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>M&atilde;e</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="sexo" type="hidden" id="sexo" value="<? echo $sexo_cli; ?>">
          <strong><font color="#0000FF"><? echo $sexo_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="dia_niver" type="hidden" id="dia_niver" value="<? echo $dia_niver; ?>">
          <input name="mes_niver" type="hidden" id="mes_niver" value="<? echo $mes_niver; ?>">
          <input name="ano_niver" type="hidden" id="ano_niver" value="<? echo $ano_niver; ?>">
          <strong><font color="#0000FF"><? echo "$dia_niver/$mes_niver/$ano_niver"; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="pai" type="hidden" id="pai2" value="<? echo $pai_cli; ?>">
          <strong><font color="#0000FF"><? echo $pai_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="mae" type="hidden" id="mae" value="<? echo $mae_cli; ?>">
          <strong><font color="#0000FF"><? echo $mae_cli; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Estado Civil</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Como Conheceu a Empresa</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Valor Renda</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>E-Mail</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="estadocivil" type="hidden" id="estadocivil" value="<? echo $estadocivil_cli; ?>">
          <strong><font color="#0000FF"><? echo $estadocivil_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="resposta" type="hidden" id="resposta" value="<? echo $resposta; ?>">
          <strong><font color="#0000FF"><? echo $resposta; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="valorrenda" type="hidden" id="email3" value="<? echo $valorrenda; ?>">
          <strong><font color="#0000FF"><? echo $valorrenda; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="email" type="hidden" id="email2" value="<? echo $email_cli; ?>">
          <strong><font color="#0000FF"><? echo $email_cli; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>N&ordm; Benef&iacute;cio 1</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>N&ordm; Benef&iacute;cio2</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>N&ordm; Benef&iacute;cio 3 </strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="num_beneficio" type="hidden" id="num_beneficio" value="<? echo $num_beneficio; ?>">
          <strong><font color="#0000FF"><? echo $num_beneficio; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="num_beneficio2" type="hidden" id="num_beneficio22" value="<? echo $num_beneficio2; ?>">
          <strong><font color="#0000FF"><? echo $num_beneficio2; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="num_beneficio3" type="hidden" id="num_beneficio32" value="<? echo $num_beneficio3; ?>">
          <strong><font color="#0000FF"><? echo $num_beneficio3; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="num_beneficio4" type="hidden" id="num_beneficio42" value="<? echo $num_beneficio4; ?>">
          <strong><font color="#0000FF"><? //echo $num_beneficio4; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Endere&ccedil;o</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>N&uacute;mero</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Complemento</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Bairro</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="endereco" type="hidden" id="endereco2" value="<? echo $endereco_cli; ?>">
          <strong><font color="#0000FF"><? echo $endereco_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="numero" type="hidden" id="numero" value="<? echo $numero_cli; ?>">
          <strong><font color="#0000FF"><? echo $numero_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="complemento" type="hidden" id="complemento" value="<? echo $complemento_cli; ?>">
          <strong><font color="#0000FF"><? echo $complemento_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="bairro" type="hidden" id="bairro2" value="<? echo $bairro_cli; ?>">
          <strong><font color="#0000FF"><? echo $bairro_cli; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Cep</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Cidade</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Estado</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Tipo de pagto do Benef&iacute;cio</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="cep" type="hidden" id="cep2" value="<? echo $cep_cli; ?>">
          <strong><font color="#0000FF"><? echo $cep_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="cidade" type="hidden" id="cidade2" value="<? echo $cidade_cli; ?>">
          <strong><font color="#0000FF"><? echo $cidade_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF">
        <input name="estado" type="hidden" id="estado" value="<? echo $estado_cli; ?>">
        <? echo $estado_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="pagto_beneficio" type="hidden" id="email" value="<? echo $pagto_beneficio; ?>">
          <strong><font color="#0000FF"><? echo $pagto_beneficio; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><strong>Telefone</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Celular</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Valor bruto de opera&ccedil;&atilde;o R$</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Valor liq cliente R$ </strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="telefone" type="text" id="telefone3" value="<? echo $telefone; ?>" size="15" maxlength="14"></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="celular" type="text" id="celular" value="<? echo $celular; ?>" size="15" maxlength="14"></td>
      <td background="../../imagens/fundocelulas2.png"><font color="#0000FF">
        <input name="valor_total" type="text" class='class02' id="valor_total" value="<? echo $valor_total; ?>" size="15">
      </font></td>
      <td background="../../imagens/fundocelulas2.png"><input name="valor_liquido_cliente" type="text" class='class02' id="valor_liquido_cliente" value="<? echo $valor_liquido_cliente; ?>" size="15">
          <font color="#0000FF">
          <input name="valor_credito" type="hidden" id="valor_credito" value="">
          <? //echo $valor_liberado; ?>
        </font></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><strong>Quant de parcelas </strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Valor parcela</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Banco de Opera&ccedil;&atilde;o </strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Banco do cliente</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><font color="#0000FF">
        <input name="quant_parc" type="text" class='class02' id="quant_parc" value="<? echo $quant_parc; ?>" size="15">
      </font></td>
      <td background="../../imagens/fundocelulas2.png"><input name="parcela" type="text" class='class02' id="parcela2" value="<? echo $parcela; ?>" size="15"></td>
      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <select class='class02' name="bco_operacao" id="select3">
          <option selected><? echo $bco_operacao; ?></option>
          <?


    $sql = "select * from bco_operacao order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <select class='class02' name="banco_pagto" id="banco_pagto">
          <option selected><? echo $banco_pagto; ?></option>
          <?


    $sql = "select * from bancos order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><strong>Ag&ecirc;ncia</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>N&ordm; Conta</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Tipo Conta</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Banco a ser Portado</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <input class='class02' name="agencia" type="text" id="agencia" value="<? echo $agencia; ?>" size="15">
      </font></strong></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="conta" type="text" id="conta2" value="<? echo $conta; ?>" size="15"></td>
      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <select class='class02' name="tipo_conta" id="bco_operacao">
        <option selected><? echo $tipo_conta; ?><option>
          <?


    $sql = "select * from tipos_contas order by tipo_conta asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo_conta']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <select class='class02' name="bco_quitacao" id="bco_quitacao">
          <option selected><? echo $bco_quitacao; ?></option>
          <?


    $sql = "select * from bancos order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </font></strong></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Refer&ecirc;ncias</strong></div></td>
    </tr>
    <tr>
      <td width="17%" background="../../imagens/fundocelulas1.png"><strong>Nome</strong></td>
      <td width="34%" background="../../imagens/fundocelulas1.png"><strong>Telefone</strong></td>
      <td width="15%" background="../../imagens/fundocelulas1.png"><strong>Grau de relacionamento</strong></td>
      <td width="34%" background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="nome_ref1" type="text" class='class02' id="nome_ref1" value="<? echo $nome_ref1; ?>" size="50"></td>
      <td background="../../imagens/fundocelulas1.png"><input name="fone_ref1" type="text" class='class02' id="fone_ref1" value="<? echo $fone_ref1; ?>"></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF">
        <select class='class02' name="grau_relacionamento1" id="grau_relacionamento1">
          <option selected><? echo $grau_relacionamento1; ?></option>
          <?


    $sql = "select * from grau_relacionamento order by relacionamento asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['relacionamento']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Nome</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Telefone</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Grau de relacionamento</strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="nome_ref2" type="text" class='class02' id="nome_ref2" value="<? echo $nome_ref2; ?>" size="50"></td>
      <td background="../../imagens/fundocelulas1.png"><input name="fone_ref2" type="text" class='class02' id="fone_ref2" value="<? echo $fone_ref2; ?>"></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF">
        <select class='class02' name="grau_relacionamento2" id="grau_relacionamento2">
          <option selected><? echo $grau_relacionamento2; ?></option>
          <?


    $sql = "select * from grau_relacionamento order by relacionamento asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['relacionamento']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><strong>Dados profissionais</strong></div></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center">
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
                <TD width=82 height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Empresa:</FONT></B></TD>
                <TD width=154 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                  <input name="empresa" type="text" class="class02" id="empresa" value="<? echo $empresa; ?>">
                </font></TD>
                <TD width=170 height=28 background="../../imagens/fundocelulas1.png"><div align="left"><B><FONT color=#008000 size=1 
            face=Verdana>Porte:</FONT></B></div></TD>
                <TD width=157 background="../../imagens/fundocelulas1.png"><font size="2">
                  <select class="class02" name="porte_empresa" id="porte_empresa">
                    <option selected><? echo $porte_empresa; ?></option>
                    <?





    $sql = "select * from porte_empresas order by porte_empresa asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['porte_empresa']. ">".$x['porte_empresa']."</option>";

    }

?>
                  </select>
                </font></TD>
                <TD width=150 background="../../imagens/fundocelulas1.png" class=pocospazio><div align="left"><B><FONT color=#008000 size=1 
            face=Verdana>Tempo de servi&ccedil;o:</FONT></B></div></TD>
                <TD width="309" height=28 background="../../imagens/fundocelulas1.png"><DIV align=left class="style2"><b><font color="#008000" face="Verdana">anos</font></b>
                        <input name="data_admissao" type="text" class="class02" id="data_admissao" value="<? echo $data_admissao; ?>" size="10" maxlength="10">
                        <b><font color="#008000" face="Verdana">meses</font></b>
                        <input name="meses" type="text" class="class02" id="meses" value="<? echo $meses; ?>" size="10" maxlength="10">
                </DIV></TD>
              </TR>
              <TR height=17>
                <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>In&iacute;cio atividade:</FONT></B></TD>
                <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                  <input name="inicio_atividade" type="text" class="class02" id="inicio_atividade" value="<? echo $inicio_atividade; ?>">
                </font></TD>
                <TD height=28 background="../../imagens/fundocelulas1.png"><div align="left"><B><FONT color=#008000 size=1 
            face=Verdana>Endere&ccedil;o:</FONT></B></div></TD>
                <TD height="28" colspan="3" background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="end_empresa" type="text" class="class02" id="end_empresa" value="<? echo $end_empresa; ?>" size="50" maxlength="50">
                  </font><span class="style2"><B><FONT color=#008000 
            face=Verdana>N &ordm;:</FONT></B></span> <font size="2">
                  <input name="numero_empresa" type="text" class="class02" id="numero_empresa" value="<? echo $numero_empresa; ?>" size="10" maxlength="10">
                </font></TD>
              </TR>
              <TR height=17>
                <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Complemento:</FONT></B></TD>
                <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                  <input name="complemento_empresa" type="text" class="class02" id="complemento_empresa" value="<? echo $complemento_empresa; ?>">
                </font></TD>
                <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Bairro:</FONT></B></TD>
                <TD background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="bairro_empresa" type="text" class="class02" id="bairro_empresa" value="<? echo $bairro_empresa; ?>">
                </font></TD>
                <TD background="../../imagens/fundocelulas1.png" class=pocospazio><B><FONT color=#008000 size=1 face=Verdana>CEP: </FONT></B></TD>
                <TD height=28 background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="cep_empresa" type="text" class="class02" id="cep_empresa" value="<? echo $cep_empresa; ?>">
                </font></TD>
              </TR>
              <TR height=17>
                <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Cidade:</FONT></B></TD>
                <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                  <input name="cidade_empresa" type="text" class="class02" id="cidade_empresa" value="<? echo $cidade_empresa; ?>">
                </font></TD>
                <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>UF: </FONT></B></TD>
                <TD background="../../imagens/fundocelulas1.png"><font size="2">
                  <select class="class02" name="estado_empresa" id="estado_empresa">
                    <option selected><? echo $estado_empresa; ?></option>
                    <?
    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>
                  </select>
                </font></TD>
                <TD background="../../imagens/fundocelulas1.png" class=pocospazio><B><FONT color=#008000 size=1 face=Verdana>Telefone: </FONT></B></TD>
                <TD height=28 background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="ddd_tel_empresa" type="text" class="class02" id="ddd_tel_empresa" value="<? echo $ddd_tel_empresa; ?>" size="4" maxlength="2">
                  -
                  <input name="telefone_empresa" type="text" class="class02" id="telefone_empresa" value="<? echo $telefone_empresa; ?>" size="10" maxlength="9">
                </font></TD>
              </TR>
              <TR height=17>
                <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 face=Verdana>CPT:</FONT></B></TD>
                <TD background="../../imagens/fundocelulas1.png" class=corpo><input name="cpt" type="text" id="cpt" value="<? echo $cpt; ?>"></TD>
                <TD height=28 background="../../imagens/fundocelulas1.png"><span class="corpo style2 style3">Serie:</span></TD>
                <TD background="../../imagens/fundocelulas1.png"><input name="serie" type="text" id="serie" value="<? echo $serie; ?>"></TD>
                <TD background="../../imagens/fundocelulas1.png"><b><font color=#008000 size=1 face=Verdana>Natureza opera&ccedil;&atilde;o:</font></b></TD>
                <TD height=28 background="../../imagens/fundocelulas1.png"><font size="2">
                  <select class="class02" name="natureza_operacao" id="natureza_operacao">
                    <option selected><? echo $natureza_operacao; ?><option>
                    <option>Funcion&aacute;rio P&uacute;blico</option>
                    <option>Aut&ocirc;nomo</option>
                    <option>Profissional Liberal</option>
                    <option>Empresa Privada - CLT</option>
                    <option>Empresa P&uacute;blica</option>
                    <option>Propriet&aacute;rio-S&oacute;cio-Rendas</option>
                    <option>Aposentado-Pensionista</option>
                    <option>Do lar-Estudante</option>
                  </select>
                </font></TD>
              </TR>
              <TR height=17>
                <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><b><font color=#008000 size=1 
            face=Verdana>Cargo:</font></b></TD>
                <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                  <input name="cargo" type="text" class="class02" id="cargo" value="<? echo $cargo; ?>">
                </font></TD>
                <TD height=28 background="../../imagens/fundocelulas1.png"><b><font color=#008000 size=1 
            face=Verdana>Sal&aacute;rio:</font></b></TD>
                <TD background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="salario" type="text" class="class02" id="salario" value="<? echo $salario; ?>">
                </font></TD>
                <TD background="../../imagens/fundocelulas1.png" class=pocospazio><b><font color=#008000 size=1 face=Verdana>Atividade principal: </font></b></TD>
                <TD height=28 background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="atividade_principal" type="text" class="class02" id="atividade_principal" value="<? echo $atividade_principal; ?>">
                </font></TD>
              </TR>
              <TR height=17>
                <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>CNPJ:</FONT></B></TD>
                <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                  <input name="cnpj" type="text" class="class02" id="cnpj" value="<? echo $cnpj; ?>">
                </font></TD>
                <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>Telefone contador: </FONT></B></TD>
                <TD colspan="2" background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="ddd_tel_contador" type="text" class="class02" id="ddd_tel_contador" value="<? echo $ddd_tel_contador; ?>" size="4" maxlength="2">
                  -
                  <input name="tel_contador" type="text" class="class02" id="tel_contador" value="<? echo $tel_contador; ?>" size="10" maxlength="9">
                </font></TD>
                <TD height=28 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              </TR>
            </TBODY>
          </TABLE>
      </div></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><STRONG><FONT 
      face="Verdana, Arial, Helvetica, sans-serif">Dados da opera&ccedil;&atilde;o (Ve&iacute;culo)</FONT></STRONG></div></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center">
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
                <TD width=132 height=19 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Tipo de </FONT><FONT color=#008000 size=1 
            face=Verdana> Ve&iacute;culo:</FONT></B></TD>
                <TD width=132 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Chassi:</FONT></B></TD>
                <TD width=145 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Marca e ve&iacute;culo:</FONT></B></TD>
                <TD width=145 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Ano/modelo:</FONT></B></TD>
              </TR>
              <TR height=17>
                <TD width=132 height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2"><strong><font color="#0000FF">
                  <select class="class02" name="bem" id="select11">
                    <option selected><? echo $bem; ?></option>
                    <?
    $sql = "select * from tipos_bens order by bem desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['bem']."</option>";

    }

?>
                  </select>
                </font></strong></font></TD>
                <TD width=132 height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="chassi" type="text" class="class02" id="chassi" value="<? echo $chassi; ?>">
                </font></TD>
                <TD width=145 background="../../imagens/fundocelulas1.png"><font size="2">
                  <input class="class02" name="veiculo" type="text" id="veiculo" value="<? echo $veiculo; ?>">
                </font></TD>
                <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><P><font size="2">
                    <input name="ano_modelo" type="text" class="class02" id="ano_modelo" value="<? echo $ano_modelo; ?>" size="6" maxlength="4">
                  -
                  <input name="modelo" type="text" class="class02" id="modelo" value="<? echo $modelo; ?>" size="6" maxlength="4">
                </font></P></TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Renavam:</FONT></B></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>N&ordm; de portas:</FONT></B></TD>
                <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Combust&iacute;vel:</FONT></B></TD>
                <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Placas:</FONT></B></TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                  <input name="renavam" type="text" class="class02" id="renavam" value="<? echo $renavam; ?>">
                </font></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                  <select class="class02" name="num_portas" id="num_portas">
                    <option selected><? echo $num_portas; ?><option>
                    <option>2</option>
                    <option>4</option>
                  </select>
                </font></TD>
                <TD background="../../imagens/fundocelulas1.png"><font size="2">
                  <select class="class02" name="combustivel" id="combustivel">
                    <option selected><? echo $combustivel; ?><option>
                    <option>Alcool</option>
                    <option>Bi-Combustivel</option>
                    <option>Biodiesel</option>
                    <option>Diesel</option>
                    <option>Flex</option>
                    <option>G&aacute;s Natural</option>
                    <option>Gasolina</option>
                    <option>Querosene</option>
                  </select>
                </font></TD>
                <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="placa" type="text" class="class02" id="placa" value="<? echo $placa; ?>">
                </font></TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Valor venda:</FONT></B></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor de entrada:</FONT></B></TD>
                <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Tarifa de cadastro:</FONT></B></TD>
                <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor a financiar:</FONT></B></TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2"><strong><font color="#0000FF">
                  <input name="valor_venda" type="text" id="valor_venda" value="<? echo $valor_venda; ?>">
                </font></strong></font></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong>
                  <input name="valor_entrada" type="text" id="valor_entrada" value="<? echo $valor_entrada; ?>">
                </strong></font></font></TD>
                <TD background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="tarifa_cadastro" type="text" id="tarifa_cadastro" value="<? echo $tarifa_cadastro; ?>">
                </font></TD>
                <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong>
                  <input name="valor_financiar" type="text" id="valor_financiar" value="<? $financiar = bcadd($diferenca,$tarifa_cadastro,2);

	  echo $financiar;

	   ?>">
                </strong></font></font></TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Codigo da tabela:</FONT></B></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Coeficiente:</FONT></B></TD>
                <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Servi&ccedil;os de terceiros:</FONT></B></TD>
                <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor liberado:</FONT></B></TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                  <input name="codigo_tabela" type="text" id="codigo_tabela2" value="<? echo $codigo_tabela; ?>" size="10" maxlength="10">
                      <b><font color="#008000" size="1" face="Verdana">Mista</font></b>
                  <input name="mista" type="text" id="codigo_tabela6" value="<? echo $mista; ?>" size="10" maxlength="10">
                </font></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong>
                  <input name="coeficiente" type="text" id="coeficiente" value="<? echo $coeficiente; ?>">
                </strong></font></font></TD>
                <TD background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="r" type="text" id="r" value="<? echo $r; ?>">
                </font></TD>
                <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong>
                  <input name="valor_liberado" type="text" id="valor_liberado" value="<? echo $valor_liberado; ?>">
                </strong></font></font></TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>N&ordm; de parcelas:</FONT></B></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor das parcelas:</FONT></B></TD>
                <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Car&ecirc;ncia:</FONT></B></TD>
                <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Pagto de servi&ccedil;os de terceiros:</FONT></B></TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                  <input name="num_parcelas" type="text" id="num_parcelas" value="<? echo $num_parcelas; ?>">
                </font></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                  <input name="valor_parcelas" type="text" id="valor_parcelas" value="<? $prestacao = bcmul($financiar,$coeficiente,2);

	   echo $prestacao; ?>">
                </font></TD>
                <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <? if(empty($trinta)) {
                  echo "<input class='class02' name='trinta' type='checkbox' id='trinta' value='30 DD'>";
                  }
				  else{ 
				  echo "<input class='class02' name='trinta' type='checkbox' id='trinta' value='30 DD' checked>";
				   } ?>
                  <B><FONT color=#008000 size=1 
            face=Verdana>30 DD</FONT></B>
            <? if(empty($quarenta_cinco)) { 
			echo "<input class='class02' name='quarenta_cinco' type='checkbox' id='quarenta_cinco' value='45 DD'>";
                  }
				  else{ 
				  echo "<input class='class02' name='quarenta_cinco' type='checkbox' id='quarenta_cinco' value='45 DD' checked>";
				   } ?>
                  <B><FONT color=#008000 size=1 
            face=Verdana>45 DD</FONT></B></font></TD>
                <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2"><strong><font color="#0000FF">
                  <input name="pagto_serv_terc" type="text" id="pagto_serv_terc" value="<? echo $pagto_serv_terc; ?>">
                </font></strong></font></TD>
              </TR>
            </TBODY>
          </TABLE>
      </div></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><div align="center"></div></td>
      <td background="../../imagens/fundocelulas1.png"><p align="center">&nbsp;</p></td>
      <td background="../../imagens/fundocelulas1.png"><div align="center"></div></td>
      <td background="../../imagens/fundocelulas1.png"><div align="center"></div></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><div align="center"></div></td>
      <td colspan="2" background="../../imagens/fundocelulas1.png"><div align="center"></div></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><div align="center"><strong>Observa&ccedil;&otilde;es</strong></div></td>
      <td colspan="2" background="../../imagens/fundocelulas1.png"><div align="center">
        <textarea class='class02' name="obs" cols="50" rows="7" id="obs"><? echo $obs; ?></textarea>
      </div></td>
      <td background="../../imagens/fundocelulas1.png"><textarea name="obs_propostas" cols="45" rows="7" readonly="readonly" id="obs_propostas"><?  

$sql = "SELECT * FROM observacoes_de_propostas where num_proposta = '$num_proposta' order by codigo desc";

$res = mysql_query($sql);

$reg = 0;

//echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$num_proposta_cli = $linha[1];

$cpf = $linha[2];

$data = $linha[3];

$hora = $linha[4];

$parecer_de_credito = $linha[5];

$operador = $linha[6];





echo "$data - "."$parecer_de_credito - "."$operador";

?>



<?



if($reg==1){

//echo "</tr>";

$reg=0;

}





}

	  

	  

	  

	  

	   ?>

      </textarea></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><div align="center"><strong>Parecer de Cr&eacute;dito</strong></div></td>
      <td colspan="2" background="../../imagens/fundocelulas1.png"><div align="center">
        <textarea name="obs2" cols="50" rows="7" id="obs2"><? echo $obs2; ?></textarea>
      </div></td>
      <td background="../../imagens/fundocelulas1.png"><textarea name="parecer_credito" cols="45" rows="7" readonly="readonly" id="parecer_credito"><?  

$sql = "SELECT * FROM observacoes_parecer_credito where num_proposta = '$num_proposta' order by codigo desc";

$res = mysql_query($sql);

$reg = 0;

//echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$num_proposta_cli = $linha[1];

$cpf = $linha[2];

$data = $linha[3];

$hora = $linha[4];

$parecer_de_credito = $linha[5];

$operador = $linha[6];





echo "$data - "."$parecer_de_credito - "."$operador";

?>



<?



if($reg==1){

//echo "</tr>";

$reg=0;

}





}

	  

	  

	  

	  

	   ?>

      </textarea></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><strong>Termo de Responsabilidade</strong></div></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><DIV>
          <div align="center">
            <?

echo $termo;
?>
            <input name="termo" type="hidden" id="termo" value="<? echo $termo;  ?>">
          </div>
      </DIV></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><strong><? echo "Eu, $nome CPF $cpf_op $termo_de_responsabilidade";  ?>
                <input name="termo_de_responsabilidade" type="hidden" id="termo_de_responsabilidade" value="<? echo $termo_de_responsabilidade;  ?>">
      </strong></div></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><strong><font color="#0000FF">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input name="operador" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
          <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular; ?>">
          <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email; ?>">
          <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estabelecimento; ?>">
          <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estabelecimento; ?>">
          <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estabelecimento; ?>">
          <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estabelecimento; ?>">
          <input name="operador_alterou" type="hidden" id="operador_alterou">
          <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou">
          <input name="email_operador_alterou" type="hidden" id="email_operador_alterou">
          <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou">
          <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou">
          <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou">
          <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou">
          <input name="recebido" type="hidden" id="recebido" value="<? echo N&atilde;o; ?>">
          <input name="resposta1" type="hidden" id="resposta1" value="N&atilde;o">
          <input name="resposta2" type="hidden" id="resposta2" value="N&atilde;o">
          <input name="resposta3" type="hidden" id="resposta3" value="N&atilde;o">
          </font></strong>
              <input name="parc1" type="hidden" class='class02' id="parc1" value="">
              <input name="banco1" type="hidden" class='class02' id="banco1" value="">
              <input name="vencto1" type="hidden" class='class02' id="vencto1" value="">
              <input name="compra1" type="hidden" class='class02' id="compra1" value="">
              <input class='class01' type="submit" name="Submit" value="Salvar">
      </div></td>
    </tr>
  </table>
</form>

<form name="form1" method="post" action="">

  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2"><strong>Cadastro efetuado por <br>

        </strong><strong><font color="#0000FF"><? echo $operador; ?>

        

      </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td width="20%"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento; ?>

      </font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento; ?>          </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>Data do Cadastro <br>

              <font color="#0000FF"><? echo $datacadastro; ?> </font></strong></td>

      <td><strong>Hora que foi efetuado o Cadastro <br>

              <font color="#0000FF"><? echo $horacadastro; ?> </font></strong></td>

      <td><strong></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

  <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>

</form>

<form name="form1" method="post" action="">

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[44];

$cel_operador_alterou = $linha[45];

$email_operador_alterou = $linha[46];

$estabelecimento_alterou = $linha[47];

$cidade_estabelecimento_alterou = $linha[48];

$tel_estabelecimento_alterou = $linha[49];

$email_estabelecimento_alterou = $linha[50];

$dataalteracao = $linha[42];

$horaalteracao = $linha[43];

?>



  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>&Uacute;ltima altera&ccedil;&atilde;o efetuada pelo operador: <br>

      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="20%" valign="top" bgcolor="#CCCCCC"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%" valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td valign="top" bgcolor="#CCCCCC"><strong>Data do Cadastro <br>

            <font color="#0000FF"><? echo $dataalteracao; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong>Hora que foi efetuado o Cadastro <br>

            <font color="#0000FF"><? echo $horaalteracao; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong></strong></td>

      <td valign="top" bgcolor="#CCCCCC">&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

  <? } ?>

</form>

<form name="form1" method="post" action="">

  <?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[1];

$cel_operador_alterou = $linha[19];

$email_operador_alterou = $linha[20];

$estabelecimento_alterou = $linha[24];

$cidade_estabelecimento_alterou = $linha[25];

$tel_estabelecimento_alterou = $linha[26];

$email_estabelecimento_alterou = $linha[27];



?>

  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2"><strong><font color="#FF0000">Cadastro atualmente sendo alterado por: </font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br>

      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="20%"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF"> </font><font color="#0000FF"> </font></strong></td>

      <td>&nbsp;</td>

      <td><strong></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

<? } ?>

</form>

</body>

</html>

