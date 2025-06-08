<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");


$user = $_SESSION['usuario'];
$password = $_SESSION['senha'];

?>
<html>
<head>
<title></title>
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
</style>
</head>

<?
//require("conect/conect.php"); or die("erro na requisição");
require '../conect/conect.php';
error_reporting(E_ALL);

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
	
$db = $linha[1];
	
}


$sql = "SELECT * FROM admgeral where usuario = '$user' and senha = '$password'";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$nome = $linha[1];

$atualsenha = $linha['41'];
$penultimasenha = $linha['56'];
$ultimasenha = $linha['57'];

$atualusuario = $linha['40'];
$penultimousuario = $linha['58'];
$ultimousuario = $linha['59'];

}



?>
		  
		  
		  <?
		  
$date = date('Y-m-d');

$usuario = $_POST['usuario'];
$senhadousuario = $_POST['senha'];




if((empty($senhadousuario)) or ($senhadousuario==$ultimasenha) or ($senhadousuario==$penultimasenha) or ($senhadousuario==$atualsenha) ){

echo "<script>

alert('ATENCAO!!!... VOCE DEVE PREENCHER O CAMPO SENHA E DEVE SER DIFERENTE DAS DUAS ULTIMAS UTILIZADAS!.');
window.location = 'ups.php';

</script>";


	}else{


$comando = "update `$db`.`admgeral` set `senha` = '$senhadousuario',`dataultimatrocadesenha` = '$date',`ultimasenha` = '$atualsenha',`penultimasenha` = '$ultimasenha' where `admgeral`. `codigo` = '$codigo' limit 1 ";
mysql_query($comando,$conexao) or die("Erro ao alterar informações desse usuario");
	
$comando = "update `$db`.`operadores` set `senha` = '$senhadousuario',`dataultimatrocadesenha` = '$date',`ultimasenha` = '$atualsenha',`penultimasenha` = '$ultimasenha' where `operadores`. `nome` = '$nome' limit 1 ";
mysql_query($comando,$conexao) or die("Erro ao alterar informações desse usuario operador");


Header("Location: index.php");

	}


?>





<body>

</body>
</html>
<?
mysql_close($conexao);
?>
