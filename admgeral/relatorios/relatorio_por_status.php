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

.style2-1 {

	color: #0000FF;

	font-weight: bold;

}

.style3-1-1 {font-size: 5px}

-->

</style>
</head>

<?



require '../../conect/conect.php';





	  

$status = $_POST['status'];

$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];



$data_inicial = "$ano_inicial-$mes_inicial-$dia_inicial";
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

      <form name="form1" method="post" action="relatorio_de_producao_periodico_por_operador_sintetico_novo.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <span class="style7 style13">

        <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">

        <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">

        <input name="ano_inicial" type="hidden" id="dia_inicial3" value="<? echo $ano_inicial; ?>">

        <input name="dia_final" type="hidden" id="dia_inicial4" value="<? echo $dia_final; ?>">

        <input name="mes_final" type="hidden" id="dia_final" value="<? echo $mes_final; ?>">

        <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
        </span>
      </form>

      <table width="100%"  border="0">

        <tr>

          <td colspan="6"><div align="left"><span class="style2">

            <?

$sql = "SELECT * FROM propostas where dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status' order by status asc";


$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$registros = mysql_num_rows($res);

}

?>

          Listando todas as propostas por status:</span> <span class="style2"><? echo "$status no periodo de $dia_inicial-$mes_inicial-$ano_inicial até $dia_final-$mes_final-$ano_final "; ?>


          </span></div></td>
        </tr>

        <tr>

          <td colspan="6">&nbsp;</td>
        </tr>

        <tr>
          <td width="8%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
          <td width="18%">&nbsp;</td>
          <td width="24%">&nbsp;</td>
          <td width="22%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
        </tr>
</table>

<br>

	  

     

<table width="100%"  border="0">

              <tr>

                <td width="26%" valign="middle"><div align="right"><strong>Selecione o status que deseja filtrar</strong></div></td>

				<td valign="middle"><form name="form3" method="post" action="relatorio_por_status.php">

			

				  <?
echo "<select class='class02' name='dia_inicial' id='dia_inicial'>
		
		<option selected>";

              echo "$dia_inicial";  

          echo "</option>";
					  
		

    $sql = "select * from propostas where dia <> '' group by dia order by dia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia']."</option>";

    }

                echo "</select>

        <select class='class02' name='mes_inicial' id='mes_inicial'>

          <option selected>";

              echo "$mes_inicial";  

          echo "</option>";

	$sql = "select * from propostas group by mes order by mes desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

        echo "</select>

        <select class='class02' name='ano_inicial' id='ano_inicial'>

          <option selected>";

              echo "$ano_inicial"; 

          echo "</option>";

    $sql = "select * from propostas group by ano order by ano desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

        echo "</select>

at&eacute;

<select class='class02' name='dia_final' id='dia_final'>

<option selected>";

              echo "$dia_final";  

          echo "</option>";

    $sql = "select * from propostas group by dia order by dia desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){

	echo "<option>".$x['dia']."</option>";

    }

echo "</select>

<select class='class02' name='mes_final' id='mes_final'>

  <option selected>";

  echo "$mes_final"; 

  echo "</option>";

    $sql = "select * from propostas group by mes order by mes desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

echo "</select>

<select class='class02' name='ano_final' id='ano_final'>

  <option selected>";

  echo "$ano_final"; 

  echo "</option>";

	$sql = "select * from propostas group by ano order by ano desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

echo "</select>";

?> 
				  <select class='class02' name="status" id="status">

                    <option selected><? echo $status; ?></option>

                    <?





    $sql = "select * from status order by status asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['status']."</option>";

    }

?>
                  </select>
				  </font></strong>
				  <input class="class01" type="submit" name="Submit" value="Filtrar">

                               </form></td>

  </tr>

</table>            

      <?
if(empty($status)){
	
}
else{

$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial' and '$data_final' and status = '$status' order by status asc";


$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$num_proposta = $linha[0];

$nome_operador = $linha[1];

$valor_credito = $linha[25];


$bco_operacao = $linha[86];



$valor_a_receber = $linha[87];

$comissao_op = $linha[101];

$tabela = $linha[109];

$valor_total = $linha[113];

$valor_liquido_cliente = $linha[115];

$meta = $linha[171];


?>

      <table width="100%"  border="0">

        <tr bgcolor="#<? echo $cor ?>">

          <td><div align="center" class="style3-1"><strong>N&ordm; Proposta </strong></div></td>

          <td><div align="center" class="style3-1"><strong>Valor Solicitado </strong></div></td>

          <td><div align="center" class="style3-1"><strong>Valor liq cliente </strong></div></td>

          <td><div align="center"><strong><span class="style3-1">Valor Total </span></strong></div></td>

          <td><div align="center"><strong><span class="style3-1">Tabela</span></strong></div></td>

          <td><div align="center" class="style3-1"><strong>Cliente</strong></div></td>

          <td><div align="center" class="style3-1"><strong>CPF</strong></div></td>

          <td><div align="center" class="style3-1"><strong>Tipo de Proposta </strong></div></td>

          <td><div align="center" class="style3-1"><strong>Bco Opera&ccedil;&atilde;o </strong></div></td>

          <td><div align="center" class="style3-1"><strong>Status</strong></div></td>
        </tr>

		

        <tr>

          <td width="5%">               <form name="form2" method="post" action="altera_comissoes.php">
            <div align="center" class="style3-1">

              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

              

  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">
  <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">

            <input name="campanha" type="hidden" id="campanha" value="<? echo $campanha_filtro; ?>">
            <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
            <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
            <input name="ano_inicial" type="hidden" id="dia_inicial5" value="<? echo $ano_inicial; ?>">
            <input name="dia_final" type="hidden" id="dia_inicial6" value="<? echo $dia_final; ?>">
            <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
            <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
            <? echo $num_proposta;?>            </div>
          </form></td>

          <td width="7%"><div align="center" class="style3-1"><? echo "R$ ".$valor_credito;?></div></td>

          <td width="6%"><div align="center"><span class="style3-1"><? echo "R$ ".$valor_liquido_cliente;?></span></div></td>

          <td width="6%"><div align="center"><span class="style3-1"><? echo $valor_total;?></span></div></td>

          <td width="6%"><div align="center"><span class="style3-1"><? echo $tabela;?></span></div></td>

          <td width="14%">

          <div align="center" class="style3-1"><? printf("$linha[4]");?> </div></td>

          <td width="8%"><div align="center" class="style3-1"><? printf("$linha[7]");?> </div></td>

          <td width="6%"><div align="center" class="style3-1"><? printf("$linha[83]"); ?> </div></td>

          <td width="7%"><div align="center" class="style3-1"><? echo $bco_operacao;?></div></td>

          <td width="9%"><div align="center" class="style3-1"><? printf("$linha[51]");?></div></td>

          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>


<? } ?>
</table>

<? } ?>


      </body>

</html>

