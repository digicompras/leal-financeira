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

      <td colspan="2"><?

//require("conect/conect.php"); or die("erro na requisi��o");

require '../../conect/conect.php';

error_reporting(E_ALL);

?>





</td>

    </tr>

    <tr>

      <td width="23%">&nbsp;</td>

      <td width="77%"><strong><font size="4">O que deseja fazer com os agentes?</font></strong></td>

    </tr>

    <tr>

      <td><form action="../principal.php" method="post" name="form1" target="_top">
        <input class='class01' type="submit" name="Submit5" value="Voltar ao menu principal">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      </form></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td><form name="form5" method="post" action="informe_correspondente_para_gerar_relatorio_mensal_ou_periodico.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit" value="Relat&oacute;rio por Agente">

      </form></td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td><form name="form9" method="post" action="informe_correspondente_para_verificar_propostas_aguardando_ativacao.php">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input class='class01' type="submit" name="Submit23" value="Verificar status por Agente">
      </form></td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form action="informe_estabelecimento.php" method="post" name="form2">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit2" value="Cadastrar Agente">

      </form></td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form3" method="post" action="informe_correspondente_para_edicao.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit3" value="Editar Agente">

      </form></td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form4" method="post" action="informe_correspondente_para_exclusao.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit4" value="Excluir Agente">

      </form></td>

    </tr>

  </table>

<p>&nbsp; </p>

</body>

</html>

