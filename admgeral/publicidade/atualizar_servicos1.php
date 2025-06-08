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

$titulo1_servico = $_POST['titulo1_servico'];

$texto1_servico = $_POST['texto1_servico'];
	
	
if(empty($titulo1_servico) or empty($texto1_servico) ){
	echo "ATENCAO!!!... <br><br>
	* OS CAMPOS OU UM DOS CAMPOS ESTA(AOS) VAZIOS<br><br>
	* VOCE DEVE PREENCHER OS DOIS CAMPOS - NAO PODENDO FICAR VAZIO<br><br>
	NAO FOI ALTERADO NADA REFERENTE AOS TEXTOS DE SERVICOS <br>";
	
}
else{
	
$comando = "update `$db`.`publicidade` set `titulo1_servico` = '$titulo1_servico',`texto1_servico` = '$texto1_servico' where `publicidade`. `codigo` = '$codigo' limit 1 ";
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