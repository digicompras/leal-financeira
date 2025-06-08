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
require 'conect/conect.php';
error_reporting(E_ALL);

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
	
$db = $linha[1];
	
}


$sql = "SELECT * FROM operadores where usuario = '$user' and senha = '$password'";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$nome = $linha[1];

$atualsenha = $linha['41'];
$penultimasenha = $linha['68'];
$ultimasenha = $linha['69'];

$atualusuario = $linha['40'];
$penultimousuario = $linha['70'];
$ultimousuario = $linha['71'];

}



?>
		  
		  
		  <?
		  
$date = date('Y-m-d');

$usuario = $_POST['usuario'];
$senhadooperador = $_POST['senha'];




if((empty($senhadooperador)) or ($senhadooperador==$ultimasenha) or ($senhadooperador==$penultimasenha) or ($senhadooperador==$atualsenha) ){

echo "<script>

alert('ATENCAO!!!... VOCE DEVE PREENCHER O CAMPO SENHA E DEVE SER DIFERENTE DAS DUAS ULTIMAS UTILIZADAS!.');
window.location = 'ups.php';

</script>";


	}else{


$comando = "update `$db`.`operadores` set `senha` = '$senhadooperador',`dataultimatrocadesenha` = '$date',`ultimasenha` = '$atualsenha',`penultimasenha` = '$ultimasenha' where `operadores`. `codigo` = '$codigo' limit 1 ";
mysql_query($comando,$conexao) or die("Erro ao alterar informações desse usuario");
	
	if(($nome=="ELISANDRA GIMENES MENDES LEAL ") or ($nome=="DIEGO ALVES LEAL ") ){
	
	$comando = "update `$db`.`admgeral` set `senha` = '$senhadooperador',`dataultimatrocadesenha` = '$date',`ultimasenha` = '$atualsenha',`penultimasenha` = '$ultimasenha' where `admgeral`. `nome` = '$nome' limit 1 ";
mysql_query($comando,$conexao) or die("Erro ao alterar informações desse usuario");
		
	}


Header("Location: raiz/index.php");

	}


?>





<body>

</body>
</html>
<?
mysql_close($conexao);
?>
