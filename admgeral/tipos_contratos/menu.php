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

      <td colspan="4"><strong><font size="4">TRABALHANDO OS TIPOS DE CONTRATOS</font></strong></td>
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
  $tipo_contrato = $_POST['tipo_contrato'];
  $setor = $_POST['setor'];
  $status = "Ativo";


if($comando=="inserir"){

$comando = "insert into tipo_contrato(tipo_contrato,setor,status) values('$tipo_contrato','$setor','$status')";



mysql_query($comando,$conexao) or die("Erro ao gravar tipo de contrato");


echo "Tipo de contrato inserido com sucesso<br>";



}

?>
      </div></td>
      <td width="21%">&nbsp;</td>
      <td width="34%"><?
  $comando = $_POST['comando'];
   $codigo = $_POST['codigo'];
  $status_alterar = $_POST['status'];
 
  

if($comando=="editar"){
	
if($status_alterar=="Ativo"){
	
$status = "Inativo";

}

if($status_alterar=="Inativo"){
	
$status = "Ativo";

}
	
	
	

$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`tipo_contrato` set `status` = '$status' where `tipo_contrato`. `codigo` = '$codigo' limit 1 ";

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
            <td width="43%"><div align="center">Tipo de Contrato</div></td>
            <td width="33%"><div align="center">Setor</div></td>
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
              <input class='class02' name="tipo_contrato" type="text" id="tipo_contrato">
            </div></td>
            <td><div align="center">
              <select class='class02' name="setor" id="setor">
                <option>CONSIGNADO</option>
                <option>CP_VEICULOS</option>
              </select>
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
    <td width="8%"><div align="center"></div></td>
    <td width="46%"><div align="center">
      <table width="100%" border="0">
        <tr>
          <td width="2%"><div align="center"></div></td>
          <td width="31%"><div align="center">Tipo de Contrato</div></td>
          <td width="32%"><div align="center">Setor</div></td>
          <td width="26%"><div align="center">
            <form name="form2" method="post" action="menu.php">
              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
              <input name="comando" type="hidden" id="comando" value="editar">
<input class='class01' type="submit" name="Submit" value="Editar">
            </form>
          </div></td>
          <td width="9%"><div align="center"></div></td>
        </tr>
<?
$comando = $_POST['comando'];

if($comando =="editar"){
$sql = "select * from tipo_contrato order by tipo_contrato,setor asc";
}
else{
	
$sql = "select * from tipo_contrato where status = '...'";

}


$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$reg = 0;

$codigo = $linha[0];
$tipo_contrato = $linha[1];
$setor = $linha[2];
$status = $linha[3];

?>
        <tr>
          <td><div align="center"></div></td>
          <td><div align="center"><? echo $tipo_contrato; ?></div></td>
          <td><div align="center"><? echo $setor; ?></div></td>
          <td><div align="center">
            <form name="form4" method="post" action="menu.php">
              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
              <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
              <input name="comando" type="hidden" id="comando" value="editar">
              <input name="status" type="hidden" id="status" value="<? echo $status; ?>">
              <input class='class01' type="submit" name="button" id="button" value="<? echo $status; ?>">
            </form>
          </div></td>
          <td><div align="center"></div></td>
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

