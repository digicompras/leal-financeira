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
<title>Relat&oacute;rio de Produ&ccedil;&atilde;o</title>
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
<p><?
//require("conect/conect.php"); or die("erro na requisi��o");
require '../../conect/conect.php';

$nome_operador = $_POST['nome_operador'];


error_reporting(E_ALL);
?>


</p>
<form name="form1" method="post" action="../index.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar ao menu principal">
</form>
<p>Para gerar o relat&oacute;rio mensal &eacute; necess&aacute;rio informar o operador o m&ecirc;s e ano! </p>
<form action="relatorio_de_producao_mensal_por_operador.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">Informe o operador<br></td>
      <td width="17%">      <strong><font color="#0000FF"><? echo $nome_operador; ?>
      <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">
      </font></strong></td>
      <td width="48%">&nbsp;        </td></tr>
    <tr>
      <td>Informe o m&ecirc;s e ano de refer&ecirc;ncia </td>
      <td><input name="mes_ano_status" type="text" id="mes_ano_status" size="7" maxlength="7">
      mm-aaaa</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Gerar Relat&oacute;rio"></td>
      <td>&nbsp;      </td>
    </tr>
  </table>
</form>
<form action="relatorio_de_producao_periodico_por_operador.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">Informe o operador<br></td>
      <td width="32%">        <strong><font color="#0000FF"><? echo $nome_operador; ?>
        <input name="nome_operador" type="hidden" id="nome_operador23" value="<? echo $nome_operador; ?>">
        </font></strong></td>
      <td width="33%">&nbsp; </td>
    </tr>
    <tr>
      <td>Informe o per&iacute;odo que deseja </td>
      <td>De
        <input name="data_inicial" type="text" id="data_inicial" size="10" maxlength="10">
at&eacute; <input name="data_final" type="text" id="data_final" size="10" maxlength="10">     
dd-mm-aaaa</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit3" value="Gerar Relat&oacute;rio Peri&oacute;dico"></td>
      <td>&nbsp; </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
