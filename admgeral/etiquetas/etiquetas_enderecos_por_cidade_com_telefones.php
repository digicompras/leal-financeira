<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
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
.style22 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style></head>


			<?
			


$cidade = $_POST['cidade'];
$tipo = $_POST['tipo'];

			
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

<table width="70%" border="0" align="center">
  <tr>
    <td width="13%">&nbsp;</td>
    <td width="21%">&nbsp;</td>
    <td width="34%"><form action="exporta_excel_nome_cidade_telefones.php" method="post" name="form3" target="_blank">
      <span class="style22">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
		  
if(($cidade=="Todos") && ($tipo=="Todos")){
$sql = "SELECT * FROM clientes order by nome asc";
}

if(($cidade<>"Todos") && ($tipo=="Todos")){
$sql = "SELECT * FROM clientes where cidade = '$cidade' order by nome asc";
}

if(($cidade<>"Todos") && ($tipo<>"Todos")){
$sql = "SELECT * FROM clientes where cidade = '$cidade' and tipo = '$tipo' order by nome asc";
}
		  

if(($cidade=="Todos") && ($tipo<>"Todos")){
$sql = "SELECT * FROM clientes where tipo = '$tipo' order by nome asc";
}

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
	$registrosdeclientesporperfil = mysql_num_rows($res);
	
}
?>
        </span>
      <input name="cidade" type="hidden" id="cidade" value="<? echo $cidade; ?>">
      <input name="tipo" type="hidden" id="tipo" value="<? echo $tipo; ?>">
<input type="submit" name="button" id="button" value="Exportar para Excel - <? echo "$registrosdeclientesporperfil registros"; ?>">
    </form></td>
    <td width="17%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<TABLE width="95%" border=0 align="center" cellPadding=5 cellSpacing=1>
    <?
	


if(($cidade=="Todos") && ($tipo=="Todos")){
$sql = "SELECT * FROM clientes order by nome asc";
}

if(($cidade<>"Todos") && ($tipo=="Todos")){
$sql = "SELECT * FROM clientes where cidade = '$cidade' order by nome asc";
}

if(($cidade<>"Todos") && ($tipo<>"Todos")){
$sql = "SELECT * FROM clientes where cidade = '$cidade' and tipo = '$tipo' order by nome asc";
}

if(($cidade=="Todos") && ($tipo<>"Todos")){
$sql = "SELECT * FROM clientes where tipo = '$tipo' order by nome asc";
}

$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;
	$registrosdeclientesporperfil = mysql_num_rows($res);

$cod_cli = $linha[0];

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

$celular = $linha[19];

$email = $linha[20];


?>
          <td valign="middle"><span class="style23"> </span>  
    <div align="center"><span class="style1"><font color="#000000"><? echo $cod_cli; ?><br>
	<? echo $nome; ?><br>
	<? echo $cpf; ?></font><br>
    <? echo $email; ?> <br>     
              <font color="#000000"><? echo $endereco; ?></font> <br>        
              <font color="#000000"><font color="#000000"><? echo $numero; ?></font> <? echo $bairro; ?></font> <font color="#000000"><? echo $complemento; ?></font><br>
              <font color="#000000"><? echo $cidade; ?></font> <font color="#000000"> <font color="#000000"><? echo $cep; ?><br>
              <textarea name="telefones" id="telefones" cols="30" rows="2">
<?
echo "$telefone / $celular / "; 

$sql2 = "SELECT * FROM telefones_de_clientes where cod_cli = '$cod_cli' order by codigo desc";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {
$registros = mysql_num_rows($res2);



$lista_telefone = $linha[2];





if($registros==""){
}
else{
echo "$lista_telefone / "; 
}

}
?>
</textarea>
              </font></span><span class="style1"><br>
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
