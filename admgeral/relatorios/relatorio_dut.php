<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
header("Location: alerta.php");

?>
<html>
<head>
<title>LISTANDO TODAS AS PROPOSTAS COM STATUS FISICO PENDENTE DO OPERADOR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style3 {font-size: 10px}
.style8 {
	font-size: 9px;
	font-weight: bold;
}
.style9 {font-size: 10px; font-weight: bold; }
-->
</style>
</head>
<?

require '../../conect/conect.php';


	  
$emissaodedut = $_POST['emissaodedut'];





$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" 
  
<? } ?>


<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
<? } ?>





      <p>
        <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
<? } ?>
</p>
  <?
$sql = "SELECT * FROM propostas where emissaodedut = '$emissaodedut'";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

}
echo "Total de propostas com status pendente -->> $registros";
?>

      <br>
<br>
<table width="100%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td><div align="center" class="style9"><strong>N&ordm; Proposta </strong></div></td>
          <td><div align="center" class="style9">DUT emitido?</div></td>
          <td><div align="center" class="style9">Data Proposta</div></td>
          <td><div align="center" class="style9">Hora Proposta</div></td>
          <td><div align="center" class="style9"><span class="style9">status</span></div></td>
          <td><div align="center" class="style9">Fisico</div></td>
          <td><div align="center" class="style9">Hora Digita&ccedil;&atilde;o</div></td>
          <td><div align="center" class="style9">Valor Solicitado </div></td>
          <td><div align="center" class="style9">Valor liq cliente </div></td>
          <td><div align="center"><strong><span class="style9">Valor Total </span></strong></div></td>
          <td><div align="center"><strong><span class="style9">Tabela</span></strong></div></td>
          <td><div align="center" class="style9">Cliente</div></td>
          <td><div align="center" class="style9">CPF</div></td>
          <td width="3%"><div align="center" class="style9">Prazo</div></td>
          <td width="5%"><div align="center" class="style9">R$ Parcelas </div></td>
          <td><div align="center" class="style9">Tipo de Proposta </div></td>
          <td><div align="center" class="style9">Bco Opera&ccedil;&atilde;o </div></td>
  </tr>
<?


$sql = "SELECT * FROM propostas where emissaodedut = '$emissaodedut' order by dataproposta desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

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
$num_beneficio2 = $linha[80];
$num_beneficio3 = $linha[81];
$num_beneficio4 = $linha[82];
$tipo_proposta = $linha[83];
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

$parc = $linha[52];
$banco = $linha[53];
$vencto = $linha[54];
$compra = $linha[55];

$parc = $linha[52];
$banco = $linha[53];
$vencto = $linha[54];
$compra = $linha[55];

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
$bco_operacao = $linha[86];

$valor_liberado = $linha[97];
$obs2 = $linha[102];
$tabela = $linha[109];
$valor_total = $linha[113];
$valor_liquido_cliente = $linha[115];
$status_fisico = $linha['120'];
$num_bordero = $linha['121'];
$digitacao = $linha[154];
$datadigitacao = $linha[155];
$horadigitacao = $linha[156];
$emissaodedut = $linha[318];

?>
		
        <tr>
          <td width="4%">               <form name="form2" method="post" action="status_fisico.php"><div align="center" class="style9">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
             
  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">
  <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>">
  <input name="num_bordero" type="hidden" id="num_bordero" value="<? echo $num_bordero;  ?>">
  <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">
  
  <? echo $num_proposta; ?></div>
          </form></td>
          <td width="4%"><div align="center"><span class="style9"><? echo $emissaodedut; ?></span></div></td>
          <td width="5%"><div align="center"><span class="style9"><? echo $dataproposta; ?></span></div></td>
          <td width="5%"><div align="center"><span class="style9"><? echo $horaproposta; ?></span></div></td>
          <td width="5%"><div align="center"><span class="style9"><? echo $status; ?></span></div></td>
          <td width="5%"><div align="center"><span class="style9"><? echo $status_fisico; ?></span></div></td>
          <td width="5%"><div align="center"><span class="style9"><? echo $horadigitacao; ?></span></div></td>
          <td width="6%"><div align="center" class="style9"><? echo $valor_credito; ?></div></td>
          <td width="6%"><div align="center"><span class="style9"><? echo "R$ ".$valor_liquido_cliente;?></span></div></td>
          <td width="6%"><div align="center"><span class="style9"><? echo $valor_total;?></span></div></td>
          <td width="5%"><div align="center"><span class="style9"><? echo $tabela;?></span></div></td>
          <td width="12%">
            <div align="center" class="style9"><? echo $nome; ?></div></td>
          <td width="5%"><div align="center" class="style9"><? echo $cpf; ?></div></td>
          <td><div align="center" class="style9"><? echo $quant_parc; ?></div></td>
          <td><div align="center" class="style9"><? echo $parcela; ?></div></td>
          <td width="8%"><div align="center" class="style9"><? echo $tipo_proposta; ?></div></td>
          <td width="11%"><div align="center" class="style9"><? echo $bco_operacao; ?></div></td>

<? } ?>
</table>

<p>&nbsp;</p>



</body>
</html>
