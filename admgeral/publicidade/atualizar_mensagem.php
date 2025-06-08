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

$mensagem = $_POST['mensagem'];

	
if(empty($mensagem)) {
	echo "ATENCAO!!!... <br><br>
	* O CAMPO MENSAGEM VAZIO<br><br>
	* VOCE DEVE PREENCHER O CAMPO - NAO PODENDO FICAR VAZIO<br><br>
	NAO FOI ALTERADO NADA REFERENTE AO TEXTOS DA MENSAGEM <br>";
	
}
else{
	
$comando = "update `$db`.`publicidade` set `mensagem` = '$mensagem' where `publicidade`. `codigo` = '$codigo' limit 1 ";
mysql_query($comando,$conexao) or die("Erro ao gravar mensagem");

echo "<br> Novas informacoes sobre o texto da mensagem insridas com sucesso!";
	
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