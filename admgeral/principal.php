<?php

/* Define o limitador de cache para 'private' */
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* Define o limite de tempo do cache em 30 minutos */
session_cache_expire(60);
$cache_expire = session_cache_expire();


session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");



require '../conect/conect.php';

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>

<?

$user= "select * from admgeral where usuario='$usuario' and  senha='$senha'";

$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");

if(mysql_num_rows($result)==0){




Header("Location: alerta.php");



}else{
	
	

$sql = "SELECT * FROM admgeral where usuario='$usuario' and  senha='$senha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nome = $linha['1'];

$dataultimatrocadesenha = $linha['55'];
$penultimasenha = $linha['56'];
$ultimasenha = $linha['57'];

}

$sql = "SELECT * FROM diaslimitetrocarsenha limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$diaslimite = $linha['1'];

}



$date = date('Y-m-d');
$hora = date('H:i:s');


// Calcula a diferença em segundos entre as datas
$diferenca = strtotime($date) - strtotime($dataultimatrocadesenha);

//Calcula a diferença em dias
$dias = floor($diferenca / (60 * 60 * 24));


if($dias>=$diaslimite){
	
	//echo "erro!! tente novamente em alguns instantes $dias - $diaslimite ";
	
	$_SESSION['nome'] = $nome;

	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	Header("Location: ups.php");
	
}else{


?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRAÇÃO GERAL</title>
</head>

<frameset rows="189,*" cols="*" frameborder="no" border="2" framespacing="0">
  <frame src="cabecalho.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
    <frame src="inicial_admgeral.php" name="navegacao" id="navegacao" title="navegacao" />
</frameset>
<? }} ?>
<noframes><body>
</body>
</noframes></html>
