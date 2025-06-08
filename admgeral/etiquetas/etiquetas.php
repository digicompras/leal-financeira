<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");


require '../../conect/conect.php';

$tipo = $_POST['tipo'];
$orientacaosexual = $_POST['orientacaosexual'];

$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cep = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];
$telefone = $linha[12];
$fax = $linha[13];
$email_empresa = $linha[14];
$site = $linha[15];
}

?>

<html>

<head>

<title>Emiss&atilde;o de etiquetas para mala-direta - <? echo "$nfantasia"; ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-right: 0mm;

	margin-bottom: 8mm;

	margin-left: 0mm;

	margin-top: 11mm;

}

.style1 {font-size: 12px}

.style18 {

	font-size: 8px;

	color: #FFFFFF;

}

.style21 {

	font-size: 10px;

	color: #FFFFFF;

}

-->

</style></head>

<body>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="29%">&nbsp;</td>
      <td width="39%" align="center"><form action="exporta_excel_perfil_orientacaosexual.php" method="post" name="form1" target="_blank">
        <input name="tipo" type="hidden" id="tipo" value="<? echo "$tipo"; ?>">
        <input name="orientacaosexual" type="hidden" id="orientacaosexual" value="<? echo "$orientacaosexual"; ?>">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input class="class01" type="submit" name="Submit32" value="Exportar para excel">
      </form></td>
      <td width="32%">&nbsp;</td>
    </tr>
  </tbody>
</table>



<TABLE width="100%" border=0 align="center" cellPadding=3 cellSpacing=7>

    <?

	

$tipo = $_POST['tipo'];
$orientacaosexual = $_POST['orientacaosexual'];
	
if(($tipo=="Todos") && ($orientacaosexual=="Todos")){
$sql = "SELECT * FROM clientes order by nome asc";
}
	
if(($tipo<>"Todos") && ($orientacaosexual<>"Todos")){
$sql = "SELECT * FROM clientes where tipo = '$tipo' and sexo = '$orientacaosexual' order by nome asc";
}
	
if(($tipo<>"Todos") && ($orientacaosexual=="Todos")){
$sql = "SELECT * FROM clientes where tipo = '$tipo' order by nome asc";
}

if(($tipo=="Todos") && ($orientacaosexual<>"Todos")){
	
$sql = "SELECT * FROM clientes where sexo = '$orientacaosexual' order by nome asc";
}
	
$res = mysql_query($sql);



$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;

$nome = $linha[1];
$cpf = $linha[4];
	
$numero = $linha[12];

$bairro = $linha[13];

$complemento = $linha[14];
$cidade = $linha[15];

$estado = $linha[16];
	
$cep = $linha[17];

$telefone = $linha[18];
$celular = $linha[19];


$num_beneficio = $linha[44];


?>

          <td valign="middle"><span class="style18">10</span><br>    

    <div align="center"><span class="style1"><font color="#000000"><? echo "$nome  "; ?></font>        

              <font color="#000000"><? echo "FONE: $telefone  "; ?><? echo "CEL: $celular  "; ?><? echo "CPF: $cpf  "; ?><? echo "BENF: $num_beneficio  "; ?><? echo "$linha[11]  "; ?></font>         

              <font color="#000000"><font color="#000000"><? echo "$linha[12]  "; ?></font> <? echo "$linha[13]  "; ?></font> <font color="#000000"><? echo "$linha[14]  "; ?></font>

              <font color="#000000"><? echo "$linha[15]  "; ?></font><font color="#000000"><? echo "$linha[17]  "; ?></font></span><span class="style1">

	          <span class="style21">8</span><br>

		    </span>  </div></td>









          <?

if($reg==1){

echo "</tr><tr></tr><tr>";

$reg=0;

}

?>

<? } ?>



</TABLE>





</div>

</body>

</html>

