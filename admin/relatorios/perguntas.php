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

<title>LISTANDO TODAS AS PROPOSTAS POR PERGUNTA</title>

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

-->

</style>

</head>

<?



require '../../conect/conect.php';





	  

//$nome_operador = $_POST['nome_operador'];

$resposta = $_POST['resposta'];
$num_pergunta = $_POST['num_pergunta'];

//$campanha_filtro = $_POST['campanha'];

//$status = $_POST['status'];

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
        <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "perguntas das propostas"; ?>">
        <input type="hidden" name="comissao" id="comissao">

        <input type="submit" name="Submit2" value="Voltar">
        <br>
</form>

<table width="70%"  border="0" align="center">
        <tr>
          <td colspan="4"><div align="center"><span class="style2">
            <? 

$sql = "SELECT * FROM perguntas_de_proposta where num_pergunta = '$num_pergunta' and status_pergunta = 'Ativa' limit 1";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {


$pergunta = $linha[2];

}


 ?><?

$sql = "SELECT * FROM allcred limit 1";

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
          Listando todas as propostas da empresa:</span> <span class="style2"><? echo $nfantasia; ?> </span></div></td>
        </tr>
        <tr>
          <td colspan="4"><div align="center">Sobre a pergunta</div></td>
        </tr>
        <tr>
          <td colspan="4"><div align="center"><span class="style2"><? echo $pergunta; ?></span></div></td>
        </tr>
        <tr>
          <td colspan="4"><div align="center">Onde a resposta &eacute; <strong>Sim</strong></div></td>
        </tr>
        <tr>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td width="28%"><div align="center">Per&iacute;odo estabelecido</div></td>
          <td width="24%"><div align="center"><? echo "$data_inicial at&eacute; $data_final";?></div></td>
          <td width="6%">&nbsp;</td>
          <td width="42%"><div align="center">Total de Operadores que conseguiu o concentimento do cliente</div></td>
        </tr>
        <tr>
          <td><div align="center"> Total de Propostas que disseram Sim</div></td>
          <td align="left"><div align="center"><strong><strong>
            <?


if($resposta=="resposta1"){
$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial'and '$data_final' and resposta1 = 'Sim' order by num_proposta asc";
}

if($resposta=="resposta2"){
$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial'and '$data_final' and resposta2 = 'Sim' order by num_proposta asc";
}

if($resposta=="resposta3"){
$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial'and '$data_final' and resposta3 = 'Sim' order by num_proposta asc";
}


$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_total_propostas = mysql_num_rows($res);

}

echo $registros_total_propostas;
?>
          </strong></strong></div></td>
          <td>&nbsp;</td>
          <td><div align="center"><strong><strong>
            <?


if($resposta=="resposta1"){
$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial'and '$data_final' and resposta1 = 'Sim' group by operador";
}

if($resposta=="resposta2"){
$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial'and '$data_final' and resposta2 = 'Sim' group by operador";
}

if($resposta=="resposta3"){
$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial'and '$data_final' and resposta3 = 'Sim' group by operador";
}


$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_total_operadores = mysql_num_rows($res);

}

echo $registros_total_operadores;
?>
          </strong></strong></div></td>
        </tr>
      </table>
      <p>
        <?

if($resposta=="resposta1"){
$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial'and '$data_final' and resposta1 = 'Sim' order by num_proposta asc";
}

if($resposta=="resposta2"){
$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial'and '$data_final' and resposta2 = 'Sim' order by num_proposta asc";
}

if($resposta=="resposta3"){
$sql = "SELECT * FROM propostas where data_proposta between '$data_inicial'and '$data_final' and resposta3 = 'Sim' order by num_proposta asc";
}


$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$comissao_op = $linha[101];

$tabela = $linha[109];

$valor_total = $linha[113];

$valor_liquido_cliente = $linha[115];



?>
      </p>
<table width="100%"  border="0">

        <tr bgcolor="#<? echo $cor ?>">

          <td><div align="center" class="style3">N&ordm; Proposta </div></td>

          <td><div align="center" class="style3">Valor Solicitado </div></td>

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

          <td><div align="center" class="style3"> Spread </div></td>

          <td><div align="center" class="style3">Premia&ccedil;&atilde;o</div></td>
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

          <td width="8%"><div align="center" class="style3"><? printf("R$ $linha[25]");?> </div></td>

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

          <td width="4%"><div align="center" class="style3"><? printf("$linha[85]");?></div></td>

          <td width="7%"><div align="center" class="style3"><? echo "R$ ".$comissao_op;?></div></td>

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

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>
</table>



<p>&nbsp;</p>







</body>

</html>

