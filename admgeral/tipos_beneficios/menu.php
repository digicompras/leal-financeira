<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");

ini_set('default_charset','UTF8_general_mysql500_ci');

?>

<html>

<head>

<title>Documento sem t&iacute;tulo</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>



<body>

<table background="../../imagens/fundocelulas2.png" width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="5">

        <?

require '../../conect/conect.php';



?>

	  </td>

    </tr>

    <tr>

      <td width="12%">&nbsp;</td>

      <td colspan="4"><strong><font size="4">TRABALHANDO OS TIPOS DE BENEFICIOS</font></strong></td>
    </tr>

    <tr>

      <td><form action="../propostas/menu.php" method="post" name="form1" target="navegacao">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit22" value="Voltar">

      </form></td>

      <td width="33%" colspan="2"><div align="center">
        <?
  $comando = $_POST['comando'];
  $codigo_inss = $_POST['codigo_inss'];
  $especiedebeneficio = $_POST['especiedebeneficio'];
  $status = "ativo";


if($comando=="inserir"){

$comando = "insert into tabela_beneficios(codigo_inss,especiedebeneficio,status) values('$codigo_inss','$especiedebeneficio','$status')";



mysql_query($comando,$conexao) or die("Erro ao gravar tipo de beneficio");


echo "Tipo de beneficio inserido com sucesso<br>";



}

?>
      </div></td>
      <td width="21%">&nbsp;</td>
      <td width="34%"><?
  $comando = $_POST['comando'];
   $codigo = $_POST['codigo'];
		  $codigo_inss = $_POST['codigo_inss'];
  $status_alterar = $_POST['status'];
 
  

if($comando=="editar"){
	
if($status_alterar=="ativo"){
	
$status = "inativo";

}

if($status_alterar=="inativo"){
	
$status = "ativo";

}
	
	
	

$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`tabela_beneficios` set `status` = '$status' where `tabela_beneficios`. `codigo_inss` = '$codigo_inss' limit 1 ";

}


mysql_query($comando,$conexao) or die("Erro ao alterar status");


//echo "<br>";



}

?></td>
    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

  </table>
<p>&nbsp; </p>
<table background="../../imagens/fundocelulas2.png" width="100%" border="0">
  <tr>
    <td width="46%" valign="top"><div align="center">
      <form name="form3" method="post" action="menu.php">
        <table width="100%" border="0">
          <tr>
            <td width="2%"><div align="center"></div></td>
            <td width="43%"><div align="center">Codigo INSS</div></td>
            <td width="33%"><div align="center">Especie de Beneficio</div></td>
            <td width="19%"><div align="center"></div></td>
            <td width="3%"><div align="center"></div></td>
          </tr>
          <tr>
            <td><div align="center"></div></td>
            <td><div align="center">
              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
              <input name="comando" type="hidden" id="comando" value="inserir">
              <input class='class02' name="codigo_inss" type="text" id="codigo_inss">
            </div></td>
            <td><div align="center">
              <input class='class02' name="especiedebeneficio" type="text" id="especiedebeneficio">
              <input name="status" type="hidden" id="status" value="ativo">
            </div></td>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
          </tr>
          <tr>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
            <td><div align="center">
              <input class='class01' type="submit" name="Submit2" value="Inserir">
            </div></td>
            <td><div align="center"></div></td>
          </tr>
        </table>
      </form>
    </div>      <div align="center"></div></td>
    <td width="3%"><div align="center"></div></td>
    <td width="51%"><div align="center">
      <table width="100%" border="0">
        <tr>
          <td width="2%"><div align="center"></div></td>
          <td width="14%"><div align="center">Codigo INSS</div></td>
          <td width="55%"><div align="center">Especie de Beneficio</div></td>
          <td width="20%"><div align="center">
            <form name="form2" method="post" action="menu.php">
              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
              <input name="comando" type="hidden" id="comando" value="editar">
  <input class='class01' type="submit" name="Submit" value="Buscar">
              </form>
          </div></td>
          </tr>
<?
$comando = $_POST['comando'];

if($comando =="editar"){
$sql = "select * from tabela_beneficios order by codigo_inss asc";
}
else{
	
$sql = "select * from tabela_beneficios where status = '...'";

}


$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$reg = 0;

$codigo = $linha[0];
$codigo_inss = $linha[1];
$especiedebeneficio = $linha[2];
$status = $linha[3];

?>
        <tr>
          <td><div align="center"></div></td>
          <td><div align="center"><? echo $codigo_inss; ?></div></td>
          <td><div align="center"><? echo $especiedebeneficio; ?></div></td>
          <td><div align="center">
            <form name="form4" method="post" action="menu.php">
              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
              <input name="codigo_inss" type="hidden" id="codigo_inss" value="<? echo $codigo_inss; ?>">
              <input name="comando" type="hidden" id="comando" value="editar">
              <input name="status" type="hidden" id="status" value="<? echo $status; ?>">
              <input class='class01' type="submit" name="button" id="button" value="<? echo $status; ?>">
              </form>
          </div></td>
          </tr>
<?

}

?>
        </table>
    </div>      <div align="center"></div></td>
  </tr>
</table>
</body>

</html>

