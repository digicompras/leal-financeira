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
<link rel="stylesheet" href="style.css">
<title>LISTANDO TODAS AS PROPOSTAS DIGITADAS DO OPERADOR</title>

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

.style3 {font-size: 10px}

.style4 {

	font-size: 16px;

	font-weight: bold;

}

.style5 {font-size: 18px}

.style5 {font-size: 24px}

-->

</style>

</head>

<?



require '../../conect/conect.php';





	  

$nome_operador = $_POST['nome_operador'];

$dataproposta = $_POST['dataproposta'];

$campanha_filtro = $_POST['campanha'];





//$dia_inicial = $_POST['dia_inicial'];

//$mes_inicial = $_POST['mes_inicial'];

//$ano_inicial = $_POST['ano_inicial'];



//$dia_final = $_POST['dia_final'];

//$mes_final = $_POST['mes_final'];

//$ano_final = $_POST['ano_final'];



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

      <form name="form1" method="post" action="../index.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?><span class="style7 style13">        </span><span class="bloco_botoes">
        <input class='class01' type=image src='../../imagens/botoes/voltar.png' width='100' height='100' title='VOLTAR' name="Submit2" >
        </span>
      </form>

<table width="100%"  border="0">

        <tr>

          <td colspan="6"><div align="left"><span class="style2">

            <?

$nome_operador = $_POST['nome_operador'];

			

$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$nome_operador = $linha[1];







?>

          Listando todas as propostas do operador:</span> <span class="style2"><? echo $nome_operador; ?>

          <? } ?>

          </span></div></td>
        </tr>

        <tr>

          <td colspan="6">&nbsp;</td>
        </tr>

        <tr>

          <td width="8%">&nbsp;</td>

          <td width="21%"><div align="center">Total L&iacute;quido de Opera&ccedil;&otilde;es </div></td>

          <td width="22%"><div align="center">

            <strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

else{

$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
</strong>          </div></td>

          <td width="16%"><div align="right">Valor bruto de opera&ccedil;&atilde;o </div></td>

          <td width="19%">

            <div align="center"><strong><strong>

              <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

else{

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

            </strong>

            </strong> </div></td>

          <td width="14%">&nbsp;</td>
        </tr>

        <tr>

          <td>&nbsp;</td>

          <td><div align="center">Total contratos </div></td>

          <td><div align="center">

            <strong><span class="style5"><strong><strong>

            <?

$sql = "select * from propostas where dataproposta = '$dataproposta' and nome_operador = '$nome_operador'";

$resultado=mysql_query($sql);

$registros_total = mysql_num_rows($resultado);



echo $registros_total;

?> </strong></strong></span> </strong>          </div></td>

          <td><div align="right">Montante de parcelas</div></td>

          <td class="style4">            <div align="center"><strong>

          <strong>          </strong> </strong> <strong>
          <?

if($campanha_filtro=="selecione"){

$sql = "select sum(parcela) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

else{

$sql = "select sum(parcela) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
          </strong></div></td>

          <td>&nbsp;</td>
        </tr>
</table>

<br>

      <?



if($campanha_filtro=="selecione"){

$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";



}

else{

		



$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";



}

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$comissao_op = $linha[101];

$tabela = $linha[109];

$valor_total = $linha[113];

$valor_liquido_cliente = $linha[115];

$parcela = $linha[27];


?>

<table width="100%"  border="0">

        <tr bgcolor="#<? echo $cor ?>">

          <td><div align="center" >N&ordm; Proposta </div></td>

          <td><div align="center" >Valor Solicitado </div></td>

          <td><div align="center" >Valor liq cliente </div></td>

          <td><div align="center"><span >Valor Total </span></div></td>

          <td><div align="center"><span >Tabela</span></div></td>

          <td><div align="center" >Cliente</div></td>

          <td><div align="center" >CPF</div></td>

          <td width="2%"><div align="center" >Prazo</div></td>

          <td width="5%"><div align="center" >R$ Parcelas </div></td>

          <td><div align="center" >Tipo de Proposta </div></td>

          <td><div align="center" >Bco Opera&ccedil;&atilde;o </div></td>

          <td><div align="center" >Parcela</div></td>
          <td><div align="center" >Status</div></td>

          <td><div align="center" > Spread </div></td>

          <td><div align="center" >Premia&ccedil;&atilde;o</div></td>
        </tr>

		

        <tr>

          <td width="6%">               <form name="form2" method="post" action="editar_proposta_por_num_proposta.php"><div align="center" >

              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

              

  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">

            <? printf("$linha[0]"); ?>                

          </div></form></td>

          <td width="8%"><div align="center" ><? printf("R$ $linha[25]");?> </div></td>

          <td width="7%"><div align="center"><span ><? echo "R$ ".$valor_liquido_cliente;?></span></div></td>

          <td width="7%"><div align="center"><span ><? echo $valor_total;?></span></div></td>

          <td width="7%"><div align="center"><span ><? echo $tabela;?></span></div></td>

          <td width="15%">

            <div align="center" ><? printf("$linha[4]");?> </div></td>

          <td width="9%"><div align="center" ><? printf("$linha[7]");?> </div></td>

          <td><div align="center" ><? printf("$linha[26]"); ?> </div></td>

          <td><div align="center" ><? printf("$linha[27]"); ?> </div></td>

          <td width="7%"><div align="center" ><? printf("$linha[83]"); ?> </div></td>

          <td width="8%"><div align="center" ><? printf("$linha[86]"); ?></div></td>

          <td width="8%"><div align="center"><span ><? echo $parcela; ?></span></div></td>
          <td width="8%"><div align="center" ><? printf("$linha[51]");?></div></td>

          <td width="4%"><div align="center" ><? printf("$linha[85]");?></div></td>

          <td width="7%"><div align="center" ><? echo "R$ ".$comissao_op;?></div></td>

          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>

<? } ?>
        <tr>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><div align="center"></div></td>
          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>
        <tr>

          <td><span >Total</span></td>

          <td><div align="center" >

            <strong>

              <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

else{

$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
            </strong>          </div></td>

          <td><div align="center"><span ><strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta'order by nome asc";

}

else{

$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_liquido_cliente = $linha['total'];



echo "R$ ".$valor_liquido_cliente;

?>

          </strong></span></div></td>

          <td><div align="center"><span ><strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

else{

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

          </strong></span></div></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><span class="style3"></span></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><div align="center"><strong>
            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(parcela) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

else{

$sql = "select sum(parcela) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
          </strong></div></td>
          <td><div align="right" >Total Speed </div></td>

          <td><div align="center" >

            <strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(retorno) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

else{

$sql = "select sum(retorno) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
            </strong>          </div></td>

          <td><span class="style3"></span></td>
</table>



<p>&nbsp;</p>







</body>

</html>

