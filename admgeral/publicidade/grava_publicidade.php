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

$sql = "select * from publicidade ";

$resultado=mysql_query($sql);

$registros_total = mysql_num_rows($resultado);

if($registros_total<=2){
//-----------------------------IMAGEM 1--------------------------------

$imagem = $_FILES['imagem']['name'];
$posicao1 = $_POST['posicao1'];
$texto1 = $_POST['texto1'];
$tamanho1 = $_POST['tamanho1'];


$uploaddir = '../../publicidade/';

$uploadfile = $uploaddir. $_FILES['imagem']['name'];


if(move_uploaded_file($_FILES['imagem']['tmp_name'], $uploaddir . $_FILES['imagem']['name'])){


$comando = "insert into publicidade(posicao,imagem,texto1,tamanho1) values('$posicao','$imagem','$texto1','$tamanho1')";


mysql_query($comando,$conexao) or die("Erro ao gravar arte 1");


echo "Arte 1 inserida no banco de dados com sucesso<br>";

} else {

echo "Arte 1 n�o enviada! ";

}

//-----------------------fim imagem 1--------------------------------------------

//------------------------imagem 2----------------------------------------------


$imagem2 = $_FILES['imagem2']['name'];
$posicao1 = $_POST['posicao2'];


$uploaddir2 = '../../publicidade/';

$uploadfile2 = $uploaddir2. $_FILES['imagem2']['name'];


if(move_uploaded_file($_FILES['imagem2']['tmp_name'], $uploaddir2 . $_FILES['imagem2']['name'])){


$comando = "insert into publicidade(posicao,imagem) values('$posicao2','$imagem2')";


mysql_query($comando,$conexao) or die("Erro ao gravar arte 2");


echo "Arte 2 inserida no banco de dados com sucesso<br>";

} else {

echo "Arte 2 n�o enviada! ";

}

//-------------------------fim imagem 2---------------------------------------

//--------------------------imagem 3-----------------------------------------


$imagem3 = $_FILES['imagem3']['name'];
$posicao1 = $_POST['posicao3'];


$uploaddir3 = '../../publicidade/';

$uploadfile3 = $uploaddir3. $_FILES['imagem3']['name'];


if(move_uploaded_file($_FILES['imagem3']['tmp_name'], $uploaddir3 . $_FILES['imagem3']['name'])){


$comando = "insert into publicidade(posicao,imagem) values('$posicao3','$imagem3')";


mysql_query($comando,$conexao) or die("Erro ao gravar arte 3");


echo "Arte 3 inserida no banco de dados com sucesso<br>";

} else {

echo "Arte 3 n�o enviada! ";

}

//----------------------------fim imagem 3 -------------------------------------

}
else{

echo "ATEN��O VOC� J� INSERIU O N� M�XIMO DE IMAGENS PERMITIDO....UTILIZE AS OP��ES TROCAR IMAGENS OU EXCLUIR IMAGENS PARA PODER ADICIONAR A IMAGEM QUE EST� TENTANDO!!!...";

}




?>

<html>

<head>

<title>Documento sem t&iacute;tulo</title>

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

</p>

<form name="form1" method="post" action="menu.php">

  <input type="submit" name="Submit" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

</form>

<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>