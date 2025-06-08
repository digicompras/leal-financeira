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
$cpfconjuge = $linha[311];
$codigo_inss = $linha[312];
$especiebenefico_proposta = $linha[313];
	
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





<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="25%"><div align="center">
      <form action="../contrato/contrato.php" method="post" name="form1" target="_blank" id="form1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo "$num_proposta"; ?>">
        <input name="imageField" type="image" id="imageField" src="../../logo/logotipo.jpg" width="141" height="61">
      </form>
    </div></td>
    <td width="42%"><div align="center"><strong><font size="3">FICHA CADASTRAL </font></strong><font size="3"><strong>N&ordm; <? echo $num_proposta; ?></strong></font></div></td>
    <td width="33%"><div align="center"><font size="3"><strong>MATRICULA <? echo $matricula; ?></strong></font></div></td>
  </tr>
</table>
<table width="100%" border="1" cellpadding="0" cellspacing="0">

    <tr>
      <td colspan="8" background="../../imagens/fundocelulas1.png"><div align="center"><strong>DADOS DA PROPOSTA</strong></div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="4" align="center"><font size="1">Beneficio Utilizado</font><font size="1"><br>
      <strong><? echo "$codigo_inss - $especiebenefico_proposta"; ?></strong></font></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><font size="1">Data da Proposta<br> <strong><? echo $dataproposta; ?></strong></font></td>
      <td colspan="2"><font size="1">Hora proposta<br><strong><? echo $horaproposta; ?></strong></font></td>
      <td colspan="2"><font size="1">Tipo da proposta<br> <strong><? echo $tipo_proposta; ?></strong></font></td>
      <td colspan="2"><font size="1">Tabela<br><strong><? echo $tabela; ?></strong></font></td>
    </tr>
    <tr>
      <td colspan="2"><font size="1">Status da proposta <strong><? echo"$dia_alteracao_status-$mes_alteracao_status-$ano_alteracao_status"; ?></strong><br />
          <strong><? echo "$status"; if($status=="RECUSADA"){ echo " - $obs2"; } ?></strong></font></td>
      <td colspan="2"><font size="1">Status do fisico<br><strong><? echo $status_fisico; ?></strong></font></td>
      <td colspan="2"><font size="1">Data Limite para entrega do f&iacute;sico<br><strong><? echo $prazo_final_formatado; ?></strong></font></td>
      <td colspan="2"><font size="1">Operador / Estabelecimento<br><strong> <? echo "$nome_operador / $estabelecimento_proposta"; ?></strong></font></td>
    </tr>
    <tr>

      <td colspan="8" background="../../imagens/fundocelulas1.png"><div align="center"><strong>DADOS PESSOAIS</strong></div></td>
    </tr>

    <tr>
      <td colspan="2"><p><font size="1">Nome</font><br>
      <font size="1"><strong><? echo $nome; ?></strong></font></p></td>
      <td colspan="2"><font size="1">CPF<br />
          <strong><? echo $cpf; ?></strong></font></td>
      <td colspan="2"><font size="1">RG/<strong>Emiss&atilde;o/</strong>&Oacute;rg&atilde;o<br />
        <strong><? echo "$rg - $emissao - $orgao"; ?></strong></font></td>
      <td width="12%" valign="top"><font size="1">Telefone<br />
        <strong><? echo $telefone; ?></strong></font></td>
      <td width="15%"><font size="1">Celulares<br />
        <strong><? echo "$celular"; ?></strong></font></td>
    </tr>
    <tr>
      <td colspan="2"><font size="1">Pai<br><strong><? echo $pai; ?></strong></font></td>
      <td colspan="2"><font size="1">M&atilde;e<br><strong><? echo $mae; ?></strong></font></td>
      <td colspan="2"><font size="1">Endere&ccedil;o<br><strong><? echo $endereco; ?></strong></font></td>
      <td colspan="2"><font size="1">N&uacute;mero<br><strong><? echo $numero; ?></strong></font></td>
    </tr>
    <tr>
      <td colspan="2"><font size="1">Bairro<br><strong><? echo $bairro; ?></strong></font></td>
      <td colspan="2"><font size="1">Complemento<br><strong><? echo $complemento; ?></strong></font></td>
      <td colspan="2"><font size="1">Cidade<br><strong><? echo $cidade; ?></strong></font></td>
      <td colspan="2"><font size="1">Estado<br><strong><? echo $estado; ?></strong></font></td>
    </tr>
    <tr>
      <td colspan="2"><font size="1">Cep<br><strong><? echo $cep; ?></strong></font></td>
      <td colspan="2"><font size="1">Naturalidade<br><strong><? echo $naturalidade; ?></strong></font></td>
      <td colspan="2"><font size="1">Estado Civil<br> <strong><? echo $estadocivil; ?></strong></font></td>
      <td colspan="2"><font size="1">Como Conheceu a Empresa<br><strong><? echo $resposta; ?></strong></font></td>
    </tr>
    <tr>
      <td colspan="2"><font size="1">Secretaria<br><strong><? echo $secretaria; ?></strong></font></td>
      <td colspan="2"><font size="1">Margem Cart&atilde;o<br><strong><? echo $margemcartao; ?></strong></font></td>
      <td colspan="2"><font size="1">Margem Empr&eacute;stimo<br><strong><? echo $margememprestimo; ?></strong></font></td>
      <td colspan="2"><font size="1">Orienta&ccedil;&atilde;o Sexual<br />
          <strong><? echo $sexo; ?></strong></font></td>
    </tr>
    <tr>
      <td colspan="2"><font size="1">Categoria<br />
        <strong><? echo $categoria; ?></strong></font></td>
      <td colspan="2"><font size="1">E-Mail<br>
      <strong><? echo $email; ?></strong></font></td>
      <td colspan="2"><font size="1">Perfil do cliente <br />
      <strong><? echo $tipo; ?></strong></font></td>
      <td colspan="2"><font size="1">Data Nasc<br>
      <strong><? echo "$dia_niver/$mes_niver/$ano_niver"; ?></strong></font></td>
    </tr>
    <tr>
      <td width="11%"><font size="1">N&ordm; Benef&iacute;cio 1<br>
      <strong><? echo $num_beneficio; ?></strong></font></td>
      <td width="11%" align="center"><font size="1">Valor Renda 1<br />
      <strong><? echo $valorrenda; ?></strong></font></td>
      <td width="12%"><font size="1">N&ordm; Benef&iacute;cio 2 <br>
      <strong><? echo $num_beneficio2; ?></strong></font></td>
      <td width="14%" align="center"><font size="1">Valor Renda 2<br />
      <strong><? echo $valorrenda2; ?></strong></font></td>
      <td width="12%"><font size="1">N&ordm; Benef&iacute;cio 3 <br>
      <strong><? echo $num_beneficio3; ?></strong></font></td>
      <td width="13%" align="center"><font size="1">Valor Renda 3<br />
      <strong><? echo $valorrenda3; ?></strong></font></td>
      <td><font size="1">N&ordm; Benef&iacute;cio 4 <br>
      <strong><? echo $num_beneficio4; ?></strong></font></td>
      <td align="center"><font size="1">Valor Renda 4<br />
      <strong><? echo $valorrenda4; ?></strong></font></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="2"><font size="1">Tipo de pagto do Benef&iacute;cio<br><strong><? echo $pagto_beneficio; ?></strong></font></td>
      <td colspan="2"><font size="1">Conjuge<br>
      <strong><? echo $conjuge; ?></strong></font></td>
      <td colspan="2"><font size="1">CPF Conjuge<br>
      <strong><? echo $cpfconjuge; ?></strong></font></td>
    </tr>

    <tr>

      <td colspan="8" background="../../imagens/fundocelulas1.png"><div align="center"><strong>DADOS DA OPERA&Ccedil;&Atilde;O CONSIGNADO</strong></div></td>
    </tr>

    <tr>

      <td colspan="2"><font size="1"><strong>Valor bruto da opera&ccedil;&atilde;o <br><? echo "R$ ".$valor_total; ?></strong></font></td>

      <td colspan="2"><font size="1"><strong>Valor Lid cliente<br> <? echo "R$ ". $valor_liquido_cliente; ?></strong></font></td>

      <td colspan="2"><font size="1">Quant de parcelas<br> <strong><strong><? echo $quant_parc; ?></strong></strong></font></td>

      <td colspan="2"><font size="1">Valor parcela <br><strong><? echo $parcela; ?></strong></font></td>
    </tr>

    <tr>

      <td colspan="2"><font size="1">Banco a ser Portado<br><strong><? echo $bco_quitacao; ?></strong></font></td>

      <td colspan="2"><font size="1">Banco Opera&ccedil;&atilde;o <br><strong><? echo $bco_operacao; ?></strong></font></td>

      <td colspan="2"><font size="1">Banco Pgto <br><strong><? echo $banco_pagto; ?></strong></font></td>

      <td colspan="2"><font size="1">N&ordm; Banco <br><strong><? echo $num_banco; ?></strong></font></td>
    </tr>

    <tr>
      <td colspan="2"><font size="1">Ag&ecirc;ncia<br><strong><? echo $agencia; ?></strong></font></td>
      <td colspan="2"><font size="1">N&ordm; Conta <br><strong><? echo $conta; ?></strong></font></td>
      <td colspan="2"><font size="1">Tipo Conta<br><strong><? echo " - $tipo_conta"; ?></strong></font></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>

      <td colspan="8" background="../../imagens/fundocelulas1.png"><div align="center"><strong>REFER&Ecirc;NCIAS</strong></div></td>
    </tr>

    <tr>

      <td colspan="2"><font size="1"><strong>Nome<br><? echo $nome_ref1; ?></strong></font></td>

      <td colspan="2"><font size="1"><strong>Telefone <br><? echo $fone_ref1; ?></strong></font></td>

      <td colspan="2"><font size="1"><strong>Grau de relacionamento<br> <? echo $grau_relacionamento1; ?></strong></font></td>

      <td colspan="2">&nbsp;</td>
    </tr>

    <tr>

      <td colspan="2"><font size="1"><strong>Nome<br><? echo $nome_ref2; ?></strong></font></td>

      <td colspan="2"><font size="1"><strong>Telefone<br> <? echo $fone_ref2; ?> </strong></font></td>

      <td colspan="2"><font size="1"><strong>Grau de relacionamento<br> <? echo $grau_relacionamento2; ?></strong></font></td>

      <td colspan="2">&nbsp;</td>
    </tr>

    <tr>

      <td colspan="8" background="../../imagens/fundocelulas1.png"><div align="center"><strong>DADOS PROFISSIONAIS</strong></div></td>
    </tr>

    <tr>

      <td colspan="2"><span class="corpo"><font size="1"><strong><font 
            face=Verdana>Empresa<br><font size="1"><strong><? echo $empresa; ?></strong></font></font></strong></font></span></td>

      <td colspan="2"><font size="1"><strong><font 
            face=Verdana>Porte<br></font></strong></font><font size="1"><strong><? echo $porte_empresa; ?></strong></font></td>

      <td colspan="2"><font size="1"><strong><font 
            face=Verdana>Tempo de servi&ccedil;o<br></font></strong></font><span class="style2"><font size="1"><strong><font face="Verdana">anos</font> <? echo $data_admissao; ?><font face="Verdana">meses </font><font size="1"><strong><? echo $meses; ?></strong></font></strong></font></span></td>

      <td colspan="2"><span class="corpo"><font size="1"><strong><font 
            face=Verdana>In&iacute;cio atividade<br><font size="1"><strong><? echo $inicio_atividade; ?></strong></font></font></strong></font></span></td>
    </tr>

    <tr>

      <td colspan="2"><font size="1"><strong><font 
            face=Verdana>Endere&ccedil;o / </font></strong></font><font size="1"><strong><span class="style2"><font 
            face=Verdana>N &ordm;<br></font></span><? echo "$end_empresa / $numero_empresa"; ?></strong></font></td>

      <td colspan="2"><span class="corpo"><font size="1"><strong><font 
            face=Verdana>Complemento<br><font size="1"><strong><? echo $complemento_empresa; ?></strong></font></font></strong></font></span></td>

      <td colspan="2"><font size="1"><strong><font 
            face=Verdana>Bairro<br></font><font size="1"><strong><? echo $bairro_empresa; ?></strong></font></strong></font></td>

      <td colspan="2"><span class="pocospazio"><font size="1"><strong><font face=Verdana>CEP<br> </font><font size="1"><strong><? echo $cep_empresa; ?></strong></font></strong></font></span></td>
    </tr>

    <tr>
      <td colspan="2"><span class="corpo"><font size="1"><strong><font 
            face=Verdana>Cidade<br><font size="1"><strong><? echo $cidade_empresa; ?></strong></font></font></strong></font></span></td>
      <td colspan="2"><font size="1"><strong><font face=Verdana>UF<br> </font><font size="1"><strong><? echo $estado_empresa; ?></strong></font></strong></font></td>
      <td colspan="2"><span class="pocospazio"><font size="1"><strong><font face=Verdana>Telefone<br></font><font size="1"><strong><? echo $ddd_tel_empresa; ?> - <? echo $telefone_empresa; ?> </strong></font></strong></font></span></td>
      <td colspan="2"><span class="corpo"><font size="1"><strong>CPT<br><font size="1"><strong><? echo $cpt; ?> </strong></font></strong></font></span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="corpo"><font size="1"><strong>Serie<br><? echo $serie; ?></strong></font></span></td>
      <td colspan="2"><font size="1"><strong><font face=Verdana>Natureza opera&ccedil;&atilde;o<br></font><font size="1"><strong><? echo $natureza_operacao; ?></strong></font></strong></font></td>
      <td colspan="2"><span class="corpo"><font size="1"><strong><font 
            face=Verdana>Cargo<br><font size="1"><strong><? echo $cargo; ?></strong></font></font></strong></font></span></td>
      <td colspan="2"><font size="1"><strong><font 
            face=Verdana>Sal&aacute;rio<br></font><font size="1"><strong><? echo $salario; ?></strong></font></strong></font></td>
    </tr>
    <tr>
      <td colspan="2"><span class="pocospazio"><font size="1"><strong><font face=Verdana>Atividade principal<br></font><font size="1"><strong><? echo $atividade_principal; ?></strong></font></strong></font></span></td>
      <td colspan="2"><span class="corpo"><font size="1"><strong><font 
            face=Verdana>CNPJ<br><font size="1"><strong><? echo $cnpj; ?></strong></font></font></strong></font></span></td>
      <td colspan="2"><font size="1"><strong><font face=Verdana>Telefone contador<br> </font><font size="1"><strong><? echo $ddd_tel_contador; ?> - <? echo $tel_contador; ?> </strong></font></strong></font></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	<?
	if(($tipo_proposta=="CDC VEICULOS") or ($tipo_proposta=="REFIN VEICULOS")){
		?>
    <tr>
      <td colspan="8" background="../../imagens/fundocelulas1.png"><div align="center"><strong>DADOS DO VE&Iacute;CULO</strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><span class="corpo"><font size="1"><b><font 
            face=Verdana>Tipo de  Ve&iacute;culo<br><font size="1"><strong><? echo $bem; ?><strong>
      <input name="bem" type="hidden" id="bem" value="<? echo $bem; ?>" />
      </strong></strong></font></font></b></font></span></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Chassi<br></font><font size="1"><strong><? echo $chassi ?></strong></font></b></font></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Marca e ve&iacute;culo<br></font><font size="1"><strong><? echo $veiculo; ?></strong></font></b></font></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Ano/modelo<br></font></b></font><font size="1"><strong><? echo $ano_modelo; ?></strong> - <strong><? echo $modelo; ?></strong></font></td>
    </tr>
    <tr>
      <td colspan="2"><span class="corpo"><font size="1"><b><font 
            face=Verdana>Renavam<br><font size="1"><strong><? echo $renavam; ?></strong></font></font></b></font></span></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>N&ordm; de portas<br></font><font size="1"><strong><? echo $num_portas; ?></strong></font></b></font></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Combust&iacute;vel<br></font><font size="1"><strong><? echo $combustivel; ?></strong></font></b></font></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Placas<br></font><font size="1"><strong><? echo $placa; ?></strong></font></b></font></td>
    </tr>
    <tr>
      <td colspan="2"><span class="corpo"><font size="1"><b><font 
            face=Verdana>Valor venda<br><font size="1"><strong><strong><? echo $valor_venda; ?></strong>
                    <input name="valor_venda" type="hidden" id="valor_venda" value="<? echo $valor_venda; ?>" />
      </strong></font></font></b></font></span></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Valor de entrada<br></font></b></font><font size="1"><strong><? echo $valor_entrada; ?>
            <input name="valor_entrada" type="hidden" id="valor_entrada" value="<? echo $valor_entrada; ?>" />
      </strong></font></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Tarifa de cadastrov</font></b></font><font size="1"><strong><? echo $tarifa_cadastro; ?></strong>
          <input name="tarifa_cadastro" type="hidden" id="tarifa_cadastro2" value="<? echo $tac; ?>" />
      </font></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Valor a financiarv</font><font size="1"><strong>
      <? $financiar = bcadd($diferenca,$tarifa_cadastro,2);

	  echo $financiar;

	   ?>
      <input name="valor_financiar" type="hidden" id="valor_financiar2" value="<? $financiar = bcadd($diferenca,$tac,2);

	  echo $financiar;

	   ?>" />
      </strong></font></b></font></td>
    </tr>
    <tr>
      <td colspan="2"><span class="corpo"><font size="1"><b><font 
            face=Verdana>Codigo da tabela<br><font size="1"><strong><? echo $codigo_tabela; ?></strong>
                  <input name="codigo_tabela" type="hidden" id="codigo_tabela2" value="<? echo $codigo_tabela; ?>" />
                  <b><font face="Verdana">Mista<br></font></b> <strong><? echo $mista; ?></strong>
                  <input name="mista" type="hidden" id="codigo_tabela6" value="<? echo $mista; ?>" />
      </font></font></b></font></span></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Coeficiente<br></font><font size="1"><strong><? echo $coeficiente; ?>
                <input name="coeficiente" type="hidden" id="coeficiente" value="<? echo $coeficiente; ?>" />
      </strong></font></b></font></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Servi&ccedil;os de terceiros<br></font></b></font><font size="1"><strong><? echo $r; ?> </strong>
          <input name="r" type="hidden" id="r" value="<? echo $r_2; ?>" />
      </font></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Valor liberado<br></font><font size="1"><strong><? echo $valor_liberado; ?></strong></font></b></font></td>
    </tr>
    <tr>
      <td colspan="2"><span class="corpo"><font size="1"><b><font 
            face=Verdana>N&ordm; de parcelas<br></font></b></font><font size="1"><strong><? echo $num_parcelas; ?></strong>
            <input name="num_parcelas" type="hidden" id="num_parcelas" value="<? echo $num_parcelas; ?>" />
      </font></span></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Valor das parcelas<br></font><font size="1"><strong>
      <? $prestacao = bcmul($financiar,$coeficiente,2);

	  echo $prestacao;

	   ?>
      </strong>
              <input name="valor_parcelas" type="hidden" id="valor_parcelas" value="<? $prestacao = bcmul($financiar,$coeficiente,2);

	   echo $prestacao; ?>" />
      </font></b></font></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Car&ecirc;ncia<br></font><font size="1"><b><font 
            face=Verdana><strong><? echo $trinta; ?><? echo $quarenta_cinco; ?></strong></font></b></font></b></font></td>
      <td colspan="2"><font size="1"><b><font 
            face=Verdana>Pagto de servi&ccedil;os de terceiros<br></font><font size="1"><strong><? echo "$pagto_serv_terc"; ?>
                <input name="pagto_serv_terc" type="hidden" id="pagto_serv_terc" value="<? echo $serv_terceiros; ?>" />
      </strong></font></b></font></td>
    </tr>
    <? } ?>
    <tr>
      <td colspan="8"><div align="center"><font size="1">Observa&ccedil;&otilde;es</font><font size="1"><br>
      <strong><? if($status=="RECUSADA"){ echo "$obs2"; } 
		  if(empty($obs)){}else{ echo " / $obs"; } ?></strong></font></div></td>
    </tr>
    <tr>
      <td colspan="8"><table border="0" cellpadding="0" width="100%">
        <tr>
          <td colspan="3"><p align="center"><strong style="font-size: 12px">Tendo-se em vista as disposi&ccedil;&otilde;es do item V da    resolu&ccedil;&atilde;o n&ordm; 562 de 30/08/1979, do Banco Central do Brasil, nomeiam e    constituem a empresa acima qualificado, a quem confere os mais amplos e    ilimitados poderes para fins espec&iacute;ficos de:</strong></p></td>
        </tr>
        <tr>
          <td colspan="3"></td>
        </tr>
        <tr>
          <td colspan="3"><p align="center"><strong style="font-size: 12px">A) Encaminhar a documenta&ccedil;&atilde;o necess&aacute;ria, para a    obten&ccedil;&atilde;o de um financiamento junto ao banco mensurado na proposta, ajustando    o valor, prazo, taxa e demais condi&ccedil;&otilde;es do contrato, conforme discriminado    acima.</strong></p></td>
        </tr>
        <tr>
          <td colspan="3"></td>
        </tr>
        <tr>
          <td colspan="3"><p align="center"><strong style="font-size: 12px">B) O cliente tem a responsabilidade sobre a(s)    portabilidade(s) na(s) quais como solicitante da mesma, est&aacute; ciente que o    banco que estar&aacute; comprando sua d&iacute;vida junto ao banco de origem estar&aacute;    quitando o seu d&eacute;bito para desaverba&ccedil;&atilde;o do contrato em andamento e averba&ccedil;&atilde;o    do novo contrato de refinanciamento da portabilidade, sendo assim sua margem    estar&aacute; aberta por determinado per&iacute;odo at&eacute; que o mesmo se finalize, assim    ciente que esta margem n&atilde;o poder&aacute; ser utilizada a outro contrato e sendo de    sua responsabilidade que caso ocorra a perda desta margem ter&aacute; de quitar se    debito junto ao correspondente banc&aacute;rio, ficando expressamente declarado que    o respons&aacute;vel &eacute; o pr&oacute;prio cliente que ora tamb&eacute;m est&aacute; mensurado nesta    proposta.</strong></p></td>
        </tr>
        <tr>
          <td colspan="3"></td>
        </tr>
        <tr>
          <td colspan="3"><p align="center" style="font-size: 12px">As partes elegem o F&oacute;rum de Franca para dirimirem    qualquer d&uacute;vida a respeito da presente proposta, dispensando qualquer outro    por mais privilegiado que seja.</p></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3"><p align="center" style="font-size: 12px">Franca &ndash; SP, <font size="1"><strong><? echo $dataproposta; ?></strong></font></p></td>
        </tr>
        <tr>
          <td colspan="3" style="text-align: center">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" style="text-align: center">_____________________________________<br>
          <font size="1"><strong><? echo $nome; ?></strong></font></td>
        </tr>
      </table></td>
    </tr>
  </table>



<?

	if(($tipo_proposta=="PORTABILIDADE") or ($tipo_proposta=="REFIN CONSIGNADO") or ($tipo_proposta=="REFIN_PORTABILIDADE") or ($tipo_proposta=="INTENCAO_PORTABILIDADE") or ($tipo_proposta=="REFIN/COMPRA") or ($tipo_proposta=="REFIN VE
ICULOS")
){
	

//echo "<script>location.href='../contrato/contrato.php?numero_proposta=$num_proposta';</script>";
}	
	
?>

</body>

</html>

