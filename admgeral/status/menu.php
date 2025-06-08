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

      <td width="77%"><strong><font size="4">O que deseja fazer com os Status?</font></strong></td>

    </tr>

    <tr>

      <td><form action="../principal.php" method="post" name="form1" target="_top">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit222" value="Voltar ao menu principal">

      </form></td>

      <td><form name="form5" method="post" action="menu.php">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
<?
$solicitacao = $_POST['solicitacao'];
$status_producao = $_POST['status_producao'];

if($solicitacao=="alterarstatusparacalculos"){

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`status_para_calculos` set `status_producao` = '$status_producao' where `status_para_calculos`. `codigo` = '0' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao alterar status");

echo "Alterado com sucesso";


}


?>
       Status considerado para calculos de produ&ccedil;&atilde;o 
       <select class='class02' name="status_producao" id="select4">
<?
$sql = "select * from status_para_calculos";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$status_de_calculos = $linha[1];

}

    $sql = "select * from status_para_calculos limit 1";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option selected>".$x['status_producao']."</option>";
    }
?>
<?
    $sql = "select * from status where status <> '$status_de_calculos' order by codigo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['status']."</option>";
    }
?>
         </option>
       </select>
       <input name="solicitacao" type="hidden" id="solicitacao" value="alterarstatusparacalculos">
       <input class='class01' type="submit" name="button" id="button" value="Atualizar">
      </form>
      </td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form2" method="post" action="inserir_status.php">

        <input class='class01' type="submit" name="Submit2" value="Inserir Status">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </form></td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form3" method="post" action="selecione_codigo_do_status_para_edicao.php">

        <input class='class01' type="submit" name="Submit3" value="Editar Status">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </form></td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form4" method="post" action="selecione_codigo_do_status_para_exclusao.php">

        <input class='class01' type="submit" name="Submit4" value="Excluir Status">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </form></td>

    </tr>

  </table>

<p>&nbsp; </p>

</body>

</html>

