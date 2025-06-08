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



<title>Processamento de arquivos</title>



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



<p>        



<?

require '../../conect/conect.php';
error_reporting(E_ALL);
	
	$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$db = $linha[1];
}
?>



</p>



<p>&nbsp;</p>

<?
	
$codigo = $_POST['codigo'];
	
$paragrafo1 = $_POST['paragrafo1'];
	
$paragrafo2 = $_POST['paragrafo2'];

$paragrafo3 = $_POST['paragrafo3'];

$paragrafo4 = $_POST['paragrafo4'];
	
	

	
$comando = "update `$db`.`orientacoes_propostas` set `paragrafo1` = '$paragrafo1',`paragrafo2` = '$paragrafo2',`paragrafo3` = '$paragrafo3',`paragrafo4` = '$paragrafo4' where `orientacoes_propostas`. `codigo` = '$codigo' limit 1 ";
mysql_query($comando,$conexao) or die("Erro ao gravar orientacoes da proposta");

echo "<br> Novas informacoes insridas com sucesso!";
	


?>

<?

mysql_close($conexao);

?>

<form action="orientacao_da_proposta.php" method="post" name="form1" target="navegacao">

  <input class='class01' type="submit" name="Submit3" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?>

</form>

<p>&nbsp;</p>

</body>

</html>