<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");



?>

<?

require '../../conect/conect.php';

?>

<html>

<head>

<title>Documento sem t&iacute;tulo</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<form name="form1" method="post" action="menu.php">

  <input type="submit" name="Submit3" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
</form>

<form action="grava_publicidade.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%" border="0" cellspacing="10">


    <tr>

      <td width="18%"></td>

      <td colspan="2">






<br>

<strong><font color="#0000FF" size="4">Inserir arte da publicidade !</font></strong></td>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 

      <td><strong><font color="#0000FF">Imagem</font></strong></td>

      <td width="26%"><input name="imagem" type="file" id="arquivo2"> 

        <font color="#0000FF" size="4">
        <input name="posicao1" type="hidden" id="posicao1" value="1">
        </font></td>
      <td width="56%"><?
$sql = "select * from publicidade where posicao = '1' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo1 = $linha[0];
$posicao1 = $linha[1];
$imagem1 = $linha[2];


}

	  
	   if($posicao1==1){echo "<a href='../../publicidade/$imagem1' target='_blank'><img src='../../publicidade/$imagem1' border='0' width='300'></a>"; } ?>  </td>
    </tr>
    <tr>
      <td>Texto</td>
      <td colspan="2"><textarea name="texto1" id="texto1" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Tamanho</td>
      <td colspan="2"><select name="tamanho1" id="tamanho1">
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>14</option>
        <option>16</option>
        <option>18</option>
        <option>20</option>
        <option>24</option>
        <option>26</option>
        <option>28</option>
        <option>30</option>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><input type="submit" name="Submit" value="Salvar"></td>
    </tr>
  </table>

</form>

<p>&nbsp; </p>

</body>

</html>

