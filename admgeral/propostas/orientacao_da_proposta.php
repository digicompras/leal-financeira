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
<?
header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
clearstatcache();
?>
<script language='JavaScript' type='text/javascript'>
caches.open('nome-do-cache')
  .then(cache => {
    cache.delete('chave-do-arquivo');
  });
</script>
<html>

<head>

<title>Documento sem t&iacute;tulo</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table background="../../imagens/fundocelulas2.png" width="100%" border="0" cellspacing="10">

    <tr>



      <td colspan="2"><form action="menu.php" method="post" name="form1" target="navegacao">
        <input class='class01' type="submit" name="Submit" value="Voltar">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      </form></td>



      <td width="15%">&nbsp;</td>

    </tr>



    <tr>



      <td colspan="3" align="center"><strong><font size="4">O que deseja fazer com as orienta&ccedil;&otilde;es da proposta?</font></strong></td>

    </tr>
    <tr>
      <td width="74%" align="left"><form action="atualizar_orientacoes_da_prposta.php" method="post" enctype="multipart/form-data" name="form2">
        <table width="99%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td width="38%" align="center" valign="top"><br>
            <?

$sql = "select * from orientacoes_propostas limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

$paragrafo1 = $linha[1];

$paragrafo2 = $linha[2];

$paragrafo3 = $linha[3];
	
$paragrafo4 = $linha[4];

}

  ?></td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%">&nbsp;</td>
            <td>Escolha a nova arte  para publicar no site!<br>
              <font color="#0000FF" size="4">
                <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
              </font></td>
            <td width="3%">&nbsp;</td>
            <td width="11%">&nbsp;</td>
            <td width="38%">&nbsp;</td>
          </tr>
          <tr>
            <td>Paragrafo 1</td>
            <td><textarea class='class02' name="paragrafo1" id="paragrafo1" cols="45" rows="5"><? echo "$paragrafo1"; ?></textarea></td>
            <td>&nbsp;</td>
            <td>Paragrafo 3</td>
            <td><textarea class='class02' name="paragrafo3" id="paragrafo3" cols="45" rows="5"><? echo "$paragrafo3"; ?></textarea></td>
          </tr>
          <tr>
            <td>Paragrafo 2</td>
            <td><textarea class='class02' name="paragrafo2" id="paragrafo2" cols="45" rows="5"><? echo "$paragrafo2"; ?></textarea></td>
            <td>&nbsp;</td>
            <td>Paragrafo 4</td>
            <td><textarea class='class02' name="paragrafo4" id="paragrafo4" cols="45" rows="5"><? echo "$paragrafo4"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input class='class01' type="submit" name="Submit4" value="Atualizar">
            <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </form></td>
      <td width="11%" align="center" valign="top">&nbsp;</td>
      <td align="center" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

</table>



<p>&nbsp; </p>



</body>



</html>



