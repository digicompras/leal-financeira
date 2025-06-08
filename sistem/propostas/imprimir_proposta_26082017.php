<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");
ini_set('default_charset','UTF8_general_mysql500_ci');

require '../../conect/conect.php';


?>


<?

$num_proposta = $_POST['num_proposta'];


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

      <td colspan="2"><div align="center"><font size="1"><strong> IMPRESS&Atilde;O DE PROPOSTA N&ordm; <? echo $num_proposta; ?></strong></font></div>        <div align="right"></div></td>

      <td colspan="2"><div align="center"><font size="1"><strong>
        <? if(empty($num_bordero)){} else{ echo "Borderô Nº $num_bordero"; } ?>
      </strong></font></div></td>
      <td><div align="center"><font size="1"><strong>MATRICULA <? echo $matricula; ?></strong></font></div></td>
    </tr>

    <tr>
      <td><font size="1">Status da proposta</font></td>
      <td colspan="2"><font size="1"><strong><? echo $status; ?></strong></font></td>
      <td><font size="1">Status do fisico</font></td>
      <td><font size="1"><strong><? echo $status_fisico; ?></strong></font></td>
    </tr>
    <tr>

      <td><font size="1">Tipo da proposta </font></td>

      <td colspan="2"><font size="1"><strong><? echo $tipo_proposta; ?></strong></font></td>

      <td><font size="1">Data Limite para entrega do f&iacute;sico</font></td>

      <td><font size="1"><strong><? echo $prazo_final_formatado; ?></strong></font></td>
    </tr>

    <tr>
      <td><font size="1">Margem Cart&atilde;o</font></td>
      <td colspan="2"><font size="1"><strong><? echo $margemcartao; ?></strong></font></td>
      <td><font size="1">Margem Empr&eacute;stimo</font></td>
      <td><font size="1"><strong><? echo $margememprestimo; ?></strong></font></td>
    </tr>
    <tr> 

      <td><font size="1">Tabela</font></td>

      <td colspan="2"><font size="1"><strong><? echo $tabela; ?>

      </strong></font></td>

      <td><font size="1">Data da Proposta </font></td>

      <td>      <font size="1"><strong><? echo $dataproposta; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Operador</font></td>

      <td colspan="2"><font size="1"><strong><? echo $nome_operador; ?>

      </strong></font></td>

      <td><font size="1"> Hora proposta</font></td>

      <td><font size="1"><strong><? echo $horaproposta; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Estabelecimento</font></td>

      <td colspan="2"><font size="1"><strong><? echo $estabelecimento_proposta; ?> </strong> </font></td>

      <td><font size="1">Perfil do cliente </font></td>

      <td><font size="1"><strong><? echo $tipo; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Nome</font></td>

      <td colspan="2"><font size="1"><strong><? echo $nome; ?></strong></font></td>

      <td><font size="1">CPF</font></td>

      <td>      <font size="1"><strong><? echo $cpf; ?></strong></font></td>
    </tr>

    <tr>
      <td><font size="1">Secretaria</font></td>
      <td colspan="2"><font size="1"><strong><? echo $secretaria; ?></strong></font></td>
      <td><font size="1">Categoria</font></td>
      <td><font size="1"><strong><? echo $categoria; ?></strong></font></td>
    </tr>
    <tr> 

      <td><font size="1">N&ordm; Benef&iacute;cio </font></td>

      <td colspan="2">      <font size="1"><strong><? echo $num_beneficio; ?></strong></font></td>

      <td><font size="1">N&ordm; Benef&iacute;cio 2 </font></td>

      <td><font size="1"><strong><? echo $num_beneficio2; ?> </strong> </font></td>
    </tr>

    <tr>

      <td><font size="1">N&ordm; Benef&iacute;cio 3 </font></td>

      <td colspan="2"><font size="1"><strong><? echo $num_beneficio3; ?></strong></font></td>

      <td><font size="1">N&ordm; Benef&iacute;cio 4 </font></td>

      <td><font size="1"><strong><? echo $num_beneficio4; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Data Nasc</font></td>

      <td colspan="2"><font size="1"><strong><? echo "$dia_niver/$mes_niver/$ano_niver"; ?></strong></font></td>

      <td><font size="1">RG</font></td>

      <td><font size="1"><strong><? echo $rg; ?></strong></font></td>
    </tr>

    <tr> 

      <td width="14%"><font size="1">&Oacute;rg&atilde;o</font></td>

      <td colspan="2">      <font size="1"><strong><? echo $orgao; ?></strong></font></td>

      <td width="18%"><font size="1">Emiss&atilde;o</font></td>

      <td width="33%">        <font size="1"></font><strong><? echo $emissao; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Pai</font></td>

      <td colspan="2"><font size="1"><strong><? echo $pai; ?></strong></font></td>

      <td><font size="1">M&atilde;e</font></td>

      <td><font size="1"><strong><? echo $mae; ?></strong></font></td>
    </tr>

    <tr> 

      <td><font size="1">Endere&ccedil;o</font></td>

      <td colspan="2"><font size="1"><strong><? echo $endereco; ?></strong></font></td>

      <td><font size="1">N&uacute;mero</font></td>

      <td><font size="1"><strong><? echo $numero; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Bairro</font></td>

      <td colspan="2"><font size="1"><strong><? echo $bairro; ?></strong></font></td>

      <td><font size="1">Complemento</font></td>

      <td><font size="1"><strong><? echo $complemento; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Cidade</font></td>

      <td colspan="2"><font size="1"><strong><? echo $cidade; ?></strong></font></td>

      <td><font size="1">Estado</font></td>

      <td>      <font size="1"><strong><? echo $estado; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Cep</font></td>

      <td colspan="2"><font size="1"><strong><? echo $cep; ?></strong></font></td>

      <td><font size="1">Sexo</font></td>

      <td><font size="1"><strong><? echo $sexo; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Estado Civil </font></td>

      <td colspan="2"><font size="1"><strong><? echo $estadocivil; ?></strong></font></td>

      <td><font size="1">Telefone</font></td>

      <td><font size="1"><strong><? echo $telefone; ?></strong></font></td>
    </tr>

    <tr>
      <td><font size="1">Como Conheceu a Empresa</font></td>
      <td colspan="2"><font size="1"><strong><? echo $resposta; ?></strong></font></td>
      <td><font size="1">Naturalidade</font></td>
      <td><font size="1"><strong><? echo $naturalidade; ?></strong></font></td>
    </tr>
    <tr>

      <td><font size="1">Celular</font></td>

      <td colspan="2"><font size="1"><strong><? echo $celular; ?></strong></font></td>

      <td><font size="1">E-Mail</font></td>

      <td><font size="1"><strong><? echo $email; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1"><strong>Valor bruto da opera&ccedil;&atilde;o </strong></font></td>

      <td colspan="2"><font size="1"><strong><? echo "R$ ".$valor_total; ?></strong></font></td>

      <td><font size="1"><strong>Valor Lid cliente </strong></font></td>

      <td><font size="1"><strong><? echo "R$ ". $valor_liquido_cliente; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Banco Opera&ccedil;&atilde;o </font></td>

      <td colspan="2"><font size="1"><strong><? echo $bco_operacao; ?></strong></font></td>

      <td><font size="1">Banco a ser Portado</font></td>

      <td><font size="1"><strong><? echo $bco_quitacao; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Quant de parcelas </font></td>

      <td colspan="2"><font size="1"><strong><strong><? echo $quant_parc; ?></strong></strong></font></td>

      <td><font size="1">Valor parcela </font></td>

      <td><font size="1"><strong><? echo $parcela; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Banco Pgto </font></td>

      <td colspan="2"><font size="1"><strong><? echo $banco_pagto; ?></strong></font></td>

      <td><font size="1">N&ordm; Banco </font></td>

      <td><font size="1"><strong><? echo $num_banco; ?></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Ag&ecirc;ncia</font></td>

      <td width="11%"><font size="1"><strong><? echo $agencia; ?></strong></font></td>

      <td width="24%"><div align="left"><font size="1">N&ordm; Conta <strong><? echo $conta; ?><? echo " - $tipo_conta"; ?></strong></font></div></td>

      <td><font size="1">Tipo de pagto do Benef&iacute;cio</font></td>

      <td><font size="1"><strong><? echo $pagto_beneficio; ?></strong></font></td>
    </tr>

    <tr>
      <td colspan="3"><font size="1"><strong>Refer&ecirc;ncias</strong></font></td>
      <td><font size="1">Valor Renda</font></td>
      <td><font size="1"><strong><? echo $valorrenda; ?></strong></font></td>
    </tr>
    <tr>
      <td><font size="1"><strong>Nome</strong></font></td>
      <td colspan="4"><font size="1"><strong><? echo $nome_ref1; ?> Telefone <? echo $fone_ref1; ?> Grau de relacionamento <? echo $grau_relacionamento1; ?></strong></font></td>
    </tr>
    <tr>
      <td><font size="1"><strong>Nome</strong></font></td>
      <td colspan="4"><font size="1"><strong><? echo $nome_ref2; ?> Telefone <? echo $fone_ref2; ?> Grau de relacionamento <? echo $grau_relacionamento2; ?></strong></font></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center"><font size="1"><strong>Dados Profissionais</strong></font></div></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center">
        <TABLE class=corpo border=0 cellSpacing=0 cellPadding=0 width="100%" 
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
              <TD width=82 height=28 class=corpo><font size="1"><strong><FONT 
            face=Verdana>Empresa:</FONT></strong></font></TD>
              <TD width=154 class=corpo><font size="1"><strong><? echo $empresa; ?></strong></font></TD>
              <TD width=170 height=28><div align="left"><font size="1"><strong><FONT 
            face=Verdana>Porte:</FONT></strong></font></div></TD>
              <TD width=157><font size="1"><strong><? echo $porte_empresa; ?></strong></font></TD>
              <TD width=150 class=pocospazio><div align="left"><font size="1"><strong><FONT 
            face=Verdana>Tempo de servi&ccedil;o:</FONT></strong></font></div></TD>
              <TD width="309" height=28><DIV align=left class="style2"><font size="1"><strong><font face="Verdana">anos</font> <? echo $data_admissao; ?><font face="Verdana">meses </font><? echo $meses; ?></strong></font></DIV></TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo><font size="1"><strong><FONT 
            face=Verdana>In&iacute;cio atividade:</FONT></strong></font></TD>
              <TD class=corpo><font size="1"><strong><? echo $inicio_atividade; ?></strong></font></TD>
              <TD height=28><div align="left"><font size="1"><strong><FONT 
            face=Verdana>Endere&ccedil;o:</FONT></strong></font></div></TD>
              <TD height="28" colspan="3"><font size="1"><strong><? echo $end_empresa; ?><span class="style2"><FONT 
            face=Verdana>N &ordm;:</FONT></span><? echo $numero_empresa; ?></strong></font></TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo><font size="1"><strong><FONT 
            face=Verdana>Complemento:</FONT></strong></font></TD>
              <TD class=corpo><font size="1"><strong><? echo $complemento_empresa; ?></strong></font></TD>
              <TD height=28><font size="1"><strong><FONT 
            face=Verdana>Bairro:</FONT></strong></font></TD>
              <TD><font size="1"><strong><? echo $bairro_empresa; ?></strong></font></TD>
              <TD class=pocospazio><font size="1"><strong><FONT face=Verdana>CEP: </FONT></strong></font></TD>
              <TD height=28><font size="1"><strong><? echo $cep_empresa; ?></strong></font></TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo><font size="1"><strong><FONT 
            face=Verdana>Cidade:</FONT></strong></font></TD>
              <TD class=corpo><font size="1"><strong><? echo $cidade_empresa; ?></strong></font></TD>
              <TD height=28><font size="1"><strong><FONT face=Verdana>UF: </FONT></strong></font></TD>
              <TD><font size="1"><strong><? echo $estado_empresa; ?></strong></font></TD>
              <TD class=pocospazio><font size="1"><strong><FONT face=Verdana>Telefone: </FONT></strong></font></TD>
              <TD height=28>
                <font size="1"><strong><? echo $ddd_tel_empresa; ?>
                -                <? echo $telefone_empresa; ?> </strong></font></TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo style2 style3><font size="1"><strong>CPT:</strong></font></TD>
              <TD class=corpo><font size="1"><strong><? echo $cpt; ?></strong></font></TD>
              <TD height=28 class="corpo"><font size="1"><strong>Serie:</strong></font></TD>
              <TD><font size="1"><strong><? echo $serie; ?></strong></font></TD>
              <TD><font size="1"><strong><font face=Verdana>Natureza opera&ccedil;&atilde;o:</font></strong></font></TD>
              <TD height=28><font size="1"><strong><? echo $natureza_operacao; ?></strong></font></TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo><font size="1"><strong><font 
            face=Verdana>Cargo:</font></strong></font></TD>
              <TD class=corpo><font size="1"><strong><? echo $cargo; ?></strong></font></TD>
              <TD height=28><font size="1"><strong><font 
            face=Verdana>Sal&aacute;rio:</font></strong></font></TD>
              <TD><font size="1"><strong><? echo $salario; ?></strong></font></TD>
              <TD class=pocospazio><font size="1"><strong><font face=Verdana>Atividade principal: </font></strong></font></TD>
              <TD height=28><font size="1"><strong><? echo $atividade_principal; ?></strong></font></TD>
            </TR>
            <TR height=17>
              <TD height=28 class=corpo><font size="1"><strong><FONT 
            face=Verdana>CNPJ:</FONT></strong></font></TD>
              <TD class=corpo><font size="1"><strong><? echo $cnpj; ?></strong></font></TD>
              <TD height=28><font size="1"><strong><FONT face=Verdana>Telefone contador: </FONT></strong></font></TD>
              <TD colspan="2">
                <font size="1"><strong><? echo $ddd_tel_contador; ?>
                -                <? echo $tel_contador; ?> </strong></font></TD>
              <TD height=28>&nbsp;</TD>
            </TR>
          </TBODY>
        </TABLE>
      </div></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center"><font size="1"><STRONG><FONT 
      face="Verdana, Arial, Helvetica, sans-serif">Dados da opera&ccedil;&atilde;o (Ve&iacute;culo)</FONT></STRONG></font></div></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center">
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
              <TD width=132 height=19 class=corpo><font size="1"><B><FONT 
            face=Verdana>Tipo de  Ve&iacute;culo:</FONT></B></font></TD>
              <TD width=132 height=19><font size="1"><B><FONT 
            face=Verdana>Chassi:</FONT></B></font></TD>
              <TD width=145><font size="1"><B><FONT 
            face=Verdana>Marca e ve&iacute;culo:</FONT></B></font></TD>
              <TD width=145><font size="1"><B><FONT 
            face=Verdana>Ano/modelo:</FONT></B></font></TD>
            </TR>
            <TR height=17>
              <TD width=132 height=26 class=corpo><font size="1"><strong><? echo $bem; ?><strong>
                <input name="bem" type="hidden" id="bem" value="<? echo $bem; ?>">
              </strong></strong></font></TD>
              <TD width=132 height=26><font size="1"><strong><? echo $chassi ?></strong></font></TD>
              <TD width=145><font size="1"><strong><? echo $veiculo; ?></strong></font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><P>
                  <font size="1"><strong><? echo $ano_modelo; ?></strong>
                -
                <strong><? echo $modelo; ?></strong> </font></P></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><font size="1"><B><FONT 
            face=Verdana>Renavam:</FONT></B></font></TD>
              <TD height=26><font size="1"><B><FONT 
            face=Verdana>N&ordm; de portas:</FONT></B></font></TD>
              <TD><font size="1"><B><FONT 
            face=Verdana>Combust&iacute;vel:</FONT></B></font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><font size="1"><B><FONT 
            face=Verdana>Placas:</FONT></B></font></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><font size="1"><strong><? echo $renavam; ?></strong></font></TD>
              <TD height=26><font size="1"><strong><? echo $num_portas; ?></strong></font></TD>
              <TD><font size="1"><strong><? echo $combustivel; ?></strong></font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><font size="1"><strong><? echo $placa; ?></strong></font></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><font size="1"><B><FONT 
            face=Verdana>Valor venda:</FONT></B></font></TD>
              <TD height=26><font size="1"><B><FONT 
            face=Verdana>Valor de entrada:</FONT></B></font></TD>
              <TD><font size="1"><B><FONT 
            face=Verdana>Tarifa de cadastro:</FONT></B></font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><font size="1"><B><FONT 
            face=Verdana>Valor a financiar:</FONT></B></font></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><font size="1"><strong><strong><? echo $valor_venda; ?></strong>
                  <input name="valor_venda" type="hidden" id="valor_venda" value="<? echo $valor_venda; ?>">
              </strong></font></TD>
              <TD height=26><font size="1"><strong><? echo $valor_entrada; ?>
                  <input name="valor_entrada" type="hidden" id="valor_entrada" value="<? echo $valor_entrada; ?>">
              </strong></font></TD>
              <TD><font size="1"><strong><? echo $tarifa_cadastro; ?></strong>                  
                  <input name="tarifa_cadastro" type="hidden" id="tarifa_cadastro2" value="<? echo $tac; ?>">              
                </font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><font size="1"><strong>
                  <? $financiar = bcadd($diferenca,$tarifa_cadastro,2);

	  echo $financiar;

	   ?>
                
                  <input name="valor_financiar" type="hidden" id="valor_financiar2" value="<? $financiar = bcadd($diferenca,$tac,2);

	  echo $financiar;

	   ?>">
              </strong></font></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><font size="1"><B><FONT 
            face=Verdana>Codigo da tabela:</FONT></B></font></TD>
              <TD height=26><font size="1"><B><FONT 
            face=Verdana>Coeficiente:</FONT></B></font></TD>
              <TD><font size="1"><B><FONT 
            face=Verdana>Servi&ccedil;os de terceiros:</FONT></B></font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><font size="1"><B><FONT 
            face=Verdana>Valor liberado:</FONT></B></font></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><font size="1"><strong><? echo $codigo_tabela; ?></strong>
                  <input name="codigo_tabela" type="hidden" id="codigo_tabela2" value="<? echo $codigo_tabela; ?>">
                  <b><font face="Verdana">Mista</font></b> <strong><? echo $mista; ?></strong>                  
                  <input name="mista" type="hidden" id="codigo_tabela6" value="<? echo $mista; ?>">              
                  </font></TD>
              <TD height=26><font size="1"><strong><? echo $coeficiente; ?>
                  <input name="coeficiente" type="hidden" id="coeficiente" value="<? echo $coeficiente; ?>">
              </strong></font></TD>
              <TD><font size="1"><strong><? echo $r; ?> </strong>                  
                  <input name="r" type="hidden" id="r" value="<? echo $r_2; ?>">              
                </font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><font size="1"><strong><? echo $valor_liberado; ?></strong></font></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><font size="1"><B><FONT 
            face=Verdana>N&ordm; de parcelas:</FONT></B></font></TD>
              <TD height=26><font size="1"><B><FONT 
            face=Verdana>Valor das parcelas:</FONT></B></font></TD>
              <TD><font size="1"><B><FONT 
            face=Verdana>Car&ecirc;ncia:</FONT></B></font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><font size="1"><B><FONT 
            face=Verdana>Pagto de servi&ccedil;os de terceiros:</FONT></B></font></TD>
            </TR>
            <TR height=17>
              <TD height=26 class=corpo><font size="1"><strong><? echo $num_parcelas; ?></strong>                  
                  <input name="num_parcelas" type="hidden" id="num_parcelas" value="<? echo $num_parcelas; ?>">              
                </font></TD>
              <TD height=26><font size="1"><strong>
                <? $prestacao = bcmul($financiar,$coeficiente,2);

	  echo $prestacao;

	   ?>
                </strong>                
                  <input name="valor_parcelas" type="hidden" id="valor_parcelas" value="<? $prestacao = bcmul($financiar,$coeficiente,2);

	   echo $prestacao; ?>">                
                </font></TD>
              <TD><font size="1"><b><font 
            face=Verdana><strong><? echo $trinta; ?><? echo $quarenta_cinco; ?></strong></font></b></font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff><font size="1"><strong>
                <? echo "$pagto_serv_terc"; ?>
                <input name="pagto_serv_terc" type="hidden" id="pagto_serv_terc" value="<? echo $serv_terceiros; ?>">
              </strong></font></TD>
            </TR>
          </TBODY>
        </TABLE>
      </div></td>
    </tr>
  </table>

</form>

</body>

</html>

