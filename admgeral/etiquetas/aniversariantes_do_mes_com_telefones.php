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

$nfantasia_empresa = $linha[2];
$endereco_empresa = $linha[5];
$numero_empresa = $linha[6];
$bairro_empresa = $linha[7];
$cep_empresa = $linha[9];
$cidade_empresa = $linha[10];
$estado_empresa = $linha[11];
$telefone_empresa = $linha[12];
$fax_empresa = $linha[13];
$email_empresa = $linha[14];
$site_empresa = $linha[15];
}



?>

<html>

<head>

<title>ANIVERSARIANTES DO MES COM TELEFONES - <? echo "$nfantasia"; ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 14px;
	}


.style2 {	color: #0000FF;

	font-weight: bold;

}

.style3 {
	color: #000000;
	font-size: 18px;
	}
	
.style4 {
	color: #0000FF;
	font-weight: bold;
	font-size: 28px;
}
	
.style5 {
	color: #0000FF;
	font-weight: bold;
	font-size: 28px;
}
.style6 {color: #FF0000}



-->

</style>
</head>

<?






$mes_niver = $_POST['mes_niver'];




$date = date('Y-m-d');

$hora = date('H:i:s');



$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

//$cor_fundo_navegacao = $linha[1];
$cor_fundo_navegacao2 = $linha[2];
	
}

?>





<body bgcolor="<? echo "$cor_fundo_navegacao2"; ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">




      <p> <strong>Total de clientes cadastrados no banco de dados  - 
        <? 	
$sql = "SELECT * FROM clientes where mes_niver = '$mes_niver'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_cli = mysql_num_rows($res);

}

echo "$registros_cli";
  ?>
      </strong><br>
</p>
<p><strong>Data do relat&oacute;rio <? echo "$date - $hora"; ; ?></strong></p>


<table width="100%"  border="0">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2"><div align="center" >
            <form action="aniversariantes_do_mes.php" method="post" name="form1" target="_blank">
              <input name="mes_niver" type="hidden" id="mes_niver" value="<? echo "$mes_niver"; ?>">
              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
              <input class="class01" type="submit" name="Submit32" value="Gerar Etiquetas por mes de anivers&aacute;rio">
                        </form>
            </div></td>
          <td colspan="2"><div align="center" >
            <form action="exporta_excelaniversariantes_do_mes_com_telefones.php" method="post" name="form1" target="_blank">
              <input name="mes_niver" type="hidden" id="mes_niver" value="<? echo "$mes_niver"; ?>">
              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
              <input class="class01" type="submit" name="Submit32" value="Exportar para excel">
                        </form>
            </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
<td><div align="center" ><strong>Cliente</strong></div></td>
<td><div align="center" ><strong>CPF</strong></div></td>
<td><div align="center" ><strong>Data Nasc</strong></div></td>
<td><div align="center" ><strong>Telefone</strong></div></td>
<td><div align="center" ><strong>Celular</strong></div></td>
<td><div align="center" ><strong>Celular 2</strong></div></td>
<td><div align="center" ><strong>E-Mail</strong></div></td>
		</tr>
        <?
					

$sql_2 = "SELECT * FROM clientes where mes_niver = '$mes_niver' order by dia_niver asc";


$res_2 = mysql_query($sql_2);

while($linha=mysql_fetch_row($res_2)) {



$codigo = $linha[0];

$nome = $linha[1];

$sexo = $linha[2];

$estadocivil = $linha[3];

$cpf = $linha[4];

$rg = $linha[5];

$orgao = $linha[6];

$emissao = $linha[7];

$data_nasc = $linha[8];

$pai = $linha[9];

$mae = $linha[10];

$endereco = $linha[11];

$numero = $linha[12];

$bairro = $linha[13];

$complemento = $linha[14];

$cidade = $linha[15];

$estado = $linha[16];

$cep = $linha[17];

$telefone = $linha[18];

$celular = $linha[19];
$celular2 = $linha[140];

$email = $linha[20];

$operador = $linha[21];

$cel_operador = $linha[22];

$email_operador = $linha[23];

$estabelecimento = $linha[24];

$cidade_estabelecimento = $linha[25];

$tel_estabelecimento = $linha[26];

$email_estabelecimento = $linha[27];

$obs = $linha[28];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$dataalteracao = $linha[31];

$horaalteracao = $linha[32];

$operador_alterou = $linha[33];

$cel_operador_alterou = $linha[34];

$email_operador_alterou = $linha[35];

$estabelecimento_alterou = $linha[36];

$cidade_estabelecimento_alterou = $linha[37];

$tel_estabelecimento_alterou = $linha[38];

$email_estabelecimento_alterou = $linha[39];

$tipo = $linha[40];

$banco = $linha[41];

$agencia = $linha[42];

$conta = $linha[43];

$num_beneficio = $linha[44];



$parc1 = $linha[45];

$banco1 = $linha[46];

$vencto1 = $linha[47];

$compra1 = $linha[48];



$parc2 = $linha[49];

$banco2 = $linha[50];

$vencto2 = $linha[51];

$compra2 = $linha[52];



$parc3 = $linha[53];

$banco3 = $linha[54];

$vencto3 = $linha[55];

$compra3 = $linha[56];



$parc4 = $linha[57];

$banco4 = $linha[58];

$vencto4 = $linha[59];

$compra4 = $linha[60];



$parc5 = $linha[61];

$banco5 = $linha[62];

$vencto5 = $linha[63];

$compra5 = $linha[64];



$parc6 = $linha[65];

$banco6 = $linha[66];

$vencto6 = $linha[67];

$compra6 = $linha[68];



$parc7 = $linha[69];

$banco7 = $linha[70];

$vencto7 = $linha[71];

$compra7 = $linha[72];



$num_beneficio2 = $linha[73];

$num_beneficio3 = $linha[74];

$num_beneficio4 = $linha[75];



$dataprev2 = $linha[76];

$obs2 = $linha[77];





$dataprev = $linha[76];

$cpf_rg = $linha[78];

$comp_end = $linha[79];

$comp_quit1 = $linha[80];

$comp_quit2 = $linha[81];

$comp_quit3 = $linha[82];

$comp_quit4 = $linha[83];

$comp_quit5 = $linha[84];

$comp_quit6 = $linha[85];

$comp_renda = $linha[86];

$cpf_rg_testemunha = $linha[87];

$dia_niver = $linha[138];
$mes_niver = $linha[88];
$ano_niver = $linha[139];

$status_cliente = $linha[89];

$tem_margem = $linha[107];
$saldo1 = $linha[108];
$saldo2 = $linha[109];
$saldo3 = $linha[110];
$saldo4 = $linha[111];
$saldo5 = $linha[112];
$saldo6 = $linha[113];
$saldo7 = $linha[114];
$naturalidade = $linha[115];
$pagto_beneficio = $linha[116];



?>
        <tr>
          <td width="30%"><div align="center" class="style3"><? echo $nome; ?></div></td>
          <td width="11%"><div align="center" class="style3"><? echo $cpf; ?></div></td>
          <td width="12%"><div align="center" class="style3"><? echo "$dia_niver-$mes_niver-$ano_niver"; ?></div></td>
          <td width="16%"><div align="center" class="style3"><? echo $telefone; ?></div></td>
          <td width="10%"><div align="center" class="style3"><? echo $celular; ?></div></td>
          <td width="10%"><div align="center" class="style3"><? echo $celular2; ?></div></td>
          <td width="11%"><div align="center" class="style3"><? echo $email; ?></div></td>
          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>
          <? } ?>
        <tr>
          <td colspan="7"><div align="center"></div></td>
</table>
<p>&nbsp;</p>      
<p></p>
      <p>
<p>&nbsp;</p>
<p align="center"><br>

<span ><strong><? echo $site_empresa; ?></strong></span>

<br>

<? echo $endereco_empresa; ?>

,

<? echo $numero_empresa; ?> - <? echo $bairro_empresa; ?> - <? echo $cidade_empresa; ?> - <? echo $estado_empresa; ?> - <? echo $cep_empresa; ?>

<br>

<? echo "Telefone / Fax: ". $telefone_empresa." "; ?>

/ <? echo $fax_empresa; ?>

<br>

<? echo "E-Mail: ". $email_empresa; ?>

</p>

<p align="center">

  <? echo $meta_inss; ?>

 </p>

</body>

</html>

