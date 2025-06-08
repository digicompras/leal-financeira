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

<title>SALVANDO INFORMA&Ccedil;&Otilde;ES DO CLIENTE</title>

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

//require("conect/conect.php"); or die("erro na requisição");

require '../../conect/conect.php';

error_reporting(E_ALL);



?>

<?
$sql = "SELECT * FROM hora_certa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$acao = $linha[5];
$hora_ajuste = $linha[2];

}

$horacerta = date('H')+$hora_ajuste;
if($horacerta<=9){
$hora_atual = "0".$horacerta.date(':i:s');
}
else{
$hora_atual = $horacerta.date(':i:s');
}
?>


		  

		  

		  <?



$codigo = $_POST['codigo'];

$cod_cliente = $_POST['cod_cliente'];

$cpf = $_POST['cpf'];

$dia_ligar = $_POST['dia_ligar'];

$mes_ligar = $_POST['mes_ligar'];

$ano_ligar = $_POST['ano_ligar'];

$data_ligar = "$ano_ligar-$mes_ligar-$dia_ligar";

$hora_ligar = $_POST['hora_ligar'];

$data_manutencao = $_POST['data_manutencao'];
$hora_manutencao = $_POST['hora_manutencao'];


$status = $_POST['status'];

$proposta = $_POST['proposta'];

$obs = $_POST['obs'];



$dia_liberado = date('d');

$mes_liberado = date('m');

$ano_liberado = date('Y');

$hora_liberado = $hora_atual;



$dia_fechamento = date('d');

$mes_fechamento = date('m');

$ano_fechamento = date('Y');

$hora_fechamento = $hora_atual;

?>

<?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

while($linha=mysql_fetch_row($res)) {





$operador = $linha[1];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];



}


?>


<?
//-----------------iniciando atualização de dados do cliente-----------------------------

//$codigo = $_POST['codigo'];

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$endereco = $_POST['endereco'];

$numero = $_POST['numero'];

$bairro = $_POST['bairro'];

$complemento = $_POST['complemento'];

$cidade = $_POST['cidade'];

$estado = $_POST['estado'];

$sexo = $_POST['sexo'];

$estadocivil = $_POST['estadocivil'];

//$cpf = $_POST['cpf'];

$rg = $_POST['rg'];

$orgao = $_POST['orgao'];

$emissao = $_POST['emissao'];

$data_nasc = $_POST['data_nasc'];

$mes_niver = $_POST['mes_niver'];

$cep = $_POST['cep'];

$telefone = $_POST['telefone'];
$telefone2 = $_POST['telefone2'];
$telefone3 = $_POST['telefone3'];


$celular = $_POST['celular'];
$celular2 = $_POST['celular2'];
$celular3 = $_POST['celular3'];



$num_beneficio = $_POST['num_beneficio'];

$num_beneficio2 = $_POST['num_beneficio2'];

$num_beneficio3 = $_POST['num_beneficio3'];

$num_beneficio4 = $_POST['num_beneficio4'];

$dataprev = $_POST['dataprev'];
$resposta = $_POST['resposta'];


$tem_margem = $_POST['tem_margem'];

$banco = $_POST['banco'];

$agencia = $_POST['agencia'];

$conta = $_POST['conta'];


$parc1 = $_POST['parc1'];

$banco1 = $_POST['banco1'];

$vencto1 = $_POST['vencto1'];

$compra1 = $_POST['compra1'];



$parc2 = $_POST['parc2'];

$banco2 = $_POST['banco2'];

$vencto2 = $_POST['vencto2'];

$compra2 = $_POST['compra2'];



$parc3 = $_POST['parc3'];

$banco3 = $_POST['banco3'];

$vencto3 = $_POST['vencto3'];

$compra3 = $_POST['compra3'];



$parc4 = $_POST['parc4'];

$banco4 = $_POST['banco4'];

$vencto4 = $_POST['vencto4'];

$compra4 = $_POST['compra4'];



$parc5 = $_POST['parc5'];

$banco5 = $_POST['banco5'];

$vencto5 = $_POST['vencto5'];

$compra5 = $_POST['compra5'];



$parc6 = $_POST['parc6'];

$banco6 = $_POST['banco6'];

$vencto6 = $_POST['vencto6'];

$compra6 = $_POST['compra6'];



$parc7 = $_POST['parc7'];

$banco7 = $_POST['banco7'];

$vencto7 = $_POST['vencto7'];

$compra7 = $_POST['compra7'];


$saldo1 = $_POST['saldo1'];

$saldo2 = $_POST['saldo2'];

$saldo3 = $_POST['saldo3'];

$saldo4 = $_POST['saldo4'];

$saldo5 = $_POST['saldo5'];

$saldo6 = $_POST['saldo6'];

$saldo7 = $_POST['saldo7'];

$valorcontrato1 = $_POST['valorcontrato1'];
$valorcontrato2 = $_POST['valorcontrato2'];
$valorcontrato3 = $_POST['valorcontrato3'];
$valorcontrato4 = $_POST['valorcontrato4'];
$valorcontrato5 = $_POST['valorcontrato5'];
$valorcontrato6 = $_POST['valorcontrato6'];
$valorcontrato7 = $_POST['valorcontrato7'];


$valorliqcliente1 = $_POST['valorliqcliente1'];
$valorliqcliente2 = $_POST['valorliqcliente2'];
$valorliqcliente3 = $_POST['valorliqcliente3'];
$valorliqcliente4 = $_POST['valorliqcliente4'];
$valorliqcliente5 = $_POST['valorliqcliente5'];
$valorliqcliente6 = $_POST['valorliqcliente6'];
$valorliqcliente7 = $_POST['valorliqcliente7'];


$sql = "SELECT * FROM clientes where codigo = '$cod_cliente' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$operador_cadastro = $linha[21];


}



if(empty($operador_cadastro)){

$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`clientes` set `codigo` = '$cod_cliente',`nome` = '$nome',`tipo` = '$tipo',`endereco` = '$endereco',`numero` = '$numero',`bairro` = '$bairro',`complemento` = '$complemento',`cidade` = '$cidade',`estado` = '$estado',`cep` = '$cep',`data_nasc` = '$data_nasc',`mes_niver` = '$mes_niver',`sexo` = '$sexo',`estadocivil` = '$estadocivil',`cpf` = '$cpf',`rg` = '$rg',`orgao` = '$orgao',`emissao` = '$emissao',`telefone` = '$telefone',`telefone2` = '$telefone2',`telefone3` = '$telefone3',`celular` = '$celular',`celular2` = '$celular2',`celular3` = '$celular3',`num_beneficio` = '$num_beneficio',`tipo_benef_1` = '$tipo_benef_1',`num_beneficio2` = '$num_beneficio2',`tipo_benef_2` = '$tipo_benef_2',`num_beneficio3` = '$num_beneficio3',`tipo_benef_3` = '$tipo_benef_3',`num_beneficio4` = '$num_beneficio4',`tipo_benef_4` = '$tipo_benef_4',`dataalteracao` = '$data_manutencao',`horaalteracao` = '$hora_manutencao',`operador_alterou` = '$operador',`estabelecimento_alterou` = '$estab_pertence',`cidade_estabelecimento_alterou` = '$cidade_estab_pertence',`num_beneficio`= '$num_beneficio',`num_beneficio2`= '$num_beneficio2',`num_beneficio3`= '$num_beneficio3',`num_beneficio4`= '$num_beneficio4',`dataprev`= '$dataprev',`tem_margem`= '$tem_margem',`resposta`= '$resposta',`parc1`= '$parc1',`banco1`= '$banco1',`vencto1`= '$vencto1',`compra1`= '$compra1',`parc2`= '$parc2',`banco2`= '$banco2',`vencto2`= '$vencto2',`compra2`= '$compra2',`parc3`= '$parc3',`banco3`= '$banco3',`vencto3`= '$vencto3',`compra3`= '$compra3',`parc4`= '$parc4',`banco4`= '$banco4',`vencto4`= '$vencto4',`compra4`= '$compra4',`parc5`= '$parc5',`banco5`= '$banco5',`vencto5`= '$vencto5',`compra5`= '$compra5',`parc6`= '$parc6',`banco6`= '$banco6',`vencto6`= '$vencto6',`compra6`= '$compra6',`parc7`= '$parc7',`banco7`= '$banco7',`vencto7`= '$vencto7',`compra7`= '$compra7',`saldo1`= '$saldo1',`saldo2`= '$saldo2',`saldo3`= '$saldo3',`saldo4`= '$saldo4',`saldo5`= '$saldo5',`saldo6`= '$saldo6',`saldo7`= '$saldo7',`banco`= '$banco',`agencia`= '$agencia',`conta`= '$conta',`valorcontrato1`= '$valorcontrato1',`valorcontrato2`= '$valorcontrato2',`valorcontrato3`= '$valorcontrato3',`valorcontrato4`= '$valorcontrato4',`valorcontrato5`= '$valorcontrato5',`valorcontrato6`= '$valorcontrato6',`valorcontrato7`= '$valorcontrato7',`valorliqcliente1`= '$valorliqcliente1',`valorliqcliente2`= '$valorliqcliente2',`valorliqcliente3`= '$valorliqcliente3',`valorliqcliente4`= '$valorliqcliente4',`valorliqcliente5`= '$valorliqcliente5',`valorliqcliente6`= '$valorliqcliente6',`valorliqcliente7`= '$valorliqcliente7',`operador` = '$operador',`estabelecimento` = '$estab_pertence' where `clientes`. `codigo` = '$cod_cliente' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informações desse cadastro <br><br>");

}
else{

$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`clientes` set `codigo` = '$cod_cliente',`nome` = '$nome',`tipo` = '$tipo',`endereco` = '$endereco',`numero` = '$numero',`bairro` = '$bairro',`complemento` = '$complemento',`cidade` = '$cidade',`estado` = '$estado',`cep` = '$cep',`data_nasc` = '$data_nasc',`mes_niver` = '$mes_niver',`sexo` = '$sexo',`estadocivil` = '$estadocivil',`cpf` = '$cpf',`rg` = '$rg',`orgao` = '$orgao',`emissao` = '$emissao',`telefone` = '$telefone',`telefone2` = '$telefone2',`telefone3` = '$telefone3',`celular` = '$celular',`celular2` = '$celular2',`celular3` = '$celular3',`num_beneficio` = '$num_beneficio',`tipo_benef_1` = '$tipo_benef_1',`num_beneficio2` = '$num_beneficio2',`tipo_benef_2` = '$tipo_benef_2',`num_beneficio3` = '$num_beneficio3',`tipo_benef_3` = '$tipo_benef_3',`num_beneficio4` = '$num_beneficio4',`tipo_benef_4` = '$tipo_benef_4',`dataalteracao` = '$data_manutencao',`horaalteracao` = '$hora_manutencao',`operador_alterou` = '$operador',`estabelecimento_alterou` = '$estab_pertence',`cidade_estabelecimento_alterou` = '$cidade_estab_pertence',`num_beneficio`= '$num_beneficio',`num_beneficio2`= '$num_beneficio2',`num_beneficio3`= '$num_beneficio3',`num_beneficio4`= '$num_beneficio4',`dataprev`= '$dataprev',`tem_margem`= '$tem_margem',`resposta`= '$resposta',`parc1`= '$parc1',`banco1`= '$banco1',`vencto1`= '$vencto1',`compra1`= '$compra1',`parc2`= '$parc2',`banco2`= '$banco2',`vencto2`= '$vencto2',`compra2`= '$compra2',`parc3`= '$parc3',`banco3`= '$banco3',`vencto3`= '$vencto3',`compra3`= '$compra3',`parc4`= '$parc4',`banco4`= '$banco4',`vencto4`= '$vencto4',`compra4`= '$compra4',`parc5`= '$parc5',`banco5`= '$banco5',`vencto5`= '$vencto5',`compra5`= '$compra5',`parc6`= '$parc6',`banco6`= '$banco6',`vencto6`= '$vencto6',`compra6`= '$compra6',`parc7`= '$parc7',`banco7`= '$banco7',`vencto7`= '$vencto7',`compra7`= '$compra7',`saldo1`= '$saldo1',`saldo2`= '$saldo2',`saldo3`= '$saldo3',`saldo4`= '$saldo4',`saldo5`= '$saldo5',`saldo6`= '$saldo6',`saldo7`= '$saldo7',`banco`= '$banco',`agencia`= '$agencia',`conta`= '$conta',`valorcontrato1`= '$valorcontrato1',`valorcontrato2`= '$valorcontrato2',`valorcontrato3`= '$valorcontrato3',`valorcontrato4`= '$valorcontrato4',`valorcontrato5`= '$valorcontrato5',`valorcontrato6`= '$valorcontrato6',`valorcontrato7`= '$valorcontrato7',`valorliqcliente1`= '$valorliqcliente1',`valorliqcliente2`= '$valorliqcliente2',`valorliqcliente3`= '$valorliqcliente3',`valorliqcliente4`= '$valorliqcliente4',`valorliqcliente5`= '$valorliqcliente5',`valorliqcliente6`= '$valorliqcliente6',`valorliqcliente7`= '$valorliqcliente7' where `clientes`. `codigo` = '$cod_cliente' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informações desse cadastro <br><br>");


}


$sql = "SELECT * FROM clientes where cpf = '$cpf'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$cod_cli = $linha[0];

$telefone_cli = $linha[18];

$celular_cli = $linha[19];



}





//-----------------fim da atualização de dados do cliente--------------------------------

?>



<?
//------------------------busca dados do cliente----------------------


$sql = "SELECT * FROM clientes where codigo = '$cod_cliente' limit 1";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {




$cod_cliente = $linha[0];

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

//$obs = $linha[28];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$dataalteracao = $linha[31];

$horaalteracao = $linha[32];

$tipo = $linha[40];

$banco = $linha[41];

$agencia = $linha[42];

$conta = $linha[43];

$num_beneficio = $linha[44];



$parc1 = $linha[45];

$banco1 = $linha[46];

$vencto1 = $linha[47];

$compra1 = $linha[48];



$parc2 = $linha[49];

$banco2 = $linha[50];

$vencto2 = $linha[51];

$compra2 = $linha[52];



$parc3 = $linha[53];

$banco3 = $linha[54];

$vencto3 = $linha[55];

$compra3 = $linha[56];



$parc4 = $linha[57];

$banco4 = $linha[58];

$vencto4 = $linha[59];

$compra4 = $linha[60];



$parc5 = $linha[61];

$banco5 = $linha[62];

$vencto5 = $linha[63];

$compra5 = $linha[64];



$parc6 = $linha[65];

$banco6 = $linha[66];

$vencto6 = $linha[67];

$compra6 = $linha[68];



$parc7 = $linha[69];

$banco7 = $linha[70];

$vencto7 = $linha[71];

$compra7 = $linha[72];



$num_beneficio2 = $linha[73];

$num_beneficio3 = $linha[74];

$num_beneficio4 = $linha[75];



$dataprev2 = $linha[76];

$dataprev = $linha[76];



//$obs2 = $linha[77];



$tipo_benef_1 = $linha[78];

$tipo_benef_2 = $linha[79];

$tipo_benef_3 = $linha[80];

$tipo_benef_4 = $linha[81];



$mes_nasc = $linha[82];



$cpf_rg = $linha[83];

$comp_end = $linha[84];

$comp_quit1 = $linha[85];

$comp_quit2 = $linha[86];

$comp_quit3 = $linha[87];

$comp_quit4 = $linha[88];

$comp_quit5 = $linha[89];

$comp_quit6 = $linha[90];

$comp_renda = $linha[91];

$cpf_rg_testemunha = $linha[92];

$salario1 = $linha[93];

$salario2 = $linha[94];

$salario3 = $linha[95];

$salario4 = $linha[96];

$quant_vezes_trabalhado = $linha[118];



$valorcontrato1 = $linha[125];
$valorcontrato2 = $linha[126];
$valorcontrato3 = $linha[127];
$valorcontrato4 = $linha[128];
$valorcontrato5 = $linha[129];
$valorcontrato6 = $linha[130];
$valorcontrato7 = $linha[131];


$valorliqcliente1 = $linha[132];
$valorliqcliente2 = $linha[133];
$valorliqcliente3 = $linha[134];
$valorliqcliente4 = $linha[135];
$valorliqcliente5 = $linha[136];
$valorliqcliente6 = $linha[137];
$valorliqcliente7 = $linha[138];


$telefone2 = $linha[139];
$telefone3 = $linha[140];

$celular2 = $linha[141];
$celular3 = $linha[142];


}



//------------------------fim da busca de dados do cliente------------------














$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



if($proposta=="Sim"){

$comando = "update `$linha[1]`.`telemarketing` set `codigo` = '$codigo',`dia_ligar` = '$dia_ligar',`mes_ligar` = '$mes_ligar',`ano_ligar` = '$ano_ligar',`hora_ligar` = '$hora_ligar',`status` = 'Liberado',`proposta` = '$proposta',`dia_liberado` = '$dia_liberado',`mes_liberado` = '$mes_liberado',`ano_liberado` = '$ano_liberado',`hora_liberado` = '$hora_liberado',`dia_fechamento` = '$dia_fechamento',`mes_fechamento` = '$mes_fechamento',`ano_fechamento` = '$ano_fechamento',`hora_fechamento` = '$hora_fechamento',`data_manutencao` = '$data_manutencao',`hora_manutencao` = '$hora_manutencao' where `telemarketing`. `codigo` = '$codigo' limit 1 ";



}

else{

$comando = "update `$linha[1]`.`telemarketing` set `codigo` = '$codigo',`dia_ligar` = '$dia_ligar',`mes_ligar` = '$mes_ligar',`ano_ligar` = '$ano_ligar',`data_ligar` = '$data_ligar',`hora_ligar` = '$hora_ligar',`status` = '$status',`dia_liberado` = '$dia_liberado',`mes_liberado` = '$mes_liberado',`ano_liberado` = '$ano_liberado',`hora_liberado` = '$hora_liberado',`proposta` = '$proposta',`dia_fechamento` = '$dia_fechamento',`mes_fechamento` = '$mes_fechamento',`ano_fechamento` = '$ano_fechamento',`hora_fechamento` = '$hora_fechamento',`data_manutencao` = '$data_manutencao',`hora_manutencao` = '$hora_manutencao' where `telemarketing`. `codigo` = '$codigo' limit 1 ";

}

}



mysql_query($comando,$conexao) or die("Erro ao alterar informações nesse nº de registro do Telemarketing");





echo "Alterações efetuadas com sucesso<br> <br>Cliente já trabalhado -->> $quant_vezes_trabalhado vez(s)";

?>

<?

$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



if($status=="Liberado"){

$quant_vezes_trabalhado2 = bcadd($quant_vezes_trabalhado,1);

$comando = "update `$linha[1]`.`clientes` set `codigo` = '$cod_cliente',`telemarketing` = '$status',`quant_vezes_trabalhado` = '$quant_vezes_trabalhado2',`operador_manutencao` = '$operador',`cidade_estab_pertence_manutencao` = '$cidade_estab_pertence',`dia_liberado` = '$dia_liberado',`mes_liberado` = '$mes_liberado',`ano_liberado` = '$ano_liberado',`hora_liberado` = '$hora_liberado' where `clientes`. `codigo` = '$cod_cliente' limit 1 ";



mysql_query($comando,$conexao);



}

}





?>



<?

$dia = date('d');

$mes = date('m');

$ano = date('Y');

$hora = $hora_atual;





$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



if($obs<>""){

$comando = "insert into obs_telemarketing(cod_cliente,dia,mes,ano,hora,operador,estab_pertence,cidade_estab_pertence,obs) 

values('$cod_cliente','$dia','$mes','$ano','$hora','$operador','$estab_pertence','$cidade_estab_pertence','$obs')";



}

}



mysql_query($comando,$conexao);





?>



<?

if($proposta=="Sim"){



$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$quant_vezes_trabalhado2 = bcadd($quant_vezes_trabalhado,1);


$comando = "update `$linha[1]`.`clientes` set `codigo` = '$cod_cliente',`telemarketing` = 'Liberado',`quant_vezes_trabalhado` = '$quant_vezes_trabalhado2',`operador_manutencao` = '$operador',`cidade_estab_pertence_manutencao` = '$cidade_estab_pertence',`dia_liberado` = '$dia_liberado',`mes_liberado` = '$mes_liberado',`ano_liberado` = '$ano_liberado',`hora_liberado` = '$hora_liberado' where `clientes`. `codigo` = '$cod_cliente' limit 1 ";

}

mysql_query($comando,$conexao);

}

?>







<?





			

$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#<? printf("$linha[1]"); ?>"



background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>>

  

<? } ?>

<form name="form1" method="post" action="">

</form>

<?

$sql = "SELECT * FROM clientes where codigo = '$cod_cliente' order by codigo desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nome = $linha[1];

$cpf = $linha[4];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$operador = $linha[21];

$cel_operador = $linha[22];

$email_operador = $linha[23];

$estabelecimento = $linha[24];

$cidade_estabelecimento = $linha[25];

$tel_estabelecimento = $linha[26];

$email_estabelecimento = $linha[27];

$tipo = $linha[40];

}

?>

<table width="100%" border="0">
  <tr>
    <td width="12%"><form name="form2" method="post" action="<? echo "menu.php";  //if($proposta=="Sim"){ echo "../clientes/verifica.php"; } else{ echo "menu.php"; }  ?>">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <? //if($proposta=="Sim"){ echo "<input name='cpf' type='hidden' id='cpf' value='$cpf'>"; } ?>
      <input type="submit" name="Submit" value="<? echo "Voltar";  //if($proposta=="Sim"){ echo"Efetuar Proposta"; } else{ echo "Voltar"; } ?>">
    </form></td>
    <td width="39%"><form name="form1" method="post" action="../clientes/ver_possibilidade.php">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input name="nome" type="hidden" id="nome" value="<? echo $nome; ?>">
      <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>">
      <input name="telefone" type="hidden" id="telefone" value="<? echo $telefone; ?>">
      <input name="celular" type="hidden" id="celular" value="<? echo $celular; ?>">
      <input name="operador" type="hidden" id="operador" value="<? echo $operador; ?>">
      <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $cel_operador; ?>">
      <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_operador; ?>">
      <input name="num_beneficio" type="hidden" id="num_beneficio" value="<? echo $num_beneficio; ?>">
      <input name="num_beneficio2" type="hidden" id="num_beneficio2" value="<? echo $num_beneficio2; ?>">
      <input name="num_beneficio3" type="hidden" id="num_beneficio3" value="<? echo $num_beneficio3; ?>">
      <input name="num_beneficio4" type="hidden" id="num_beneficio4" value="<? echo $num_beneficio4; ?>">
      <input name="datacadastro" type="hidden" id="datacadastro" value="<? echo $datacadastro; ?>">
      <input name="horacadastro" type="hidden" id="horacadastro" value="<? echo $horacadastro; ?>">
      <input type="submit" name="Submit4" value="Ver Possibilidade">
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>

</html>

<?

mysql_close($conexao);

?>

