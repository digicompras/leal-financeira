<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
header("Location: alerta.php");

require '../../conect/conect.php';

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
	margin-top: 8mm;
}
.style1 {font-size: 12px}
.style23 {color: #FFFFFF}
-->
</style></head>


			<?
			

			
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("ffffff"); ?>" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); }?>" bgproperties="fixed">

<TABLE width="95%" border=0 align="center" cellPadding=5 cellSpacing=1>
    <?
	
$ano = $_POST['ano'];


	
$sql = "SELECT * FROM clientes order by nome asc";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo = $linha[0];

$nome = $linha[1];

$sexo = $linha[2];

$estadocivil = $linha[3];

$cpf = $linha[4];

$rg = $linha[5];

$orgao = $linha[6];

$emissao = $linha[7];

$data_nasc = $linha[8];

$pai = $linha[9];

$mae = $linha[10];

$endereco = $linha[11];

$numero = $linha[12];

$bairro = $linha[13];

$complemento = $linha[14];

$cidade = $linha[15];

$estado = $linha[16];

$cep = $linha[17];

$telefone = $linha[18];






?>
          <td valign="middle"><span class="style23"> </span>  
    <div align="center"><span class="style1"><font color="#000000"><? //echo $linha[1]; ?><br>
	<? echo $nome;  ?></font><br>        
              <font color="#000000"><? echo $endereco;  ?></font> <br>        
              <font color="#000000"><font color="#000000"><? echo $numero;  ?></font> <? echo $bairro;  ?></font> <font color="#000000"><? echo $complemento;  ?></font><br>
              <font color="#000000"><? echo $cidade;  ?></font> <font color="#000000"> <font color="#000000"><? echo $cep;  ?></font></span><span class="style1"><br>
	          <span class="style23">.</span><br>
		    </span>  </div></td>




          <?
if($reg==3){
echo "</tr><tr></tr><tr>";
$reg=0;
}
?>
<? } ?>

</TABLE>


</div>
</body>
</html>
