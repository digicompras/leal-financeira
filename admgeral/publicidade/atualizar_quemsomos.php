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

$quemsomos = $_POST['quemsomos'];

	
if(empty($quemsomos)) {
	echo "ATENCAO!!!... <br><br>
	* O CAMPO QUEM SOMOS VAZIO<br><br>
	* VOCE DEVE PREENCHER O CAMPO - NAO PODENDO FICAR VAZIO<br><br>
	NAO FOI ALTERADO NADA REFERENTE AO TEXTOS DE QUEM SOMOS <br>";
	
}
else{
	
$comando = "update `$db`.`publicidade` set `quemsomos` = '$quemsomos' where `publicidade`. `codigo` = '$codigo' limit 1 ";
mysql_query($comando,$conexao) or die("Erro ao gravar quem somos");

echo "<br> Novas informacoes sobre o texto de quem somos insridas com sucesso!";
	
}
?>

<?

mysql_close($conexao);

?>

<form name="form1" method="post" action="menu.php">

  <input class='class01' type="submit" name="Submit3" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?>

</form>

<p>&nbsp;</p>

</body>

</html>