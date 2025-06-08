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




      <p> <strong>Total de clientes cadastrados no banco de dados: 
        <? 	
$sql = "SELECT * FROM lojistas where ( mes = '$mes_niver' or mes2 = '$mes_niver' or mes3 = '$mes_niver' or mes4 = '$mes_niver' )";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_cli = mysql_num_rows($res);

}

echo "$registros_cli";
  ?>
      </strong><br> 
<span style="font-weight: bold">Mes pesquisado</span> <strong><? echo "$mes_niver"; ; ?></strong></p>
<p><strong>Data do relat&oacute;rio <? echo "$date - $hora"; ; ?></strong></p>


<table width="100%"  border="0">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center" >
            <form action="lojistas_aniversariantes_do_mes.php" method="post" name="form1" target="_blank">
              <input name="mes_niver" type="hidden" id="mes_niver" value="<? echo "$mes_niver"; ?>">
              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
              <input class="class01" type="submit" name="Submit32" value="Gerar Etiquetas por mes de anivers&aacute;rio">
                        </form>
            </div></td>
          <td><div align="center" >
            <form action="lojistas_exporta_excelaniversariantes_do_mes_com_telefones.php" method="post" name="form1" target="_blank">
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
<td><div align="center" ><strong>Loja</strong></div></td>
<td><div align="center" ><strong>Proprietario</strong></div></td>
<td><div align="center" ><strong>Data Nasc</strong></div></td>
<td><div align="center" ><strong>Celular</strong></div></td>
<td><div align="center" ><strong>E-Mail</strong></div></td>
		</tr>
        <?
					

$sql_2 = "SELECT * FROM lojistas where ( mes = '$mes_niver' or mes2 = '$mes_niver' or mes3 = '$mes_niver' or mes4 = '$mes_niver' ) order by nfantasia asc";


$res_2 = mysql_query($sql_2);

while($linha=mysql_fetch_row($res_2)) {

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


?>
        <tr>
          <td width="26%"><div align="center" class="style3"><? echo $nfantasia; ?></div></td>
          <td width="20%"><div align="center" class="style3"><? if ( $mes_niver==$mes){ echo "$proprietario"; }
			  if ( $mes_niver==$mes2){ echo "$proprietario2"; }
	if ( $mes_niver==$mes3){ echo "$proprietario3"; }
	if ( $mes_niver==$mes4){ echo "$proprietario4"; }
			  ?></div></td>
          <td width="19%"><div align="center" class="style3"><? if ( $mes_niver==$mes){ echo "$dia-$mes-$ano"; }
			  if ( $mes_niver==$mes2){ echo "$dia2-$mes2-$ano2"; }
			  if ( $mes_niver==$mes3){ echo "$dia3-$mes3-$ano3"; }
			  if ( $mes_niver==$mes4){ echo "$dia4-$mes4-$ano4"; }?></div></td>
          <td width="10%"><div align="center" class="style3"><? if ( $mes_niver==$mes){ echo "$celular"; }
			  if ( $mes_niver==$mes2){ echo "$celular2"; }
			  if ( $mes_niver==$mes3){ echo "$celular3"; }
			  if ( $mes_niver==$mes4){ echo "$celular4"; }?></div></td>
          <td width="25%"><div align="center" class="style3"><? if ( $mes_niver==$mes){ echo "$email_representante"; }
			  if ( $mes_niver==$mes2){ echo "$email_representante2"; }
			  if ( $mes_niver==$mes3){ echo "$email_representante3"; }
			  if ( $mes_niver==$mes4){ echo "$email_representante4"; }?></div></td>
       
          <? } ?>
        <tr>
          <td colspan="5"><div align="center"></div></td>
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

