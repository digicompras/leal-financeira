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

-->

</style>

</head>

<?



require '../../conect/conect.php';





	  

//$nome_operador = $_POST['nome_operador'];

$cidade_solicitada = $_POST['cidade'];
if($cidade_solicitada=="Todas"){

$cidade = "";

}
else{

$cidade = " and cidade = '$cidade_solicitada'";

}


$bco_da_operacao = $_POST['bco_operacao'];
if($bco_da_operacao=="Todos"){

$bco_operacao = "";

}
else{

$bco_operacao = " and bco_operacao = '$bco_da_operacao'";

}


$status_solicitado = $_POST['status'];
if($status_solicitado=="TODOS"){

$status = "";

}
else{

$status = " and status = '$status_solicitado'";

}


$tipo_solicitado = $_POST['tipo'];
if($tipo_solicitado=="Todos"){

$tipo = "";

}
else{

$tipo = " and tipo = '$tipo_solicitado'";

}


$tipo_da_proposta = $_POST['tipo_proposta'];
if($tipo_da_proposta=="Todas"){

$tipo_proposta = "";

}
else{

$tipo_proposta = " and tipo_proposta = '$tipo_da_proposta'";

}


$parcela_inicio = $_POST['parcela_inicial'];

if(empty($parcela_inicio)){

$parcela_inicial = "";

}
else{

$parcela_inicial = " and parcela between $parcela_inicio";

}

$parcela_fim = $_POST['parcela_final'];

if(empty($parcela_fim)){

$parcela_final = "";

}
else{

$parcela_final = " and $parcela_fim";

}


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

      <form name="form1" method="post" action="menu.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "relatorio por data de propostas e cidade"; ?>">
        <input type="hidden" name="comissao" id="comissao">
        <input type="submit" name="Submit2" value="Voltar">

</form>

      <br>
      
<?

$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial'and '$data_final' $tipo_proposta $status $cidade $bco_operacao $tipo $parcela_inicial $parcela_final group by nome order by parcela desc";
$res = mysql_query($sql);
$total_de_propostas_encontradas = mysql_num_rows($res);


?>


       <? echo "Total de propostas encontradas -->> $total_de_propostas_encontradas <br>
	  Per�odo selecionado de $dia_inicial-$mes_inicial-$ano_inicial at� $dia_final-$mes_final-$ano_final Tipo de proposta: $tipo_da_proposta Cidade: $cidade_solicitada Banco de opera��o: $bco_da_operacao Perfil: $tipo_solicitado Status: $status_solicitado com faixa de parcelas de $parcela_inicio at� $parcela_fim";?><br>

<table width="100%"  border="0">

              <tr>

                <td width="35%" valign="middle"><div align="right"></div></td>

				<td width="38%" valign="middle">&nbsp;</td>
				<td width="27%">&nbsp;</td>

              </tr>

</table>            

      <?
//if(($cidade=="Todas") && ($bco_operacao=="Todos")){
	
//$sql = "SELECT * FROM propostas where status = '$status' and tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' and tipo = '$tipo' group by nome order by parcela desc";

//}
//else{	


//if($cidade=="Todas"){
	
//$sql = "SELECT * FROM propostas where status = '$status' and tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' and bco_operacao = '$bco_operacao' and tipo = '$tipo' group by nome order by parcela desc";
	
//}
//else{

//if($bco_operacao=="Todos"){
	
//$sql = "SELECT * FROM propostas where status = '$status' and cidade = '$cidade' and tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' and tipo = '$tipo' group by nome order by parcela desc";
	
//}
//else{

//if($tipo_proposta=="Todas"){
	
//$sql = "SELECT * FROM propostas where status = '$status' and cidade = '$cidade' and bco_operacao = '$bco_operacao' data_proposta between '$data_inicial'and '$data_final' and tipo = '$tipo' group by nome order by parcela desc";
	
//}
//else{

	

//$sql = "SELECT * FROM propostas where status = '$status' and cidade = '$cidade' and tipo_proposta = '$tipo_proposta' and data_proposta between '$data_inicial'and '$data_final' and bco_operacao = '$bco_operacao' and tipo = '$tipo' group by nome order by parcela desc";

//}

//}

//}


//}

$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial'and '$data_final' $tipo_proposta $status $cidade $bco_operacao $tipo $parcela_inicial $parcela_final group by nome order by parcela desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$tipo = $linha[2];

$nome_cli = $linha[4];
$cpf_cli = $linha[7];

$endereco = $linha[14];
$numero = $linha[15];
$bairro = $linha[16];


$parcela_cli = $linha[27];

$comissao_op = $linha[101];

$cidade = $linha[18];
$estado = $linha[19];
$cep = $linha[20];

$telefone = $linha[21];
$celular = $linha[22];

$status = $linha[51];

$tipo_proposta = $linha[83];

$bco_operacao = $linha[86];

$valor_total = $linha[113];

$valor_liquido_cliente = $linha[115];

$meta = $linha[171];


?>

      <table width="100%"  border="0">

        <tr bgcolor="#<? echo $cor ?>">

          <td><div align="center" class="style3">Endereco/Bairro </div></td>

          <td><div align="center"><span class="style3">Cidade/Cep</span></div></td>

          <td class="style3"><div align="center">Cliente</div></td>
		  <td class="style3"><div align="center">Perfil</div></td>
          <td class="style3"><div align="center">CPF</div></td>
          <td width="5%"><div align="center" class="style3">R$ Parcelas </div></td>

          <td><div align="center" class="style3">Telefones</div></td>
          <td class="style3"><div align="center">Tipo Proposta</div></td>
          <td><div align="center" class="style3">Status</div></td>

          <td><div align="center" class="style3">Bco Opera&ccedil;&atilde;o </div></td>
        </tr>

		

        <tr>

          <td width="6%">               <form name="form2" method="post" action=""><div align="center" class="style3">

              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

              

  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">

            <? echo "End: $endereco, N�: $numero  - Bairro: $bairro"; ?>                

          </div></form></td>

          <td width="7%"><div align="center"><span class="style3"><? echo "$cidade Cep: $cep"; ?></span></div></td>

          <td width="7%"><div align="center"><span class="style3"><? echo $nome_cli; ?></span></div></td>
		  <td width="7%"><div align="center"><span class="style3"><? echo $tipo; ?></span></div></td>
          <td width="7%"><div align="center"><span class="style3"><? echo $cpf_cli; ?></span></div></td>
          <td><div align="center" class="style3"><? echo $parcela_cli;?></div></td>

          <td width="7%"><div align="center" class="style3"><? echo "$telefone / $celular"; ?></div></td>
          <td width="8%" class="style3"><div align="center"><? echo "$tipo_proposta"; ?></div></td>
          <td width="8%"><div align="center"><span class="style3"><? echo $status; ?></span></div></td>

          <td width="8%"><div align="center" class="style3"><? echo $bco_operacao; ?></div></td>

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

          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>
          <td>&nbsp;</td>

          <td class="style3"><div align="center"></div></td>
          <td><div align="center"><span class="style3"></span></div></td>
</table>



<p>&nbsp;</p>







</body>

</html>

