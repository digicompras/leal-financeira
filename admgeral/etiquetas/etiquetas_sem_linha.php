<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
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
	margin-bottom: 8mm;
	margin-left: 0mm;
	margin-top: 12mm;
}
.style1 {font-size: 12px}
.style4 {font-size: 11px}
-->
</style></head>


			<?
			

			
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("ffffff"); ?>" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); }?>" bgproperties="fixed">

    <?
	
$tipo = $_POST['tipo'];
	
$sql = "SELECT * FROM clientes where tipo = '$tipo' order by nome asc";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;
?>
<td>
<div align="center"><span class="style1"><font color="#000000"><span class="style4"><? echo $linha[1]; ?></span></font><span class="style4"><br>        
<font color="#000000"><? echo $linha[11]; ?></font> <br>        
<font color="#000000"><font color="#000000"><? echo $linha[12]; ?></font> <? echo $linha[13]; ?></font> <font color="#000000"><? echo $linha[14]; ?></font><br>
<font color="#000000"><? echo $linha[15]; ?></font> <font color="#000000"> <font color="#000000"><? echo $linha[17]; ?></font></span><br><br><br>
		  </span>
  </div>

</td>


          <?
if($reg==3){
echo "<br>";
$reg=0;
}
?>
<? } ?>



</div>
</body>
</html>
