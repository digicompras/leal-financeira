<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

require '../../conect/conect.php';

$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cep = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];
$telefone = $linha[12];
$fax = $linha[13];
$email_empresa = $linha[14];
$site = $linha[15];
}

?>
<html>
<head>
<title>Emiss&atilde;o de etiquetas para mala-direta - <? echo "$nfantasia"; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-right: 0mm;
	margin-bottom: 0mm;
	margin-left: 5mm;
	margin-top: 0mm;
}
.style1 {font-size: 12px}
.style4 {font-size: 11px}
-->
</style></head>


			


<body bgcolor="#ffffff">

<TABLE width="100%" border=0 align="center" cellPadding=3 cellSpacing=4>
    <?
	
$mes_niver = $_POST['mes_niver'];
	
$sql = "SELECT * FROM lojistas where ( mes = '$mes_niver' or mes2 = '$mes_niver' or mes3 = '$mes_niver' or mes4 = '$mes_niver' ) order by nfantasia asc";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
	
$codigo = $linha[0];

$razaosocial = $linha[1];

$nfantasia = $linha[2];

$cnpj = $linha[3];

$inscr_est = $linha[4];

$endereco = $linha[5];

$numero = $linha[6];

$bairro = $linha[7];

$complemento = $linha[8];

$cep = $linha[9];

$cidade = $linha[10];

$estado = $linha[11];

$telefone = $linha[12];

$fax = $linha[13];

$email = $linha[14];

$site = $linha[15];

$cpf = $linha[17];

$rg = $linha[18];

$operador = $linha[24];

$cel_operador = $linha[25];

$email_operador = $linha[26];

$estabelecimento = $linha[27];

$cidade_estabelecimento = $linha[28];

$tel_estabelecimento = $linha[29];

$email_estabelecimento = $linha[30];

$obs = $linha[19];

$datacadastro = $linha[20];

$horacadastro = $linha[21];

$dataalteracao = $linha[22];

$horaalteracao = $linha[23];

$operador_alterou = $linha[31];

$cel_operador_alterou = $linha[32];

$email_operador_alterou = $linha[33];

$estabelecimento_alterou = $linha[34];

$cidade_estabelecimento_alterou = $linha[35];

$tel_estabelecimento_alterou = $linha[36];

$email_estabelecimento_alterou = $linha[37];

$operador_atendente = $linha[41];
	
$proprietario = $linha[16];
$celular = $linha[44];
$email_representante = $linha[42];
$data_nasc = $linha[43];
	$dia = $linha[67];
	$mes = $linha[68];
	$ano = $linha[69];
	
$proprietario2 = $linha[45];
$cpf2 = $linha[79];
$celular2 = $linha[46];
$email_representante2 = $linha[47];
$data_nasc2 = $linha[48];
	$dia2 = $linha[70];
	$mes2 = $linha[71];
	$ano2 = $linha[72];

$proprietario3 = $linha[49];
$cpf3 = $linha[80];
$celular3 = $linha[50];
$email_representante3 = $linha[51];
$data_nasc3 = $linha[52];
	$dia3 = $linha[73];
	$mes3 = $linha[74];
	$ano3 = $linha[75];

$proprietario4 = $linha[53];
$cpf4 = $linha[81];
$celular4 = $linha[54];
$email_representante4 = $linha[55];
$data_nasc4 = $linha[56];
	$dia4 = $linha[76];
	$mes4 = $linha[77];
	$ano4 = $linha[78];
	
	$banco = $linha[57];
	$codagencia = $linha[58];
	$digitoagencia = $linha[59];
	$conta = $linha[60];
	$digitoconta = $linha[61];
	$tipoconta = $linha[62];
	$titularconta = $linha[63];
	$nomeagencia = $linha[64];
	$chavepix = $linha[65];
	$tipochavepix = $linha[66];
	
$reg++;
?>
  <td>    <div align="center"><span class="style1"><font color="#000000"><span class="style4"><? if ( $mes_niver==$mes){ echo "$proprietario"; }
			  if ( $mes_niver==$mes2){ echo "$proprietario2"; }
	if ( $mes_niver==$mes3){ echo "$proprietario3"; }
	if ( $mes_niver==$mes4){ echo "$proprietario4"; } ?></span></font><span class="style4"> <br>       
            <font color="#000000"><? echo "$nfantasia ";  ?></font> <br>        
            <font color="#000000"><font color="#000000"><? echo "$endereco, $numero, $bairro "; ?></font> </font> <font color="#000000"><? echo " $cidade  CEP $cep"; ?></font><br>
	        <font color="#000000"><? if ( $mes_niver==$mes){ echo "$email_representante"; }
			  if ( $mes_niver==$mes2){ echo "$email_representante2"; }
			  if ( $mes_niver==$mes3){ echo "$email_representante3"; }
			  if ( $mes_niver==$mes4){ echo "$email_representante4"; } ?></font> <font color="#000000"> <font color="#000000"></font></span><br><br><br>        
		  </span>
  </div></td>




          <?
if($reg==3){
echo "</tr><tr></tr><tr>";
$reg=0;
}
?>
<? } ?>

</TABLE>


</div>
<p>&nbsp;</p>
</body>
</html>
