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

  <table background="../../imagens/fundocelulas2.png" width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="2">        <?

require '../../conect/conect.php';

?>



</td>

    </tr>

    <tr>

      <td width="23%">&nbsp;</td>

      <td width="77%"><strong><font size="4">O que deseja fazer com os Bancos?</font></strong></td>

    </tr>

    <tr>

      <td><form action="../principal.php" method="post" name="form1" target="_top">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit" value="Voltar ao menu principal">

      </form></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form2" method="post" action="inserir_banco.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit2" value="Inserir Banco">

      </form></td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form3" method="post" action="selecione_codigo_banco_edicao.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit3" value="Editar Banco">

      </form></td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form4" method="post" action="selecione_codigo_exclusao_banco.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit4" value="Excluir Banco">

      </form></td>

    </tr>

  </table>

<p>&nbsp; </p>

</body>

</html>

