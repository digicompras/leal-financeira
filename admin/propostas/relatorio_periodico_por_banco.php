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
<title>LISTANDO TODAS AS PROPOSTAS RECEBIDAS POR BANCO E POR PERIODO</title>
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


	  
$bco_operacao = $_POST['bco_operacao'];
$data_inicial = $_POST['data_inicial'];
$data_final = $_POST['data_final'];

$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" 
  
<? } ?>
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
      <form name="form1" method="post" action="informe_bco_operacao_para_gerar_relatorio_mensal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar">
</form>
      <table width="200%"  border="0">
        <tr>
          <td colspan="12"><div align="left"><span class="style2">
            <?
$bco_operacao = $_POST['bco_operacao'];
			
$sql = "SELECT * FROM propostas where bco_operacao = '$bco_operacao' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome_operador = $linha[1];



?>
          Listando todas as propostas recebidas no per&iacute;odo de <? echo $data_inicial; ?> at&eacute; <? echo $data_final; ?> do banco:</span> <span class="style2"><? echo $bco_operacao; ?>
          <? } ?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="12">&nbsp;</td>
        </tr>
        <tr>
          <td width="7%"><div align="center">Total Recebido</div></td>
          <td width="11%"><div align="center">
            <?
$sql = "select sum(valor_a_receber) as total from propostas where bco_operacao = '$bco_operacao' and data_recebimento between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido = 'Sim'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td width="11%">&nbsp;</td>
          <td width="7%"><div align="center">Total 


 Meta

</div></td>
          <td width="7%"><div align="center">
            <?
$sql = "select sum(meta) as total from propostas where bco_operacao = '$bco_operacao' and data_recebimento between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido = 'Sim'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo $valor_total."%";
?>
          </div></td>
          <td width="12%">&nbsp;</td>
          <td width="9%"><div align="center">Total Contratos </div></td>
          <td width="7%"><div align="center">
            <?
$sql = "select sum(valor_credito) as total from propostas where bco_operacao = '$bco_operacao' and dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido = 'Sim'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td width="3%">&nbsp;</td>
          <td width="5%">&nbsp;</td>
          <td width="12%">&nbsp;</td>
          <td width="9%">&nbsp;</td>
        </tr>
</table>
      <br>
	  <?
	  $nome_operador = $_POST['nome_operador'];
$data_inicial = $_POST['data_inicial'];
$data_final = $_POST['data_final'];

	  ?>
      Per&iacute;odo de <? echo $data_inicial;?> at&eacute; <? echo $data_final;?><br>
<table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
      <?

			
$sql = "SELECT * FROM propostas where bco_operacao = '$bco_operacao' and data_recebimento between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido = 'Sim' order by nome asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$meta = $linha[171];

?>            
      <table width="200%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td>N&ordm; da Proposta </td>
          <td><div align="center">Valor Recebido </div></td>
          <td><div align="center">Data Recebimento </div></td>
          <td><div align="center">Status</div></td>
          <td><div align="center"> Meta </div></td>
          <td><div align="center">Cliente</div></td>
          <td><div align="center">CPF</div></td>
          <td><div align="center">Valor Contrato </div></td>
          <td width="3%"><div align="center">Prazo</div></td>
          <td width="5%"><div align="center">R$ Parcelas </div></td>
          <td><div align="center">Banco</div></td>
          <td><div align="center">Tipo de Proposta </div></td>
        </tr>
		
        <tr>
          <td width="7%"><div align="center">               <form name="form2" method="post" action="editar_proposta_por_num_proposta.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              
  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">
            <? printf("$linha[0]"); ?>                
          </form></div></td>
          <td width="11%"><div align="center"><? printf("$linha[87]");?></div></td>
          <td width="11%"><div align="center"><? printf("$linha[89]");?></div></td>
          <td width="7%"><div align="center"><? printf("$linha[51]");?></div></td>
          <td width="7%"><div align="center"><? echo "$meta%";?></div></td>
          <td width="12%"> <div align="center"><? printf("$linha[4]");?>
         </div></td>
          <td width="9%"><div align="center"><? printf("$linha[7]");?>
          </div></td>
          <td width="7%"><div align="center"><? printf("R$ $linha[25]");?>
          </div></td>
          <td><div align="center"><? printf("$linha[26]"); ?>
          </div></td>
          <td><div align="center"><? printf("$linha[27]"); ?>
          </div></td>
          <td width="12%"><div align="center"><? printf("$linha[28]"); ?></div></td>
          <td width="9%"><div align="center"><? printf("$linha[83]"); ?>
          </div></td>
		  
		  
		  <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        <tr>
          <td><div align="center">Total Recebido</div></td>
          <td><div align="center">
            <?
$sql = "select sum(valor_a_receber) as total from propostas where bco_operacao = '$bco_operacao' and data_recebimento between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido = 'Sim'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td>&nbsp;</td>
          <td><div align="center">Total 


 Meta

</div></td>
          <td><div align="center">
            <?
$sql = "select sum(meta) as total from propostas where bco_operacao = '$bco_operacao' and data_recebimento between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido = 'Sim'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo $valor_total."%";
?>
          </div></td>
          <td>&nbsp;</td>
          <td><div align="center">Total Contratos </div></td>
          <td><div align="center">              <?
$sql = "select sum(valor_credito) as total from propostas where bco_operacao = '$bco_operacao' and dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido = 'Sim'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
</table>

<?
?>          

<p>&nbsp;</p>



</body>
</html>
