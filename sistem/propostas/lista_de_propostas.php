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
<title>LISTANDO TODAS AS PROPOSTAS DO CLIENTE</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>
</head>
<?

require '../../conect/conect.php';
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$cordefundo = $linha[1];
	$cor_fundo_navegacao2 = $linha[2];
	
}
?>


<body bgcolor="<? echo "$cor_fundo_navegacao2"; ?>" 
  

<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
<? } ?>





      <p>
        <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
<? } ?>
</p>
      <form name="form1" method="post" action="menu.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input class="class01" type="submit" name="Submit2" value="Voltar">
</form>
      <table width="100%"  border="0">
        <tr>
          <td><div align="center"><span class="style2">
            <?
$cpf = $_POST['cpf'];
			
$sql = "SELECT * FROM propostas where cpf = '$cpf' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome = $linha[4];



?>
          Listando todas as propostas do cliente:</span> <span class="style2"><? printf("$linha[4]"); ?><? } ?></span></div></td>
        </tr>
      </table><br><br>
<table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
      <?
$cpf = $_POST['cpf'];
			
$sql = "SELECT * FROM propostas where cpf = '$cpf' order by num_proposta desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$status = $linha[51];
	
$tipo_proposta = $linha[83];

$valor_liquido_cliente = $linha[115];
	
$obs2 = $linha[102];

?>
      <table width="100%"  border="0">
        <tr bgcolor="<? echo $cordefundo; ?>">
          <td><div align="center"><strong>N&ordm; da Proposta </strong></div></td>
          <td><div align="center"><strong>Tipo Proposta</strong></div></td>
          <td><div align="center"><strong>Valor Liquido Cliente</strong></div></td>
          <td width="10%"><div align="center"><strong>Quant de parcelas </strong></div></td>
          <td width="11%"><div align="center"><strong>Valor das parcelas </strong></div></td>
          <td><div align="center"><strong>Status</strong></div></td>
          <td align="center">Motivo</td>
        </tr>
        <tr>
          <td width="16%"><form action="../propostas/imprimir_proposta.php" method="post" name="form2" target="_blank">
              <div align="center">
                <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">
                <? // printf("<a href='editar_proposta.php?chamar=$linha[0]' >$linha[0]</a>"); ?>
                <? printf("$linha[0]"); ?>
                <input class="class01" type="submit" name="Submit" value="Visualizar Proposta">
              </div>
          </form></td>
          <td width="13%"><div align="center"><? echo $tipo_proposta; ?></div></td>
          <td width="12%"><div align="center"><strong><font color="#0000FF"><? echo "R$ ". $valor_liquido_cliente; ?></font></strong></div></td>
          <td><div align="center"><? printf("$linha[26]"); ?> </div></td>
          <td><div align="center"><? printf("$linha[27]"); ?> </div></td>
          <td width="17%"><div align="center"><? printf("$linha[51]"); ?> </div></td>
          <td width="21%" align="center"><? if($status=="RECUSADA"){ echo "$obs2"; } ?></td>
          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
          <? } ?>
            </table>
<p>&nbsp;</p>
</body>
</html>
