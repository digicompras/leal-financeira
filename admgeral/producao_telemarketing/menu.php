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
	
<style type="text/css">

<!--

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(../../imagens/fundocelulas2.png);
	background-repeat: no-repeat;
}

-->

</style>

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="2"><?

//require("conect/conect.php"); or die("erro na requisição");

require '../../conect/conect.php';

error_reporting(E_ALL);

?></td>
    </tr>


    <tr>

      <td width="23%"><form action="../principal.php" method="post" name="form1" target="_top">
        <input class='class01' type="submit" name="Submit" value="Voltar ao menu principal">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      </form></td>

      <td width="77%">&nbsp;</td>
    </tr>
  </table>

  <table width="70%" border="0" align="center">
    <tr>
      <td width="16%">
	  
<?
$codigo_atualizar = $_POST['codigo_atualizar'];

$limite_atualizar = $_POST['limite_atualizar'];

$quant_vezes_trabalhado_atualizar = $_POST['quant_vezes_trabalhado_atualizar'];


if(empty($codigo_atualizar)){

}
else{

$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`limite_diario_telemarketing` set `limite` = '$limite_atualizar',`quant_vezes_trabalhado` = '$quant_vezes_trabalhado_atualizar' where `limite_diario_telemarketing`. `codigo` = '$codigo_atualizar' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informações dos limites do telemarketing");

}

?>   



     <?
$sql = "SELECT * FROM limite_diario_telemarketing limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$codigo_at = $linha[0];

$limite = $linha[1];
$quant_vezes_trabalhado = $linha[2];

}

?></td>
      <td width="59%" background="../../imagens/fundocelulas1.png"><div align="center"><strong><font>ROTATIVIDADE DO TELEMARKETING</font></strong></div></td>
      <td width="25%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form2" method="post" action="menu.php">
Telemarketing atualmente rodando limite de exposi&ccedil;&atilde;o
<input class='class02' name="limite_atualizar" type="text" id="limite_atualizar" value="<? echo $limite; ?>" size="4" maxlength="4">
       e cliente que j&aacute; foram trabalhados 
       <select class='class02' name="quant_vezes_trabalhado_atualizar" id="quant_vezes_trabalhado_atualizar">
       
       <option selected><? echo $quant_vezes_trabalhado; ?></option>
         <?





    $sql = "select * from clientes group by quant_vezes_trabalhado order by quant_vezes_trabalhado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['quant_vezes_trabalhado']."</option>";

    }

?>
              </select>
      vezes
      <input name="codigo_atualizar" type="hidden" id="codigo_atualizar" value="<? echo $codigo_at; ?>">
      <input class='class01' type="submit" name="button" id="button" value="Atualizar">
      <?


$sql = "select * from clientes where quant_vezes_trabalhado = '$quant_vezes_trabalhado_atualizar' and telemarketing = 'Liberado' and dias_manutencao > '29' ";
$res = mysql_query($sql);
$total = mysql_num_rows($res);

echo "Total de registros encontrados ".$total;


?>
      </form>      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="70%" border="0" align="center">
    
    <tr>
      <td width="16%">&nbsp;</td>
      <td width="59%" colspan="3" background="../../imagens/fundocelulas1.png"><div align="center"><font><strong>RELAT&Oacute;RIO DE PRODU&Ccedil;&Atilde;O DE TELEMARKETING</strong></font></div></td>
      <td width="25%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><form name="form4" method="post" action="mapa_producao.php">
        <strong>
        <select class='class02' name="dia_inicial" id="mes_pagto">
          <?





    $sql = "select * from telemarketing group by dia_abertura order by dia_abertura desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_abertura']."</option>";

    }

?>
        </select>
        <select class='class02' name="mes_inicial" id="select10">
          <?





    $sql = "select * from telemarketing group by mes_abertura order by mes_abertura asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_abertura']."</option>";

    }

?>
        </select>
        <select class='class02' name="ano_inicial" id="mes_abertura">
          <?





    $sql = "select * from telemarketing group by ano_abertura order by ano_abertura desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_abertura']."</option>";

    }

?>
        </select>
        </strong> at&eacute; <strong>
        <select class='class02' name="dia_final" id="dia_inicial">
          <?





    $sql = "select * from telemarketing group by dia_abertura order by dia_abertura desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_abertura']."</option>";

    }

?>
        </select>
        <select class='class02' name="mes_final" id="mes_inicial">
          <?





    $sql = "select * from telemarketing group by mes_abertura order by mes_abertura asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_abertura']."</option>";

    }

?>
        </select>
        <select class='class02' name="ano_final" id="ano_inicial">
          <?





    $sql = "select * from telemarketing group by ano_abertura order by ano_abertura desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_abertura']."</option>";

    }

?>
        </select>
        </strong>
        <input class='class01' type="submit" name="Submit42" value="Mapa de Produ&ccedil;&atilde;o de Telemarketing">
      </form></td>
      <td>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>

</body>

</html>

