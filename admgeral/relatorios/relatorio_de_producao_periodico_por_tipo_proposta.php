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

<title>LISTANDO TODAS AS PROPOSTAS PAGAS DO OPERADOR</title>

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
.style22 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}

-->

</style>
</head>

<?



require '../../conect/conect.php';





	  

//$nome_operador = $_POST['nome_operador'];

$tipo_proposta = $_POST['tipo_proposta'];

//$campanha_filtro = $_POST['campanha'];

$status = $_POST['status'];

$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];

$data_inicial = "$ano_inicial-$mes_inicial-$dia_inicial";


$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];

$data_final = "$ano_final-$mes_final-$dia_final";



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

      <form name="form1" method="post" action="menu.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "relatorio por tipo de propostas e status"; ?>">
        <input type="hidden" name="comissao" id="comissao">
        <input type="submit" name="Submit2" value="Voltar">

</form>

<table width="100%"  border="0">


        <tr>

          <td width="8%">&nbsp;</td>
          <td width="24%"><div align="right">Total de propostas encontradas</div></td>
          <td width="22%"><div align="center">
            <?	
if($status=="TODOS"){

$sql = "SELECT * FROM propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' order by data_proposta,horaproposta asc";
$res = mysql_query($sql);

$registros_consignado = mysql_num_rows($res);

}
else{

$sql = "SELECT * FROM propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' and status = '$status' order by data_proposta,horaproposta asc";
$res = mysql_query($sql);

$registros_consignado = mysql_num_rows($res);

}

echo $registros_consignado;
?>
          </div></td>
          <td width="14%">&nbsp;</td>
        </tr>


        <tr>

          <td>&nbsp;</td>

          <td><div align="right">Valor bruto de opera&ccedil;&atilde;o </div></td>

          <td class="style4">            <div align="center"><strong>

          <strong>

          <?
if($status=="TODOS"){

$sql = "select sum(valor_total) as total from propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' order by nome asc";


}
else{

$sql = "select sum(valor_total) as total from propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' and status = '$status' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
          </strong> </strong> </div></td>

          <td>&nbsp;</td>
        </tr>

        <tr>

          <td>&nbsp;</td>

          <td><div align="right">Valor liquido cliente </div></td>

          <td><div align="center"><strong>

            <?
if($status=="TODOS"){


$sql = "select sum(valor_liquido_cliente) as total from propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' order by nome asc";

}
else{

$sql = "select sum(valor_liquido_cliente) as total from propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' and status = '$status' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_liquido_cliente = $linha['total'];



echo "R$ ".$valor_liquido_cliente;

?>

          </strong></div></td>

          <td>&nbsp;</td>
        </tr>
</table>

<br>


      Per&iacute;odo de <? echo "$dia_inicial-$mes_inicial-$ano_inicial at� $dia_final-$mes_final-$ano_final Tipo de Proposta $tipo_proposta Status $status";?><br>

<table width="100%"  border="0">

              <tr>

                <td width="35%" valign="middle"><div align="right"></div></td>

				<td width="38%" valign="middle"><form action="exporta_propostasfeitas_atraves_do_site.php" method="post" name="form3" target="_blank">
                  <span class="style22">
                  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                  </span>
                  <input name="tipo_proposta" type="hidden" id="tipo_proposta" value="<? echo $tipo_proposta; ?>">
                  <input name="status" type="hidden" id="status" value="<? echo $status; ?>">
                  <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
                  <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
                  <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo $ano_inicial; ?>">
                  <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
                  <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
                  <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
                  <input type="submit" name="button" id="button" value="Exportar para Excel">
                </form></td>
				<td width="27%">&nbsp;</td>

              </tr>

</table>            

      <?
if($status=="TODOS"){

$sql = "SELECT * FROM propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial' and '$data_final'  order by nome asc";


}
else{



$sql = "SELECT * FROM propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' and status = '$status' order by nome asc";

}

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$comissao_op = $linha[101];

$tabela = $linha[109];

$valor_total = $linha[113];

$valor_liquido_cliente = $linha[115];

$meta = $linha[171];


?>

      <table width="100%"  border="0">

        <tr bgcolor="#<? echo $cor ?>">

          <td><div align="center" class="style3">N&ordm; Proposta </div></td>

          <td><div align="center" class="style3">Valor liq cliente </div></td>

          <td><div align="center"><span class="style3">Valor Total </span></div></td>

          <td><div align="center"><span class="style3">Tabela</span></div></td>

          <td><div align="center" class="style3">Cliente</div></td>

          <td><div align="center" class="style3">CPF</div></td>

          <td width="2%"><div align="center" class="style3">Prazo</div></td>

          <td width="5%"><div align="center" class="style3">R$ Parcelas </div></td>

          <td><div align="center" class="style3">Tipo de Proposta </div></td>

          <td><div align="center" class="style3">Bco Opera&ccedil;&atilde;o </div></td>

          <td><div align="center" class="style3">Status</div></td>
        </tr>

		

        <tr>

          <td width="6%">               <form name="form2" method="post" action="editar_proposta_por_num_proposta.php"><div align="center" class="style3">

              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

              

  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">

            <? printf("$linha[0]"); ?>                

          </div></form></td>

          <td width="7%"><div align="center"><span class="style3"><? echo "R$ ".$valor_liquido_cliente;?></span></div></td>

          <td width="7%"><div align="center"><span class="style3"><? echo $valor_total;?></span></div></td>

          <td width="7%"><div align="center"><span class="style3"><? echo $tabela;?></span></div></td>

          <td width="15%">

            <div align="center" class="style3"><? printf("$linha[4]");?> </div></td>

          <td width="9%"><div align="center" class="style3"><? printf("$linha[7]");?> </div></td>

          <td><div align="center" class="style3"><? printf("$linha[26]"); ?> </div></td>

          <td><div align="center" class="style3"><? printf("$linha[27]"); ?> </div></td>

          <td width="7%"><div align="center" class="style3"><? printf("$linha[83]"); ?> </div></td>

          <td width="8%"><div align="center" class="style3"><? printf("$linha[86]"); ?></div></td>

          <td width="8%"><div align="center" class="style3"><? printf("$linha[51]");?></div></td>

          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>

<? } ?>
        <tr>

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

          <td><span class="style3"></span></td>
        <tr>

          <td><span class="style3">Total</span></td>

          <td><div align="center"><span class="style3"><strong>

            <?
if($status=="TODOS"){


$sql = "select sum(valor_liquido_cliente) as total from propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' order by nome asc";

}
else{

$sql = "select sum(valor_liquido_cliente) as total from propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' and status = '$status' order by nome asc";

}


$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_liquido_cliente = $linha['total'];



echo "R$ ".$valor_liquido_cliente;

?>

          </strong></span></div></td>

          <td><div align="center"><span class="style3"><strong>

            <?
if($status=="TODOS"){

$sql = "select sum(valor_total) as total from propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' order by nome asc";

}
else{

$sql = "select sum(valor_total) as total from propostas where tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' and status = '$status' order by nome asc";

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

          <td><div align="right" class="style3"></div></td>
</table>



<p>&nbsp;</p>







</body>

</html>

