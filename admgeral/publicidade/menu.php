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



      <td colspan="2"></td>



      <td width="31%">&nbsp;</td>

    </tr>



    <tr>



      <td colspan="3" align="center"><strong><font size="4">O que deseja fazer com as imagens da pagina inicial do seu site?</font></strong></td>

    </tr>
    <tr>
      <td width="35%" align="left" valign="top"><form action="atualizar_arte.php" method="post" enctype="multipart/form-data" name="form2">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Imagem 1<br>
            <?

$sql = "select * from publicidade where imagem1 = 'imagem1.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

$imagem1 = $linha[2];

$texto1_da_img1 = $linha[4];

$texto2_da_img1 = $linha[5];

}



	  

	  echo "<a href='../../raiz/images/$imagem1' target='_blank'><img src='../../raiz/images/$imagem1' border='0' width='300'></a>";  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3">Escolha a nova arte  para publicar no site!<br>
              <input class='class02' type="file" name="imagem1" id="imagem1">
              <font color="#0000FF" size="4">
                <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
              </font></td>
          </tr>
          <tr>
            <td>Texto 1</td>
            <td colspan="3"><textarea class='class02' name="texto1_da_img1" id="texto1_da_img1" cols="45" rows="5"><? echo "$texto1_da_img1"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 2</td>
            <td colspan="3"><textarea class='class02' name="texto2_da_img1" id="texto2_da_img1" cols="45" rows="5"><? echo "$texto2_da_img1"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit4" value="Atualizar">
            <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
      <td width="34%" align="center" valign="top"><form action="atualizar_arte2.php" method="post" enctype="multipart/form-data" name="form3">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Imagem 2<br>
            <?

$sql = "select * from publicidade where imagem2 = 'imagem2.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

$imagem2 = $linha[33];

$texto1_da_img2 = $linha[7];

$texto2_da_img2 = $linha[8];


}



	  

	  echo "<a href='../../raiz/images/$imagem2' target='_blank'><img src='../../raiz/images/$imagem2' border='0' width='300'></a>";  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3">Escolha a nova arte  para publicar no site!<br>
              <input class='class02' type="file" name="imagem2" id="imagem2">
              <font color="#0000FF" size="4">
                <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
              </font></td>
          </tr>
          <tr>
            <td>Texto 1</td>
            <td colspan="3"><textarea class='class02' name="texto1_da_img2" id="texto1_da_img2" cols="45" rows="5"><? echo "$texto1_da_img2"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 2</td>
            <td colspan="3"><textarea class='class02' name="texto2_da_img2" id="texto2_da_img2" cols="45" rows="5"><? echo "$texto2_da_img2"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
      <td align="center" valign="top"><form action="atualizar_arte3.php" method="post" enctype="multipart/form-data" name="form1">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Imagem 3<br>
              <?

$sql = "select * from publicidade where imagem3 = 'imagem3.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

$imagem3 = $linha[34];

$texto1_da_img3 = $linha[10];

$texto2_da_img3 = $linha[11];


}



	  

	   echo "<a href='../../raiz/images/$imagem3' target='_blank'><img src='../../raiz/images/$imagem3' border='0' width='300'></a>";  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3">Escolha a nova arte  para publicar no site!<br>
              <font color="#0000FF" size="4">
              <input class='class02' type="file" name="imagem3" id="imagem3">
              <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
              </font></td>
          </tr>
          <tr>
            <td>Texto 1</td>
            <td colspan="3"><textarea class='class02' name="texto1_da_img3" id="texto1_da_img3" cols="45" rows="5"><? echo "$texto1_da_img3"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 2</td>
            <td colspan="3"><textarea class='class02' name="texto2_da_img3" id="texto2_da_img3" cols="45" rows="5"><? echo "$texto2_da_img3"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit2" value="Atualizar">              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
    </tr>
    <tr>
      <td align="center" valign="top"><form action="atualizar_arte4.php" method="post" enctype="multipart/form-data" name="form4">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Imagem 4<br>
              <?

$sql = "select * from publicidade where imagem4 = 'imagem4.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

$imagem4 = $linha[35];

$texto1_da_img4 = $linha[13];

$texto2_da_img4 = $linha[14];

}



	  

	  echo "<a href='../../raiz/images/$imagem4' target='_blank'><img src='../../raiz/images/$imagem4' border='0' width='300'></a>";  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3">Escolha a nova arte  para publicar no site!<br>
              <input class='class02' type="file" name="imagem4" id="imagem4">
              <font color="#0000FF" size="4">
                <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
              </font></td>
          </tr>
          <tr>
            <td>Texto 1</td>
            <td colspan="3"><textarea class='class02' name="texto1_da_img4" id="texto1_da_img4" cols="45" rows="5"><? echo "$texto1_da_img4"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 2</td>
            <td colspan="3"><textarea class='class02' name="texto2_da_img4" id="texto2_da_img4" cols="45" rows="5"><? echo "$texto2_da_img4"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit3" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
      <td align="center" valign="top"><form action="atualizar_arte5.php" method="post" enctype="multipart/form-data" name="form5">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Imagem 5<br>
              <?

$sql = "select * from publicidade where imagem5 = 'imagem5.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

$imagem5 = $linha[36];

$texto1_da_img5 = $linha[16];

$texto2_da_img5 = $linha[17];

}



	  

	  echo "<a href='../../raiz/images/$imagem5' target='_blank'><img src='../../raiz/images/$imagem5' border='0' width='300'></a>";  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3">Escolha a nova arte  para publicar no site!<br>
              <input class='class02' type="file" name="imagem5" id="imagem5">
              <font color="#0000FF" size="4">
                <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
              </font></td>
          </tr>
          <tr>
            <td>Texto 1</td>
            <td colspan="3"><textarea class='class02' name="texto1_da_img5" id="texto1_da_img5" cols="45" rows="5"><? echo "$texto1_da_img5"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 2</td>
            <td colspan="3"><textarea class='class02' name="texto2_da_img5" id="texto2_da_img5" cols="45" rows="5"><? echo "$texto2_da_img5"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit5" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
      <td align="center" valign="top"><form action="atualizar_arte6.php" method="post" enctype="multipart/form-data" name="form6">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Imagem 6<br>
              <?

$sql = "select * from publicidade where imagem6 = 'imagem6.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

$imagem6 = $linha[37];

$texto1_da_img6 = $linha[19];

$texto2_da_img6 = $linha[20];

}



	  

	  echo "<a href='../../raiz/images/$imagem6' target='_blank'><img src='../../raiz/images/$imagem6' border='0' width='300'></a>";  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3">Escolha a nova arte  para publicar no site!<br>
              <input class='class02' type="file" name="imagem6" id="imagem6">
              <font color="#0000FF" size="4">
                <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
              </font></td>
          </tr>
          <tr>
            <td>Texto 1</td>
            <td colspan="3"><textarea class='class02' name="texto1_da_img6" id="texto1_da_img6" cols="45" rows="5"><? echo "$texto1_da_img6"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 2</td>
            <td colspan="3"><textarea class='class02' name="texto2_da_img6" id="texto2_da_img6" cols="45" rows="5"><? echo "$texto2_da_img6"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit6" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
    </tr>
    <tr>
      <td align="center" valign="top"><form action="atualizar_arte7.php" method="post" enctype="multipart/form-data" name="form7">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Imagem 7<br>
              <?

$sql = "select * from publicidade where imagem7 = 'imagem7.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

$imagem7 = $linha[38];

$texto1_da_img7 = $linha[41];

$texto2_da_img7 = $linha[42];

}



	  

	  echo "<a href='../../raiz/images/$imagem7' target='_blank'><img src='../../raiz/images/$imagem7' border='0' width='300'></a>";  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3">Escolha a nova arte  para publicar no site!<br>
              <label for="imagem7">File:</label>
              <input class='class02' type="file" name="imagem7" id="imagem7">
              <font color="#0000FF" size="4">
                <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
              </font></td>
          </tr>
          <tr>
            <td>Texto 1</td>
            <td colspan="3"><textarea class='class02' name="texto1_da_img7" id="texto1_da_img7" cols="45" rows="5"><? echo "$texto1_da_img7"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 2</td>
            <td colspan="3"><textarea class='class02' name="texto2_da_img7" id="texto2_da_img7" cols="45" rows="5"><? echo "$texto2_da_img7"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit7" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
      <td align="center" valign="top"><form action="atualizar_arte8.php" method="post" enctype="multipart/form-data" name="form8">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Imagem 8<br>
              <?

$sql = "select * from publicidade where imagem8 = 'imagem8.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

$imagem8 = $linha[39];

$texto1_da_img8 = $linha[43];

$texto2_da_img8 = $linha[44];

}



	  

	  echo "<a href='../../raiz/images/$imagem8' target='_blank'><img src='../../raiz/images/$imagem8' border='0' width='300'></a>";  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3">Escolha a nova arte  para publicar no site!<br>
              <label for="imagem8">File:</label>
              <input class='class02' type="file" name="imagem8" id="imagem8">
              <font color="#0000FF" size="4">
                <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
              </font></td>
          </tr>
          <tr>
            <td>Texto 1</td>
            <td colspan="3"><textarea class='class02' name="texto1_da_img8" id="texto1_da_img8" cols="45" rows="5"><? echo "$texto1_da_img8"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 2</td>
            <td colspan="3"><textarea class='class02' name="texto2_da_img8" id="texto2_da_img8" cols="45" rows="5"><? echo "$texto2_da_img8"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit8" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center">SERVI&Ccedil;OS</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="top"><form name="form9" method="post" action="atualizar_servicos1.php">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Servi&ccedil;o 1<br>
              <?

$sql = "select * from publicidade where imagem7 = 'imagem7.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

	$titulo1_servico = $linha[23];
	$texto1_servico = $linha[24];
	
	

}



	  

	   ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3"><font color="#0000FF" size="4">
                <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
              </font></td>
          </tr>
          <tr>
            <td>Titulo 1</td>
            <td colspan="3"><textarea class='class02' name="titulo1_servico" id="titulo1_servico" cols="45" rows="5"><? echo "$titulo1_servico"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 1</td>
            <td colspan="3"><textarea class='class02' name="texto1_servico" id="texto1_servico" cols="45" rows="5"><? echo "$texto1_servico"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit9" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
      <td align="center" valign="top"><form name="form10" method="post" action="atualizar_servicos2.php">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Servi&ccedil;o 2<br>
              <?

$sql = "select * from publicidade where imagem7 = 'imagem7.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

	$titulo2_servico = $linha[25];
	$texto2_servico = $linha[26];
	
	
}



	  
  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3"><font color="#0000FF" size="4">
              <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
            </font></td>
          </tr>
          <tr>
            <td>Titulo 2</td>
            <td colspan="3"><textarea class='class02' name="titulo2_servico" id="titulo2_servico" cols="45" rows="5"><? echo "$titulo2_servico"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 2</td>
            <td colspan="3"><textarea class='class02' name="texto2_servico" id="texto2_servico" cols="45" rows="5"><? echo "$texto2_servico"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit10" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
      <td align="center" valign="top"><form name="form11" method="post" action="atualizar_servicos3.php">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Servi&ccedil;o 3<br>
              <?

$sql = "select * from publicidade where imagem7 = 'imagem7.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

	$titulo3_servico = $linha[27];
	$texto3_servico = $linha[28];
	

}



	  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3"><font color="#0000FF" size="4">
              <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
            </font></td>
          </tr>
          <tr>
            <td>Titulo 3</td>
            <td colspan="3"><textarea class='class02' name="titulo3_servico" id="titulo3_servico" cols="45" rows="5"><? echo "$titulo3_servico"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 3</td>
            <td colspan="3"><textarea class='class02' name="texto3_servico" id="texto3_servico" cols="45" rows="5"><? echo "$texto3_servico"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit11" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
    </tr>
    <tr>
      <td><form name="form12" method="post" action="atualizar_servicos4.php">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">Servi&ccedil;o 4<br>
              <?

$sql = "select * from publicidade where imagem7 = 'imagem7.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

	$titulo4_servico = $linha[29];
	$texto4_servico = $linha[30];

}



	  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3"><font color="#0000FF" size="4">
              <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
            </font></td>
          </tr>
          <tr>
            <td>Titulo 4</td>
            <td colspan="3"><textarea class='class02' name="titulo4_servico" id="titulo4_servico" cols="45" rows="5"><? echo "$titulo4_servico"; ?></textarea></td>
          </tr>
          <tr>
            <td>Texto 4</td>
            <td colspan="3"><textarea class='class02' name="texto4_servico" id="texto4_servico" cols="45" rows="5"><? echo "$texto4_servico"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit12" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
      <td align="center" valign="top"><form name="form13" method="post" action="atualizar_mensagem.php">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">MENSAGEM PROPRIETARIO(A)<br>
              <?

$sql = "select * from publicidade where imagem7 = 'imagem7.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

	$mensagem = $linha[31];
	

}



	  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3"><font color="#0000FF" size="4">
              <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
            </font></td>
          </tr>
          <tr>
            <td>Mensagem</td>
            <td colspan="3"><textarea class='class02' name="mensagem" id="mensagem" cols="45" rows="11"><? echo "$mensagem"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit13" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
      <td align="center" valign="top"><form name="form14" method="post" action="atualizar_quemsomos.php">
        <table width="30%"  border="0" align="left">
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" valign="top">MENSAGEM QUEM SOMOS<br>
            <?

$sql = "select * from publicidade where imagem7 = 'imagem7.jpg' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

	$quemsomos = $linha[22];
	

}



	  ?></td>
          </tr>
          <tr>
            <td width="18%">&nbsp;</td>
            <td width="82%" colspan="3"><font color="#0000FF" size="4">
              <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">
            </font></td>
          </tr>
          <tr>
            <td>Quem Somos</td>
            <td colspan="3"><textarea class='class02' name="quemsomos" id="quemsomos" cols="45" rows="11"><? echo "$quemsomos"; ?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><input class='class01' type="submit" name="Submit14" value="Atualizar">
              <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?></td>
          </tr>
        </table>
      </form></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="35" colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

</table>



<p>&nbsp; </p>



</body>



</html>



