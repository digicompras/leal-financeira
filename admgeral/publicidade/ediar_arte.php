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

<title>Trocar foto n&ordm; 1</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body>

<?







require '../../conect/conect.php';



?>

<br>

<? 

$vg = $_GET['chamar'];





$codigo = $vg;









 ?></p>

<form name="form1" method="post" action="menu.php">

  <input type="submit" name="Submit3" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

</form>

<form action="atualizar_arte.php" method="post" enctype="multipart/form-data" name="form1">


  <table width="80%"  border="0" align="center">


      <tr>

        <td width="14%">Imagem<br><?
$sql = "select * from publicidade where posicao = '1' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo1 = $linha[0];
$posicao1 = $linha[1];
$imagem1 = $linha[2];
$texto1 = $linha[3];
$tamanho1 = $linha[4];


}

	  
	   if($posicao1==1){echo "<a href='../../publicidade/$imagem1' target='_blank'><img src='../../publicidade/$imagem1' border='0' width='300'></a>"; } ?></td>
        <td width="68%">Escolha a nova arte  para publicar no site!<br>
<input name="imagem" type="file" id="imagem">
          <font color="#0000FF" size="4">
          <input name="posicao1" type="hidden" id="posicao1" value="1">
          </font></td>
        <td width="18%">&nbsp;</td>
      </tr>
    <tr>
        <td>Texto</td>
        <td><textarea name="texto1" id="texto1" cols="45" rows="5"><? echo "$texto1"; ?></textarea></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Tamanho</td>
        <td><select name="tamanho1" id="tamanho1">
        <option selected><? echo "$tamanho1"; ?></option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>14</option>
          <option>16</option>
          <option>18</option>
          <option>20</option>
          <option>24</option>
          <option>26</option>
          <option>28</option>
          <option>30</option>
        </select></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Atualizar"></td>
      <td>&nbsp;</td>
    </tr>
  </table>



</form>
</body>

</html>

