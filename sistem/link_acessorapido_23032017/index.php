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
<title>Link's de Acesso Rapido</title>
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
.style5 {
	font-size: 24px;
	font-weight: bold;
}
.style6 {font-size: 9px}
.style1 {color: #000000;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>
<?

require '../../conect/conect.php';


$num_bordero = $_POST['num_bordero'];
$nome_operador = $_POST['nome_operador'];


$sql = "SELECT * FROM borderos where num_bordero = '$num_bordero' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$status = $linha[2];

}


?>


<body><form name="form1" method="post" action="../principal.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="button" id="button" value="Voltar">
      </form>
<p align="center" class="style5">link's para acesso rapido</p>



<table width="100%"  border="0">
  <tr class="style1">
    <td><div align="center" class="style1">Rotulo</div></td>
    <td><div align="center" class="style1">
      <div align="left"><strong>Url</strong></div>
    </div></td>
  </tr>
  <?

$sql = "select * from link_acessorapido order by rotulo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

$rotulo = $linha[1];

$url = $linha[2];

$target = $linha[3];


?>
  <tr>
    <td width="19%" valign="top"><div align="center"><strong><font color="#0000FF"><? echo "<a href='http://$url' target='$target'>$rotulo</a>"; ?></font></strong></div></td>
    <td width="70%" valign="top"><div align="left"><strong><font color="#0000FF"><? echo "<a href='http://$url' target='$target'>$url</a>"; ?></font></strong></div></td>
  </tr>
  <? } ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
