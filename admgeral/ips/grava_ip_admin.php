<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
header("Location: alerta.php");

?>

<?
error_reporting(E_ALL);

//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");
require '../../conect/conect.php';



?>
<html>
<head>
<title>ZONA DE IP's</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
</p>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit" value="Voltar">
</form>



<?


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nome_admgeral = $linha[1];

}


$ip = $_POST['ip'];
$estab_pertence = $_POST['estab_pertence'];
$date = date('Y-m-d');
$hora = date('H:i:s');

$comando = "insert into ips_admin(ip,estab_pertence,usuario,senha,nome,date,hora) values('$ip','$estab_pertence','$usuario','$senha','$nome_admgeral','$date','$hora')";

mysql_query($comando,$conexao) or die("Erro ao gravar IP");


echo "IP autorizado com sucesso<br>";




?>

<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>