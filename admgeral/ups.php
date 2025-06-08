<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["nome"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

?>

<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$nome = $_SESSION['nome'];



require '../conect/conect.php';


$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>
<?

//$nome = $_POST['nome'];


$sql = "SELECT * FROM admgeral where nome = '$nome' and usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$nome = $linha[1];

}
?>


<form name="form1" method="post" action="gss.php">

<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" align="center" background="../imagens/fundocelulas1.png"><strong>TROCA OBRIGATORIA DE SENHA!!! SEJA RAPIDO!!!...DIFERENTE DAS DUAS ULTIMAS!!!...</strong></td>
      <td width="21%"><strong><font color="#0000FF"></font></strong></td>
      <td width="33%"></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="12%" background="../imagens/fundocelulas2.png">&nbsp;</td>
      <td width="33%" background="../imagens/fundocelulas2.png"><? echo "$nome<br>"; ?><input name="usuario" type="hidden" id="usuario" value=""></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right" background="../imagens/fundocelulas2.png"><strong>Senha</strong></td>
      <td background="../imagens/fundocelulas2.png"><input class='class02' name="senha" type="text" id="senha" value=""></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" align="center" background="../imagens/fundocelulas2.png"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>        <input class='class01' type="submit" name="Submit" value="Alterar"></td><td><div align="right"> </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>


</body>
</html>
