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

$titulo2_servico = $_POST['titulo2_servico'];

$texto2_servico = $_POST['texto2_servico'];
	
	
if(empty($titulo2_servico) or empty($texto2_servico) ){
	echo "ATENCAO!!!... <br><br>
	* OS CAMPOS OU UM DOS CAMPOS ESTA(AOS) VAZIOS<br><br>
	* VOCE DEVE PREENCHER OS DOIS CAMPOS - NAO PODENDO FICAR VAZIO<br><br>
	NAO FOI ALTERADO NADA REFERENTE AOS TEXTOS DE SERVICOS <br>";
	
}
else{
	
$comando = "update `$db`.`publicidade` set `titulo2_servico` = '$titulo2_servico',`texto2_servico` = '$texto2_servico' where `publicidade`. `codigo` = '$codigo' limit 1 ";
mysql_query($comando,$conexao) or die("Erro ao gravar servico");

echo "<br> Novas informacoes sobre os textos 1 e 2 insridas com sucesso!";
	
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