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

<form action="gravar.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="2">        <?

require '../../conect/conect.php';

?>



</td>

    </tr>

    <tr>

      <td width="11%">&nbsp;</td>

      <td width="89%"><strong><font color="#0000FF" size="4">Tela de cadastro de cidades Brasileiras!</font></strong></td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF">Rotulo:</font></strong></td>

      <td><input name="rotulo" type="text" id="rotulo" size="50" maxlength="50"></td>

    </tr>

    <tr> 

      <td><font color="#0000FF"><strong>Url<font color="#0000FF">:</font></strong></font></td>

      <td><input name="url" type="text" id="url" size="100"></td>

    </tr>

    <tr> 

      <td>&nbsp;</td>

      <td><input type="submit" name="Submit" value="Gravar">

      <input type="reset" name="Submit2" value="Limpar"></td>

    </tr>

    <tr> 

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

</form>
<p>&nbsp; </p>

</body>



</html>

<? 


mysql_close($conexao);

?>



