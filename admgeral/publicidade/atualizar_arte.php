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


$imagem1 = $_FILES['imagem1']['name'];
	
$codigo = $_POST['codigo'];

$texto1_da_img1 = $_POST['texto1_da_img1'];

$texto2_da_img1 = $_POST['texto2_da_img1'];
	
	
if(($imagem1<>"imagem1.jpg") or empty($imagem1) ){
	echo "ATENCAO!!!... <br><br>
	* O NOME DO ARQUIVO DEVE SER OBRIGATORIAMENTE imagem1.jpg(minúsculo)<br><br>
	* VOCE DEVE ESCOLHER UMA IMAGEM - NAO PODENDO FICAR VAZIO ESSE CAMPO<br><br>
	NAO FOI ALTERADO NADA REFERENTE A IMAGEM <br>";
	
$comando = "update `$db`.`publicidade` set `texto1_da_img1` = '$texto1_da_img1',`texto2_da_img1` = '$texto2_da_img1' where `publicidade`. `codigo` = '$codigo' limit 1 ";
mysql_query($comando,$conexao) or die("Erro ao gravar arte");

echo "<br> Novas informacoes insridas com sucesso!";
	
}
else{

	$imagem_old = "imagem1.jpg";
if(file_exists("../../raiz/images/.$imagem_old"))
{
unlink('../../raiz/images/'.$imagem_old);
}	


$uploaddir1 = '../../raiz/images/';

$uploadfile1 = $uploaddir1. $_FILES['imagem1']['name'];

if(move_uploaded_file($_FILES['imagem1']['tmp_name'], $uploaddir1 . $_FILES['imagem1']['name'])){
echo "imagem 1 enviada com sucesso! ";
} else {
echo "Erro no envio da imagem 1";
}
	
	
$comando = "update `$db`.`publicidade` set `imagem1` = '$imagem1',`texto1_da_img1` = '$texto1_da_img1',`texto2_da_img1` = '$texto2_da_img1' where `publicidade`. `codigo` = '$codigo' limit 1 ";
mysql_query($comando,$conexao) or die("Erro ao gravar arte");

echo "Novas informacoes insridas com sucesso!";
	
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