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

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>

</head>



<?

//require("conect/conect.php"); or die("erro na requisi��o");

require '../../conect/conect.php';

error_reporting(E_ALL);



?>



		  

		  

		  <?



// dados da proposta

$num_proposta = $_POST['num_proposta'];

$nome_operador = $_POST['nome_operador'];

$status = $_POST['status'];

$mes_ano_status = $_POST['mes_ano_status'];

$retorno = $_POST['retorno'];

$bco_operacao = $_POST['bco_operacao'];

$valor_a_receber = $_POST['valor_a_receber'];

$devolucao_ao_cliente = $_POST['devolucao_ao_cliente'];

$valor_credito = $_POST['valor_credito'];

$horaalteracao = $_POST['horaalteracao'];

$valor_liberado = $_POST['valor_liberado'];

//$tipo_capital = $_POST['tipo_capital'];

$recebido = $_POST['recebido'];

$parcela = $_POST['parcela'];

$percentual_op = $_POST['percentual_op'];

$comissao_op = $_POST['comissao_op'];

$obs2 = $_POST['obs2'];

$cpf = $_POST['cpf'];

//$campanha = $_POST['campanha'];

$valor_total = $_POST['valor_total'];

$valor_liquido_cliente = $_POST['valor_liquido_cliente'];


//---------CALCULO DA META-----------------------


$sql = "SELECT * FROM operadores where nome = '$nome_operador' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$meta_mensal = $linha[55];


}

$sub_calculo_meta = bcdiv($valor_a_receber,$meta_mensal,6);
$meta = bcmul($sub_calculo_meta,100,4);






//---------FIM DO CALCULO DA META-------------------



$dia_alteracao_status = $_POST['dia_alteracao_status'];
$mes_alteracao_status = $_POST['mes_alteracao_status'];
$ano_alteracao_status = $_POST['ano_alteracao_status'];


$dataalteracao = "$dia_alteracao_status-$mes_alteracao_status-$ano_alteracao_status";
$data_alteracao = "$ano_alteracao_status-$mes_alteracao_status-$dia_alteracao_status";


//dados do operador que alterou





$operador_alterou = $_POST['operador_alterou'];

$cel_operador_alterou = $_POST['cel_operador_alterou'];

$email_operador_alterou = $_POST['email_operador_alterou'];



//dados do estabelecimento que alterou



$estabelecimento_alterou = $_POST['estabelecimento_alterou'];

$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];

$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];

$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];



$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`propostas` set `num_proposta` = '$num_proposta',`status` = '$status',`mes_ano_status` = '$mes_ano_status',`retorno` = '$retorno',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`valor_liberado` = '$valor_liberado',`valor_total` = '$valor_total',`valor_liquido_cliente` = '$valor_liquido_cliente',

`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`valor_credito`= '$valor_credito',`bco_operacao`= '$bco_operacao',`valor_a_receber`= '$valor_a_receber',`recebido`= '$recebido',`parcela`= '$parcela',`parc1`= '$parcela',`percentual_op`= '$percentual_op',`comissao_op`= '$comissao_op',`obs2`= '$obs2',`dia_alteracao_status` = '$dia_alteracao_status',`mes_alteracao_status` = '$mes_alteracao_status',`ano_alteracao_status` = '$ano_alteracao_status',`meta` = '$meta',`data_alteracao` = '$data_alteracao',`devolucao_ao_cliente` = '$devolucao_ao_cliente' where `propostas`. `num_proposta` = '$num_proposta' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informa��es desse cadastro");



if(empty($obs2)){

}
else{

$comando = "insert into observacoes_parecer_credito(num_proposta,cpf,data,hora,obs,operador) values('$num_proposta','$cpf','$dataalteracao','$horaalteracao','$obs2','$operador_alterou')";



mysql_query($comando,$conexao);

}





echo "Status da Proposta alterado com sucesso<br><br>";

?>




		  <?
if($status=="PAGO AO CLIENTE"){


// dados da proposta

$data_pagto_cliente = $_POST['data_pagto_cliente'];

$hora_pagto_cliente = $_POST['hora_pagto_cliente'];

$status_pagto_cliente = "PAGO AO CLIENTE";


// a fun��o explode � usada para separar uma string em


$dataalteracao_pagto_cliente = $data_pagto_cliente;

$dataalteracao_pagto_cliente2 = explode("-", $dataalteracao_pagto_cliente);



$dia_pagto_cliente = $dataalteracao_pagto_cliente2[0];

$mes_pagto_cliente = $dataalteracao_pagto_cliente2[1];

$ano_pagto_cliente = $dataalteracao_pagto_cliente2[2];





$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`propostas` set `num_proposta` = '$num_proposta',`status_pagto_cliente` = '$status_pagto_cliente',

`data_pagto_cliente` = '$data_pagto_cliente',`hora_pagto_cliente` = '$hora_pagto_cliente',

`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',

`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',

`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',

`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',

`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`dia_pagto_cliente` = '$dia_pagto_cliente',`mes_pagto_cliente` = '$mes_pagto_cliente',`ano_pagto_cliente` = '$ano_pagto_cliente' where `propostas`. `num_proposta` = '$num_proposta' limit 1 ";

}



mysql_query($comando,$conexao);
}

if($status<>"PAGO AO CLIENTE"){

$status_pagto_cliente = "";

}
else{

$status_pagto_cliente = "PAGO AO CLIENTE";

}






//--------------------INICIO DEVOLU��O AO CLIENTE------------------------------------

if(($status=="PAGO AO CLIENTE")  && ($devolucao_ao_cliente>="0.01")){


$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$estabelecimento_proposta = $linha[3];

$operador = $linha[32];

$bco_operacao = $linha[86];

$valor_total = $linha[113];

$valor_liq_cliente = $linha[115];





}


$datecadastro = "$ano_pagto_cliente-$mes_pagto_cliente-$dia_pagto_cliente";
$datacadastro = "$dia_pagto_cliente-$mes_pagto_cliente-$ano_pagto_cliente";
$horacadastro = date('H:i:s');
$dia = "$dia_pagto_cliente";
$mes = "$mes_pagto_cliente";
$ano = "$ano_pagto_cliente";


$sql2 = "SELECT * FROM cx_saidas where num_proposta = '$num_proposta' and categoria_conta = 'DEVOLU��O AO CLIENTE'";
$res2 = mysql_query($sql2);

$lancamentos = mysql_num_rows($res2);

if($lancamentos>=1){

//echo "Valor Devolu��o ao cliente da proposta $num_proposta j� registrado no caixa!!!... Por essa raz�o n�o foi lan�ado novamente! <br> ";

}
else{



//$comando = "insert into cx_saidas(valor,dia,mes,ano,datacadastro,horacadastro,nfantasia,historico,categoria_conta,datecadastro,nome,cpf,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,num_proposta) 



//values('$devolucao_ao_cliente','$dia','$mes','$ano','$datacadastro','$horacadastro','$estabelecimento_proposta','$num_proposta - Devolu��o ao cliente - $cpf','DEVOLU��O AO CLIENTE','$datecadastro','$nome','$cpf','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_proposta','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','$num_proposta')";


//mysql_query($comando,$conexao);



//echo "<br> Devolu��o ao cliente  no valor de R$ $devolucao_ao_cliente lan�ada na sa�da de caixa com sucesso!<br>";

}

}
else{

//echo "<br> Devolu��o ao cliente  no valor de R$ $devolucao_ao_cliente, por�m o status � $status!!!... Por essa raz�o n�o foi lan�ada na sa�da de caixa!<br>";

}

//---------------INICIO DE LAN�AMENTO DE SAIDAS DE DEVOLU��O AO CLIENTE------------------------------







//---------------------------------FIM DO LAN�AMENTO DE SAIDAS DE DEVOLU��O AO CLIENTE------------------------------------------------//

?>






<?

$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

$num_proposta = $linha[0];

$nome = $linha[4];

$cpf = $linha[7];

$dataalteracao = $linha[42];

$horaalteracao = $linha[43];

$valor_credito = $linha[25];

$valor_liberado = $linha[97];

$parcela = $linha[27];



$operador = $linha[32];

$email_operador = $linha[34];





$status = $linha[51];

$operador_alterou = $linha[44];

$cel_operador_alterou = $linha[45];

$email_operador_alterou = $linha[46];

$estabelecimento_alterou = $linha[47];

$cidade_estabelecimento_alterou = $linha[48];

$tel_estabelecimento_alterou = $linha[49];

$email_estabelecimento_alterou = $linha[50];

$percentual_op = $linha[100];

$comissao_op = $linha[101];

$obs2 = $linha[102];





?>



<? } ?>



<?

$sql = "SELECT * FROM cad_empresa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$email_empresa = $linha[14];
$site_empresa = $linha[15];
$nfantasia = $linha[2];



}

	

	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO

	$email_dest   =   $email_empresa;

	

	//PREPARA O PEDIDO

	$mens   =  "Ol�! os dados de sua proposta foram atualizados na $nfantasia!   \n";

	$mens  .=  "Visite-nos $site_empresa \n";

	$mens  .=  "Nome: ".$nome."                                                       \n";

	$mens  .=  "CPF: ".$cpf."                                                    \n";

	$mens  .=  "N� da Proposta: ".$num_proposta."                                                    \n";

	$mens  .=  "Percentual de comiss�o: ".$percentual_op."%                                                  \n";

	$mens  .=  "Comiss�o em R$: ".$comissao_op."                                                    \n";

	$mens  .=  "Data da altera��o: ".$dataalteracao."                                                    \n";

	$mens  .=  "Hora da altera��o: ".$horaalteracao."                                                    \n";

	$mens  .=  "Valor Solicitado: ".$valor_credito."                                                    \n";

	$mens  .=  "Valor Liberado: ".$valor_liberado."                                                    \n";

	$mens  .=  "Valor da Parcela: ".$parcela."                                                    \n";	

	$mens  .=  "STATUS: ".$status."                                                    \n";

	$mens  .=  "Parecer de Cr�dito: ".$obs2."                                                    \n\n";

	

	$mens  .=  "Operador que efetuou a altera��o: ".$operador_alterou."                                                    \n";

	$mens  .=  "Celular: ".$cel_operador_alterou."                                                    \n";

	$mens  .=  "E-Mail: ".$email_operador_alterou."                                                    \n";

	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";

	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";



	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Proposta atualizada no sistema em ".$dataalteracao, $mens,"From:".$email_dest."\r\nBcc:".$email_operador_alterou);

	//$envia  =  mail($email_operador, "Proposta N� ".$num_proposta.", ".$operador."! Confira os dados no sistema!",$mens,"From:".$email_dest);



?>





<body>

<form name="form1" method="post" action="../operacoes_a_serem_executadas.php">
  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
  <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "buscar proposta"; ?>" />
  <input type="submit" name="Submit3" value="Voltar">

</form>

<form action="../principal.php" method="post" name="form1" target="_top">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar ao menu principal">

</form>

</body>

</html>

<?

mysql_close($conexao);

?>

